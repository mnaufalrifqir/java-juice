<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Hero Section') }}
            </h2>
            <a href="{{ route('admin.hero_sections.create') }}" class="font-bold py-2 px-6 bg-white text-gray-800 border rounded-full">
                Add New Image
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">ID</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Image</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Is Primary</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Actions</th>
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
                                        <span class="text-green-500 font-semibold">Yes</span>
                                    @else
                                        <span class="text-gray-500">No</span>
                                    @endif
                                </td>
                                <td class="py-2 px-4 border-b">
                                    <div class="flex justify-center items-center space-x-4">
                                        <span title="Delete">
                                            <form action="{{ route('admin.hero_sections.destroy', $hero->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this image?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" title="Delete" class="focus:outline-none">
                                                    <ion-icon name="trash-outline" class="text-2xl text-red-500"></ion-icon>
                                                </button>
                                            </form>
                                        </span>
                                        @if(!$hero->isPrimary)
                                        <span title="Set as Primary">
                                            <form action="{{ route('admin.hero_sections.setPrimary', $hero->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" title="Set as Primary" class="focus:outline-none">
                                                    <ion-icon name="star-outline" class="text-2xl text-yellow-500"></ion-icon>
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="py-3 text-center bg-red-500 text-white">
                                    No hero images found
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="bg-gray-50 px-4 py-2 flex justify-between items-center">
                    @if($hero_sections->onFirstPage())
                        <span></span>
                    @else
                        <a href="{{ $hero_sections->previousPageUrl() }}" class="text-gray-500 hover:underline">Previous</a>
                    @endif

                    <span class="text-gray-500">
                        Showing {{ $hero_sections->firstItem() }} - {{ $hero_sections->lastItem() }} of {{ $hero_sections->total() }}
                    </span>

                    @if($hero_sections->hasMorePages())
                        <a href="{{ $hero_sections->nextPageUrl() }}" class="text-gray-500 hover:underline">Next</a>
                    @else
                        <span></span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
