@extends('layouts.app')

@section('title', 'Byd M6')

@section('content')
    {{-- DETAIL CONTENT --}}
    <div class="bg-white pt-2">
        <div aria-hidden="true" class="relative">
            <img src="{{ asset('images/detail-car/m6/1.jpg') }}" alt="BYD M6" class="w-full h-[16rem] sm:h-[32rem] md:h-[40rem] object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-600"></div>
        </div>

        <div class="relative mx-auto -mt-12 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">
            <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                <h2 class="relative -top-[11rem] sm:-top-[25rem] md:-top-[33rem] text-3xl font-bold tracking-tight text-white sm:text-5xl ">BYD M6</h2>
                <p class="mt-8 text-xl text-gray-500">Desain depan yang aerodinamis dan ramping mengoptimalkan aliran udara
                    sekaligus mencerminkan kesederhanaan dan keanggunan estetika desain generasi baru BYD dengan perhatian
                    terhadap detail yang teliti</p>
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
                            <img src="{{ asset('images/detail-car/m6/2.jpg') }}"
                                alt="Drawstring top with elastic loop closure and textured interior padding."
                                class="aspect-[3/2] w-full rounded-lg object-cover transition-transform duration-300 hover:scale-105">
                            <h2 id="details-heading"
                                class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mt-4">
                                Stasiun Daya VtoL</h2>
                            <p class="mt-8 text-base text-gray-500">Untuk memenuhi kebutuhan dasar hidup dan hiburan
                                pelanggan RV, setiap soket dilengkapi dengan perlindungan terhadap kelebihan beban untuk
                                mencegah terjadinya situasi berbahaya seperti korsleting atau kebakaran.</p>
                        </div>
                        <div>
                            <img src="{{ asset('images/detail-car/m6/3.jpg') }}"
                                alt="Front zipper pouch with included key ring."
                                class="aspect-[3/2] w-full rounded-lg object-cover transition-transform duration-300 hover:scale-105">
                            <h2 id="details-heading"
                                class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mt-4">Kokpit Teknologi
                                Cerdas</h2>
                            <p class="mt-8 text-base text-gray-500">Menghadirkan desain kokpit yang luar biasa, BYD M6
                                memadukan keanggunan modern dengan fungsionalitas cerdas. Mengantarkan Anda ke dimensi
                                perjalanan baru yang penuh kecerdasan dan inovasi, menciptakan pengalaman berkendara yang
                                tidak hanya fungsional tetapi juga sangat estetis.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    {{-- content baris 3 / beda bentuk --}}
    <div class="bg-white">
        <div aria-hidden="true" class="relative">
            <img src="{{ asset('images/detail-car/m6/4.jpg') }}" alt="" class="h-96 w-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-50"></div>
        </div>

        <div class="relative mx-auto -mt-12 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">
            <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                {{-- <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">BYD SEAL</h2> --}}
                <p class="mt-4 text-xl text-gray-500">Teknologi Baterai Blade Berpaten Ultra-Aman</p>
            </div>
        </div>

        <div class="bg-gray-50 mx-auto max-w-2xl px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8">
            {{-- <div class="mx-auto max-w-3xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Protect your device</h2>
                <p class="mt-4 text-gray-500">As a digital creative, your laptop or tablet is at the center of your work.
                    Keep your device safe with a fabric sleeve that matches in quality and looks.</p>
            </div> --}}

            <div class="mt-16 space-y-16">
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-0 xl:col-span-4">
                        <h3 class="text-lg font-medium text-gray-900">MPEV untuk Keluarga</h3>
                        <p class="mt-2 text-base text-gray-500">Dirancang khusus untuk keluarga modern, tersedia pilihan
                            tempat duduk luas untuk 6 atau 7 orang.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                        <img src="{{ asset('images/detail-car/m6/4-1.jpg') }}"
                            alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 2 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:mt-0 xl:col-span-4 xl:col-start-9">
                        <h3 class="text-lg font-medium text-gray-900">Kursi Nyaman dan Ergonomis</h3>
                        <p class="mt-2 text-base text-gray-500">Kursi yang ergonomis memberikan kenyamanan maksimal,
                            mengikuti lekuk tubuh manusia. Kursi depan memiliki bantalan yang lebih lebar dan panjang untuk
                            pengalaman berkendara yang lebih nyaman dan mendukung.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-1 lg:row-start-1 xl:col-span-8">
                        <img src="{{ asset('images/detail-car/m6/4-2.jpg') }}"
                            alt="Detail of zipper pull with tan leather and silver rivet."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 3 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-0 xl:col-span-4">
                        <h3 class="text-lg font-medium text-gray-900">Atap Mobil Panoramik</h3>
                        <p class="mt-2 text-base text-gray-500">Nikmati keindahan alam dengan atap mobil panoramik yang
                            luas, mengubah pengalaman berkendara Anda menjadi seperti berada di udara terbuka.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                        <img src="{{ asset('images/detail-car/m6/4-3.jpg') }}"
                            alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 4 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:mt-0 xl:col-span-4 xl:col-start-9">
                        <h3 class="text-lg font-medium text-gray-900">Area Kargo Luas</h3>
                        <p class="mt-2 text-base text-gray-500">Ubah kendaraan Anda menjadi tempat penyimpanan yang luas
                            dengan kursi yang bisa dilipat rata, menciptakan area muatan yang benar-benar datar.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-1 lg:row-start-1 xl:col-span-8">
                        <img src="{{ asset('images/detail-car/m6/4-4.jpg') }}"
                            alt="Detail of zipper pull with tan leather and silver rivet."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 5 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-0 xl:col-span-4">
                        <h3 class="text-lg font-medium text-gray-900">Pengisian Daya Cepat</h3>
                        <p class="mt-2 text-base text-gray-500">BYD M6 dapat mengisi daya dalam waktu hanya 30 menit, berkat
                            kapasitas pengisian daya DC 115 kW. Proses cepat ini memungkinkan Anda mengisi daya dari 30%
                            hingga 80%, memberikan tambahan daya yang cukup dengan mudah dan cepat.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                        <img src="{{ asset('images/detail-car/m6/4-5.jpg') }}"
                            alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 6 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:mt-0 xl:col-span-4 xl:col-start-9">
                        <h3 class="text-lg font-medium text-gray-900">Kokpit Cerdas BYD M6</h3>
                        <p class="mt-2 text-base text-gray-500">Konsol tengah memiliki tuas perpindahan gigi berbentuk bola
                            yang modern dan elegan, menambahkan aliran yang harmonis dari depan ke belakang dan memberikan
                            sentuhan keindahan. Layar putar berukuran 12,8 inci membuka perjalanan baru yang cerdas.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-1 lg:row-start-1 xl:col-span-8">
                        <img src="{{ asset('images/detail-car/m6/4-6.jpg') }}"
                            alt="Detail of zipper pull with tan leather and silver rivet."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
