@extends('layouts.app')

@section('title', 'Denza D9')

@section('content')
    {{-- DETAIL CONTENT --}}
    <div class="bg-white pt-2">
        <div aria-hidden="true" class="relative">
            <img src="{{ asset('images/detail-car/denza-d9/celling_car_pc.png') }}" alt="Denza D9" class="w-full h-[16rem] sm:h-[32rem] md:h-[40rem] object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-800"></div>
        </div>

        <div class="relative mx-auto -mt-12 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">
            <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                <h2 class="relative -top-[11rem] sm:-top-[25rem] md:-top-[33rem] text-3xl font-bold tracking-tight text-white sm:text-5xl">Denza D9</h2>
                <p class="mt-8 text-xl text-gray-500">Denza D9 dalam balutan warna Whale Sea Blue dengan aksen grille chrome yang elegan dan 
                    detail lampu LED futuristik, menghadirkan kesan mewah, modern, dan penuh prestise. Terdapat juga pilihan warna lain: Arctic White, 
                    Harbour Grey dan Cosmos Black</p>
            </div>
        </div>

        <hr>

        {{-- DETAIL SECTION --}}
        <div class="bg-slate-50">
            <div class="mx-auto max-w-2xl px-4 py-24 sm:px-6 sm:py-12 lg:max-w-7xl lg:px-8">
                <!-- Details section -->
                <section aria-labelledby="details-heading">
                    <div class="flex flex-col items-center text-center">
                        <h2 id="details-heading" class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Tim
                            Kemewahan dan Eksklusivitas dalam Setiap Detail</h2>
                        <p class="mt-8 max-w-3xl text-lg text-gray-600">Denza D9 dirancang untuk memberikan pengalaman premium yang tak tertandingi. 
                            Mengusung filosofi desain mewah modern, setiap lekuk dan elemen interiornya mencerminkan keanggunan serta kenyamanan 
                            tingkat tinggi. Material berkualitas tinggi seperti kulit Nappa, panel kayu premium, dan ambient lighting cerdas 
                            berpadu menciptakan suasana kabin layaknya lounge pribadi. Dirancang khusus untuk mereka yang mengutamakan prestise 
                            dan kenyamanan, Denza D9 menjadi simbol eksklusivitas di setiap perjalanan.</p>
                    </div>

                    <div class="mt-16 mb-12 grid grid-cols-1 gap-y-16 lg:grid-cols-2 lg:gap-x-8">
                        <div>
                            <img src="{{ asset('images/detail-car/denza-d9/driver_pc1.png') }}"
                                alt="Drawstring top with elastic loop closure and textured interior padding."
                                class="aspect-[3/2] w-full rounded-lg object-cover transition-transform duration-300 hover:scale-105">
                            <h2 id="details-heading"
                                class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mt-4">Sentuhan Kemewahan Premium</h2>
                            <p class="mt-6 text-base text-gray-500">Dibalut dengan detail berkualitas tinggi, pedal logam pada interior menambah 
                                kesan eksklusif dan sporty. Elemen ini memperkuat nuansa mewah dan performa yang menyatu dalam desain Denza D9.</p>
                        </div>
                        <div>
                            <img src="{{ asset('images/detail-car/denza-d9/08-left-pc.jpg') }}"
                                alt="Front zipper pouch with included key ring."
                                class="aspect-[3/2] w-full rounded-lg object-cover transition-transform duration-300 hover:scale-105">
                            <h2 id="details-heading"
                                class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mt-4">Tombol Praktis di Kursi Tengah</h2>
                            <p class="mt-6 text-base text-gray-500">Dirancang untuk kenyamanan maksimal, tombol fisik yang terintegrasi di kursi 
                                baris tengah memungkinkan penumpang mengatur posisi duduk dengan mudah dan intuitif. Memberi keleluasaan penuh untuk 
                                bersantai sesuai keinginan Anda.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <hr>

    {{-- content baris 3 / beda bentuk --}}
    <div class="bg-white">
        <div class="bg-slate-50 mx-auto max-w-2xl px-4 py-24 sm:px-6 sm:py-12 lg:max-w-7xl lg:px-8">
            <div class="mt-16 space-y-16">
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-0 xl:col-span-4">
                        <h3 class="text-lg font-medium text-gray-900">Desain Kursi Ergonomis</h3>
                        <p class="mt-2 text-base text-gray-500">Kursi baris kedua Denza D9 dirancang dengan perhatian penuh terhadap 
                            kenyamanan jangka panjang. Dilengkapi dengan penyesuaian daya hingga 10 arah, sandaran kepala tidur 6 arah, 
                            serta pijatan 10 titik, menghadirkan pengalaman duduk yang mendekati standar first class. Sempurna untuk 
                            bersantai maupun bekerja selama perjalanan.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                        <img src="{{ asset('images/detail-car/denza-d9/1.jpg') }}"
                            alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 2 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:mt-0 xl:col-span-4 xl:col-start-9">
                        <h3 class="text-lg font-medium text-gray-900">Kotak Penyimpanan dengan Fitur Pemanas & Pendingin</h3>
                        <p class="mt-2 text-base text-gray-500">Didesain tidak hanya fungsional, tetapi juga pintar. Kotak penyimpanan ini mendukung kontrol jarak jauh melalui cloud, lengkap dengan pengingat daya dan notifikasi barang yang tertinggal. Sebuah bentuk nyata dari perhatian Denza terhadap detail dan kenyamanan personal.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-1 lg:row-start-1 xl:col-span-8">
                        <img src="{{ asset('images/detail-car/denza-d9/12-up.jpg') }}"
                            alt="Detail of zipper pull with tan leather and silver rivet."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 3 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-0 xl:col-span-4">
                        <h3 class="text-lg font-medium text-gray-900">Interior Gagang Pintu Premium</h3>
                        <p class="mt-2 text-base text-gray-500">Dibalut material berkualitas tinggi dengan pencahayaan ambient halus, desain gagang pintu memadukan fungsi dan kemewahan. Setiap sentuhan terasa halus dan responsif, mencerminkan kualitas desain yang menyeluruh.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                        <img src="{{ asset('images/detail-car/denza-d9/6-up.jpg') }}"
                            alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 4 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:mt-0 xl:col-span-4 xl:col-start-9">
                        <h3 class="text-lg font-medium text-gray-900">Sistem Audio Imersif</h3>
                        <p class="mt-2 text-base text-gray-500">Dilengkapi dengan sistem audio premium berdefinisi tinggi, suara merata di seluruh kabin. Cocok untuk menikmati musik dengan kualitas konser ataupun rapat daring tanpa gangguan, membawa atmosfer ruang hiburan ke dalam mobil.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-1 lg:row-start-1 xl:col-span-8">
                        <img src="{{ asset('images/detail-car/denza-d9/11-rignt-pc.jpg') }}"
                            alt="Detail of zipper pull with tan leather and silver rivet."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 5 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-0 xl:col-span-4">
                        <h3 class="text-lg font-medium text-gray-900">Kenyamanan Total dengan Sentuhan Kemewahan</h3>
                        <p class="mt-2 text-base text-gray-500">Denza D9 dirancang untuk menghadirkan relaksasi maksimal dengan sandaran kepala 6 arah yang mendukung posisi istirahat ideal, serta pijatan 10 titik yang menenangkan tubuh sepanjang perjalanan. Kabin yang fleksibel dan berkelas ini mencerminkan gaya hidup modern yang mengutamakan kenyamanan, kemewahan, dan fungsi dalam satu kesatuan.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                        <img src="{{ asset('images/detail-car/denza-d9/space.png') }}"
                            alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 6 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:mt-0 xl:col-span-4 xl:col-start-9">
                        <h3 class="text-lg font-medium text-gray-900">Fleksibel untuk Gaya Hidup dan Pekerjaan</h3>
                        <p class="mt-2 text-base text-gray-500">Interior Denza D9 dirancang serbaguna—baik untuk bersantai maupun produktivitas. Ruang kabin yang luas dan fitur premium mendukung berbagai kebutuhan, dari perjalanan bisnis hingga momen santai bersama keluarga.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-1 lg:row-start-1 xl:col-span-8">
                        <img src="{{ asset('images/detail-car/denza-d9/driver_pc2.png') }}"
                            alt="Detail of zipper pull with tan leather and silver rivet."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 7 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-0 xl:col-span-4">
                        <h3 class="text-lg font-medium text-gray-900">Desain Dinamis dari Sudut Depan Atas</h3>
                        <p class="mt-2 text-base text-gray-500">Tampilan dari sudut depan atas menegaskan karakter mewah dan futuristik Denza D9. Grille depan yang tegas berpadu dengan lekukan bodi aerodinamis dan lampu LED tajam, menciptakan kesan elegan sekaligus bertenaga—sebuah simbol kemewahan modern yang menarik perhatian dari segala arah.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                        <img src="{{ asset('images/detail-car/denza-d9/m04-pc-background1.png') }}"
                            alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 8 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:mt-0 xl:col-span-4 xl:col-start-9">
                        <h3 class="text-lg font-medium text-gray-900">Struktur Rangka Kokoh dan Aman</h3>
                        <p class="mt-2 text-base text-gray-500">Denza D9 dibangun di atas platform dengan struktur rangka berkekuatan tinggi, dirancang untuk memberikan stabilitas maksimal dan perlindungan optimal. Kombinasi material baja ringan dan teknik peredaman getaran canggih memastikan pengalaman berkendara yang senyap, aman, dan nyaman.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-1 lg:row-start-1 xl:col-span-8">
                        <img src="{{ asset('images/detail-car/denza-d9/16-02-pc.jpg') }}"
                            alt="Detail of zipper pull with tan leather and silver rivet."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
