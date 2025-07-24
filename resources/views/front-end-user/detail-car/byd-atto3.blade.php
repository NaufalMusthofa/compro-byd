@extends('layouts.app')

@section('title', 'Byd Atto3')

@section('content')
    {{-- DETAIL CONTENT --}}
    <div class="bg-white pt-2">
        <div aria-hidden="true" class="relative">
            <img src="{{ asset('images/detail-car/atto3/1.jpg') }}" alt="BYD Atto 3" class="w-full h-[16rem] sm:h-[32rem] md:h-[40rem] object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-800"></div>
        </div>

        <div class="relative mx-auto -mt-12 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">
            <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                <h2 class="relative -top-[11rem] sm:-top-[25rem] md:-top-[33rem] text-3xl font-bold tracking-tight text-white sm:text-5xl">BYD ATTO 3</h2>
                <p class="mt-4 text-xl text-gray-500">BYD Atto 3 dalam balutan warna Cosmos Black dengan trim D-pillar hitam
                    terbaru dan trim jendela hitam, memancarkan aura sporty yang super keren dan trendi. Pilihan warna lain:
                    Ski White, Boulder Grey, Forest Green dan Surf Blue</p>
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
                        <p class="mt-8 max-w-3xl text-lg text-gray-600">Dipimpin oleh Kepala Desainer Otomotif Wolfgang
                            Egger, tim desain kelas dunia mengintegrasikan inovasi dengan kualitas dan keandalan dalam
                            kreasi otomotif mereka. Lebih dari 200 desainer dari lebih dari 10 negara termasuk Italia,
                            Spanyol, Swiss, dan Jerman, desain BYD dieksekusi secara bersamaan di berbagai lokasi di seluruh
                            dunia.</p>
                    </div>

                    <div class="mt-16 grid grid-cols-1 gap-y-16 lg:grid-cols-2 lg:gap-x-8">
                        <div>
                            <img src="{{ asset('images/detail-car/atto3/2.jpg') }}"
                                alt="Drawstring top with elastic loop closure and textured interior padding."
                                class="aspect-[3/2] w-full rounded-lg object-cover transition-transform duration-300 hover:scale-105">
                            <h2 id="details-heading"
                                class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mt-4">
                                Roda Elegan</h2>
                            <p class="mt-8 text-base text-gray-500">BYD ATTO 3 ban yang berukuran 18 inci sebagai standar,
                                dengan aksesori merek yang mutakhirkan, sehingga kinerja kendaraan dan stabilitas berkendara
                                meningkat secara signifikan</p>
                        </div>
                        <div>
                            <img src="{{ asset('images/detail-car/atto3/3.jpg') }}"
                                alt="Front zipper pouch with included key ring."
                                class="aspect-[3/2] w-full rounded-lg object-cover transition-transform duration-300 hover:scale-105">
                            <h2 id="details-heading"
                                class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mt-4">Lampu Depan LED
                                Kombinasi Bulu Sayap Naga Kristal</h2>
                            <p class="mt-8 text-base text-gray-500">Terinspirasi dari bulu, desain lampu siang hari terlihat
                                elegan dan selaras dengan elemen kumis naga, mirip dengan naga yang terbang dengan gagah.
                                Teknologi pencahayaan unik ini memperlebar cahaya hingga 16,7 meter, jauh melebihi standar
                                sejenis, sehingga meningkatkan pengalaman berkendara di malam hari. Saat dibuka atau
                                ditutup, lampu depan dan belakang LED menunjukkan efek cahaya bernafas yang perlahan
                                menyala, seperti naga yang terbangun untuk pertama kalinya.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    {{-- content baris 3 / beda bentuk --}}
    <div class="bg-white">
        <div aria-hidden="true" class="relative">
            <img src="{{ asset('images/detail-car/atto3/4.jpg') }}" alt="" class="h-96 w-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-50"></div>
        </div>

        <div class="relative mx-auto -mt-12 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">
            <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                {{-- <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">BYD SEAL</h2> --}}
                <p class="mt-4 text-xl text-gray-500">Dalam hal desain interior, BYD ATTO 3 memperkenalkan interior baru
                    berwarna biru tua dan hitam untuk menciptakan suasana yang keren dan trendi, mencerminkan sikap muda.
                    Garis-garis lembut berirama di sepanjang bagian depan dan samping mobil menggambarkan serat otot manusia
                    secara humanis, memberikan sentuhan pribadi di tengah detail mekanis.</p>
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
                        <h3 class="text-lg font-medium text-gray-900">Kesenangan Berkendara</h3>
                        <p class="mt-2 text-base text-gray-500">Fungsi yang ramah pengguna dan interior yang menyenangkan
                            memberikan gaya yang unik dan khas. Gesit dan menyenangkan, BYD ATTO 3 menawarkan pengalaman
                            berkendara yang menarik. Konsol tengah yang mencolok dan rapi mencerminkan sikap hidup yang
                            positif dan dinamis. Dilengkapi dengan layar hover adaptif berputar 15,6 inci yang lebih besar
                            sebagai standar dan sistem jaringan kendaraan canggih, BYD ATTO 3 Facelift membuat operasi
                            terpadu antara informasi berkendara dan fungsi hiburan menjadi lebih mudah.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                        <img src="{{ asset('images/detail-car/atto3/4-1.jpg') }}"
                            alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 2 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:mt-0 xl:col-span-4 xl:col-start-9">
                        <h3 class="text-lg font-medium text-gray-900">Pegangan Pintu Gaya Cengkeraman</h3>
                        <p class="mt-2 text-base text-gray-500">Kombinasi sempurna antara estetika, teknologi, dan ergonomi.
                            Bentuknya terinspirasi oleh perangkat kekuatan genggaman, sangat terintegrasi dengan speaker dan
                            lampu ambient, menghadirkan nuansa teknologi. Aksi pembukaan pintu disesuaikan dengan ergonomi,
                            membuatnya mudah dan nyaman untuk membuka pintu. Menciptakan suasana berkendara yang maksimal,
                            menjadikan setiap perjalanan sebagai petualangan yang luar biasa.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-1 lg:row-start-1 xl:col-span-8">
                        <img src="{{ asset('images/detail-car/atto3/4-2.jpg') }}"
                            alt="Detail of zipper pull with tan leather and silver rivet."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 3 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-0 xl:col-span-4">
                        <h3 class="text-lg font-medium text-gray-900">Mainkan 'Gitar' Anda</h3>
                        <p class="mt-2 text-base text-gray-500">Desain unik trim pintu terinspirasi oleh suasana musik saat
                            berolahraga, dengan ruang penyimpanan yang lebih fleksibel dan detail interior yang lebih halus.
                        </p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                        <img src="{{ asset('images/detail-car/atto3/4-3.jpg') }}"
                            alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 4 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:mt-0 xl:col-span-4 xl:col-start-9">
                        <h3 class="text-lg font-medium text-gray-900">Charger nirkabel untuk ponsel</h3>
                        <p class="mt-2 text-base text-gray-500">Praktis, cepat, pintar, dan berguna.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-1 lg:row-start-1 xl:col-span-8">
                        <img src="{{ asset('images/detail-car/atto3/4-4.jpg') }}"
                            alt="Detail of zipper pull with tan leather and silver rivet."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 5 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-0 xl:col-span-4">
                        <h3 class="text-lg font-medium text-gray-900">Jendela atap anti-pinch panoramik berlapis ganda</h3>
                        <p class="mt-2 text-base text-gray-500">Sunblind dan kaca memberikan isolasi suara dan panas ganda;
                            kontrol suara cerdas, anti-pinch, memberikan kenyamanan dan ketenangan.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                        <img src="{{ asset('images/detail-car/atto3/4-5.jpg') }}"
                            alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 6 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:mt-0 xl:col-span-4 xl:col-start-9">
                        <h3 class="text-lg font-medium text-gray-900">Stasiun daya mobile VTOL</h3>
                        <p class="mt-2 text-base text-gray-500">Fungsi stasiun daya mobile VTOL memungkinkan kendaraan
                            diubah menjadi bank daya mobile super, mendukung daya hingga 3,3 kW, yang dapat memenuhi
                            kebutuhan sebagian besar peralatan listrik berdaya tinggi, memasak di luar ruangan, dan
                            menikmati pengalaman mengemudi mandiri yang nyaman baru.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-1 lg:row-start-1 xl:col-span-8">
                        <img src="{{ asset('images/detail-car/atto3/4-6.jpg') }}"
                            alt="Detail of zipper pull with tan leather and silver rivet."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 7 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-0 xl:col-span-4">
                        <h3 class="text-lg font-medium text-gray-900">Keamanan</h3>
                        <p class="mt-2 text-base text-gray-500">BYD ATTO 3 dilengkapi dengan 7 airbag. Sistem perlindungan
                            SRS airbag all-round meliputi: airbag depan, airbag samping, airbag tirai samping, dan airbag
                            sisi jauh untuk menjaga setiap sudut.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-6 lg:row-start-1 xl:col-span-8 xl:col-start-5">
                        <img src="{{ asset('images/detail-car/atto3/4-7.jpg') }}"
                            alt="White canvas laptop sleeve with gray felt interior, silver zipper, and tan leather zipper pull."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
                {{-- baris ke 8 --}}
                <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-8">
                    <div class="mt-6 lg:col-span-5 lg:col-start-8 lg:row-start-1 lg:mt-0 xl:col-span-4 xl:col-start-9">
                        <h3 class="text-lg font-medium text-gray-900">Bagasi Luas</h3>
                        <p class="mt-2 text-base text-gray-500">Isi hidup Anda penuh dengan kompartemen penyimpanan besar
                            yang dilengkapi dengan ruang bagasi tersembunyi tambahan. Dengan meletakkan barang-barang Anda
                            di berbagai lapisan, Anda dapat memanfaatkan ruang secara maksimal.</p>
                    </div>
                    <div class="flex-auto lg:col-span-7 lg:col-start-1 lg:row-start-1 xl:col-span-8">
                        <img src="{{ asset('images/detail-car/atto3/4-8.jpg') }}"
                            alt="Detail of zipper pull with tan leather and silver rivet."
                            class="aspect-[5/2] w-full rounded-lg bg-gray-100 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
