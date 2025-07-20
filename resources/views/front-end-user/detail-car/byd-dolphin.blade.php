@extends('layouts.app')

@section('title', 'Byd Dolphin')

@section('content')
    {{-- DETAIL CONTENT --}}
    <div class="bg-white pt-16">
        <div aria-hidden="true" class="relative">
            <img src="{{ asset('images/detail-car/dolphin/1.jpg') }}" alt="" class="h-96 w-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-600"></div>
        </div>

        <div class="relative mx-auto -mt-12 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">
            <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-5xl">BYD DOLPHIN</h2>
                <p class="mt-4 text-xl text-gray-500">BYD DOLPHIN mengadopsi konsep desain baru 'Estetika Laut'. Garis bodi
                    yang canggih, dipadukan dengan garis-garis tajam dan kontur yang mengalir, memproyeksikan desain yang
                    percaya diri dan elegan yang ditopang oleh daya listrik bertenaga. Nikmati kebebasan dengan BYD DOLPHIN.
                </p>
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
                            <img src="{{ asset('images/detail-car/dolphin/2.jpg') }}"
                                alt="Drawstring top with elastic loop closure and textured interior padding."
                                class="aspect-[3/2] w-full rounded-lg object-cover transition-transform duration-300 hover:scale-105">
                            <h2 id="details-heading"
                                class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mt-4">
                                Pencahayaan</h2>
                            <p class="mt-8 text-base text-gray-500">Desain lampu depan dan belakang terinspirasi oleh
                                gerakan dinamis lumba-lumba yang melompat keluar dari lautan. Lampu depan LED yang
                                terus-menerus melintang di gril tengah dan desain lampu belakang yang dinamis mengungkapkan
                                nuansa gaya dan teknologi avant-garde.</p>
                        </div>
                        <div>
                            <img src="{{ asset('images/detail-car/dolphin/3.jpg') }}"
                                alt="Front zipper pouch with included key ring."
                                class="aspect-[3/2] w-full rounded-lg object-cover transition-transform duration-300 hover:scale-105">
                            <h2 id="details-heading"
                                class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mt-4">Konsol Tengah
                                Mengambang</h2>
                            <p class="mt-8 text-base text-gray-500">Desain konsol tengah yang futuristik menciptakan
                                lingkungan berkendara yang modern dan dinamis dengan detail trim logam yang melintang di
                                seluruh dashboard, membentuk permukaan melengkung yang indah dan minimalis.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    {{-- content baris 3 / beda bentuk --}}
    <div class="bg-white">
        <div aria-hidden="true" class="relative">
            <img src="{{ asset('images/detail-car/dolphin/4.jpg') }}" alt="" class="h-96 w-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-50"></div>
        </div>

        <div class="relative mx-auto -mt-12 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">
            <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                {{-- <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">BYD SEAL</h2> --}}
                <p class="mt-4 text-xl text-gray-500">BYD DOLPHIN dilengkapi dengan platform baru BYD e-Platform 3.0 yang
                    dirancang khusus untuk kendaraan listrik murni. Memaksimalkan keunggulan kecerdasan, efisiensi,
                    keamanan, dan estetika, e-Platform 3.0 bertujuan untuk meningkatkan kinerja kendaraan energi baru (NEV)
                    dalam hal keamanan dan jangkauan mengemudi pada suhu rendah serta memperbaiki pengalaman mengemudi
                    cerdas, guna membangun kendaraan listrik cerdas baru yang lebih efisien dan aman.</p>
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
                        <h3 class="text-lg font-medium text-gray-900">Layar Utama</h3>
                        <p class="mt-2 text-base text-gray-500">Layar utama berfungsi sebagai pusat alam semesta yang
                            terhubung, mengintegrasikan fungsi suara cerdas dan mobil yang terhubung untuk memungkinkan
                            pengguna berkendara tanpa gangguan sambil menambahkan hiburan cerdas ke dalam pengalaman
                            berkendara.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                        <img src="{{ asset('images/detail-car/dolphin/4-1.jpg') }}"
                            alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 2 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:mt-0 xl:col-span-4 xl:col-start-9">
                        <h3 class="text-lg font-medium text-gray-900">Kursi Kulit Vegan Berkelanjutan</h3>
                        <p class="mt-2 text-base text-gray-500">Kursi olahraga terpadu menawarkan kenyamanan jarak jauh
                            serta dukungan lateral yang kuat saat menikung. Kursi-kursi ini terbuat dari kulit vegan
                            berkelanjutan, menawarkan solusi ramah lingkungan tanpa mengorbankan gaya. Dengan penyesuaian
                            multi-arah, Anda dapat menyesuaikan kursi Anda sesuai kebutuhan.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-1 lg:row-start-1 xl:col-span-8">
                        <img src="{{ asset('images/detail-car/dolphin/4-2.jpg') }}"
                            alt="Detail of zipper pull with tan leather and silver rivet."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 3 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-0 xl:col-span-4">
                        <h3 class="text-lg font-medium text-gray-900">Ruang Penumpang Belakang yang Nyaman</h3>
                        <p class="mt-2 text-base text-gray-500">Berkat platform e 3.0, overhang depan dan belakang yang
                            pendek serta wheelbase yang panjang memberikan tampilan mobil yang lebih luas, dan kompartemen
                            penumpang belakang memiliki lantai datar, memberikan lebih banyak kenyamanan dan ruang bagi
                            penumpang kursi tengah.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                        <img src="{{ asset('images/detail-car/dolphin/4-3.jpg') }}"
                            alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 4 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:mt-0 xl:col-span-4 xl:col-start-9">
                        <h3 class="text-lg font-medium text-gray-900">Area Penyimpanan Luas</h3>
                        <p class="mt-2 text-base text-gray-500">Ada banyak area penyimpanan di seluruh kabin, termasuk
                            kantong pintu besar, kompartemen penyimpanan tertutup di tengah, dan baki penyimpanan berlubang
                            di bawah layar, yang dapat memenuhi kebutuhan Anda untuk perjalanan sehari-hari.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-1 lg:row-start-1 xl:col-span-8">
                        <img src="{{ asset('images/detail-car/dolphin/4-4.jpg') }}"
                            alt="Detail of zipper pull with tan leather and silver rivet."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
