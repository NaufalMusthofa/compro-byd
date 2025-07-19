@extends('layouts.app')

@section('title', 'Home')

@section('content')
    {{-- header --}}
    <header class="fixed right-0 left-0 isolate z-10 bg-slate-50">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-5 w-auto" src="{{ asset('images/logo-brand/logo-byd.png') }}" alt="">
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
                        class="flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900" aria-expanded="false">
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
                                {{-- <div
                                    class="flex size-11 items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <h2 class="text-center">BYD Seal</h2>
                                </div> --}}
                                <a href="#"
                                    class="mt-6 block font-semibold text-gray-900 transition-transform duration-300 hover:scale-105">
                                    <h2 class="text-center font-bold text-sm">BYD SEAL</h2>
                                    <img src="{{ asset('images/produk/seal-menu.png') }}" alt="byd seal">
                                    <span class="absolute inset-0"></span>
                                </a>
                                {{-- <p class="mt-1 text-gray-600">Get a better understanding where your traffic is coming from
                                </p> --}}
                            </div>
                            <div class="group relative rounded-lg p-6 text-sm/6 hover:bg-gray-200"">
                                <a href="#"
                                    class="mt-6 block font-semibold text-gray-900 transition-transform duration-300 hover:scale-105">
                                    <h2 class="text-center font-bold text-sm">BYD ATTO 3</h2>
                                    <img src="{{ asset('images/produk/atto3-menu.png') }}" alt="">
                                    <span class="absolute inset-0"></span>
                                </a>
                                {{-- <p class="mt-1 text-gray-600">Speak directly to your customers with our engagement tool</p> --}}
                            </div>
                            <div class="group relative rounded-lg p-6 text-sm/6 hover:bg-gray-200"">
                                <a href="#"
                                    class="mt-6 block font-semibold text-gray-900 transition-transform duration-300 hover:scale-105">
                                    <h2 class="text-center font-bold text-sm">BYD DOLPHIN</h2>
                                    <img src="{{ asset('images/produk/dolphin-menu.png') }}" alt="">
                                    <span class="absolute inset-0"></span>
                                </a>
                                {{-- <p class="mt-1 text-gray-600">Speak directly to your customers with our engagement tool</p> --}}
                            </div>
                            <div class="group relative rounded-lg p-6 text-sm/6 hover:bg-gray-200"">
                                <a href="#"
                                    class="mt-6 block font-semibold text-gray-900 transition-transform duration-300 hover:scale-105">
                                    <h2 class="text-center font-bold text-sm">BYD M6</h2>
                                    <img src="{{ asset('images/produk/m6-menu.png') }}" alt="">
                                    <span class="absolute inset-0"></span>
                                </a>
                                {{-- <p class="mt-1 text-gray-600">Speak directly to your customers with our engagement tool</p> --}}
                            </div>
                            <div class="group relative rounded-lg p-6 text-sm/6 hover:bg-gray-200"">
                                <a href="#"
                                    class="mt-6 block font-semibold text-gray-900 transition-transform duration-300 hover:scale-105">
                                    <h2 class="text-center font-bold text-sm">BYD SEALION 7</h2>
                                    <img src="{{ asset('images/produk/sealion7-menu-3.png') }}" alt="">
                                    <span class="absolute inset-0"></span>
                                </a>
                                {{-- <p class="mt-1 text-gray-600">Speak directly to your customers with our engagement tool</p> --}}
                            </div>
                        </div>
                        {{-- <div class="bg-gray-50">
                            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                                <div class="grid grid-cols-3 divide-x divide-gray-900/5 border-x border-gray-900/5">
                                    <a href="#"
                                        class="flex items-center justify-center gap-x-2.5 p-3 text-sm/6 font-semibold text-gray-900 hover:bg-gray-100">
                                        <svg class="size-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd"
                                                d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Watch demo
                                    </a>
                                    <a href="#"
                                        class="flex items-center justify-center gap-x-2.5 p-3 text-sm/6 font-semibold text-gray-900 hover:bg-gray-100">
                                        <svg class="size-5 flex-none text-gray-400" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd"
                                                d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Contact sales
                                    </a>
                                    <a href="#"
                                        class="flex items-center justify-center gap-x-2.5 p-3 text-sm/6 font-semibold text-gray-900 hover:bg-gray-100">
                                        <svg class="size-5 flex-none text-gray-400" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd"
                                                d="M2.5 3A1.5 1.5 0 0 0 1 4.5v4A1.5 1.5 0 0 0 2.5 10h6A1.5 1.5 0 0 0 10 8.5v-4A1.5 1.5 0 0 0 8.5 3h-6Zm11 2A1.5 1.5 0 0 0 12 6.5v7a1.5 1.5 0 0 0 1.5 1.5h4a1.5 1.5 0 0 0 1.5-1.5v-7A1.5 1.5 0 0 0 17.5 5h-4Zm-10 7A1.5 1.5 0 0 0 2 13.5v2A1.5 1.5 0 0 0 3.5 17h6a1.5 1.5 0 0 0 1.5-1.5v-2A1.5 1.5 0 0 0 9.5 12h-6Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        View all products
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <a href="#" class="text-sm/6 font-semibold text-gray-900">Berita</a>
                <a href="#" class="text-sm/6 font-semibold text-gray-900">Simulasi Kredit</a>
                <a href="#" class="text-sm/6 font-semibold text-gray-900">Test Drive</a>
                <a href="#" class="text-sm/6 font-semibold text-gray-900">Daftar Harga</a>
            </div>
            {{-- <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="#" class="text-sm/6 font-semibold text-gray-900">Log in <span
                        aria-hidden="true">&rarr;</span></a>
            </div> --}}
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div id="mobile-menu" class="lg:hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-10"></div>
            <div
                class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto"
                            src="https://tailwindui.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600"
                            alt="">
                    </a>
                    <button id="mobile-menu-close" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <div class="-mx-3">
                                <button type="button"
                                    class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-gray-900 hover:bg-gray-50"
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
                                    <a href="#"
                                        class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Analytics</a>
                                    <a href="#"
                                        class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Engagement</a>
                                    <a href="#"
                                        class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Security</a>
                                    <a href="#"
                                        class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Integrations</a>
                                    <a href="#"
                                        class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Watch
                                        demo</a>
                                    <a href="#"
                                        class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Contact
                                        sales</a>
                                    <a href="#"
                                        class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">View
                                        all products</a>
                                </div>
                            </div>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>
                        </div>
                        <div class="py-6">
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log
                                in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section with Banner Image Slider -->
    <section id="hero-section"
        class="relative h-[620px] text-white flex flex-col items-center justify-center overflow-hidden transition-all duration-1000"
        style="background-image: url('{{ asset('images/hero/section-seal.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">

        {{-- Dark Overlay --}}
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>

        {{-- Pattern Overlay --}}
        <div class="absolute inset-0 opacity-20"
            style="background-image: radial-gradient(circle at center, #1F3A68 1px, transparent 1px); background-size: 20px 20px;">
        </div>

        <div class="relative z-1 px-4 mt-5 text-center">
            <h1 class="max-w-4xl mx-auto text-4xl font-bold leading-tight md:text-5xl lg:text-6xl mb-36">
                Solusi Cerdas Kendaraan Masa Depan
            </h1>
            <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Hubungi Kami</a>
        </div>
    </section>

@endsection
