@extends('front.layouts.app')
@section('content')
  <x-navbar/>
  <div class="content w-full h-full top-0 right-0 overflow-hidden z-0">
    <img src="{{asset('assets/backgrounds/banner.png')}}" class="w-full h-auto object-cover" alt="banner">
  </div>
  <div id="BestSeller" class="content w-full flex flex-col gap-[30px] justify-center mt-20">
    <div class="flex items-center text-center justify-center">
      <div class="flex flex-col gap-[14px]">
        <h2 class="font-bold text-4xl leading-[45px]">Best Seller</h2>
        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="relative">
      <div id="slider" class="center flex justify-center gap-[100px] overflow-hidden">
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-1.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-2.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-3.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-4.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-5.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-6.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-6.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-6.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-6.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-6.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-6.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-6.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
      </div>
    </div>
  </div>
  <div id="NewProducts" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20">
    <div class="flex items-center text-center justify-center">
      <div class="flex flex-col gap-[14px]">
        <h2 class="font-bold text-4xl leading-[45px]">New Products</h2>
        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="relative">
      <div id="slider" class="responsive flex flex-wrap items-center gap-[30px] justify-center">
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-1.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-2.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-3.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-4.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-5.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-6.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
      </div>
    </div>
  </div>
  <div id="Sale" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20">
    <div class="flex items-center text-center justify-center">
      <div class="flex flex-col gap-[14px]">
        <h2 class="font-bold text-4xl leading-[45px]">Sale</h2>
        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="relative">
      <div id="slider" class="responsive flex flex-wrap items-center gap-[30px] justify-center">
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-1.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-2.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-3.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-4.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-5.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{asset('assets/best-products/product-6.jpg')}}" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
      </div>
    </div>
  </div>
  <div id="OurPartners" class="bg-[#FAF3EA] w-full mt-20">
    <div class="content mx-auto py-10 px-20">
      <h2 class="font-bold text-4xl leading-[45px] text-[#3a3a3a] text-center mb-10">Our Partners</h2>
      <div class="flex flex-wrap items-center justify-between">
        <div class="card w-[200px] flex flex-col items-center p-4 text-center">
            <img src="{{asset('assets/partners/adhimix-logo.png')}}" class="object-contain w-full h-full" alt="icon">
        </div>
        <div class="card w-[200px] flex flex-col items-center p-4 text-center">
            <img src="{{asset('assets/partners/adira-logo.png')}}" class="object-contain w-full h-full" alt="icon">
        </div>
        <div class="card w-[200px] flex flex-col items-center p-4 text-center">
            <img src="{{asset('assets/partners/holcim-logo.png')}}" class="object-contain w-full h-full" alt="icon">
        </div>
        <div class="card w-[200px] flex flex-col items-center p-4 text-center">
            <img src="{{asset('assets/partners/mnc-logo.png')}}" class="object-contain w-full h-full" alt="icon">
        </div>
        <div class="card w-[200px] flex flex-col items-center p-4 text-center">
          <img src="{{asset('assets/partners/telkomsel-logo.png')}}" class="object-contain w-full h-full" alt="icon">
        </div>
      </div>
    </div>
  </div>
  <div id="Testimonials" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20">
    <div class="flex justify-between">
      <div class="flex flex-col gap-[14px] items-start p-4">
        <h2 class="font-bold text-2xl leading-[45px] text-black">Our Customer Feedback</h2>
        <p class="text-lg">Don't take our word for it. Trust our customers</p>
      </div>
      <div class="space-x-2 my-7 hidden sm:block p-4">
        <button class="px-4 py-2 text-gray-500 bg-gray-200 rounded-lg hover:bg-gray-300">
          <span class="mr-1"><</span> Previous
        </button>
        <button class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">
          Next <span class="ml-1">></span>
        </button>
      </div>
    </div>
    <div class="relative">
      <div id="slider" data-slick='{"slidesToScroll": 3}' class="responsive flex flex-wrap items-center justify-between p-[10px]">
        <div class="card flex flex-col p-4 space-x-4 border rounded-lg shadow-md">
          <div class="flex items-center mb-2">
            <img class="w-12 h-12 rounded-full" src="https://via.placeholder.com/48" alt="Customer 1">
            <div class="ml-3">
              <h3 class="font-bold text-gray-800">Floyd Miles</h3>
              <div class="flex">
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
              </div>
            </div>
          </div>
          <p class="text-sm text-gray-500">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
        </div>
        <div class="card flex flex-col p-4 mx-auto border rounded-lg shadow-md">
          <div class="flex items-center mb-2">
            <img class="w-12 h-12 rounded-full" src="https://via.placeholder.com/48" alt="Customer 2">
            <div class="ml-3">
              <h3 class="font-bold text-gray-800">Ronald Richards</h3>
              <div class="flex">
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
              </div>
            </div>
          </div>
          <p class="text-sm text-gray-500">ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
        </div>
        <div class="card flex flex-col p-4 mx-auto border rounded-lg shadow-md">
          <div class="flex items-center mb-2">
            <img class="w-12 h-12 rounded-full" src="https://via.placeholder.com/48" alt="Customer 3">
            <div class="ml-3">
              <h3 class="font-bold text-gray-800">Savannah Nguyen</h3>
              <div class="flex">
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
              </div>
            </div>
          </div>
          <p class="text-sm text-gray-500">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
        </div>
        <div class="card flex flex-col p-4 mx-auto border rounded-lg shadow-md">
          <div class="flex items-center mb-2">
            <img class="w-12 h-12 rounded-full" src="https://via.placeholder.com/48" alt="Customer 1">
            <div class="ml-3">
              <h3 class="font-bold text-gray-800">Floyd Miles</h3>
              <div class="flex">
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
              </div>
            </div>
          </div>
          <p class="text-sm text-gray-500">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
        </div>
        <div class="card flex flex-col p-4 mx-auto border rounded-lg shadow-md">
          <div class="flex items-center mb-2">
            <img class="w-12 h-12 rounded-full" src="https://via.placeholder.com/48" alt="Customer 2">
            <div class="ml-3">
              <h3 class="font-bold text-gray-800">Ronald Richards</h3>
              <div class="flex">
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
              </div>
            </div>
          </div>
          <p class="text-sm text-gray-500">ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
        </div>
        <div class="card flex flex-col p-4 mx-auto border rounded-lg shadow-md">
          <div class="flex items-center mb-2">
            <img class="w-12 h-12 rounded-full" src="https://via.placeholder.com/48" alt="Customer 3">
            <div class="ml-3">
              <h3 class="font-bold text-gray-800">Savannah Nguyen</h3>
              <div class="flex">
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
              </div>
            </div>
          </div>
          <p class="text-sm text-gray-500">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
        </div>
      </div>
    </div>
  </div>
  <div id="Stats" class="bg-[#FAF3EA] w-full mt-20">
    <div class="container max-w-[1130px] mx-auto py-10">
      <div class="flex flex-wrap items-center justify-between p-[10px]">
        <div class="flex items-center p-4">
          <div class="card w-[50px] flex shrink-0 overflow-hidden mr-2">
              <img src="{{asset('assets/icons/trophy-1.png')}}" class="object-contain w-full h-full" alt="icon">
          </div>
          <div class="flex flex-col">
            <p class="font-extrabold text-xl leading-[30px] text-black">High Quality</p>
            <p class="text-sm text-[#3a3a3a]">crafted from top materials</p>
          </div>
        </div>
        <div class="flex items-center p-4">
          <div class="card w-[50px] flex shrink-0 overflow-hidden mr-2">
              <img src="{{asset('assets/icons/guarantee.png')}}" class="object-contain w-full h-full" alt="icon">
          </div>
          <div class="flex flex-col">
            <p class="font-extrabold text-xl leading-[30px] text-black">Warranty Protection</p>
            <p class="text-sm text-[#3a3a3a]">Over 2 years</p>
          </div>
        </div>
        <div class="flex items-center p-4">
          <div class="card w-[50px] flex shrink-0 overflow-hidden mr-2">
              <img src="{{asset('assets/icons/shipping.png')}}" class="object-contain w-full h-full" alt="icon">
          </div>
          <div class="flex flex-col">
            <p class="font-extrabold text-xl leading-[30px] text-black">Free Shipping</p>
            <p class="text-sm text-[#3a3a3a]">Order over 150 $</p>
          </div>
        </div>
        <div class="flex items-center p-4">
          <div class="card w-[50px] flex shrink-0 overflow-hidden mr-2">
              <img src="{{asset('assets/icons/customer-support.png')}}" class="object-contain w-full h-full" alt="icon">
          </div>
          <div class="flex flex-col">
            <p class="font-extrabold text-xl leading-[30px] text-black">24 / 7 Support</p>
            <p class="text-sm text-[#3a3a3a]">Dedicated support</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="container max-w-[1130px] mx-auto flex flex-col mt-10 bg-white py-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h2 class="text-xl font-bold mb-4">Java Juice Indonesia</h2>
                <p class="text-gray-600">
                    Jl. Kav IIP No.106 Kalimulya<br>
                    Depok - Jawa Barat<br>
                    Indonesia 16413
                </p>
            </div>
            <div class="grid grid-cols-2 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Home</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Shop</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">About</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Help</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Payment Options</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Returns</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Privacy Policies</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Our Social Media</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-600 hover:text-gray-900">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-gray-900">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-gray-900">
                        <span class="sr-only">TikTok</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-gray-900">
                        <span class="sr-only">WhatsApp</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-8 border-t border-gray-200 pt-8">
            <p class="text-base text-gray-400 xl:text-center">
                &copy; 2023 Java Juice. All rights reserved
            </p>
        </div>
    </div>
  </footer>
@endsection

@push('before-scripts')
  <script src="//unpkg.com/alpinejs" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="{{ asset('/js/sw.js') }}"></script>
  <script>
    if ("serviceWorker" in navigator) {
      // Register a service worker hosted at the root of the
      // site using the default scope.
      navigator.serviceWorker.register("/sw.js").then(
      (registration) => {
        console.log("Service worker registration succeeded:", registration);
      },
      (error) => {
        console.error(`Service worker registration failed: ${error}`);
      },
    );
  } else {
    console.error("Service workers are not supported.");
  }
  </script>
@endpush

@push('after-scripts')
  <link href="{{asset('css/slick.css')}}" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script src="{{asset('js/slider.js')}}"></script>
@endpush