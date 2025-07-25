@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section with Banner Image Slider -->
    <section id="hero-section"
        class="relative flex items-center justify-center overflow-hidden h-[80vh] sm:h-[75vh] md:h-[620px] bg-black">

        <picture id="hero-picture" class="absolute inset-0 w-full h-full">
            <!-- Desktop -->
            <source id="hero-source-desktop" media="(min-width:1024px)" srcset="{{ asset('images/hero/Website-Header-GIIAS-2025-desktop.png') }}">
            <!-- Tablet -->
            <source id="hero-source-tablet" media="(min-width:640px)" srcset="{{ asset('images/hero/Website-Header-GIIAS-2025-tablet.png') }}">
            <!-- Mobile fallback -->
            <img id="hero-img"
            src="{{ asset('images/hero/Website-Header-GIIAS-2025-mobile.png') }}"
            alt="Hero Image"
            class="w-full h-full object-cover object-center">
        </picture>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>

        <div class="absolute inset-0 opacity-20"
            style="background-image: radial-gradient(circle at center, #1F3A68 1px, transparent 1px); background-size: 20px 20px;"></div>

        <div class="relative z-10 text-center text-white px-4">
            <h1 id="hero-text" class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight"></h1>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-16 sm:py-20 lg:py-24 bg-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12 sm:mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                    Jelajahi Koleksi BYD
                </h2>
                <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto">
                    Temukan kendaraan listrik terdepan dengan teknologi canggih dan desain yang memukau
                </p>
                <div class="mt-6 w-24 h-1 bg-gradient-to-r from-emerald-500 to-blue-600 mx-auto rounded-full"></div>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-6 lg:gap-8">
                <!-- BYD SEAL -->
                <div
                    class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100">
                    <a href="{{ url('/byd-seal') }}" class="block">
                        <div class="relative overflow-hidden rounded-t-2xl bg-gradient-to-br from-gray-50 to-gray-100">
                            <img src="{{ asset('images/produk/seal-menu.png') }}" alt="BYD SEAL"
                                class="w-full h-48 sm:h-52 object-contain p-4 group-hover:scale-110 transition-transform duration-700 ease-out">
                            <!-- Gradient Overlay on Hover -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                        </div>
                        <div class="p-6">
                            <h3
                                class="text-xl sm:text-2xl font-bold text-gray-900 mb-2 group-hover:text-emerald-600 transition-colors duration-300">
                                BYD SEAL
                            </h3>
                            <p class="text-gray-600 text-sm mb-4">
                                Sedan listrik premium dengan performa tinggi
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-emerald-600 font-semibold text-sm">Lihat Detail</span>
                                <svg class="w-5 h-5 text-emerald-600 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <span class="absolute inset-0"></span>
                    </a>
                </div>

                <!-- BYD ATTO 3 -->
                <div
                    class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100">
                    <a href="{{ url('/byd-atto3') }}" class="block">
                        <div class="relative overflow-hidden rounded-t-2xl bg-gradient-to-br from-gray-50 to-gray-100">
                            <img src="{{ asset('images/produk/atto3-menu.png') }}" alt="BYD ATTO 3"
                                class="w-full h-48 sm:h-52 object-contain p-4 group-hover:scale-110 transition-transform duration-700 ease-out">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                        </div>
                        <div class="p-6">
                            <h3
                                class="text-xl sm:text-2xl font-bold text-gray-900 mb-2 group-hover:text-emerald-600 transition-colors duration-300">
                                BYD ATTO 3
                            </h3>
                            <p class="text-gray-600 text-sm mb-4">
                                SUV kompak dengan teknologi terdepan
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-emerald-600 font-semibold text-sm">Lihat Detail</span>
                                <svg class="w-5 h-5 text-emerald-600 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <span class="absolute inset-0"></span>
                    </a>
                </div>

                <!-- BYD DOLPHIN -->
                <div
                    class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100">
                    <a href="{{ url('/byd-dolphin') }}" class="block">
                        <div class="relative overflow-hidden rounded-t-2xl bg-gradient-to-br from-gray-50 to-gray-100">
                            <img src="{{ asset('images/produk/dolphin-menu.png') }}" alt="BYD DOLPHIN"
                                class="w-full h-48 sm:h-52 object-contain p-4 group-hover:scale-110 transition-transform duration-700 ease-out">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                        </div>
                        <div class="p-6">
                            <h3
                                class="text-xl sm:text-2xl font-bold text-gray-900 mb-2 group-hover:text-emerald-600 transition-colors duration-300">
                                BYD DOLPHIN
                            </h3>
                            <p class="text-gray-600 text-sm mb-4">
                                Hatchback listrik yang stylish dan efisien
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-emerald-600 font-semibold text-sm">Lihat Detail</span>
                                <svg class="w-5 h-5 text-emerald-600 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <span class="absolute inset-0"></span>
                    </a>
                </div>

                <!-- BYD M6 -->
                <div
                    class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100">
                    <a href="{{ url('/byd-m6') }}" class="block">
                        <div class="relative overflow-hidden rounded-t-2xl bg-gradient-to-br from-gray-50 to-gray-100">
                            <img src="{{ asset('images/produk/m6-menu.png') }}" alt="BYD M6"
                                class="w-full h-48 sm:h-52 object-contain p-4 group-hover:scale-110 transition-transform duration-700 ease-out">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                        </div>
                        <div class="p-6">
                            <h3
                                class="text-xl sm:text-2xl font-bold text-gray-900 mb-2 group-hover:text-emerald-600 transition-colors duration-300">
                                BYD M6>
                            </h3>
                            <p class="text-gray-600 text-sm mb-4">
                                MPV keluarga dengan kenyamanan maksimal
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-emerald-600 font-semibold text-sm">Lihat Detail</span>
                                <svg class="w-5 h-5 text-emerald-600 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <span class="absolute inset-0"></span>
                    </a>
                </div>

                <!-- BYD SEALION 7 -->
                <div
                    class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100">
                    <a href="{{ url('/byd-sealion7') }}" class="block">
                        <div class="relative overflow-hidden rounded-t-2xl bg-gradient-to-br from-gray-50 to-gray-100">
                            <img src="{{ asset('images/produk/sealion7-menu-3.png') }}" alt="BYD SEALION 7"
                                class="w-full h-48 sm:h-52 object-contain p-4 group-hover:scale-110 transition-transform duration-700 ease-out">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                        </div>
                        <div class="p-6">
                            <h3
                                class="text-xl sm:text-2xl font-bold text-gray-900 mb-2 group-hover:text-emerald-600 transition-colors duration-300">
                                BYD SEALION 7
                            </h3>
                            <p class="text-gray-600 text-sm mb-4">
                                SUV premium dengan teknologi terbaru
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-emerald-600 font-semibold text-sm">Lihat Detail</span>
                                <svg class="w-5 h-5 text-emerald-600 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </div>
                        <span class="absolute inset-0"></span>
                    </a>
                </div>

                <!-- BYD M6 -->
                <div
                    class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100">
                    <a href="{{ url('/byd-atto1') }}" class="block">
                        <div class="relative overflow-hidden rounded-t-2xl bg-gradient-to-br from-gray-50 to-gray-100">
                            <img src="{{ asset('images/produk/atto1-menu.png') }}" alt="BYD ATTO 1"
                                class="w-full h-48 sm:h-52 object-contain p-4 group-hover:scale-110 transition-transform duration-700 ease-out">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                        </div>
                        <div class="p-6">
                            <h3
                                class="text-xl sm:text-2xl font-bold text-gray-900 mb-2 group-hover:text-emerald-600 transition-colors duration-300">
                                BYD ATTO 1
                            </h3>
                            <p class="text-gray-600 text-sm mb-4">
                                Energi dalam Gerak
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-emerald-600 font-semibold text-sm">Lihat Detail</span>
                                <svg class="w-5 h-5 text-emerald-600 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <span class="absolute inset-0"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sales Introduction Section -->
    <section class="py-16 sm:py-20 lg:py-24 bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <!-- Sales Photo -->
        <div class="flex justify-center">
            <img src="{{ asset('images/foto/foto-putri.jpeg') }}"
            alt="Foto Sales BYD"
            class="w-full max-w-sm rounded-2xl shadow-lg object-cover">
        </div>

        <!-- Sales Description -->
        <div>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
            Kenalan dengan Brand Consultan Kami
            </h2>
            <p class="text-lg text-gray-700 mb-4 text-justify">
            Hai! Perkenalkan, saya <span class="font-semibold"> Nurul Putriyana</span>, Brand Consultan resmi BYD Bipo Tangerang.
            Saya siap membantu Anda menemukan kendaraan listrik terbaik sesuai kebutuhan.
            </p>
            <p class="text-lg text-gray-700 mb-4 text-justify">
            Dengan pengalaman melayani pelanggan di Jabodetabek, saya memastikan Anda mendapatkan informasi
            lengkap, test drive, dan penawaran terbaik dari BYD. Kepuasan Anda prioritas saya!
            </p>
            <p class="text-lg text-gray-700 mb-6 text-justify">
            Jangan ragu untuk menghubungi saya melalui WhatsApp kapan saja. Saya siap membantu proses konsultasi,
            pembelian, hingga layanan purna jual.
            </p>
            <!-- WhatsApp Button -->
            <a href="https://wa.me/6287855500627?text=Halo%20BYD%20Jabodetabek%2C%20saya%20tertarik%20untuk%20mengetahui%20lebih%20lanjut%20tentang%20layanan%20dan%20produk%20yang%20ditawarkan.%20Mohon%20informasinya.%20Terima%20kasih."
                    target="_blank" rel="noopener"
                    class="inline-flex items-center gap-2 bg-gradient-to-r from-emerald-600 to-blue-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:from-emerald-700 hover:to-blue-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                    Hubungi Sekarang
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
        </div>
        </div>
    </div>
    </section>


    <!-- Features Section -->
    <section class="py-16 sm:py-20 bg-gray-50">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                    Mengapa Memilih BYD?
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Teknologi terdepan untuk masa depan yang berkelanjutan
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div
                    class="group text-center p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-emerald-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Teknologi Listrik Terdepan</h3>
                    <p class="text-gray-600">Baterai Blade Battery yang aman dan tahan lama dengan jangkauan hingga 500+ km
                    </p>
                </div>

                <!-- Feature 2 -->
                <div
                    class="group text-center p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-emerald-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Keamanan Terjamin</h3>
                    <p class="text-gray-600">Standar keamanan internasional dengan fitur-fitur canggih untuk perlindungan
                        maksimal</p>
                </div>

                <!-- Feature 3 -->
                <div
                    class="group text-center p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-emerald-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Ramah Lingkungan</h3>
                    <p class="text-gray-600">Zero emission untuk masa depan yang lebih bersih dan berkelanjutan</p>
                </div>
            </div>
        </div>
    </section>
@endsection