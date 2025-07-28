@extends('layouts.app')

@section('content')
@php
  $galleryImages = [
    'foto1.png', 'foto2.png', 'foto3.png', 'foto4.png',
    'foto5.png', 'foto6.png', 'foto7.png', 'foto8.png',
    'foto9.png', 'foto10.png', 'foto11.png', 'foto12.png',
  ];
  $posterImages = [
    'pricelist-juli.jpeg', 'poster-m6.jpeg', 'poster-seal.jpeg',
    'poster-sealion7.jpeg', 'poster-dolphin.jpeg', 'poster-atto3.jpeg'
  ];
@endphp

<section class="py-16 px-4 sm:px-6 lg:px-8 bg-white"
         x-data="{
           open: false,
           images: @js(array_merge($galleryImages, $posterImages)),
           currentIndex: null,
           get image() {
             if (this.currentIndex === null) return '';
             let folder = this.currentIndex < {{ count($galleryImages) }} ? 'client' : 'poster';
             return `/images/foto/${folder}/${this.images[this.currentIndex]}`;
           },
           openModal(index) {
             this.currentIndex = index;
             this.open = true;
           },
           next() {
             if (this.currentIndex !== null)
               this.currentIndex = (this.currentIndex + 1) % this.images.length;
           },
           prev() {
             if (this.currentIndex !== null)
               this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
           }
         }"
>

  <div class="max-w-7xl mx-auto space-y-20">

    <!-- Section: Bersama Client -->
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-900 mb-4">Bersama Client</h2>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto">
        Galeri momen bersama pelanggan saya yang berharga.
      </p>
      <div class="mt-2 mb-6 w-48 h-1 bg-gradient-to-r from-emerald-500 to-blue-600 mx-auto rounded-full"></div>
      <div class="flex flex-wrap justify-center gap-6">
        @foreach ($galleryImages as $i => $filename)
          <div class="cursor-pointer group w-full sm:w-[calc(50%-0.75rem)] md:w-[calc(33.333%-1rem)] lg:w-[calc(25%-1.125rem)]"
              @click="openModal({{ $i }})">
            <img src="{{ asset('images/foto/client/' . $filename) }}"
                alt="Sales & Client"
                class="w-full h-64 object-cover rounded-xl shadow-md group-hover:opacity-80 transition" />
          </div>
        @endforeach
      </div>
    </div>

    <!-- Section: Poster Harga -->
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-900 mb-4">Posters</h2>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto">
        Desain promosi dan informasi terkini yang kami tampilkan untuk calon pelanggan.
      </p>
      <div class="mt-2 mb-6 w-48 h-1 bg-gradient-to-r from-emerald-500 to-blue-600 mx-auto rounded-full"></div>
      <div>
      <div class="flex flex-wrap justify-center gap-6">
        @foreach ($posterImages as $i => $filename)
          <div class="cursor-pointer group w-full sm:w-[calc(50%-0.75rem)] md:w-[calc(33.333%-1rem)] lg:w-[calc(25%-1.125rem)]"
              @click="openModal({{ $i + count($galleryImages) }})">
            <img src="{{ asset('images/foto/poster/' . $filename) }}"
                alt="Poster Harga"
                class="w-full h-[500px] object-hover rounded-xl shadow-md group-hover:opacity-80 transition" />
          </div>
        @endforeach
      </div>
    </div>


    <!-- Modal Viewer -->
    <div
      x-show="open"
      x-transition:enter="transition ease-out duration-300"
      x-transition:enter-start="opacity-0 scale-90"
      x-transition:enter-end="opacity-100 scale-100"
      x-transition:leave="transition ease-in duration-200"
      x-transition:leave-start="opacity-100 scale-100"
      x-transition:leave-end="opacity-0 scale-90"
      x-cloak
      @keydown.escape.window="open = false"
      class="fixed inset-0 z-[9999] flex items-center justify-center bg-black bg-opacity-80 backdrop-blur-sm"
    >

      <!-- Close Button -->
      <button @click="open = false"
              class="absolute top-5 right-6 text-white text-4xl font-bold z-50 hover:text-red-400 transition">
        &times;
      </button>

      <!-- Navigation -->
      <div class="absolute inset-0 flex justify-between items-center z-40 px-4">
        <button @click="prev"
                class="text-white text-4xl hover:text-blue-300 transition">&larr;</button>
        <button @click="next"
                class="text-white text-4xl hover:text-blue-300 transition">&rarr;</button>
      </div>

      <!-- Image Display -->
      <div class="relative max-w-6xl max-h-[85vh] w-full p-4">
        <img :src="image"
             alt="Popup Image"
             :key="image"
             class="mx-auto max-h-[80vh] object-contain rounded-lg shadow-2xl transition-all duration-300 ease-in-out" />
      </div>
    </div>

  </div>
</section>
@endsection
