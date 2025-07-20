<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'BYD')</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/logo-brand/logo-byd.png') }}">
    {{-- Tailwind css template --}}
    @vite('resources/js/app.js')
</head>

<body class="bg-gray-100 text-gray-800">
    {{-- header --}}
    <header class="fixed right-0 left-0 isolate z-10 bg-slate-50">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="{{ url('/') }}" class="-m-1.5 p-1.5">
                    <span class="sr-only">BYD</span>
                    <img class="h-5 w-auto" src="{{ asset('images/logo-brand/logo-byd.png') }}" alt="BYD Logo">
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button" id="mobile-menu-open"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <div>
                    <button type="button" id="product-button"
                        class="flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900 transition-colors duration-300 hover:text-emerald-700"
                        aria-expanded="false">
                        Product
                        <svg class="size-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    {{-- Product' flyout menu, show/hide based on flyout menu state. --}}
                    <div id="product-menu"
                        class="absolute inset-x-0 top-0 -z-10 bg-white pt-14 ring-1 shadow-lg ring-gray-900/5 hidden">
                        <div class="mx-auto grid max-w-7xl grid-cols-4 gap-x-4 px-6 py-10 lg:px-8 xl:gap-x-8">
                            <div class="group relative rounded-lg p-6 text-sm/6 hover:bg-gray-200">
                                <a href="{{ url('/byd-seal') }}"
                                    class="mt-6 block font-semibold text-gray-900 transition-transform duration-300 hover:scale-105">
                                    <h2 class="text-center font-bold text-sm">BYD SEAL</h2>
                                    <img src="{{ asset('images/produk/seal-menu.png') }}" alt="byd seal">
                                    <span class="absolute inset-0"></span>
                                </a>
                            </div>
                            <div class="group relative rounded-lg p-6 text-sm/6 hover:bg-gray-200">
                                <a href="{{ url('/byd-atto3') }}"
                                    class="mt-6 block font-semibold text-gray-900 transition-transform duration-300 hover:scale-105">
                                    <h2 class="text-center font-bold text-sm">BYD ATTO 3</h2>
                                    <img src="{{ asset('images/produk/atto3-menu.png') }}" alt="byd atto 3">
                                    <span class="absolute inset-0"></span>
                                </a>
                            </div>
                            <div class="group relative rounded-lg p-6 text-sm/6 hover:bg-gray-200">
                                <a href="{{ url('/byd-dolphin') }}"
                                    class="mt-6 block font-semibold text-gray-900 transition-transform duration-300 hover:scale-105">
                                    <h2 class="text-center font-bold text-sm">BYD DOLPHIN</h2>
                                    <img src="{{ asset('images/produk/dolphin-menu.png') }}" alt="byd dolphin">
                                    <span class="absolute inset-0"></span>
                                </a>
                            </div>
                            <div class="group relative rounded-lg p-6 text-sm/6 hover:bg-gray-200">
                                <a href="{{ url('/byd-m6') }}"
                                    class="mt-6 block font-semibold text-gray-900 transition-transform duration-300 hover:scale-105">
                                    <h2 class="text-center font-bold text-sm">BYD M6</h2>
                                    <img src="{{ asset('images/produk/m6-menu.png') }}" alt="byd m6">
                                    <span class="absolute inset-0"></span>
                                </a>
                            </div>
                            <div class="group relative rounded-lg p-6 text-sm/6 hover:bg-gray-200">
                                <a href="{{ url('/byd-sealion7') }}"
                                    class="mt-6 block font-semibold text-gray-900 transition-transform duration-300 hover:scale-105">
                                    <h2 class="text-center font-bold text-sm">BYD SEALION 7</h2>
                                    <img src="{{ asset('images/produk/sealion7-menu-3.png') }}" alt="byd sealion 7">
                                    <span class="absolute inset-0"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ url('/notfound') }}"
                    class="text-sm/6 font-semibold text-gray-900 transition-colors duration-300 hover:text-emerald-700">Berita</a>
                <a href="{{ url('/notfound') }}"
                    class="text-sm/6 font-semibold text-gray-900 transition-colors duration-300 hover:text-emerald-700">Simulasi
                    Kredit</a>
                <a href="{{ url('/notfound') }}"
                    class="text-sm/6 font-semibold text-gray-900 transition-colors duration-300 hover:text-emerald-700">Test
                    Drive</a>
                <a href="{{ url('/notfound') }}"
                    class="text-sm/6 font-semibold text-gray-900 transition-colors duration-300 hover:text-emerald-700">Daftar
                    Harga</a>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div id="mobile-menu" class="hidden lg:hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-10"></div>
            <div
                class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto" src="{{ asset('images/logo-brand/logo-byd.png') }}"
                            alt="Company Logo">
                    </a>
                    <button id="mobile-menu-close" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="size-12" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <div class="-mx-3">
                                <button type="button"
                                    class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-2xl font-semibold text-gray-900 transition-colors duration-200 hover:text-gray-700 hover:bg-gray-100"
                                    aria-controls="disclosure-1" aria-expanded="false">
                                    Product
                                    {{-- Expand/collapse icon, toggle classes based on menu open state Open: "rotate-180", Closed: --}}
                                    <svg class="size-5 flex-none" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <!-- 'Product' sub-menu, show/hide based on menu state. -->
                                <div class="mt-2 space-y-2" id="disclosure-1">
                                    <a href="{{ url('/byd-seal') }}"
                                        class="block relative rounded-lg py-2 pr-3 pl-6 text-base font-semibold text-gray-900 hover:bg-gray-50">
                                        <h2 class="text-left font-bold text-sm">BYD SEAL</h2>
                                        <img src="{{ asset('images/produk/seal-menu.png') }}" alt="byd seal">
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <a href="{{ url('/byd-atto3') }}"
                                        class="block relative rounded-lg py-2 pr-3 pl-6 text-base font-semibold text-gray-900 hover:bg-gray-50">
                                        <h2 class="text-left font-bold text-sm">BYD ATTO 3</h2>
                                        <img src="{{ asset('images/produk/atto3-menu.png') }}" alt="byd atto 3">
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <a href="{{ url('/byd-dolphin') }}"
                                        class="block relative rounded-lg py-2 pr-3 pl-6 text-base font-semibold text-gray-900 hover:bg-gray-50">
                                        <h2 class="text-left font-bold text-sm">BYD DOLPHIN</h2>
                                        <img src="{{ asset('images/produk/dolphin-menu.png') }}" alt="byd dolphin">
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <a href="{{ url('/byd-m6') }}"
                                        class="block relative rounded-lg py-2 pr-3 pl-6 text-base font-semibold text-gray-900 hover:bg-gray-50">
                                        <h2 class="text-left font-bold text-sm">BYD M6</h2>
                                        <img src="{{ asset('images/produk/m6-menu.png') }}" alt="byd m6">
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <a href="{{ url('/byd-sealion7') }}"
                                        class="block relative rounded-lg py-2 pr-3 pl-6 text-base font-semibold text-gray-900 hover:bg-gray-50">
                                        <h2 class="text-left font-bold text-sm">BYD SEALION 7</h2>
                                        <img src="{{ asset('images/produk/sealion7-menu-3.png') }}"
                                            alt="byd sealion 7">
                                        <span class="absolute inset-0"></span>
                                    </a>
                                </div>
                            </div>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-2xl font-semibold text-gray-900 transition-colors duration-200 hover:text-gray-700 hover:bg-gray-100">Berita</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-2xl font-semibold text-gray-900 transition-colors duration-200 hover:text-gray-700 hover:bg-gray-100">Simulasi
                                Kredit</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-2xl font-semibold text-gray-900 transition-colors duration-200 hover:text-gray-700 hover:bg-gray-100">Test
                                Drive</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-2xl font-semibold text-gray-900 transition-colors duration-200 hover:text-gray-700 hover:bg-gray-100">Daftar
                                Harga</a>
                        </div>
                        {{-- <div class="py-6">
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-2xl font-semibold text-gray-900 transition-colors duration-200 hover:text-gray-700 hover:bg-gray-100">Log
                                in</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <script>
        // SLIDE OTOMATIS HERO SETIAP 3 DETIK
        document.addEventListener('DOMContentLoaded', function() {
            const hero = document.getElementById('hero-section');
            const heroText = document.getElementById('hero-text');

            // Hanya jalankan logika slider jika elemen hero ada di halaman
            if (hero && heroText) {
                const slides = [{
                        image: "{{ asset('images/hero/section-seal.jpg') }}",
                        text: "BYD SEAL"
                    },
                    {
                        image: "{{ asset('images/hero/section-atto3-c.jpg') }}",
                        text: "BYD ATTO 3"
                    },
                    {
                        image: "{{ asset('images/hero/section-m6.jpg') }}",
                        text: "BYD M6"
                    },
                    {
                        image: "{{ asset('images/hero/section-dolphin-2.jpg') }}",
                        text: "BYD DOLPHIN"
                    },
                    {
                        image: "{{ asset('images/hero/section-sealion-7.jpg') }}",
                        text: "BYD SEALION 7"
                    },
                ];
                let index = 0;
                setInterval(() => {
                    index = (index + 1) % slides.length;
                    // Fade out text
                    heroText.classList.add('opacity-0');
                    setTimeout(() => {
                        // Ganti background dan text setelah fade out
                        hero.style.backgroundImage = `url('${slides[index].image}')`;
                        heroText.textContent = slides[index].text;
                        // Fade in text
                        heroText.classList.remove('opacity-0');
                    }, 500); // Waktu fade out sebelum update konten
                }, 4000);
            }
        });
        // Toggle mobile menu
        const openBtn = document.getElementById('mobile-menu-open');
        const closeBtn = document.getElementById('mobile-menu-close');
        const mobileMenu = document.getElementById('mobile-menu');
        if (openBtn && closeBtn && mobileMenu) {
            openBtn.addEventListener('click', () => {
                mobileMenu.classList.remove('hidden');
            });
            closeBtn.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        }
        // Toggle Product Dropdown (Desktop)
        document.addEventListener('DOMContentLoaded', function() {
            const productButton = document.getElementById('product-button');
            const productMenu = document.getElementById('product-menu');
            if (productButton && productMenu) {
                productButton.addEventListener('click', function() {
                    productMenu.classList.toggle('hidden');
                });
                // Close when click outside
                document.addEventListener('click', function(e) {
                    if (!productButton.contains(e.target) && !productMenu.contains(e.target)) {
                        productMenu.classList.add('hidden');
                    }
                });
            }
            // Toggle Mobile Disclosure
            const disclosureButton = document.querySelector('[aria-controls="disclosure-1"]');
            const disclosureMenu = document.getElementById('disclosure-1');
            if (disclosureButton && disclosureMenu) {
                disclosureButton.addEventListener('click', function() {
                    const expanded = disclosureButton.getAttribute('aria-expanded') === 'true';
                    disclosureButton.setAttribute('aria-expanded', !expanded);
                    disclosureMenu.classList.toggle('hidden');
                });
                // Optional: Start hidden
                disclosureMenu.classList.add('hidden');
            }
        });
    </script>
</body>

</html>
