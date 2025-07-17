@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="bg-blue-600 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold mb-4">Selamat Datang di BYD Indonesia</h1>
            <p class="text-lg mb-6">Inovasi Mobil Listrik Terdepan untuk Masa Depan yang Lebih Hijau</p>
            <a href="#layanan" class="bg-white text-blue-600 px-6 py-2 rounded shadow hover:bg-gray-100 transition">
                Jelajahi Kendaraan Kami
            </a>
        </div>
    </section>

    <!-- Layanan Section -->
    <section id="layanan" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-semibold text-center mb-10">Model Kendaraan Unggulan</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-bold mb-2">BYD Dolphin</h3>
                    <p class="text-gray-600">Kendaraan kompak bertenaga listrik dengan desain futuristik dan efisiensi tinggi.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-bold mb-2">BYD Seal</h3>
                    <p class="text-gray-600">Sedan listrik premium dengan performa luar biasa dan teknologi mutakhir.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-bold mb-2">BYD Atto 3</h3>
                    <p class="text-gray-600">SUV listrik stylish dan bertenaga, cocok untuk kebutuhan harian maupun perjalanan jauh.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-semibold mb-6">Tentang BYD</h2>
            <p class="text-gray-700 max-w-3xl mx-auto">
                BYD (Build Your Dreams) adalah pemimpin global dalam inovasi kendaraan listrik dan solusi energi terbarukan.
                Di Indonesia, BYD berkomitmen menghadirkan mobil listrik berkualitas tinggi yang ramah lingkungan dan mendukung transformasi menuju transportasi berkelanjutan.
            </p>
        </div>
    </section>
@endsection
