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
    @yield('content')

    <script>
        // SLIDE OTOMATIS HERO SETIAP 3 DETIK
        document.addEventListener('DOMContentLoaded', function () {
        const hero = document.getElementById('hero-section');

        const images = [
            "{{ asset('images/hero/section-seal.jpg') }}",
            "{{ asset('images/hero/section-atto3-c.jpg') }}",
            "{{ asset('images/hero/section-m6.jpg') }}"
        ];

        let index = 0;
        setInterval(() => {
            index = (index + 1) % images.length;
            hero.style.backgroundImage = `url('${images[index]}')`;
        }, 3000);
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
