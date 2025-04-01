<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Gambar Banner') }}
            </h2>
            <a href="{{ route('admin.hero_sections.create') }}" class="font-bold py-2 px-6 bg-white text-gray-800 border rounded-full">
                Tambahkan Gambar Baru
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
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Gambar</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Apakah Utama?</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($hero_sections as $hero)
                            <tr>
                                <td class="py-2 px-4 border-b text-center">{{ $hero->id }}</td>
                                <td class="py-2 px-4 border-b text-center">
                                    <img src="{{ Storage::url($hero->image) }}" alt="Hero Image" class="w-16 h-16 rounded-lg mx-auto">
                                </td>
                                <td class="py-2 px-4 border-b text-center">
                                    @if($hero->isPrimary)
                                        <span class="text-green-500 font-semibold">Ya</span>
                                    @else
                                        <span class="text-gray-500">Tidak</span>
                                    @endif
                                </td>
                                <td class="py-2 px-4 border-b">
                                    <div class="flex justify-center items-center space-x-4">
                                        <span title="Hapus">
                                            <form action="{{ route('admin.hero_sections.destroy', $hero->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus gambar ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" title="Hapus" class="focus:outline-none">
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </span>
                                        @if(!$hero->isPrimary)
                                        <span title="Setel Sebagai Utama">
                                            <form action="{{ route('admin.hero_sections.setPrimary', $hero->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" title="Setel Sebagai Utama" class="focus:outline-none">
                                                    <i class="fa-regular fa-star"></i>
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="py-3 text-center bg-red-500 text-white">
                                    Tidak ada gambar banner yang ditemukan
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="bg-gray-50 px-4 py-2 flex justify-between items-center">
                    @if($hero_sections->onFirstPage())
                        <span></span>
                    @else
                        <a href="{{ $hero_sections->previousPageUrl() }}" class="text-gray-500 hover:underline">Sebelumnya</a>
                    @endif

                    <span class="text-gray-500">
                        Menampilkan {{ $hero_sections->firstItem() }} - {{ $hero_sections->lastItem() }} dari {{ $hero_sections->total() }}
                    </span>

                    @if($hero_sections->hasMorePages())
                        <a href="{{ $hero_sections->nextPageUrl() }}" class="text-gray-500 hover:underline">Selanjutnya</a>
                    @else
                        <span></span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
