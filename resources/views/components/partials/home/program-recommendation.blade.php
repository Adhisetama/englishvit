@php

    $courses = [

        [
            "image" => asset('images/program-placeholder.webp'),
            "icon" => [
                "src" => asset('images/icon/icon_learn.webp'),
                "text" => 'Learning Package'
            ],
            "title" => "English Conversation Mastery",
            "description" => "Cara mudah belajar speaking untuk percakapan sehari-hari",
            "price" => 332000,
            "discount" => [
                "amount" => 60,
                "prev_price" => "830000"
            ]
        ],

    ];

    for ($i = 0; $i < 10; $i++) {
        $courses[] = $courses[0];
    }

@endphp

<x-common.content-container>

    <h2 class="text-center font-bold text-3xl">Program Rekomendasi Terbaik</h2>
    <p class="text-center text-neutral-dark mt-4 mb-10">Coba pengalaman belajar bahasa Inggris super seru dengan program
        rekomendasi Learning
        Consultant kami.</p>

    <div class="swiper" id="pr-swiper">
        <div class="swiper-wrapper">

            @foreach ($courses as $course)

                <div class="swiper-slide">
                    <x-common.card>
                        <img src="{{ $course['image'] }}" alt="">
                        <div class="p-3">
                            <div
                                class="flex w-max align-center px-2 py-1 mb-1 rounded-lg bg-primary-lightblue text-primary-blue1">
                                <img class="h-5 mr-1" src="{{ $course['icon']['src'] }}" alt="">
                                <p class="font-semibold text-[11px] leading-5">{{ $course['icon']['text'] }}</p>
                            </div>
                            <h3 class="font-semibold text-lg">{{ $course['title'] }}</h3>

                            <p class="py-2">{{ $course['description'] }}</p>
                            <p class="font-bold text-lg">{{ 'Rp' . number_format($course['price'], 0, ',', '.') }}</p>

                            <div class="mt-1">
                                <span
                                    class="bg-red-100 text-red-500 text-[11px] p-1 rounded-md font-semibold">{{ $course['discount']['amount'] }}%</span>
                                <span class="text-neutral-gray text-sm line-through decoration-red-500">
                                    {{ 'Rp' . number_format($course['price'], 0, ',', '.') }}
                                </span>
                            </div>

                            <button class="bg-primary-blue1 text-white text-sm font-semibold w-full rounded-md py-2 mt-4">
                                Lihat Kelas
                            </button>
                        </div>
                    </x-common.card>
                </div>
            @endforeach

        </div>

        <div class="swiper-pagination static! mt-4"></div>
    </div>

    <p class="my-10 text-primary-blue1 font-semibold flex justify-center">
        <span class="mt-1">Lihat semua kelas</span>
        <x-icons.right-arrow />
    </p>

</x-common.content-container>