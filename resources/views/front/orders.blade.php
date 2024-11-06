@extends('front.layouts.app')
@section('content')
    <x-navbar/>
    <div class="container max-w-3/4 mx-auto flex gap-[30px] mt-10 bg-zinc-600">
        <aside class="w-1/4 p-4">
            <div class="flex items-center space-x-2 mb-4">
                <i class="fas fa-user-circle text-3xl"></i>
                <div>
                    <span class="block font-bold">mnaufalrifqir</span>
                    <a class="text-sm text-gray-500" href="#">Edit Profile</a>
                </div>
            </div>
            <nav class="space-y-2">
                <a class="flex items-center space-x-2 text-orange-500" href="#"><i class="fas fa-user"></i> <span>My Account</span></a>
                <a class="flex items-center space-x-2 text-orange-500" href="#"><i class="fas fa-shopping-bag"></i> <span>My Purchase</span></a>
            </nav>
        </aside>

        <main class="w-3/4 p-4">
            <div class="bg-white p-4 shadow-md">
                <div class="flex justify-between items-center border-b pb-2 mb-4">
                    <div class="flex space-x-4">
                        <a class="text-orange-500" href="#">All</a>
                        <a class="text-gray-500" href="#">To Pay</a>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="bg-white p-4 shadow-md">
                        <div class="flex justify-between items-center mb-2">
                            <div class="flex items-center space-x-2">
                                <span class="bg-red-500 text-white text-xs px-2 py-1 rounded">Mall ORI</span>
                                <span class="font-bold">HEYLOOK Official Shop</span>
                                <button class="text-orange-500">Chat</button>
                                <button class="text-orange-500">View Shop</button>
                            </div>
                            <div class="text-green-500 text-sm">
                                Pesanan tiba di alamat tujuan. diterima oleh Yang bersangkutan.
                                <span class="text-gray-500">COMPLETED</span>
                            </div>
                        </div>

                        <div class="flex space-x-4">
                            <img alt="Product Image" src="https://example.com/image.jpg" class="h-20 w-20" />
                            <div class="flex-1">
                                <div class="font-bold">Product Name - Travelbag Pria Multyfungsi 3 in 1</div>
                                <div class="text-gray-500">Variation: TRAVELBAG THUNDER</div>
                                <div class="text-gray-500">x1</div>
                                <div class="flex space-x-2 mt-2">
                                    <span class="bg-red-500 text-white text-xs px-2 py-1 rounded">7 Days Return</span>
                                    <span class="bg-green-500 text-white text-xs px-2 py-1 rounded">Free Return</span>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="line-through text-gray-500">Rp570.000</div>
                                <div class="text-red-500 font-bold">Rp280.000</div>
                            </div>
                        </div>

                        <div class="flex justify-between items-center mt-4">
                            <div class="text-gray-500">Rate products by 22-02-2025</div>
                            <div class="text-orange-500">Get 25 coins</div>
                            <div class="text-right">
                                <div class="font-bold">Order Total: Rp246.800</div>
                                <div class="flex space-x-2 mt-2">
                                    <button class="bg-orange-500 text-white px-4 py-2 rounded">Rate</button>
                                    <button class="border border-orange-500 text-orange-500 px-4 py-2 rounded">Buy Again</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
