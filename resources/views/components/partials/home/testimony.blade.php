@php

    $satisifed_students = 58824;

    $testimonies = [

        [
            "star" => 5,
            "quote" => "Sekarang saya bisa bahasa Inggris di dua aktif skills, writing dan speaking. Thanks Englishvit, my English increased a lot!",
            "name" => "Azka",
            "occupation" => "Information Engineering Graduate",
            "profile" => asset('images/sample-profile-photo1.jpg'),
        ]

    ];
    for ($i = 0; $i < 5; $i++) {
        $testimonies[] = $testimonies[0];
    }

    $companies = [
        asset('images/sample-logo1.png'),
        asset('images/sample-logo2.png'),
        asset('images/sample-logo3.png'),
        asset('images/sample-logo4.png'),
        asset('images/sample-logo5.png'),
    ]

@endphp

<x-common.content-container class="bg-primary-paleblue text-neutral-dark py-15">
    <h2 class="text-center font-bold text-2xl md:text-3xl">
        +{{ number_format($satisifed_students, 0, ',', '.') }} Satisfied Students
    </h2>
    <p class="text-center mt-2">Kata mereka yang telah merasakan pengalaman belajar bersama Englishvit</p>

    <div class="swiper my-10" id="tt-swiper">
        <div class="swiper-wrapper">

            @foreach ($testimonies as $testimony)
                <div class="swiper-slide">
                    <x-common.card x-data class="p-5 bg-white shadow-card-lg-blue">

                        <div class="flex justify-between font-bold text-xs text-primary-blue1">
                            <div class="flex gap-1">
                                <template x-for="i in {{ $testimony['star'] }}">
                                    <x-icons.star-white />
                                </template>
                            </div>

                            <p class="flex items-center">
                                <span class="ei-play_filled text-lg "></span>
                                <span>Lihat video</span>
                            </p>
                        </div>

                        <p class="mt-5 mb-2">{{ $testimony['quote'] }}</p>

                        <div class="flex gap-2 pb-5 md:pt-5">
                            <img class="h-10 w-10 rounded-full" src="{{ $testimony['profile'] }}" alt="">
                            <p class="text-neutral-darkgray text-xs flex flex-col justify-between">
                                <span class="font-bold">{{ $testimony['name'] }}</span>
                                <span>{{ $testimony['occupation'] }}</span>
                            </p>
                        </div>

                    </x-common.card>
                </div>
            @endforeach

        </div>

        <div class="swiper-pagination static! mt-4"></div>
    </div>

    <p class="text-center text-neutral-dark text-sm md:text-lg font-semibold mt-20">250+ lembaga dan instansi telah
        menggunakan
        layanan kami</p>
    <x-common.marquee>
        <div class="flex h-20 gap-10 my-10">
            @foreach ($companies as $company)
                <img class="h-full w-auto" src="{{ $company }}" alt="">
            @endforeach
        </div>
    </x-common.marquee>

</x-common.content-container>