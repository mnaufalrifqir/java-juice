@extends('front.layouts.app')
@section('content')
    <x-navbar/>
    <!-- Konten Utama -->
    <main class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row lg:space-x-8">
            <!-- Kartu Detail Tagihan -->
            <div class="w-full lg:w-2/3 bg-white p-8 shadow rounded-lg">
                <h2 class="text-2xl font-bold mb-6">Detail Tagihan</h2>
                <!-- Formulir detail tagihan -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="first_name">Nama Depan</label>
                        <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="first_name" type="text" value="first"/>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="last_name">Nama Belakang</label>
                        <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="last_name" type="text" value="last"/>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700" for="street_address">Alamat Jalan</label>
                    <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="street_address" type="text" value="address"/>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700" for="province">Provinsi</label>
                    <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="province">
                        <option value="">Pilih Provinsi</option>
                        @foreach($provinces as $province)
                            <option value="{{ $province['province_id'] }}:{{ $province['province'] }}">{{ $province['province'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700" for="city">Kota / Kabupaten</label>
                    <select id="city" name="city" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" disabled>
                        <option value="">Pilih Kota</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700" for="postal_code">Kode Pos</label>
                    <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="postal_code" type="text" value="1"/>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700" for="phone_number">Nomor Telepon</label>
                    <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="phone_number" type="text" value="1"/>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700" for="email">Alamat Email</label>
                    <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="email" type="email" value="blbla@gmail.com"/>
                </div>
            </div>

            <div>
                <!-- Kartu Metode Pengiriman -->
                <div class="w-full lg:max-w-sm bg-white p-8 shadow rounded-lg mt-8 mb-8 lg:mt-0">
                    <h2 class="text-2xl font-bold mb-6">Pilih Metode Pengiriman</h2>
                    <input type="hidden" name="weight" id="weight" value="{{$totalWeight}}">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700" for="courier">Kurir</label>
                        <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="courier" name="courier" required disabled>
                            <option value="">Pilih Kurir</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700" for="shipping_option">Pilihan Pengiriman</label>
                        <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="shipping_option" name="shipping_option" required disabled>
                            <option value="">Pilih Pilihan Pengiriman</option>
                        </select>
                    </div>
                </div>
                <!-- Kartu Detail Produk -->
                <div class="w-full lg:max-w-sm bg-white p-8 shadow rounded-lg mt-8 lg:mt-0">
                    <h2 class="text-2xl font-bold mb-6">Detail Produk</h2>
                    @foreach ($cartItems as $item)
                        <div class="mb-4">
                            <div class="flex justify-between">
                                <span>{{ $item->product->name }} <span class="text-gray-500">x {{ $item->quantity }} pcs</span></span>
                                <span>Rp. {{ number_format($item->product->current_price * $item->quantity, 0, ',', '.') }}</span>
                            </div>
                        </div>
                    @endforeach

                    <div class="mb-4">
                        <div class="flex justify-between">
                            <span>Subtotal</span>
                            <span id="subtotal" value="{{$totalAmount}}">Rp. {{ number_format($totalAmount, 0, ',', '.') }}</span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex justify-between">
                            <span>Pengiriman ({{ $totalWeight }} gram)</span>
                            <span id="shipping_cost">Rp. {{ number_format(0, 0, ',', '.') }}</span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex justify-between font-bold text-lg">
                            <span>Total</span>
                            <span id="total" class="text-orange-500">Rp. {{ number_format($totalAmount, 0, ',', '.') }}</span>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 mb-4">
                        Data pribadi Anda akan digunakan untuk mendukung pengalaman Anda selama di situs web ini, untuk mengelola akses ke akun Anda, dan untuk tujuan lain yang dijelaskan dalam
                        <a class="text-gray-700 font-medium" href="#">kebijakan privasi</a>.
                    </p>
                    <button id="pay-button" class="w-full bg-orange-500 text-white font-bold py-2 rounded-md">Lanjutkan ke Pembayaran</button>
                </div>
            </div>
        </div>
    </main>
    <x-footer/>
@endsection

@push('before-scripts')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script src="{{ asset('js/payment.js') }}"></script>
@endpush
