
    {{-- Footer --}}
    <footer class="bg-gray-900 text-sm text-gray-400">
        <div class="max-w-7xl mx-auto px-6 pt-16 pb-10 sm:pt-24 lg:px-8 lg:pt-32">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <!-- Logo dan Deskripsi -->
                <div class="space-y-6">
                    <img src="{{ asset('images/logo-brand/logo-byd.png') }}" alt="BYD Jabodetabek"
                        class="h-10 filter invert">
                    <p class="text-gray-300">
                        BYD Indonesia – Cabang Jabodetabek melayani kebutuhan kendaraan listrik untuk masa depan yang lebih
                        ramah lingkungan dan berkelanjutan.
                    </p>
                    <!-- Sosial Media -->
                    <div class="flex gap-x-4">
                        <!-- facebook -->
                        <a href="https://facebook.com/byd.indonesia" target="_blank"
                            class="text-gray-400 hover:text-white transition-colors duration-300" title="facebookbyd">
                            <img src="{{ asset('images/icon/facebook.png') }}"
                                class="w-6 h-6 hover:scale-110 transition-transform duration-300" alt="facebook">
                        </a>
                        <!-- Instagram -->
                        <a href="https://instagram.com/byd.indonesia" target="_blank"
                            class="text-gray-400 hover:text-white transition-colors duration-300" title="Instagram">
                            <img src="{{ asset('images/icon/instagram.png') }}"
                                class="w-6 h-6 hover:scale-110 transition-transform duration-300" alt="instagram">
                        </a>
                        <!-- LinkedIn -->
                        <a href="https://linkedin.com/company/byd" target="_blank"
                            class="text-gray-400 hover:text-white transition-colors duration-300" title="LinkedIn">
                            <img src="{{ asset('images/icon/linkedin.png') }}"
                                class="w-6 h-6 hover:scale-110 transition-transform duration-300" alt="linkedin">
                        </a>
                        <!-- twitter -->
                        <a href="https://twitter.com/byd" target="_blank"
                            class="text-gray-400 hover:text-white transition-colors duration-300" title="Twitter">
                            <img src="{{ asset('images/icon/twitter.png') }}"
                                class="w-6 h-6 hover:scale-110 transition-transform duration-300" alt="twitter">
                        </a>
                    </div>
                </div>
                <!-- Menu Layanan -->
                <div class="mt-12 xl:mt-0 flex flex-col sm:flex-row gap-8 xl:col-span-2">
                    <!-- Menu -->
                    <div class="mr-10">
                        <h3 class="text-white text-sm font-semibold">Layanan</h3>
                        <ul class="mt-4 space-y-2">
                            <li><a href="#" class="hover:text-white transition-colors duration-300">Penjualan Mobil Listrik</a></li>
                            <li><a href="#" class="hover:text-white transition-colors duration-300">Berita</a></li>
                            <li><a href="#" class="hover:text-white transition-colors duration-300">Daftar Harga</a>
                            </li>
                        </ul>
                    </div>        
                        <!-- Foto Sales + Lokasi Dealer (Side by Side) -->
                    <div class="flex flex-col sm:flex-row items-start gap-6">
                        <!-- Foto + Nama Sales -->
                        <div class="flex flex-col items-center sm:items-start mr-[15rem]">
                            {{-- <img src="{{ asset('images/sales.jpg') }}" alt="Sales GAIN"
                                class="rounded-xl w-36 h-36 sm:w-40 sm:h-40 md:w-44 md:h-44 object-cover shadow-lg border border-gray-300 hover:scale-105 transition-transform duration-300"> --}}
                            {{-- <p class="mt-4 text-gray-700 font-semibold text-sm sm:text-base text-center sm:text-left">
                                Nama Sales nya
                            </p> --}}
                        </div>
                        <!-- Lokasi Dealer + Maps -->
                        <div class="flex flex-col gap-2 text-sm text-gray-600 max-w-xs">
                            <div class="flex items-start gap-2">
                                <svg class="w-5 h-5 mt-0.5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 2C8.13 2 5 5.14 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.86-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
                                </svg>
                                <span>
                                    Dealer BYD Bipo Tangerang 
                                    {{-- <br> Gatot Subroto KM 2,5 Blok No. 30 RT — Cimone, Kec. Karawaci, Kota Tangerang, Banten --}}
                                </span>
                            </div>
                            <!-- Google Maps Embed -->
                            <div class="w-full">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3133828735343!2d106.90539407575989!3d-6.224650260931892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3c4bb9ae42f%3A0x9ec77ae775be155b!2sBYD%20Kelapa%20Gading!5e0!3m2!1sen!2sid!4v1721700000000!5m2!1sen!2sid"
                                    width="100%" height="160" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"
                                    class="rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Informasi Kontak -->
            <div class="mt-2 border-t border-white/10 pt-8 text-gray-400 text-sm">
                <p>&copy; 2024 BYD Indonesia - Cabang BIPO Tangerang. All rights reserved.</p>
                <p class="mt-2">
                    Gatot Subroto KM 2,5 Blok No. 30 — Cimone, Kec. Karawaci, Kota Tangerang, Banten |
                    Email: <a href="mailto:putri.byd@gmail.com"
                        class="underline hover:text-white transition-colors duration-300">putri.byd@gmail.com</a>
                </p>
            </div>
        </div>
    </footer>