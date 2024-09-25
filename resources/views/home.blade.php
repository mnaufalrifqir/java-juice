@extends('layouts.app')

@section('content')
    <section class="bg-yellow-50 py-12">
        <!-- Hero section content -->
    </section>

    <section class="container mx-auto px-4 py-12">
        <h2 class="text-2xl font-bold mb-6">Best Seller</h2>
        <!-- Best seller products grid -->
    </section>

    <section class="container mx-auto px-4 py-12">
        <h2 class="text-2xl font-bold mb-6">Our Products</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Product cards -->
        </div>
        <div class="text-center mt-8">
            <button class="bg-blue-500 text-white px-4 py-2 rounded">Show More</button>
        </div>
    </section>

    <section class="bg-gray-50 py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-6">Our Partner</h2>
            <!-- Partner logos -->
        </div>
    </section>

    <section class="container mx-auto px-4 py-12">
        <h2 class="text-2xl font-bold mb-6">Our Customer Feedback</h2>
        <!-- Customer feedback carousel -->
    </section>

    <section class="bg-gray-100 py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                <!-- Feature icons and text -->
            </div>
        </div>
    </section>
@endsection