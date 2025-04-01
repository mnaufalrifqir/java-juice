<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Transaksi') }}
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
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Pelanggan</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Total</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Status Pembayaran</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Status Pengiriman</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Status Ulasan</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Aksi</th>
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
                                            Sudah Diulas
                                        </span>
                                    @else
                                        <span class="text-red-500">
                                            Belum Diulas
                                        </span>
                                    @endif
                                </td>
                                <td class="py-2 px-4 border-b">
                                    <div class="flex justify-center items-center space-x-4">
                                        <span title="Edit">
                                            <a href="{{ route('admin.transactions.edit', $transaction->id) }}">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </a>
                                        </span>
                                        <span title="Hapus">
                                            <form action="{{ route('admin.transactions.destroy', $transaction->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?');">
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
                                <td colspan="6" class="py-3 text-center bg-red-500 text-white">
                                    Tidak ada transaksi ditemukan
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="bg-gray-50 px-4 py-2 flex justify-between items-center">
                    @if($transactions->onFirstPage())
                        <span></span>
                    @else
                        <a href="{{ $transactions->previousPageUrl() }}" class="text-gray-500 hover:underline">Sebelumnya</a>
                    @endif

                    <span class="text-gray-500">
                        Menampilkan {{ $transactions->firstItem() }} - {{ $transactions->lastItem() }} dari {{ $transactions->total() }}
                    </span>

                    @if($transactions->hasMorePages())
                        <a href="{{ $transactions->nextPageUrl() }}" class="text-gray-500 hover:underline">Selanjutnya</a>
                    @else
                        <span></span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
