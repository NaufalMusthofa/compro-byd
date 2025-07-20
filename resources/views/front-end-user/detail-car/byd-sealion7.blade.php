@extends('layouts.app')

@section('title', 'Byd Sealion7')

@section('content')
    {{-- DETAIL CONTENT --}}
    <div class="bg-white pt-16">
        <div aria-hidden="true" class="relative">
            <img src="{{ asset('images/detail-car/sealion7/1.webp') }}" alt="" class="h-96 w-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-800"></div>
        </div>

        <div class="relative mx-auto -mt-12 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">
            <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-5xl">BYD SEALION 7</h2>
                <p class="mt-4 text-xl text-gray-500">Garis-garisnya yang ramping dan mengalir serta profil aerodinamis
                    memberikan SEALION 7 tampilan sporty dan futuristik yang menarik perhatian ke mana pun Anda pergi.</p>
            </div>
        </div>

        {{-- DETAIL SECTION --}}
        <div class="bg-gray-50">
            <div class="mx-auto max-w-2xl px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8">
                <!-- Details section -->
                <section aria-labelledby="details-heading">
                    <div class="flex flex-col items-center text-center">
                        <h2 id="details-heading" class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Tim
                            Desainer Kelas Internasional</h2>
                        <p class="mt-3 max-w-3xl text-lg text-gray-600">Dipimpin oleh Kepala Desainer Otomotif Wolfgang
                            Egger, tim desain kelas dunia mengintegrasikan inovasi dengan kualitas dan keandalan dalam
                            kreasi otomotif mereka. Lebih dari 200 desainer dari lebih dari 10 negara termasuk Italia,
                            Spanyol, Swiss, dan Jerman, desain BYD dieksekusi secara bersamaan di berbagai lokasi di seluruh
                            dunia.</p>
                    </div>

                    <div class="mt-16 grid grid-cols-1 gap-y-16 lg:grid-cols-2 lg:gap-x-8">
                        <div>
                            <img src="{{ asset('images/detail-car/sealion7/2.webp') }}"
                                alt="Drawstring top with elastic loop closure and textured interior padding."
                                class="aspect-[3/2] w-full rounded-lg object-cover transition-transform duration-300 hover:scale-105">
                            <h2 id="details-heading"
                                class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mt-4">
                                Ocean X Face</h2>
                            <p class="mt-8 text-base text-gray-500">Estetika laut dengan sentuhan dinamis</p>
                        </div>
                        <div>
                            <img src="{{ asset('images/detail-car/sealion7/3.webp') }}"
                                alt="Front zipper pouch with included key ring."
                                class="aspect-[3/2] w-full rounded-lg object-cover transition-transform duration-300 hover:scale-105">
                            <h2 id="details-heading"
                                class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mt-4">Lampu Depan U-LED
                                Ganda</h2>
                            <p class="mt-8 text-base text-gray-500">Lampu depan mengambang berbentuk U ganda yang
                                terinspirasi dari laut
                            </p>
                        </div>
                    </div>

                    {{-- paragraf ke 3 --}}
                    <div class="bg-gray-50 mx-auto max-w-2xl px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8">
                        {{-- <div class="mx-auto max-w-3xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Protect your device</h2>
                <p class="mt-4 text-gray-500">As a digital creative, your laptop or tablet is at the center of your work.
                    Keep your device safe with a fabric sleeve that matches in quality and looks.</p>
            </div> --}}

                        <div class="mt-16 space-y-16">
                            {{-- baris ke 1 --}}
                            <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                                <div class="mt-6 lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-0 xl:col-span-4">
                                    <h3 class="text-lg font-medium text-gray-900">Velg Alloy 20 Inci</h3>
                                    <p class="mt-2 text-base text-gray-500">Velg 20 inci yang menonjolkan kepribadian dan
                                        gaya unik (Khusus untuk varian Performance)</p>
                                </div>
                                <div
                                    class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                                    <img src="{{ asset('images/detail-car/sealion7/3-1.webp') }}"
                                        alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                                        class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                                </div>
                            </div>
                            {{-- baris ke 2 --}}
                            <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                                <div
                                    class="mt-6 lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:mt-0 xl:col-span-4 xl:col-start-9">
                                    <h3 class="text-lg font-medium text-gray-900">Gagang Pintu Elektrik Tersembunyi</h3>
                                    <p class="mt-2 text-base text-gray-500">Gagang pintu yang dapat ditarik secara
                                        elektronik, membuat pintu lebih aerodinamis dan tahan angin</p>
                                </div>
                                <div class="flex-auto lg:col-span-7 lg:col-start-1 lg:row-start-1 xl:col-span-8">
                                    <img src="{{ asset('images/detail-car/sealion7/3-2.webp') }}"
                                        alt="Detail of zipper pull with tan leather and silver rivet."
                                        class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                                </div>
                            </div>
                            {{-- baris ke 3 --}}
                            <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                                <div class="mt-6 lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-0 xl:col-span-4">
                                    <h3 class="text-lg font-medium text-gray-900">Rem Cakram Berwarna</h3>
                                    <p class="mt-2 text-base text-gray-500">Kaliper rem berwarna merah yang menciptakan
                                        kontras warna mencolok. (Khusus untuk varian Performance)</p>
                                </div>
                                <div
                                    class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                                    <img src="{{ asset('images/detail-car/sealion7/3-3.webp') }}"
                                        alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                                        class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                                </div>
                            </div>
                            {{-- baris ke 4 --}}
                            <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                                <div
                                    class="mt-6 lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:mt-0 xl:col-span-4 xl:col-start-9">
                                    <h3 class="text-lg font-medium text-gray-900">Pintu Bagasi Elektrik</h3>
                                    <p class="mt-2 text-base text-gray-500">Pintu bagasi elektrik yang dapat dibuka hanya
                                        dengan gerakan kaki</p>
                                </div>
                                <div class="flex-auto lg:col-span-7 lg:col-start-1 lg:row-start-1 xl:col-span-8">
                                    <img src="{{ asset('images/detail-car/sealion7/3-4.webp') }}"
                                        alt="Detail of zipper pull with tan leather and silver rivet."
                                        class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                                </div>
                            </div>
                            {{-- baris ke 5 --}}
                            <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                                <div class="mt-6 lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-0 xl:col-span-4">
                                    <h3 class="text-lg font-medium text-gray-900">Lampu Belakang</h3>
                                    <p class="mt-2 text-base text-gray-500">Lampu belakang penuh yang terinspirasi oleh
                                        ombak yang menerjang</p>
                                </div>
                                <div
                                    class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                                    <img src="{{ asset('images/detail-car/sealion7/3-5.webp') }}"
                                        alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                                        class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    {{-- content paragraf 3 / beda bentuk --}}
    <div class="bg-white">
        <div aria-hidden="true" class="relative">
            <img src="{{ asset('images/detail-car/sealion7/4.webp') }}" alt="" class="h-96 w-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-50"></div>
        </div>

        <div class="relative mx-auto -mt-12 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">
            <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                {{-- <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">BYD SEAL</h2> --}}
                <p class="mt-4 text-xl text-gray-500">Interior BYD SEALION 7 dirancang dengan sentuhan dinamis, keseimbangan
                    sempurna, dan ruang lapang, menciptakan pengalaman berkendara yang menyatu dan imersif.</p>
            </div>
        </div>

        <div class="bg-gray-50 mx-auto max-w-2xl px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8">
            {{-- <div class="mx-auto max-w-3xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Protect your device</h2>
                <p class="mt-4 text-gray-500">As a digital creative, your laptop or tablet is at the center of your work.
                    Keep your device safe with a fabric sleeve that matches in quality and looks.</p>
            </div> --}}

            <div class="mt-16 space-y-16">
                {{-- baris ke 1 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-0 xl:col-span-4">
                        <h3 class="text-lg font-medium text-gray-900">Interior Baris Pertama (Ergonomis & Sporty)</h3>
                        <p class="mt-2 text-base text-gray-500">Didesain dengan presisi untuk mengurangi kebisingan,
                            getaran, dan ketidaknyamanan</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                        <img src="{{ asset('images/detail-car/sealion7/4-1.webp') }}"
                            alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 2 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:mt-0 xl:col-span-4 xl:col-start-9">
                        <h3 class="text-lg font-medium text-gray-900">Interior Baris Kedua (Lapang)</h3>
                        <p class="mt-2 text-base text-gray-500">Jok mewah dengan dekorasi quilting pola ombak dan jahitan
                            ganda</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-1 lg:row-start-1 xl:col-span-8">
                        <img src="{{ asset('images/detail-car/sealion7/4-2.webp') }}"
                            alt="Detail of zipper pull with tan leather and silver rivet."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 3 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-0 xl:col-span-4">
                        <h3 class="text-lg font-medium text-gray-900">Bagasi Belakang (Dilipat & Tidak)</h3>
                        <p class="mt-2 text-base text-gray-500">500 liter ruang di belakang, dapat diperluas hingga 1.769
                            liter dengan kursi belakang dilipat</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                        <img src="{{ asset('images/detail-car/sealion7/4-3.webp') }}"
                            alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 4 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:mt-0 xl:col-span-4 xl:col-start-9">
                        <h3 class="text-lg font-medium text-gray-900">Pengisi Daya Nirkabel 50W</h3>
                        <p class="mt-2 text-base text-gray-500">Pengisi daya nirkabel dengan sistem pendingin berventilasi
                            agar ponsel tetap terisi daya dan tidak kepanasan</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-1 lg:row-start-1 xl:col-span-8">
                        <img src="{{ asset('images/detail-car/sealion7/4-4.webp') }}"
                            alt="Detail of zipper pull with tan leather and silver rivet."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 5 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-0 xl:col-span-4">
                        <h3 class="text-lg font-medium text-gray-900">Bagasi Depan</h3>
                        <p class="mt-2 text-base text-gray-500">58 liter ruang penyimpanan di bagian depan</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                        <img src="{{ asset('images/detail-car/sealion7/4-5.webp') }}"
                            alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 6 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:mt-0 xl:col-span-4 xl:col-start-9">
                        <h3 class="text-lg font-medium text-gray-900">Atap Kaca Panoramik dengan Tirai Elektrik</h3>
                        <p class="mt-2 text-base text-gray-500">Atap kaca panoramik yang mencerahkan kabin</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-1 lg:row-start-1 xl:col-span-8">
                        <img src="{{ asset('images/detail-car/m6/4-6.jpg') }}"
                            alt="Detail of zipper pull with tan leather and silver rivet."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 7 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-0 xl:col-span-4">
                        <h3 class="text-lg font-medium text-gray-900">Lampu Ambien Multicolor</h3>
                        <p class="mt-2 text-base text-gray-500">128 pilihan warna lampu ambien yang dapat disesuaikan dan
                            tersinkronisasi dengan sistem Dynaudio</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                        <img src="{{ asset('images/detail-car/sealion7/4-7.webp') }}"
                            alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- akhir --}}
    <main class="relative isolate min-h-full">
        <!-- Background image -->
        <img src="{{ asset('images/detail-car/sealion7/5.jpg') }}" alt=""
            class="absolute inset-0 z-0 size-full object-cover object-top">

        <!-- Dark overlay di atas gambar -->
        <div class="absolute inset-0 z-10 bg-black/70"></div>

        <!-- Konten teks di atas semuanya -->
        <div class="relative z-20 mx-auto max-w-7xl px-6 py-32 text-center sm:py-40 lg:px-8">
            <h1 class="mt-4 text-balance text-5xl font-semibold tracking-tight text-white sm:text-7xl">
                Bebaskan Ambisi dengan Performa Berkendara Maksimal
            </h1>
            <p class="mt-6 text-pretty text-lg font-medium text-white/70 sm:text-xl/8">
                BYD SEALION 7
            </p>
        </div>
    </main>



@endsection
