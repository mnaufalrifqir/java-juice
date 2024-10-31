<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Categories') }}
            </h2>
            <a href="{{route('admin.categories.create')}}" class="font-bold py-2 px-6 bg-white text-gray-800 border rounded-full">
                Add New
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
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Name</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $category)
                            <tr>
                                <td class="py-2 px-4 border-b text-center">{{ $category->id }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $category->name }}</td>
                                <td class="py-2 px-4 border-b">
                                    <div class="flex justify-center items-center space-x-4">
                                        <span title="Edit">
                                            <a href="">
                                                <ion-icon name="create-outline" class="text-2xl"></ion-icon>
                                            </a>
                                        </span>
                                        <span title="Delete">
                                            <a href="">
                                                <ion-icon name="trash-outline" class="text-2xl"></ion-icon>
                                            </a>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="py-3 text-center bg-red-500 text-white">
                                    No categories found
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="bg-gray-50 px-4 py-2 flex justify-between items-center">
                    @if($categories->onFirstPage())
                    <span></span>
                    @else
                    <a href="{{ $categories->previousPageUrl() }}" class="text-gray-500">Previous</a>
                    @endif

                    <span class="text-gray-500">{{$categories->firstItem()}} - {{$categories->lastItem()}} of {{{$categories->total()}}}</span>

                    @if($categories->hasMorePages())
                    <a href="{{ $categories->nextPageUrl() }}" class="text-gray-500">Next</a>
                    @else
                    <span></span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
