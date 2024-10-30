@extends('front.layouts.app')
@section('content')
    <x-navbar/>
    <x-banner />
    <section class="container mx-auto py-16 px-6">
    <h2 class="text-3xl font-bold text-center mb-4">Get In Touch With Us</h2>
    <p class="text-center text-gray-600 mb-12">For More Information About Our Product & Services. Please Feel Free To Drop Us An Email. Our Staff Always Be There To Help You Out. Do Not Hesitate!</p>
    <div class="flex flex-wrap -mx-6">
        <div class="w-full md:w-1/2 lg:w-1/3 px-6 mb-12 md:mb-0">
            <div class="flex items-start mb-6">
                <i class="fas fa-map-marker-alt text-2xl text-orange-500 mr-4"></i>
                <div>
                    <h3 class="text-xl font-semibold mb-2">Address</h3>
                    <p>236 5th SE Avenue, New York NY10000, United States</p>
                </div>
            </div>
            <div class="flex items-start mb-6">
                <i class="fas fa-phone-alt text-2xl text-orange-500 mr-4"></i>
                <div>
                    <h3 class="text-xl font-semibold mb-2">Phone</h3>
                    <p>Mobile: +(84) 546-6789</p>
                    <p>Hotline: +(84) 546-6789</p>
                </div>
            </div>
            <div class="flex items-start">
                <i class="fas fa-clock text-2xl text-orange-500 mr-4"></i>
                <div>
                    <h3 class="text-xl font-semibold mb-2">Working Time</h3>
                    <p>Monday-Friday: 9:00 - 22:00</p>
                    <p>Saturday-Sunday: 9:00 - 21:00</p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-2/3 px-6">
            <form>
                <div class="mb-6">
                    <label for="name" class="block text-gray-700 mb-2">Your name</label>
                    <input type="text" id="name" class="w-full border border-gray-300 p-3 rounded" placeholder="Abc">
                </div>
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 mb-2">Email address</label>
                    <input type="email" id="email" class="w-full border border-gray-300 p-3 rounded" placeholder="Abc@def.com">
                </div>
                <div class="mb-6">
                    <label for="subject" class="block text-gray-700 mb-2">Subject</label>
                    <input type="text" id="subject" class="w-full border border-gray-300 p-3 rounded" placeholder="This is an optional">
                </div>
                <div class="mb-6">
                    <label for="message" class="block text-gray-700 mb-2">Message</label>
                    <textarea id="message" class="w-full border border-gray-300 p-3 rounded" rows="4" placeholder="Hi! I'd like to ask about"></textarea>
                </div>
                <button type="submit" class="bg-orange-500 text-white py-3 px-6 rounded hover:bg-orange-600">Submit</button>
            </form>
        </div>
    </div>
    </section>
    <x-footer/>
@endsection