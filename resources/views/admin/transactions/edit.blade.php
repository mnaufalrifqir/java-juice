<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2">
            {{ __('Edit Transaksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="py-3 w-full rounded-3xl bg-red-500 text-white">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <form method="POST" action="{{ route('admin.transactions.update', $transaction->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-8">
                        <h3 class="font-bold text-lg text-gray-700 mb-4">Informasi Pribadi</h3>

                        <div class="mt-4">
                            <x-input-label for="first_name" :value="__('Nama Depan')" />
                            <x-text-input id="first_name" class="block mt-1 w-full bg-gray-200 text-gray-500 border-gray-300" type="text" name="first_name" :value="$transaction->first_name" readonly />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="last_name" :value="__('Nama Belakang')" />
                            <x-text-input id="last_name" class="block mt-1 w-full bg-gray-200 text-gray-500 border-gray-300" type="text" name="last_name" :value="$transaction->last_name" readonly />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="phone_number" :value="__('Nomor Telepon')" />
                            <x-text-input id="phone_number" class="block mt-1 w-full bg-gray-200 text-gray-500 border-gray-300" type="text" name="phone_number" :value="$transaction->phone_number" readonly />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full bg-gray-200 text-gray-500 border-gray-300" type="text" name="email" :value="$transaction->email" readonly />
                        </div>
                    </div>

                    {{-- Informasi Pengiriman --}}
                    <div class="mb-8">
                        <h3 class="font-bold text-lg text-gray-700 mb-4">Informasi Pengiriman</h3>

                        <div class="mt-4">
                            <x-input-label for="street_address" :value="__('Alamat Jalan')" />
                            <x-text-input id="street_address" class="block mt-1 w-full bg-gray-200 text-gray-500 border-gray-300" type="text" name="street_address" :value="$transaction->street_address" readonly />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="city" :value="__('Kota')" />
                            <x-text-input id="city" class="block mt-1 w-full bg-gray-200 text-gray-500 border-gray-300" type="text" name="city" :value="$transaction->city" readonly />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="province" :value="__('Provinsi')" />
                            <x-text-input id="province" class="block mt-1 w-full bg-gray-200 text-gray-500 border-gray-300" type="text" name="province" :value="$transaction->province" readonly />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="postal_code" :value="__('Kode Pos')" />
                            <x-text-input id="postal_code" class="block mt-1 w-full bg-gray-200 text-gray-500 border-gray-300" type="text" name="postal_code" :value="$transaction->postal_code" readonly />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="courier" :value="__('Kurir')" />
                            <x-text-input id="courier" class="block mt-1 w-full bg-gray-200 text-gray-500 border-gray-300" type="text" name="courier" :value="$transaction->courier" readonly />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="weight" :value="__('Berat')" />
                            <x-text-input id="weight" class="block mt-1 w-full bg-gray-200 text-gray-500 border-gray-300" type="text" name="weight" :value="$transaction->weight" readonly />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="shipping_cost" :value="__('Biaya Pengiriman')" />
                            <x-text-input id="shipping_cost" class="block mt-1 w-full bg-gray-200 text-gray-500 border-gray-300" type="text" name="shipping_cost" :value="'Rp ' . number_format($transaction->shipping_cost, 0, ',', '.')" readonly />
                        </div>
                    </div>

                    {{-- Status --}}
                    <div class="mb-8">
                        <h3 class="font-bold text-lg text-gray-700 mb-4">Status</h3>

                        <div class="mt-4">
                            <x-input-label for="payment_status" :value="__('Status Pembayaran')" />
                            <select id="payment_status" name="payment_status" class="block mt-1 w-full rounded-md shadow-sm border-gray-300">
                                <option value="Pending" {{ $transaction->payment_status == 'Pending' ? 'selected' : '' }}>Menunggu</option>
                                <option value="Success" {{ $transaction->payment_status == 'Success' ? 'selected' : '' }}>Berhasil</option>
                                <option value="Expired" {{ $transaction->payment_status == 'Expired' ? 'selected' : '' }}>Kedaluwarsa</option>
                                <option value="Failed" {{ $transaction->payment_status == 'Failed' ? 'selected' : '' }}>Gagal</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="shipping_status" :value="__('Status Pengiriman')" />
                            <select id="shipping_status" name="shipping_status" class="block mt-1 w-full rounded-md shadow-sm border-gray-300">
                                <option value="Pending" {{ $transaction->shipping_status == 'Pending' ? 'selected' : '' }}>Menunggu</option>
                                <option value="In Progress" {{ $transaction->shipping_status == 'In Progress' ? 'selected' : '' }}>Dalam Proses</option>
                                <option value="Delivered" {{ $transaction->shipping_status == 'Delivered' ? 'selected' : '' }}>Terkirim</option>
                                <option value="Received" {{ $transaction->shipping_status == 'Received' ? 'selected' : '' }}>Diterima</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="tracking_number" :value="__('Nomor Resi')" />
                            <x-text-input id="tracking_number" class="block mt-1 w-full" type="text" name="tracking_number" :value="old('tracking_number', $transaction->tracking_number)" required autofocus autocomplete="name" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="review_status" :value="__('Status Ulasan')" />
                            @if ($transaction->review_status == false)
                                <x-text-input id="review_status" class="block mt-1 w-full bg-gray-200 text-gray-500 border-gray-300" type="text" name="review_status" :value="__('Belum Ditinjau')" readonly />
                            @else
                                <x-text-input id="review_status" class="block mt-1 w-full bg-gray-200 text-gray-500 border-gray-300" type="text" name="review_status" :value="__('Sudah Ditinjau')" readonly />
                            @endif
                        </div>

                        <div class="mt-4">
                            <x-input-label for="total" :value="__('Total')" />
                            <x-text-input id="total" class="block mt-1 w-full bg-gray-200 text-gray-500 border-gray-300" type="text" name="total" :value="'Rp ' . number_format($transaction->total, 0, ',', '.')" readonly />
                        </div>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="font-bold py-4 px-6 bg-[#FAF3EA] text-gray-800 rounded-full">
                            Perbarui Statistik
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
