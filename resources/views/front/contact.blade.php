@extends('front.layouts.app')
@section('content')
    <x-navbar/>
    <x-banner />
    <section class="container mx-auto py-16 px-6">
        <h2 class="text-3xl font-bold text-center mb-4">Hubungi Kami</h2>
        <p class="text-center text-gray-600 mb-12">Untuk informasi lebih lanjut tentang produk dan layanan kami, silakan kirimkan email kepada kami. Staf kami selalu siap membantu Anda. Jangan ragu untuk menghubungi kami!</p>
        <div class="flex flex-wrap -mx-6">
            <div class="w-full md:w-1/2 lg:w-1/3 px-6 mb-12 md:mb-0">
                <div class="flex items-start mb-6">
                    <i class="fas fa-map-marker-alt text-2xl text-orange-500 mr-4"></i>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Alamat</h3>
                        <p>Jl. Kav IIP No.106 Kalimulya, Depok, Jawa Barat, Indonesia 16413</p>
                    </div>
                </div>
                <div class="flex items-start mb-6">
                    <i class="fas fa-phone-alt text-2xl text-orange-500 mr-4"></i>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Telepon</h3>
                        <p>Mobile: +(62)811876449</p>
                    </div>
                </div>
                <!-- <div class="flex items-start">
                    <i class="fas fa-clock text-2xl text-orange-500 mr-4"></i>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Jam Kerja</h3>
                        <p>Senin-Jumat: 9:00 - 22:00</p>
                        <p>Sabtu-Minggu: 9:00 - 21:00</p>
                    </div>
                </div> -->
            </div>
            <div class="w-full md:w-1/2 lg:w-2/3 px-6">
                <form>
                    <div class="mb-6">
                        <label for="name" class="block text-gray-700 mb-2">Nama Anda</label>
                        <input type="text" id="name" class="w-full border border-gray-300 p-3 rounded" placeholder="Abc">
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 mb-2">Alamat Email</label>
                        <input type="email" id="email" class="w-full border border-gray-300 p-3 rounded" placeholder="Abc@def.com">
                    </div>
                    <div class="mb-6">
                        <label for="subject" class="block text-gray-700 mb-2">Subjek</label>
                        <input type="text" id="subject" class="w-full border border-gray-300 p-3 rounded" placeholder="Ini adalah opsional">
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block text-gray-700 mb-2">Pesan</label>
                        <textarea id="message" class="w-full border border-gray-300 p-3 rounded" rows="4" placeholder="Hi! Saya ingin bertanya tentang..."></textarea>
                    </div>
                    <button type="submit" class="bg-orange-500 text-white py-3 px-6 rounded hover:bg-orange-600">Kirim</button>
                </form>
            </div>
        </div>
    </section>
    <x-footer/>
@endsection
