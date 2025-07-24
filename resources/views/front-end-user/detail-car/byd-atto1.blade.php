@extends('layouts.app')

@section('title', 'Byd Atto 1')

@section('content')
    {{-- DETAIL CONTENT --}}
    <div class="bg-white pt-2">
        <div aria-hidden="true" class="relative">
            <img src="{{ asset('images/detail-car/atto1/2.jpg') }}" alt="BYD ATTO 1" class="w-full h-[16rem] sm:h-[32rem] md:h-[40rem] object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-800"></div>
        </div>

        <div aria-hidden="true" class="relative">
            <img src="{{ asset('images/detail-car/atto1/product-bottom.png') }}" alt="" class="h-96 w-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-50"></div>
        </div>

        <div class="relative mx-auto -mt-12 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">
            <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                <h2 class="relative -top-[11rem] sm:-top-[25rem] md:-top-[33rem] text-3xl font-bold tracking-tight  text-white sm:text-5xl ">BYD ATTO 1</h2>
                <p class="mt-8 text-xl text-gray-500">Temukan kebebasan mobilitas yang praktis dan sepenuhnya elektrik. 
                    Saatnya beralih ke gaya hidup ramah lingkungan bersama BYD Atto 1.</p>
            </div>
        </div>

        {{-- DETAIL SECTION --}}
        <div class="bg-gray-50">
            <div class="mx-auto max-w-2xl px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8">
                <!-- Details section -->
                <section aria-labelledby="details-heading">
                    {{-- <div class="flex flex-col items-center text-center">
                        <h2 id="details-heading" class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Tampilan Cerah Berkat 
                            Desain Ocean Nan Estetik</h2>
                        <p class="mt-3 max-w-3xl text-lg text-gray-600">Anggota terbaru seri Ocean yang merevolusi mobilitas 
                            perkotaan dengan desain dinamis dan teknologi inovatif.</p>
                    </div> --}}

                    <div class="mt-8 grid grid-cols-1 gap-y-16 lg:grid-cols-2 lg:gap-x-8">
                        <div>
                            <img src="{{ asset('images/detail-car/atto1/6.jpg') }}"
                                alt="Drawstring top with elastic loop closure and textured interior padding."
                                class="aspect-[3/2] w-full rounded-lg object-cover transition-transform duration-300 hover:scale-105">
                            <h2 id="details-heading"
                                class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mt-4">
                                E-Platform 3.0</h2>
                            <p class="mt-3 text-base text-gray-500">BYD Atto 1 dirancang dengan standar keamanan tinggi, menghadirkan 
                                perlindungan menyeluruh lewat sistem 6-airbag dan fitur pengereman yang nyaman. Dengan struktur bodi yang 
                                kokoh dan responsif, mobil ini menawarkan stabilitas optimal untuk mendukung perjalanan yang aman dan tenang di berbagai kondisi jalan.\.</p>
                        </div>
                        <div>
                            <img src="{{ asset('images/detail-car/atto1/new-battery.jpg') }}"
                                alt="Front zipper pouch with included key ring."
                                class="aspect-[3/2] w-full rounded-lg object-cover transition-transform duration-300 hover:scale-105">
                            <h2 id="details-heading"
                                class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mt-4">Teknologi Baterai
                                Blade Berpaten Ultra-Aman</h2>
                            <p class="mt-3 text-base text-gray-500">Teknologi Blade Battery super aman dari BYD menyediakan daya tahan 
                                luar biasa dan pengisian daya yang efisien, dengan jarak tempuh hingga 380 km (NEDC) dan pengisian cepat DC.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    {{-- content baris 3 / beda bentuk --}}
    <div class="bg-white">
        {{-- <div aria-hidden="true" class="relative">
            <img src="{{ asset('images/detail-car/atto1/product-bottom.png') }}" alt="" class="h-96 w-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-50"></div>
        </div> --}}

        {{-- <div class="relative mx-auto -mt-12 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">
            <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">ATTO 1</h2>
                <p class="mt-4 text-xl text-gray-500">Dashboard dirancang ergonomis dengan touch screen yang mendukung 
                            Apple CarPlay & Android Auto, dilengkapi EPB dengan Auto Brake Hold dan instrumen digital 7-inci (dengan TPMS)..</p>
            </div>
        </div> --}}
        <hr>
        <div class="bg-gray-50 mx-auto max-w-2xl px-4 py-7 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8">
            {{-- <div class="mx-auto max-w-3xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Protect your device</h2>
                <p class="mt-4 text-gray-500">As a digital creative, your laptop or tablet is at the center of your work.
                    Keep your device safe with a fabric sleeve that matches in quality and looks.</p>
            </div> --}}
            {{-- baris ke 1 --}}
            <div class="mt-2 space-y-16">
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-0 xl:col-span-4">
                        <h3 class="text-lg font-medium text-gray-900">Kendali Cerdas di Ujung Jari</h3>
                        <p class="mt-2 text-base text-gray-500">Dashboard dirancang ergonomis dengan touch screen yang mendukung 
                            Apple CarPlay & Android Auto, dilengkapi EPB dengan Auto Brake Hold dan instrumen digital 7-inci (dengan TPMS).</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                        <img src="{{ asset('images/detail-car/atto1/interior-5.png') }}"
                            alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 2 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:mt-0 xl:col-span-4 xl:col-start-9">
                        <h3 class="text-lg font-medium text-gray-900">Tampilan Cerah Berkat Desain Ocean Nan Estetik</h3>
                        <p class="mt-2 text-base text-gray-500">Anggota terbaru seri Ocean yang merevolusi mobilitas perkotaan dengan desain 
                            dinamis dan teknologi inovatif.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-1 lg:row-start-1 xl:col-span-8">
                        <img src="{{ asset('images/detail-car/atto1/eksterior-depan-atto1.png') }}"
                            alt="Detail of zipper pull with tan leather and silver rivet."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 3 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-0 xl:col-span-4">
                        <h3 class="text-lg font-medium text-gray-900">Bawa Energi ke Mana pun Anda Pergi</h3>
                        <p class="mt-2 text-base text-gray-500">Dengan fitur Vehicle to Load hingga 2,2 kW, BYD Atto 1 siap jadi andalan 
                            saat Anda butuh daya di mana saja dan kapan saja.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                        <img src="{{ asset('images/detail-car/atto1/activity-2.png') }}"
                            alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
