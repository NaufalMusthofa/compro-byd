@extends('layouts.app')

@section('title', 'Daftar Harga BYD')

@section('content')
<section class="py-16 sm:py-20 lg:py-24 bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <!-- Header -->
        <div class="text-center mb-12 sm:mb-16">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Daftar Harga Mobil BYD
            </h2>
            <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto">
                Temukan mobil listrik BYD sesuai kebutuhan Anda dengan spesifikasi dan harga terbaik.
            </p>
            <div class="mt-6 w-24 h-1 bg-gradient-to-r from-emerald-500 to-blue-600 mx-auto rounded-full"></div>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($cars as $car)
            <div
                class="flex flex-col bg-white border border-gray-100 rounded-2xl shadow-lg hover:shadow-2xl transition overflow-hidden group min-h-[600px]"
                x-data="{ variant: 0 }">

                <!-- Image -->
                <div class="relative overflow-hidden rounded-t-2xl bg-gradient-to-br from-gray-50 to-gray-100">
                    <img src="{{ asset($car['image']) }}" alt="{{ $car['name'] }}"
                        class="w-full h-52 sm:h-60 object-contain p-4 group-hover:scale-105 transition-transform duration-700 ease-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>

                <!-- Content -->
                <div class="flex flex-col flex-grow p-6">

                    <!-- Title + Variants -->
                    <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 text-center group-hover:text-emerald-600 transition-colors duration-300">
                        {{ $car['name'] }}
                    </h3>

                    <div class="flex justify-center gap-2 mb-4 flex-wrap">
                        @foreach ($car['variants'] as $index => $variant)
                        <button
                            @click="variant = {{ $index }}"
                            :class="variant === {{ $index }} ? 'bg-gradient-to-r from-emerald-500 to-blue-600 text-white' : 'bg-gray-200 text-gray-800'"
                            class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300">
                            {{ $variant['type'] }}
                        </button>
                        @endforeach
                    </div>

                    <!-- Specs (NO absolute!) -->
                    <div class="flex-grow">
                        @foreach ($car['variants'] as $index => $variant)
                        <div
                            x-show="variant === {{ $index }}"
                            x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 -translate-y-2">
                            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                @foreach ($variant['specs'] as $spec)
                                <li>{{ $spec }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endforeach
                    </div>

                    <!-- Harga + WA BUTTON block, ALWAYS stick bottom -->
                    <div class="mt-6 flex flex-col items-center gap-4">
                        @foreach ($car['variants'] as $index => $variant)
                        <div x-show="variant === {{ $index }}" x-transition>
                            <p class="text-lg font-semibold text-emerald-600">
                                Mulai dari Rp {{ number_format($variant['price'], 0, ',', '.') }}
                            </p>
                        </div>
                        @endforeach

                        <a href="https://wa.me/{{ $car['wa'] }}?text=Halo%20BYD%20Bipo%20Tangerang%2C%20saya%20tertarik%20dengan%20{{ urlencode($car['name']) }}."
                            target="_blank"
                            class="inline-flex items-center gap-2 bg-gradient-to-r from-emerald-600 to-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:from-emerald-700 hover:to-blue-700 transform hover:scale-105 transition shadow-lg hover:shadow-xl">
                            Hubungi via WhatsApp
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                    </div>

                </div>

            </div>
            @endforeach
        </div>

    </div>
</section>
@endsection
