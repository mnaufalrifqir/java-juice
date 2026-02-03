<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 sm:gap-0">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Statistik') }}
            </h2>
            <a href="{{ route('admin.statistics.create') }}" class="font-bold py-2 px-6 bg-white text-gray-800 border rounded-full">
                + Tambah Baru
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg text-sm">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow rounded-lg overflow-hidden">
                {{-- Tabel Desktop --}}
                <table class="min-w-full bg-white hidden sm:table text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">ID</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Judul</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Deskripsi</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Ikon</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($statistics as $statistic)
                            <tr>
                                <td class="py-2 px-4 border-b text-center">{{ $statistic->id }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $statistic->title }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $statistic->description }}</td>
                                <td class="py-2 px-4 border-b text-center">
                                    <img src="{{ Storage::url($statistic->icon) }}" alt="Ikon" class="h-10 mx-auto">
                                </td>
                                <td class="py-2 px-4 border-b">
                                    <div class="flex justify-center items-center space-x-4">
                                        <a href="{{ route('admin.statistics.edit', $statistic->id) }}" title="Edit">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <form action="{{ route('admin.statistics.destroy', $statistic->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus statistik ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" title="Hapus" class="focus:outline-none">
                                                <i class="fa-regular fa-trash-can"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-3 text-center bg-red-500 text-white">
                                    Tidak ada statistik yang ditemukan
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{-- Tampilan Mobile --}}
                <div class="sm:hidden">
                    @forelse($statistics as $statistic)
                        <div class="border-b p-4 flex flex-col gap-2">
                            <div class="mb-2">
                                <span class="font-semibold text-gray-700">ID:</span> {{ $statistic->id }}
                            </div>
                            <div class="mb-2">
                                <span class="font-semibold text-gray-700">Judul:</span> {{ $statistic->title }}
                            </div>
                            <div class="mb-2">
                                <span class="font-semibold text-gray-700">Deskripsi:</span> {{ $statistic->description }}
                            </div>
                            <div class="mb-2">
                                <span class="font-semibold text-gray-700">Ikon:</span><br>
                                <img src="{{ Storage::url($statistic->icon) }}" alt="Ikon" class="h-10 mt-1">
                            </div>
                            <div class="flex justify-end space-x-4 mt-2">
                                <a href="{{ route('admin.statistics.edit', $statistic->id) }}" title="Edit">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('admin.statistics.destroy', $statistic->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus statistik ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Hapus" class="focus:outline-none">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <div class="py-3 text-center bg-red-500 text-white">
                            Tidak ada statistik yang ditemukan
                        </div>
                    @endforelse
                </div>

                {{-- Pagination --}}
                <div class="bg-gray-50 px-4 py-2 flex flex-col sm:flex-row justify-between items-center gap-2 sm:gap-0">
                    <div>
                        @if(!$statistics->onFirstPage())
                            <a href="{{ $statistics->previousPageUrl() }}" class="text-gray-500 hover:underline">Sebelumnya</a>
                        @endif
                    </div>

                    <span class="text-gray-500 text-center">
                        Menampilkan {{ $statistics->firstItem() }} - {{ $statistics->lastItem() }} dari {{ $statistics->total() }}
                    </span>

                    <div>
                        @if($statistics->hasMorePages())
                            <a href="{{ $statistics->nextPageUrl() }}" class="text-gray-500 hover:underline">Selanjutnya</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
