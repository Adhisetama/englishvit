@php

    $faq = [
        [
            "title" => "Apa itu Englishvit?",
            "content" => "Englishvit adalah institusi dibawah naungan PT Sinergi Insan Andalan yang bergerak pada industri education technology yang secara spesifik mengembangkan pelatihan kemampuan bahasa Inggris aktif dengan metode praktikal dan aplikatif."
        ],
        [
            "title" => "Sejak kapan Englishvit didirikan?",
            "content" => "Englishvit mulai beroperasi sejak September 2018, sampai saat ini kami sudah membantu lebih dari 100.000 students mengakselerasi skill bahasa Inggris aktif mereka dengan lima layanan utama (Live Class, Learning Package, One on One English, Certification Test dan Englishvit Store)."
        ],
        [
            "title" => "Mengapa saya harus kursus di Englishvit?",
            "content" => "Belajar di Englishvit akan memberikan pengalaman yang berbeda, karena kami mengusung model pembelajaran aplikatif dan terapan. Kamu belajar berkomunikasi menggunakan bahasa Inggris, bukan menghafal rumus dan rumus lagi. <b>No more theories, let's practice!</b>"
        ],
    ];

    $faq = array_merge($faq, $faq, $faq)

@endphp

<x-common.content-container class="bg-primary-paleblue py-15">

    <h2 class="text-neutral-dark font-bold text-2xl md:text-3xl text-center">Frequently Asked Questions</h2>
    <p class="text-center mt-2">
        Berikut adalah beberapa pertanyaan umum yang sering diajukan oleh customer kepada Englishvit
    </p>

    <div x-data="{ active: null }" class="space-y-4 md:px-15 lg:px-24 mt-15">


        @foreach ($faq as $item)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <button x-on:click="active = active === {{ $loop->index }} ? null : {{ $loop->index }}"
                    class="w-full flex items-center justify-between p-5 font-semibold">
                    <span class="text-left">{{ $item['title'] }}</span>

                    <span class="text-3xl text-primary-blue1 transition-transform duration-300"
                        x-bind:class="active === {{ $loop->index }} ? 'rotate-180 ei-chevron_down_circle' : 'ei-add_circle'"></span>
                </button>

                <div x-show="active === {{ $loop->index }}" x-collapse>
                    <div class="bg-primary-paleblue p-5 text-sm">
                        {{ $item['content'] }}
                    </div>
                </div>
            </div>
        @endforeach


    </div>

</x-common.content-container>