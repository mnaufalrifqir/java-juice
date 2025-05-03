<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Transaksi') }}
            </h2>
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
                {{-- TABLE for Desktop --}}
                <table class="min-w-full bg-white hidden sm:table text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">ID</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Pelanggan</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Total</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Status Pembayaran</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Status Pengiriman</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Status Ulasan</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($transactions as $transaction)
                            <tr>
                                <td class="py-2 px-4 border-b text-center">{{ $transaction->id }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $transaction->first_name }} {{ $transaction->last_name }}</td>
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
                                    @if ($transaction->review_status)
                                        <span class="text-green-500">Sudah Diulas</span>
                                    @else
                                        <span class="text-red-500">Belum Diulas</span>
                                    @endif
                                </td>
                                <td class="py-2 px-4 border-b text-center">
                                    <div class="flex justify-center items-center space-x-4">
                                        <a href="{{ route('admin.transactions.edit', $transaction->id) }}" title="Edit">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <form action="{{ route('admin.transactions.destroy', $transaction->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?');">
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
                                <td colspan="7" class="py-3 text-center bg-red-500 text-white">Tidak ada transaksi ditemukan</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{-- CARD for Mobile --}}
                <div class="sm:hidden">
                    @forelse($transactions as $transaction)
                        <div class="bg-white shadow p-4">
                            <div class="mb-1 text-sm text-gray-600 font-semibold">ID: {{ $transaction->id }}</div>
                            <div class="mb-1"><span class="font-semibold text-gray-700">Pelanggan:</span> {{ $transaction->first_name }} {{ $transaction->last_name }}</div>
                            <div class="mb-1"><span class="font-semibold text-gray-700">Total:</span> Rp {{ number_format($transaction->total, 0, ',', '.') }}</div>
                            <div class="mb-1"><span class="font-semibold text-gray-700">Status Pembayaran:</span>
                                <span class="{{ $transaction->payment_status === 'Success' ? 'text-green-500' : 'text-red-500' }}">
                                    {{ ucfirst($transaction->payment_status) }}
                                </span>
                            </div>
                            <div class="mb-1"><span class="font-semibold text-gray-700">Status Pengiriman:</span>
                                <span class="{{ $transaction->shipping_status === 'Received' ? 'text-green-500' : 'text-yellow-500' }}">
                                    {{ ucfirst($transaction->shipping_status) }}
                                </span>
                            </div>
                            <div class="mb-3"><span class="font-semibold text-gray-700">Status Ulasan:</span>
                                @if ($transaction->review_status)
                                    <span class="text-green-500">Sudah Diulas</span>
                                @else
                                    <span class="text-red-500">Belum Diulas</span>
                                @endif
                            </div>
                            <div class="flex justify-end items-center space-x-4 text-gray-600">
                                <a href="{{ route('admin.transactions.edit', $transaction->id) }}" title="Edit" class="hover:text-blue-600">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('admin.transactions.destroy', $transaction->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Hapus" class="hover:text-red-600 focus:outline-none">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <div class="py-3 text-center bg-red-500 text-white">
                            Tidak ada transaksi ditemukan
                        </div>
                    @endforelse
                </div>

                {{-- Pagination --}}
                <div class="bg-gray-50 px-4 py-2 flex flex-col sm:flex-row justify-between items-center gap-2 sm:gap-0">
                    <div>
                        @if(!$transactions->onFirstPage())
                            <a href="{{ $transactions->previousPageUrl() }}" class="text-gray-500 hover:underline">Sebelumnya</a>
                        @endif
                    </div>

                    <span class="text-gray-500 text-center">
                        Menampilkan {{ $transactions->firstItem() }} - {{ $transactions->lastItem() }} dari {{ $transactions->total() }}
                    </span>

                    <div>
                        @if($transactions->hasMorePages())
                            <a href="{{ $transactions->nextPageUrl() }}" class="text-gray-500 hover:underline">Selanjutnya</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
