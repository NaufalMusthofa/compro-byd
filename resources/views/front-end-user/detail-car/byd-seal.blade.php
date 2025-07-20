@extends('layouts.app')

@section('title', 'DETAIL BYD SEAL')

@section('content')
    {{-- DETAIL CONTENT --}}
    <div class="bg-white">
        <div aria-hidden="true" class="relative">
            <img src="{{ asset('images/detail-car/seal/2.webp') }}" alt="" class="h-96 w-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-50"></div>
        </div>

        <div class="relative mx-auto -mt-12 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">
            <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">BYD SEAL</h2>
                <p class="mt-4 text-xl text-gray-500">BYD SEAL dibangun berdasarkan konsep desain "estetika laut". Proporsi
                    bodi yang eksklusif berasal dari perburuan sampai akhir akan keindahan. Mencari inspirasi antara gerakan
                    dan ketenangan laut serta mewujudkan keanggunan dan keindahan unik BYD SEAL.</p>
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
                            <img src="{{ asset('images/detail-car/seal/3.jpg') }}"
                                alt="Drawstring top with elastic loop closure and textured interior padding."
                                class="aspect-[3/2] w-full rounded-lg object-cover transition-transform duration-300 hover:scale-105">
                            <h2 id="details-heading"
                                class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mt-4">
                                E-Platform 3.0</h2>
                            <p class="mt-8 text-base text-gray-500">BYD SEAL dibangun dengan platform BYD e-platform 3.0,
                                dirancang untuk generasi berikutnya dari mobil listrik pintar yang menawarkan empat
                                keunggulan utama: kecerdasan, efisiensi, keamanan, dan estetika. Ini tidak hanya lebih
                                mengintegrasikan dan standarisasi komponen inti, tetapi juga membangun struktur tubuh baru,
                                arsitektur digital dan elektrik, serta sistem operasi kendaraan BYD yang diperbarui.</p>
                        </div>
                        <div>
                            <img src="{{ asset('images/detail-car/seal/4.jpg') }}"
                                alt="Front zipper pouch with included key ring."
                                class="aspect-[3/2] w-full rounded-lg object-cover transition-transform duration-300 hover:scale-105">
                            <h2 id="details-heading"
                                class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mt-4">Teknologi Baterai
                                Blade Berpaten Ultra-Aman</h2>
                            <p class="mt-8 text-base text-gray-500">Selama menjalani uji penetrasi paku, Baterai Blade tidak
                                mengeluarkan asap atau api setelah ditembus, dan suhunya hanya mencapai 30 hingga 60°C.
                                Sel-sel Baterai Blade juga lulus uji kondisi ekstrem lainnya, seperti diremukkan, ditekuk,
                                dipanaskan dalam tungku hingga 300°C, dan diisi daya lebih dari 260%. Tidak satu pun dari
                                uji ini menyebabkan kebakaran atau ledakan.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    {{-- content baris 3 / beda bentuk --}}
    <div class="bg-white">
        <div aria-hidden="true" class="relative">
            <img src="{{ asset('images/detail-car/seal/5.jpg') }}" alt="" class="h-96 w-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-50"></div>
        </div>

        <div class="relative mx-auto -mt-12 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">
            <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                {{-- <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">BYD SEAL</h2> --}}
                <p class="mt-4 text-xl text-gray-500">Postur yang mempesona mencuri perhatian ketika mobil berada di depan.
                    Lampu belakang berbentuk kisi seperti tetesan air yang jatuh ke dalam air, menciptakan lapisan cahaya
                    berkilauan. Bersama dengan sumber cahaya tiga dimensi dan gradasi penuh, kilatan ini mengungkap
                    keindahan yang megah.</p>
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
                        <h3 class="text-lg font-medium text-gray-900">Layar sentuh yang dapat diputar</h3>
                        <p class="mt-2 text-base text-gray-500">Konsol tengah dilengkapi dengan layar besar berukuran 15,6
                            inci yang dapat diputar, sehingga dapat diputar sesuai dengan konten halaman, memungkinkan
                            pengguna untuk menikmati kehidupan cerdas dan menarik.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                        <img src="{{ asset('images/detail-car/seal/5-1.jpg') }}"
                            alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 2 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:mt-0 xl:col-span-4 xl:col-start-9">
                        <h3 class="text-lg font-medium text-gray-900">W-HUD tampilan cerdas di hadapan</h3>
                        <p class="mt-2 text-base text-gray-500">Dengan pengemudi sebagai pusatnya, semua informasi mengemudi
                            dapat dilihat dengan jelas tanpa perlu mengalihkan pandangan. Konten tampilan juga dapat
                            disesuaikan untuk memberikan nuansa teknologi.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-1 lg:row-start-1 xl:col-span-8">
                        <img src="{{ asset('images/detail-car/seal/5-2.jpg') }}"
                            alt="Detail of zipper pull with tan leather and silver rivet."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 3 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-0 xl:col-span-4">
                        <h3 class="text-lg font-medium text-gray-900">Sunroof Panoramik</h3>
                        <p class="mt-2 text-base text-gray-500">Nikmati keindahan alam dengan sunroof panoramik. Rasakan
                            kebebasan langit terbuka, dan nikmati cahaya alami yang mengisi interior kendaraan Anda.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                        <img src="{{ asset('images/detail-car/seal/5-3.jpg') }}"
                            alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 4 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:mt-0 xl:col-span-4 xl:col-start-9">
                        <h3 class="text-lg font-medium text-gray-900">Teater musikal dalam mobil</h3>
                        <p class="mt-2 text-base text-gray-500">Rasakan pengalaman teater musikal yang benar-benar memikat
                            dengan sistem suara berkualitas tinggi. Sistem Suara Premium HIFI Dynaudio kami menyediakan
                            suara surround tiga dimensi, menciptakan pesta pendengaran yang memikat.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-1 lg:row-start-1 xl:col-span-8">
                        <img src="{{ asset('images/detail-car/seal/5-4.jpg') }}"
                            alt="Detail of zipper pull with tan leather and silver rivet."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 5 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-0 xl:col-span-4">
                        <h3 class="text-lg font-medium text-gray-900">Kursi Sport Terintegrasi</h3>
                        <p class="mt-2 text-base text-gray-500">Kursi sport terintegrasi ini dirancang dengan prinsip
                            ergonomi untuk memaksimalkan kenyamanan. Kursi ini dapat disesuaikan secara elektrik sesuai
                            dengan kebutuhan dan preferensi Anda untuk pengalaman berkendara yang lebih menyenangkan.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                        <img src="{{ asset('images/detail-car/seal/5-5.jpg') }}"
                            alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 6 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:mt-0 xl:col-span-4 xl:col-start-9">
                        <h3 class="text-lg font-medium text-gray-900">Penyimpanan Pintar</h3>
                        <p class="mt-2 text-base text-gray-500">BYD SEAL tidak hanya dilengkapi dengan bagasi belakang luas
                            berkapasitas 400L, tetapi juga menawarkan tambahan ruang penyimpanan 53L di bagasi depan dengan
                            penutup. Ini memberikan solusi cerdas dan praktis untuk semua kebutuhan penyimpanan perjalanan
                            Anda.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-1 lg:row-start-1 xl:col-span-8">
                        <img src="{{ asset('images/detail-car/seal/5-6.jpg') }}"
                            alt="Detail of zipper pull with tan leather and silver rivet."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
