@php

    $why_us = [
        [
            "icon" => asset('images/icon/garansi.webp'),
            "title" => "Garansi 100% Uang Kembali",
            "description" => "Englishvit memberikan garansi 100% uang kembali untuk semua program kelas online  yang Anda ikuti jika tidak sesuai dengan deskripsi program yang kami berikan."
        ]
    ];

    for ($i = 0; $i < 5; $i++) {
        $why_us[] = $why_us[0];
    }

@endphp

<x-common.content-container class="py-15">
    <h2 class="text-neutral-dark font-bold text-2xl md:text-3xl text-center">Why Englishvit?</h2>
    <p class="text-center mt-2">
        Dari semua platform belajar bahasa Inggris yang ada, berikut alasan memilih Englishvit.
    </p>

    <div class="hidden md:grid grid-cols-3 gap-8 mt-10">
        @foreach ($why_us as $why)
            <x-common.card class="flex flex-col gap-5 px-6 pt-8 pb-12 text-center text-neutral-darkgray items-center">
                <img class="h-25 w-25" src="{{ $why['icon'] }}" alt="">
                <h4 class="text-2xl font-semibold mb-1">{{ $why['title'] }}</h4>
                <p class="">{{ $why['description'] }}</p>
            </x-common.card>
        @endforeach
    </div>

    <div class="md:hidden">
        <div class="swiper mt-15" id="wu-swiper">
            <div class="swiper-wrapper">

                @foreach ($why_us as $why)
                    <div class="swiper-slide px-10">
                        <x-common.card class="flex flex-col gap-5 px-5 py-8 text-center text-neutral-darkgray items-center">
                            <img class="h-25 w-25" src="{{ $why['icon'] }}" alt="">
                            <h4 class="text-xl font-semibold mb-1">{{ $why['title'] }}</h4>
                            <p class="text-sm">{{ $why['description'] }}</p>
                        </x-common.card>
                    </div>
                @endforeach

            </div>

            <div class="swiper-pagination static! mt-4"></div>
        </div>
    </div>

    <div class="overflow-hidden rounded-lg mt-10">
        <lottie-player src="{{ asset('images/lottie/why-us.json') }}" background="transparent" speed="1"
            style="width:100%;" loop autoplay>
        </lottie-player>
    </div>

</x-common.content-container>