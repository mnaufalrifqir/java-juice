<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Transactions') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">ID</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Customer</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Total</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Payment Status</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Shipping Status</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Review Status</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($transactions as $transaction)
                            <tr>
                                <td class="py-2 px-4 border-b text-center">{{ $transaction->id }}</td>
                                <td class="py-2 px-4 border-b text-center">
                                    {{ $transaction->first_name }} {{ $transaction->last_name }}
                                </td>
                                <td class="py-2 px-4 border-b text-center">Rp {{ number_format($transaction->total, 0, ',', '.') }}</td>
                                <td class="py-2 px-4 border-b text-center">
                                    <span class="{{ $transaction->payment_status === 'Success' ? 'text-green-500' : 'text-red-500' }}">
                                        {{ ucfirst($transaction->payment_status) }}
                                    </span>
                                </td>
                                <td class="py-2 px-4 border-b text-center">
                                    <span class="{{ $transaction->shipping_status === 'Received' ? 'text-green-500' : 'text-yellow-500' }}">
                                        {{ ucfirst($transaction->shipping_status) }}
                                    </span>
                                </td>
                                <td class="py-2 px-4 border-b text-center">
                                    @if ($transaction->review_status === true)
                                        <span class="text-green-500">
                                            Reviewed
                                        </span>
                                    @else
                                        <span class="text-red-500">
                                            Not Reviewed
                                        </span>
                                    @endif
                                </td>
                                <td class="py-2 px-4 border-b">
                                    <div class="flex justify-center items-center space-x-4">
                                        <span title="Edit">
                                            <a href="{{ route('admin.transactions.edit', $transaction->id) }}">
                                                <ion-icon name="create-outline" class="text-2xl"></ion-icon>
                                            </a>
                                        </span>
                                        <span title="Delete">
                                            <form action="{{ route('admin.transactions.destroy', $transaction->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this transaction?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" title="Delete" class="focus:outline-none">
                                                    <ion-icon name="trash-outline" class="text-2xl text-red-500"></ion-icon>
                                                </button>
                                            </form>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="py-3 text-center bg-red-500 text-white">
                                    No transactions found
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="bg-gray-50 px-4 py-2 flex justify-between items-center">
                    @if($transactions->onFirstPage())
                        <span></span>
                    @else
                        <a href="{{ $transactions->previousPageUrl() }}" class="text-gray-500 hover:underline">Previous</a>
                    @endif

                    <span class="text-gray-500">
                        Showing {{ $transactions->firstItem() }} - {{ $transactions->lastItem() }} of {{ $transactions->total() }}
                    </span>

                    @if($transactions->hasMorePages())
                        <a href="{{ $transactions->nextPageUrl() }}" class="text-gray-500 hover:underline">Next</a>
                    @else
                        <span></span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
