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
            {{-- <h1 id="hero-text" class="max-w-4xl mx-auto text-4xl font-bold leading-tight md:text-5xl lg:text-6xl transition-opacity duration-500">
            Solusi Cerdas Kendaraan Masa Depan – Bersama BYD Card
        </h1> --}}
            <a href="#"
                class="mt-10 inline-block rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Hubungi Kami
            </a>
        </div>
    </section>


@endsection
