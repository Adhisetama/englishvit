<footer class="bg-primary-blue2 text-white">
    <x-common.content-container class="pt-20 
                grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Section 1 -->
        <section class="space-y-4">
            <h3 class="font-semibold text-lg">PT. Sinergi Insan Andalan</h3>
            <p>
                Jl. Jogokaryan No.28B, Mantrijeron, Kec. Mantrijeron,
                Kota Yogyakarta, Daerah Istimewa Yogyakarta 55143
            </p>
            <p class="text-sm leading-6">
                Email: hello@englishvit.com<br />
                Whatsapp: +62 819 3600 0877<br />
                Phone: +62 852 3813 0000
            </p>

            <div class="flex space-x-2">
                <img class="cursor-pointer h-6 w-6" src="{{ asset('images/icon/wa.webp') }}" alt="WhatsApp">
                <img class="cursor-pointer h-6 w-6" src="{{ asset('images/icon/ig.webp') }}" alt="Instagram">
                <img class="cursor-pointer h-6 w-6" src="{{ asset('images/icon/in.webp') }}" alt="LinkedIn">
                <img class="cursor-pointer h-6 w-6" src="{{ asset('images/icon/yt.webp') }}" alt="YouTube">
                <img class="cursor-pointer h-6 w-6" src="{{ asset('images/icon/tt.webp') }}" alt="TikTok">
            </div>
        </section>

        <!-- Section 2 -->
        <section class="space-y-4">
            <h4 class="font-semibold text-md">Tentang</h4>
            <p class="text-sm mb-2">Tentang Kami</p>
            <p class="text-sm mb-2">Karir</p>

            <h4 class="font-semibold text-md mt-8">Mulai Belajar</h4>
            <p class="text-sm mb-2">Blog</p>
            <p class="text-sm mb-2">Cek Level Bahasa Inggrismu</p>
            <p class="text-sm mb-2">Program Bimbingan</p>
            <p class="text-sm mb-2">Cek Sertifikat</p>
        </section>

        <!-- Section 3 -->
        <section class="space-y-4">
            <h4 class="font-semibold text-md">Download Englishvit App</h4>
            <div class="flex mb-4 space-x-2 md:block md:space-y-3">
                <img src="{{ asset('images/logo/google-play.webp') }}" class="h-12" alt="Google Play Store">
                <img src="{{ asset('images/logo/app-store.webp') }}" class="h-12" alt="Apple Store">
            </div>

            <h4 class="font-semibold text-md mt-10">Terdaftar di:</h4>
            <div class="flex mb-4 space-x-4 h-20">
                <img src="{{ asset('images/logo/komdigi_white.webp') }}" class="h-full" alt="Komdigi">
                <img src="{{ asset('images/logo/kemendikbud.webp') }}" class="h-full" alt="Kemendikbud">
                <img src="{{ asset('images/logo/dpmptsp.webp') }}" class="h-full" alt="DPMPTSP">
            </div>
        </section>

    </x-common.content-container>

    <x-common.content-container class="pt-6 pb-4">
        <p class="text-sm">
            © 2018 - 2026 Englishvit.com
        </p>
    </x-common.content-container>
</footer>