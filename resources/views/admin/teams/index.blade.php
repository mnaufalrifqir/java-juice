<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Anggota Tim') }}
            </h2>
            <a href="{{ route('admin.teams.create') }}" class="font-bold py-2 px-6 bg-white text-gray-800 border rounded-full">
                Tambah Anggota Tim
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow rounded-lg overflow-hidden">
                <table class="min-w-full bg-white">
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
                                        <span title="Edit">
                                            <a href="{{ route('admin.teams.edit', $team->id) }}">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </a>
                                        </span>
                                        <span title="Hapus">
                                            <form action="{{ route('admin.teams.destroy', $team->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus anggota tim ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" title="Hapus" class="focus:outline-none">
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </span>
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
                <div class="bg-gray-50 px-4 py-2 flex justify-between items-center">
                    @if($teams->onFirstPage())
                        <span></span>
                    @else
                        <a href="{{ $teams->previousPageUrl() }}" class="text-gray-500 hover:underline">Sebelumnya</a>
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
