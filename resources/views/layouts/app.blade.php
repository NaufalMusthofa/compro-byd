<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">

    <!-- Meta Description untuk SEO -->
    <meta name="description" content="Temukan mobil listrik BYD terbaik di dealer resmi BYD Bipo Tangerang. Hubungi sales kami untuk test drive dan penawaran menarik.">

    <!-- Open Graph Tags untuk Social Share -->
    <meta property="og:title" content="Dealer Resmi BYD Bipo Tangerang">
    <meta property="og:description" content="Temukan mobil listrik BYD terbaik di dealer resmi BYD Bipo Tangerang. Hubungi sales kami untuk test drive dan penawaran menarik.">
    <meta property="og:image" content="https://bydsalesjabodetabek.com/images/foto-putri.jpg">
    <meta property="og:url" content="https://bydsalesjabodetabek.com">
    <meta property="og:type" content="website">

    {{-- <!-- Twitter Card (Optional, share ke X/Twitter) -->
    <meta name="twitter:card" content="summary_large_image"> --}}

    <title>@yield('title', 'BYD')</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/logo-brand/logo-byd-square.svg') }}">
    
    {{-- alpinejs --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Tailwind css template --}}
    @vite('resources/js/app.js')

    {{-- Custom mobile styles --}}
    <style>
        /* Ensure better mobile scaling */
        @media (max-width: 768px) {
            html {
                font-size: 18px;
                /* Increase base font size for mobile */
            }

            body {
                min-height: 100vh;
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
            }

            /* Better touch targets */
            button,
            a {
                min-height: 48px;
                min-width: 48px;
            }
        }

        @media (max-width: 480px) {
            html {
                font-size: 20px;
                /* Even larger for small phones */
            }
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800 min-h-screen">
    {{-- header --}}
    <header class="fixed right-0 left-0 isolate z-10 bg-slate-50 shadow-sm">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-4 sm:p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="{{ url('/') }}" class="-m-1.5 p-1.5">
                    <span class="sr-only">BYD</span>
                    <img class="h-6 w-auto sm:h-8 lg:h-5" src="{{ asset('images/logo-brand/logo-byd.png') }}"
                        alt="BYD Logo">
                </a>
            </div>

            {{-- Mobile menu button with larger touch area --}}
            <div class="flex lg:hidden">
                <button type="button" id="mobile-menu-open"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-3 text-gray-700 hover:bg-gray-100 active:bg-gray-200 transition-colors duration-200">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-7 h-7 sm:w-8 sm:h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>

            {{-- Desktop menu --}}
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

                    {{-- Product flyout menu --}}
                    <div id="product-menu"
                        class="absolute inset-x-0 top-0 -z-10 bg-white pt-14 ring-1 shadow-lg ring-gray-900/5 hidden">
                        <div class="mx-auto grid max-w-7xl grid-cols-4 gap-x-4 px-6 py-10 lg:px-8 xl:gap-x-8">
                            <div class="group relative rounded-lg p-6 text-sm/6 hover:bg-gray-200">
                                <a href="{{ url('/byd-seal') }}"
                                    class="mt-6 block font-semibold text-gray-900 transition-transform duration-300 hover:scale-105">
                                    <h2 class="text-center font-bold text-sm">BYD SEAL</h2>
                                    <img src="{{ asset('images/produk/seal-menu.png') }}" alt="BYD seal">
                                    <span class="absolute inset-0"></span>
                                </a>
                            </div>
                            <div class="group relative rounded-lg p-6 text-sm/6 hover:bg-gray-200">
                                <a href="{{ url('/byd-atto3') }}"
                                    class="mt-6 block font-semibold text-gray-900 transition-transform duration-300 hover:scale-105">
                                    <h2 class="text-center font-bold text-sm">BYD ATTO 3</h2>
                                    <img src="{{ asset('images/produk/atto3-menu.png') }}" alt="BYD atto 3">
                                    <span class="absolute inset-0"></span>
                                </a>
                            </div>
                            <div class="group relative rounded-lg p-6 text-sm/6 hover:bg-gray-200">
                                <a href="{{ url('/byd-dolphin') }}"
                                    class="mt-6 block font-semibold text-gray-900 transition-transform duration-300 hover:scale-105">
                                    <h2 class="text-center font-bold text-sm">BYD DOLPHIN</h2>
                                    <img src="{{ asset('images/produk/dolphin-menu.png') }}" alt="BYD dolphin">
                                    <span class="absolute inset-0"></span>
                                </a>
                            </div>
                            <div class="group relative rounded-lg p-6 text-sm/6 hover:bg-gray-200">
                                <a href="{{ url('/byd-m6') }}"
                                    class="mt-6 block font-semibold text-gray-900 transition-transform duration-300 hover:scale-105">
                                    <h2 class="text-center font-bold text-sm">BYD M6</h2>
                                    <img src="{{ asset('images/produk/m6-menu.png') }}" alt="BYD m6">
                                    <span class="absolute inset-0"></span>
                                </a>
                            </div>
                            <div class="group relative rounded-lg p-6 text-sm/6 hover:bg-gray-200">
                                <a href="{{ url('/byd-sealion7') }}"
                                    class="mt-6 block font-semibold text-gray-900 transition-transform duration-300 hover:scale-105">
                                    <h2 class="text-center font-bold text-sm">BYD SEALION 7</h2>
                                    <img src="{{ asset('images/produk/sealion7-menu-3.png') }}" alt="BYD Sealion 7">
                                    <span class="absolute inset-0"></span>
                                </a>
                            </div>
                            <div class="group relative rounded-lg p-6 text-sm/6 hover:bg-gray-200">
                                <a href="{{ url('/byd-atto1') }}"
                                    class="mt-6 block font-semibold text-gray-900 transition-transform duration-300 hover:scale-105">
                                    <h2 class="text-center font-bold text-sm">BYD ATTO 1</h2>
                                    <img src="{{ asset('images/produk/atto1-menu.png') }}" alt="BYD Atto 1">
                                    <span class="absolute inset-0"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <a href="{{ url('/byd-pricelist') }}"
                    class="text-sm/6 font-semibold text-gray-900 transition-colors duration-300 hover:text-emerald-700">Daftar
                    Harga</a>
                <a href="{{ url('/notfound') }}"
                    class="text-sm/6 font-semibold text-gray-900 transition-colors duration-300 hover:text-emerald-700">Berita</a>
            </div>
        </nav>

        {{-- Mobile menu with improved sizing --}}
        <div id="mobile-menu" class="hidden lg:hidden" role="dialog" aria-modal="true">
            <div class="fixed inset-0 z-10 bg-black bg-opacity-25"></div>
            <div
                class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-4 py-4 sm:px-6 sm:py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between mb-6">
                    <a href="{{ url('/') }}" class="-m-1.5 p-1.5">
                        <span class="sr-only">BYD</span>
                        <img class="h-8 w-auto sm:h-10" src="{{ asset('images/logo-brand/logo-byd.png') }}"
                            alt="BYD Logo">
                    </a>
                    <button id="mobile-menu-close" type="button"
                        class="-m-2.5 rounded-md p-2.5 text-gray-700 hover:bg-gray-100 active:bg-gray-200 transition-colors duration-200">
                        <span class="sr-only">Close menu</span>
                        <svg class="w-8 h-8 sm:w-10 sm:h-10" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flow-root">
                    <div class="-my-2 divide-y divide-gray-500/10">
                        <div class="space-y-1 py-4">
                            <div class="-mx-3">
                                <button type="button" id="mobile-product-toggle"
                                    class="flex w-full items-center justify-between rounded-lg py-4 px-3 text-xl sm:text-2xl font-semibold text-gray-900 transition-colors duration-200 hover:text-gray-700 hover:bg-gray-100 active:bg-gray-200"
                                    aria-controls="disclosure-1" aria-expanded="false">
                                    Product
                                    <svg class="w-6 h-6 sm:w-7 sm:h-7 flex-none transition-transform duration-200"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>

                                {{-- Product sub-menu with better mobile layout --}}
                                <div class="mt-2 space-y-2 hidden" id="disclosure-1">
                                    <a href="{{ url('/byd-seal') }}"
                                        class="block relative rounded-lg py-3 px-6 text-lg sm:text-xl font-semibold text-gray-900 hover:bg-gray-50 active:bg-gray-100 transition-colors duration-200">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0 w-16 h-12 sm:w-20 sm:h-14">
                                                <img src="{{ asset('images/produk/seal-menu.png') }}" alt="byd seal"
                                                    class="w-full h-full object-contain">
                                            </div>
                                            <h2 class="font-bold text-base sm:text-lg">BYD SEAL</h2>
                                        </div>
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <a href="{{ url('/byd-atto3') }}"
                                        class="block relative rounded-lg py-3 px-6 text-lg sm:text-xl font-semibold text-gray-900 hover:bg-gray-50 active:bg-gray-100 transition-colors duration-200">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0 w-16 h-12 sm:w-20 sm:h-14">
                                                <img src="{{ asset('images/produk/atto3-menu.png') }}"
                                                    alt="byd atto 3" class="w-full h-full object-contain">
                                            </div>
                                            <h2 class="font-bold text-base sm:text-lg">BYD ATTO 3</h2>
                                        </div>
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <a href="{{ url('/byd-dolphin') }}"
                                        class="block relative rounded-lg py-3 px-6 text-lg sm:text-xl font-semibold text-gray-900 hover:bg-gray-50 active:bg-gray-100 transition-colors duration-200">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0 w-16 h-12 sm:w-20 sm:h-14">
                                                <img src="{{ asset('images/produk/dolphin-menu.png') }}"
                                                    alt="byd dolphin" class="w-full h-full object-contain">
                                            </div>
                                            <h2 class="font-bold text-base sm:text-lg">BYD DOLPHIN</h2>
                                        </div>
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <a href="{{ url('/byd-m6') }}"
                                        class="block relative rounded-lg py-3 px-6 text-lg sm:text-xl font-semibold text-gray-900 hover:bg-gray-50 active:bg-gray-100 transition-colors duration-200">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0 w-16 h-12 sm:w-20 sm:h-14">
                                                <img src="{{ asset('images/produk/m6-menu.png') }}" alt="byd m6"
                                                    class="w-full h-full object-contain">
                                            </div>
                                            <h2 class="font-bold text-base sm:text-lg">BYD M6</h2>
                                        </div>
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <a href="{{ url('/byd-sealion7') }}"
                                        class="block relative rounded-lg py-3 px-6 text-lg sm:text-xl font-semibold text-gray-900 hover:bg-gray-50 active:bg-gray-100 transition-colors duration-200">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0 w-16 h-12 sm:w-20 sm:h-14">
                                                <img src="{{ asset('images/produk/sealion7-menu-3.png') }}"
                                                    alt="byd sealion 7" class="w-full h-full object-contain">
                                            </div>
                                            <h2 class="font-bold text-base sm:text-lg">BYD SEALION 7</h2>
                                        </div>
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <a href="{{ url('/byd-atto1') }}"
                                        class="block relative rounded-lg py-3 px-6 text-lg sm:text-xl font-semibold text-gray-900 hover:bg-gray-50 active:bg-gray-100 transition-colors duration-200">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0 w-16 h-12 sm:w-20 sm:h-14">
                                                <img src="{{ asset('images/produk/atto1-menu.png') }}"
                                                    alt="byd atto 1" class="w-full h-full object-contain">
                                            </div>
                                            <h2 class="font-bold text-base sm:text-lg">BYD ATTO 1</h2>
                                        </div>
                                        <span class="absolute inset-0"></span>
                                    </a>
                                </div>
                            </div>

                            {{-- Main menu items with better mobile sizing --}}
                            <a href="{{ url('/byd-pricelist') }}"
                            class="-mx-3 block rounded-lg px-3 py-4 text-xl sm:text-2xl font-semibold text-gray-900 transition-colors duration-200 hover:text-gray-700 hover:bg-gray-100 active:bg-gray-200">Daftar
                            Harga</a>
                            <a href="{{ url('/notfound') }}"
                                class="-mx-3 block rounded-lg px-3 py-4 text-xl sm:text-2xl font-semibold text-gray-900 transition-colors duration-200 hover:text-gray-700 hover:bg-gray-100 active:bg-gray-200">Berita</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- Main content with proper spacing --}}
    <main class="pt-16 sm:pt-20 lg:pt-16">
        @yield('content')
        @include('layouts.footer')
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const heroSourceDesktop = document.getElementById('hero-source-desktop');
            const heroSourceTablet = document.getElementById('hero-source-tablet');
            const heroImg = document.getElementById('hero-img');
            const heroText = document.getElementById('hero-text');

            const slides = [
            {
                desktop: "{{ asset('images/hero/Website-Header-GIIAS-2025-desktop.png') }}",
                tablet: "{{ asset('images/hero/Website-Header-GIIAS-2025-tablet.png') }}",
                mobile: "{{ asset('images/hero/Website-Header-GIIAS-2025-mobile.png') }}",
                text: ""
            },
            {
                desktop: "{{ asset('images/hero/4cars-home-desktop.jpg') }}",
                tablet: "{{ asset('images/hero/4cars-home-tablet.jpg') }}",
                mobile: "{{ asset('images/hero/4cars-home-mobile.jpg') }}",
                text: ""
            },
            {
                desktop: "{{ asset('images/hero/seal-desktop.jpg') }}",
                tablet: "{{ asset('images/hero/seal-tablet.jpg') }}",
                mobile: "{{ asset('images/hero/seal-mobile.jpg') }}",
                text: ""
            },
            ];

            let index = 1;

            function showNextSlide() {
            heroText.classList.add('opacity-0');

            setTimeout(() => {
                const s = slides[index];

                heroSourceDesktop.srcset = s.desktop || s.image;
                heroSourceTablet.srcset = s.tablet || s.desktop || s.image;
                heroImg.src = s.mobile || s.tablet || s.desktop || s.image;

                heroText.textContent = s.text || '';
                heroText.classList.remove('opacity-0');

                index = (index + 1) % slides.length;

                const nextDuration = (index === 0) ? 6000 : 4000;
                setTimeout(showNextSlide, nextDuration);
            }, 500);
            }

            setTimeout(showNextSlide, 6000);
        });


        let index = 1; // Slide kedua
        function showNextSlide() {
            heroText.classList.add('opacity-0');
            setTimeout(() => {
            if (index === 0) {
                heroSourceDesktop.srcset = slides[0].desktop;
                heroSourceTablet.srcset = slides[0].tablet;
                heroImg.src = slides[0].mobile;
            } else {
                // Non responsive slides, pakai gambar sama untuk semua
                heroSourceDesktop.srcset = slides[index].image;
                heroSourceTablet.srcset = slides[index].image;
                heroImg.src = slides[index].image;
            }
            heroText.textContent = slides[index].text;
            heroText.classList.remove('opacity-0');

            index = (index + 1) % slides.length;
            const nextDuration = (index === 0) ? 6000 : 4000;
            setTimeout(showNextSlide, nextDuration);
            }, 500);
        }

        setTimeout(showNextSlide, 6000);

        // END SCRIPT HEROs


        // Toggle mobile menu with improved UX
        const openBtn = document.getElementById('mobile-menu-open');
        const closeBtn = document.getElementById('mobile-menu-close');
        const mobileMenu = document.getElementById('mobile-menu');

        if (openBtn && closeBtn && mobileMenu) {
            openBtn.addEventListener('click', () => {
                mobileMenu.classList.remove('hidden');
                document.body.style.overflow = 'hidden'; // Prevent background scroll
            });

            closeBtn.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                document.body.style.overflow = ''; // Restore scroll
            });

            // Close menu when clicking backdrop
            mobileMenu.addEventListener('click', (e) => {
                if (e.target === mobileMenu) {
                    mobileMenu.classList.add('hidden');
                    document.body.style.overflow = '';
                }
            });
        }

        // Toggle Product Dropdown (Desktop)
        document.addEventListener('DOMContentLoaded', function() {
            const productButton = document.getElementById('product-button');
            const productMenu = document.getElementById('product-menu');

            if (productButton && productMenu) {
                productButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    productMenu.classList.toggle('hidden');
                    const expanded = productButton.getAttribute('aria-expanded') === 'true';
                    productButton.setAttribute('aria-expanded', !expanded);
                });

                // Close when click outside
                document.addEventListener('click', function(e) {
                    if (!productButton.contains(e.target) && !productMenu.contains(e.target)) {
                        productMenu.classList.add('hidden');
                        productButton.setAttribute('aria-expanded', 'false');
                    }
                });
            }

            // Toggle Mobile Product Disclosure with animation
            const mobileProductToggle = document.getElementById('mobile-product-toggle');
            const disclosureMenu = document.getElementById('disclosure-1');

            if (mobileProductToggle && disclosureMenu) {
                mobileProductToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    const expanded = mobileProductToggle.getAttribute('aria-expanded') === 'true';
                    const icon = mobileProductToggle.querySelector('svg');

                    mobileProductToggle.setAttribute('aria-expanded', !expanded);
                    disclosureMenu.classList.toggle('hidden');

                    // Rotate icon
                    if (icon) {
                        icon.style.transform = expanded ? 'rotate(0deg)' : 'rotate(180deg)';
                    }
                });
            }
        });

        // Improve touch responsiveness
        document.addEventListener('touchstart', function() {}, {
            passive: true
        });
    </script>
</body>

</html>
