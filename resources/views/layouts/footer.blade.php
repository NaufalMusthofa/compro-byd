<footer class="bg-gray-900 text-sm text-gray-400">
  <div class="max-w-7xl mx-auto px-6 pt-16 pb-10 sm:pt-24 lg:px-8 lg:pt-32">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">
      <!-- Kolom 1: Logo dan Deskripsi -->
      <div class="space-y-6">
        <img src="{{ asset('images/logo-brand/logo-byd.png') }}" alt="BYD Jabodetabek" class="h-10 filter invert">
        <p class="text-gray-300">
          BYD Indonesia – Cabang Jabodetabek melayani kebutuhan kendaraan listrik untuk masa depan yang lebih ramah lingkungan dan berkelanjutan.
        </p>
        <!-- Sosial Media -->
        <div class="flex gap-x-4">
          <a href="https://facebook.com/byd.indonesia" target="_blank">
            <img src="{{ asset('images/icon/facebook.png') }}" class="w-6 h-6 hover:scale-110 transition-transform duration-300" alt="Facebook">
          </a>
          <a href="https://instagram.com/byd.indonesia" target="_blank">
            <img src="{{ asset('images/icon/instagram.png') }}" class="w-6 h-6 hover:scale-110 transition-transform duration-300" alt="Instagram">
          </a>
          <a href="https://linkedin.com/company/byd" target="_blank">
            <img src="{{ asset('images/icon/linkedin.png') }}" class="w-6 h-6 hover:scale-110 transition-transform duration-300" alt="LinkedIn">
          </a>
          <a href="https://twitter.com/byd" target="_blank">
            <img src="{{ asset('images/icon/twitter.png') }}" class="w-6 h-6 hover:scale-110 transition-transform duration-300" alt="Twitter">
          </a>
        </div>
      </div>

      <!-- Kolom 2: Menu -->
      <div>
        <h3 class="text-white text-sm font-semibold">Layanan</h3>
        <ul class="mt-4 space-y-2">
          <li><a href="#" class="hover:text-white transition-colors duration-300">Penjualan Mobil Listrik</a></li>
          <li><a href="#" class="hover:text-white transition-colors duration-300">Berita</a></li>
          <li><a href="#" class="hover:text-white transition-colors duration-300">Daftar Harga</a></li>
        </ul>
      </div>

      <!-- Kolom 3: Kosong / Placeholder -->
      <div></div>

      <!-- Kolom 4: Lokasi + Maps -->
      <div class="flex flex-col gap-4 max-w-xs">
        <div class="flex items-start gap-2">
          <svg class="w-5 h-5 mt-0.5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M12 2C8.13 2 5 5.14 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.86-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
          </svg>
          <span>
            Dealer BYD Bipo Tangerang
          </span>
        </div>
        <div class="w-full">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3589.560821317936!2d106.6092115745307!3d-6.185076460600389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ff59e72bd55b%3A0x8f73f5ce7d98da5b!2sBYD%20BIPO%20Tangerang!5e1!3m2!1sid!2sid!4v1753408024257!5m2!1sid!2sid"
            width="100%" height="160" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            class="rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"></iframe>
        </div>
      </div>
    </div>

    <!-- Informasi Kontak -->
    <div class="mt-8 border-t border-white/10 pt-8 text-gray-400 text-sm">
      <p>&copy; 2024 BYD Indonesia - Cabang BIPO Tangerang. All rights reserved.</p>
      <p class="mt-2">
        Gatot Subroto KM 2,5 Blok No. 30 — Cimone, Kec. Karawaci, Kota Tangerang, Banten |
        Email: <a href="mailto:putri.byd@gmail.com" class="underline hover:text-white transition-colors duration-300">putri.byd@gmail.com</a>
      </p>
    </div>
  </div>
</footer>
