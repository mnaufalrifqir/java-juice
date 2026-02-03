<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 sm:gap-0">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Anggota Tim') }}
            </h2>
            <a href="{{ route('admin.teams.create') }}" class="font-bold py-2 px-6 bg-white text-gray-800 border rounded-full">
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
                {{-- Tabel untuk desktop --}}
                <table class="min-w-full bg-white hidden sm:table">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">ID</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Nama</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Gambar</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Pekerjaan</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($teams as $team)
                            <tr>
                                <td class="py-2 px-4 border-b text-center">{{ $team->id }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $team->name }}</td>
                                <td class="py-2 px-4 border-b text-center">
                                    <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}" class="h-10 mx-auto rounded-full">
                                </td>
                                <td class="py-2 px-4 border-b text-center">{{ $team->occupation }}</td>
                                <td class="py-2 px-4 border-b">
                                    <div class="flex justify-center items-center space-x-4">
                                        <a href="{{ route('admin.teams.edit', $team->id) }}" title="Edit">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <form action="{{ route('admin.teams.destroy', $team->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus anggota tim ini?');">
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
                                    Tidak ada anggota tim ditemukan
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{-- Tampilan mobile --}}
                <div class="sm:hidden">
                    @forelse($teams as $team)
                        <div class="border-b p-4 flex flex-col gap-2">
                            <div class="flex justify-between items-center">
                                <span class="font-semibold text-gray-700">ID: {{ $team->id }}</span>
                                <div class="flex gap-3 text-gray-600">
                                    <a href="{{ route('admin.teams.edit', $team->id) }}" title="Edit">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <form action="{{ route('admin.teams.destroy', $team->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus anggota tim ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="focus:outline-none" title="Hapus">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}" class="h-14 w-14 object-cover rounded-full">
                                <div>
                                    <div class="font-bold">{{ $team->name }}</div>
                                    <div class="text-sm text-gray-500">{{ $team->occupation }}</div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="py-3 text-center bg-red-500 text-white">
                            Tidak ada anggota tim ditemukan
                        </div>
                    @endforelse
                </div>

                <div class="bg-gray-50 px-4 py-2 flex flex-col sm:flex-row justify-between items-center text-sm gap-2">
                    @if(!$teams->onFirstPage())
                        <a href="{{ $teams->previousPageUrl() }}" class="text-gray-500 hover:underline">Sebelumnya</a>
                    @else
                        <span></span>
                    @endif

                    <span class="text-gray-500">
                        Menampilkan {{ $teams->firstItem() }} - {{ $teams->lastItem() }} dari {{ $teams->total() }}
                    </span>

                    @if($teams->hasMorePages())
                        <a href="{{ $teams->nextPageUrl() }}" class="text-gray-500 hover:underline">Selanjutnya</a>
                    @else
                        <span></span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
