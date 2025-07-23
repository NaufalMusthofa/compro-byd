@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section with Banner Image Slider -->
    <section id="hero-section"
        class="relative h-[620px] text-white flex flex-col items-center justify-center overflow-hidden transition-all duration-1000"
        style="background-image: url('{{ asset('images/hero/section-seal.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
        <!-- Pattern Overlay -->
        <div class="absolute inset-0 opacity-20"
            style="background-image: radial-gradient(circle at center, #1F3A68 1px, transparent 1px); background-size: 20px 20px;">
        </div>
        <div class="relative z-1 px-4 text-center">
            <h1 id="hero-text"
                class="-mt-14 max-w-4xl mx-auto text-4xl font-bold leading-tight md:text-5xl lg:text-6xl transition-opacity duration-500">
                BYD SEAL
            </h1>
            <a href="#"
                class="mt-10 inline-block rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition-colors duration-300">
                Hubungi Kami
            </a>
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
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6 lg:gap-8">
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
                                BYD M6
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
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-12 sm:mt-16">
                <a href="https://wa.me/6288289722296?text=Halo%20BYD%20Jabodetabek%2C%20saya%20tertarik%20untuk%20mengetahui%20lebih%20lanjut%20tentang%20layanan%20dan%20produk%20yang%20ditawarkan.%20Mohon%20informasinya.%20Terima%20kasih."
                    target="_blank" rel="noopener"
                    class="inline-flex items-center gap-2 bg-gradient-to-r from-emerald-600 to-blue-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:from-emerald-700 hover:to-blue-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                    Hubungi Langsung Melalui WhatsApp Kami
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>

            {{-- <!-- Call to Action -->
            <div class="text-center mt-12 sm:mt-16">
                <a href="{{ url('/notfound') }}" 
                   class="inline-flex items-center gap-2 bg-gradient-to-r from-emerald-600 to-blue-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:from-emerald-700 hover:to-blue-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                    Lihat Semua Produk
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div> --}}
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

    {{-- Footer --}}
    <footer class="bg-gray-900 text-sm text-gray-400">
        <div class="max-w-7xl mx-auto px-6 pt-16 pb-10 sm:pt-24 lg:px-8 lg:pt-32">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <!-- Logo dan Deskripsi -->
                <div class="space-y-6">
                    <img src="{{ asset('images/logo-brand/logo-byd.png') }}" alt="BYD Jabodetabek"
                        class="h-10 filter invert">
                    <p class="text-gray-300">
                        BYD Indonesia – Cabang Jabodetabek melayani kebutuhan kendaraan listrik untuk masa depan yang lebih
                        ramah lingkungan dan berkelanjutan.
                    </p>
                    <!-- Sosial Media -->
                    <div class="flex gap-x-4">
                        <!-- facebook -->
                        <a href="https://facebook.com/byd.indonesia" target="_blank"
                            class="text-gray-400 hover:text-white transition-colors duration-300" title="facebookbyd">
                            <img src="{{ asset('images/icon/facebook.png') }}"
                                class="w-6 h-6 hover:scale-110 transition-transform duration-300" alt="facebook">
                        </a>
                        <!-- Instagram -->
                        <a href="https://instagram.com/byd.indonesia" target="_blank"
                            class="text-gray-400 hover:text-white transition-colors duration-300" title="Instagram">
                            <img src="{{ asset('images/icon/instagram.png') }}"
                                class="w-6 h-6 hover:scale-110 transition-transform duration-300" alt="instagram">
                        </a>
                        <!-- LinkedIn -->
                        <a href="https://linkedin.com/company/byd" target="_blank"
                            class="text-gray-400 hover:text-white transition-colors duration-300" title="LinkedIn">
                            <img src="{{ asset('images/icon/linkedin.png') }}"
                                class="w-6 h-6 hover:scale-110 transition-transform duration-300" alt="linkedin">
                        </a>
                        <!-- twitter -->
                        <a href="https://twitter.com/byd" target="_blank"
                            class="text-gray-400 hover:text-white transition-colors duration-300" title="Twitter">
                            <img src="{{ asset('images/icon/twitter.png') }}"
                                class="w-6 h-6 hover:scale-110 transition-transform duration-300" alt="twitter">
                        </a>
                    </div>
                </div>
                <!-- Menu Layanan + Sales -->
                <div class="mt-12 xl:mt-0 flex flex-col sm:flex-row gap-8 xl:col-span-2">
                    <!-- Menu -->
                    <div class="mr-10">
                        <h3 class="text-white text-sm font-semibold">Layanan</h3>
                        <ul class="mt-4 space-y-2">
                            <li><a href="#" class="hover:text-white transition-colors duration-300">Penjualan Mobil
                                    Listrik</a></li>
                            <li><a href="#" class="hover:text-white transition-colors duration-300">Test Drive</a>
                            </li>
                            <li><a href="#" class="hover:text-white transition-colors duration-300">Berita</a></li>
                            <li><a href="#" class="hover:text-white transition-colors duration-300">Daftar Harga</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Foto Sales + Lokasi Dealer (Side by Side) -->
                    <div class="flex flex-col sm:flex-row items-start gap-6">
                        <!-- Foto + Nama Sales -->
                        <div class="flex flex-col items-center sm:items-start mr-10">
                            <img src="{{ asset('images/sales.jpg') }}" alt="Sales GAIN"
                                class="rounded-xl w-36 h-36 sm:w-40 sm:h-40 md:w-44 md:h-44 object-cover shadow-lg border border-gray-300 hover:scale-105 transition-transform duration-300">
                            <p class="mt-4 text-gray-700 font-semibold text-sm sm:text-base text-center sm:text-left">
                                Nama Sales nya
                            </p>
                        </div>
                        <!-- Lokasi Dealer + Maps -->
                        <div class="flex flex-col gap-2 text-sm text-gray-600 max-w-xs">
                            <div class="flex items-start gap-2">
                                <svg class="w-5 h-5 mt-0.5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 2C8.13 2 5 5.14 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.86-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
                                </svg>
                                <span>
                                    Dealer BYD - Jl. Boulevard Raya, Kelapa Gading, Jakarta Utara
                                </span>
                            </div>
                            <!-- Google Maps Embed -->
                            <div class="w-full">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3133828735343!2d106.90539407575989!3d-6.224650260931892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3c4bb9ae42f%3A0x9ec77ae775be155b!2sBYD%20Kelapa%20Gading!5e0!3m2!1sen!2sid!4v1721700000000!5m2!1sen!2sid"
                                    width="100%" height="160" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"
                                    class="rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Informasi Kontak -->
            <div class="mt-16 border-t border-white/10 pt-8 text-gray-400 text-sm">
                <p>&copy; 2024 BYD Indonesia - Cabang Jabodetabek. All rights reserved.</p>
                <p class="mt-2">
                    Jl. Contoh Alamat No. 123, Jakarta, Indonesia |
                    Email: <a href="mailto:info@byd.co.id"
                        class="underline hover:text-white transition-colors duration-300">info@byd.co.id</a>
                </p>
            </div>
        </div>
    </footer>
@endsection
