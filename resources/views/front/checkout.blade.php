@extends('front.layouts.app')
@section('content')
    <x-navbar/>
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row lg:space-x-8">
                <!-- Card Billing Details -->
                <div class="w-full lg:w-2/3 bg-white p-8 shadow rounded-lg">
                    <h2 class="text-2xl font-bold mb-6">Billing details</h2>
                    <form>
                        <!-- Billing form fields go here -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700" for="first-name">First Name</label>
                                {{-- <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="first-name" type="text"/>--}}
                                <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="first-name" type="text" value="first"/>

                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700" for="last-name">Last Name</label>
                                {{-- <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="last-name" type="text"/> --}}
                                <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="last-name" type="text" value="last"/>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700" for="street-address">Street address</label>
                            {{-- <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="street" type="text"/> --}}
                            <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="street" type="text" value="address"/>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700" for="province">Province</label>
                            <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="province">
                                <option value="">Select Province</option>
                                @foreach($provinces as $province)
                                    <option value="{{ $province['province_id'] }}">{{ $province['province'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700" for="city">Town / City</label>
                            <select id="city" name="city" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" disabled>
                                <option value="">Select City</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700" for="zip-code">Postal Code</label>
                            {{-- <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="postal-code" type="text"/> --}}
                            <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="postal-code" type="text" value="1341234"/>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700" for="phone">Phone Number</label>
                            {{-- <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="phone-number" type="text"/> --}}
                            <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="phone-number" type="text" value="12312313"/>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700" for="email">Email address</label>
                            {{-- <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="email" type="email"/> --}}
                            <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="email" type="email" value="blbla@gmail.com"/>
                        </div>
                    </form>
                </div>

                <div>
                    <!-- Card Shipping Method -->
                    <div class="w-full lg:max-w-sm bg-white p-8 shadow rounded-lg mt-8 mb-8 lg:mt-0">
                        <h2 class="text-2xl font-bold mb-6">Choose Shipping Method</h2>
                            <input type="hidden" name="weight" id="weight" value="{{$totalWeight}}">
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700" for="courier">Courier</label>
                                <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="courier" name="courier" required>
                                    <option value="">Select Courier</option>
                                    <option value="jne">JNE</option>
                                    <option value="pos">POS</option>
                                    <option value="tiki">TIKI</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700" for="shipping-option">Shipping Option</label>
                                <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="shipping-option" name="shipping-option" required disabled>
                                    <option value="">Select Shipping Option</option>
                                </select>
                            </div>
                    </div>
                    <!-- Card Product Details -->
                    <div class="w-full lg:max-w-sm bg-white p-8 shadow rounded-lg mt-8 lg:mt-0">
                        <h2 class="text-2xl font-bold mb-6">Product Details</h2>
                        @foreach ($cartItems as $item)
                            <div class="mb-4">
                                <div class="flex justify-between">
                                    <span>{{ $item->product->name }} <span class="text-gray-500">x {{ $item->quantity }} pcs</span></span>
                                    <span>Rp. {{ number_format($item->product->price * $item->quantity, 0, ',', '.') }}</span>
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
                                <span>Shipping ({{ $totalWeight }} gram)</span>
                                <span id="shipping-cost">Rp. {{ number_format(0, 0, ',', '.') }}</span>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex justify-between font-bold text-lg">
                                <span>Total</span>
                                <span id="total" class="text-orange-500">Rp. {{ number_format($totalAmount, 0, ',', '.') }}</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 mb-4">
                            Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our
                            <a class="text-gray-700 font-medium" href="#">privacy policy</a>.
                        </p>
                        <button id="pay-button" class="w-full bg-orange-500 text-white font-bold py-2 rounded-md">Proceed to Payment</button>
                    </div>
                </div>
        </div>
    </main>
    <x-footer/>
@endsection

@push('before-scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://app.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
    <script src="{{ asset('js/payment.js') }}"></script>
@endpush
