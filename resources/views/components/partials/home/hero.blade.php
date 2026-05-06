<x-common.content-container class="md:flex bg-cover bg-center bg-no-repeat"
    style="background-image: url('{{ asset('images/bg/bg-blue1.webp') }}')">

    <section class="pt-6 md:py-12 flex-1 text-center md:text-left text-white">
        <h1 class="text-3xl md:text-4xl font-bold md:leading-12">Tempat Terbaik Belajar Bahasa Inggris Langsung Praktik
        </h1>
        <p class="mt-10 mb-5 md:text-xl md:leading-8">Konsultasikan rencana belajarmu dan dapatkan penawaran spesial
            langsung dari
            admin!</p>


        <div class="flex justify-center flex-wrap gap-4 md:justify-normal md:mt-10">
            <button
                class="md:mx-0 flex w-64 md:w-auto px-5 py-3 rounded-lg text-sm font-bold bg-btn-warning items-center justify-center">
                <x-icons.like class="mr-2" />
                Daftar Sekarang
            </button>
            <button
                class="md:mx-0 flex w-64 md:w-auto px-5 py-3 rounded-lg text-sm font-bold items-center justify-center border">
                <span class="ei-whatsapp text-2xl mr-2"></span>
                Chat Admin Sekarang
            </button>
        </div>
    </section>

    <section class="flex flex-col flex-1 px-4">
        <img class="w-full h-auto mt-auto self-end" src="{{ asset('images/hero.webp') }}" alt="">
    </section>

</x-common.content-container>