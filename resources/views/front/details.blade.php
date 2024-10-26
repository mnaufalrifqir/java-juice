@extends('front.layouts.app')
@section('content')
  <x-navbar/>
  <x-hero-section/>
  <main class="container mx-auto py-8 px-6">
    <div class="flex flex-col lg:flex-row">
     <div class="lg:w-1/2">
      <img alt="Product Image" class="rounded-lg shadow-lg" height="600" src="https://storage.googleapis.com/a1aa/image/LD5Jw93pimasAlK1Wl5CyCi2R7VwemMWFekxcBJrwutCssoTA.jpg" width="600"/>
     </div>
     <div class="lg:w-1/2 lg:pl-10 mt-6 lg:mt-0">
      <h1 class="text-3xl font-bold">
       Liquid Cake
      </h1>
      <p class="text-2xl text-gray-900 mt-2">
       Rs. 250,000.00
      </p>
      <div class="flex items-center mt-4">
       <div class="flex items-center text-yellow-500">
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star-half-alt">
        </i>
       </div>
       <span class="ml-2 text-gray-600">
        5 Customer Review
       </span>
      </div>
      <p class="mt-4 text-gray-700">
       Setting the bar as one of the loudest speakers in its class, the Kilburn is a compact, stout-hearted hero with a well-balanced audio which boasts a clear midrange and extended highs for a sound.
      </p>
      <div class="flex items-center mt-6">
       <button class="text-gray-700 border border-gray-300 px-3 py-1">
        -
       </button>
       <input class="w-12 text-center border-t border-b border-gray-300" type="text" value="1"/>
       <button class="text-gray-700 border border-gray-300 px-3 py-1">
        +
       </button>
       <button class="ml-4 bg-yellow-500 text-white px-6 py-2 rounded">
        Add To Cart
       </button>
      </div>
     </div>
    </div>
    <!-- You may also like -->
    <section class="mt-12">
     <h2 class="text-2xl font-bold mb-6">
      You may also like
     </h2>
     <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="bg-white shadow-lg rounded-lg p-4">
       <img alt="Ceylon Ginger Cinnamon chai tea" class="rounded-lg" height="300" src="https://storage.googleapis.com/a1aa/image/EefTfujORqZHTJa3J4CxfYM8fKM4tP5HDupyXIyYSQ8lglFdC.jpg" width="300"/>
       <h3 class="mt-4 text-lg font-bold">
        Ceylon Ginger Cinnamon chai tea
       </h3>
       <p class="text-gray-600">
        €4.85 / 50 g
       </p>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-4">
       <img alt="Ceylon Ginger Cinnamon chai tea" class="rounded-lg" height="300" src="https://storage.googleapis.com/a1aa/image/EefTfujORqZHTJa3J4CxfYM8fKM4tP5HDupyXIyYSQ8lglFdC.jpg" width="300"/>
       <h3 class="mt-4 text-lg font-bold">
        Ceylon Ginger Cinnamon chai tea
       </h3>
       <p class="text-gray-600">
        €4.85 / 50 g
       </p>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-4">
       <img alt="Ceylon Ginger Cinnamon chai tea" class="rounded-lg" height="300" src="https://storage.googleapis.com/a1aa/image/EefTfujORqZHTJa3J4CxfYM8fKM4tP5HDupyXIyYSQ8lglFdC.jpg" width="300"/>
       <h3 class="mt-4 text-lg font-bold">
        Ceylon Ginger Cinnamon chai tea
       </h3>
       <p class="text-gray-600">
        €4.85 / 50 g
       </p>
      </div>
     </div>
    </section>
   </main>
   <x-footer/>
@endsection