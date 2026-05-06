@php

    $programs = [
        ["title" => "Live Class", "description" => "Kelas online tatap muka dengan tutor profesional.", "icon" => asset('images/icon/icon_live-class.webp')],
        ["title" => "One on One", "description" => "Belajar intensif dengan program private satu murid satu guru.", "icon" => asset('images/icon/icon_ooo.webp')],
        ["title" => "Certification Test", "description" => "Test sertifikasi kemampuan dengan standar yang diakui.", "icon" => asset('images/icon/icon_learn.webp')],
    ]

@endphp

<x-common.content-container class="py-16">
    <h2 class="text-neutral-dark font-semibold text-2xl text-center">Pilihan Program Belajar di Englishvit</h2>

    <div class="grid grid-cols-2 lg:flex gap-2 mt-8">

        @foreach ($programs as $program)        
            <x-common.card
                class="flex flex-col md:flex-row gap-2 px-2 py-4 text-center items-center md:text-left md:items-start">
                <img class="h-10 w-10" src="{{ $program['icon'] }}" alt="">
                <div>
                    <h4 class="text-sm font-bold mb-1">{{ $program['title'] }}</h4>
                    <p class="text-sm text-neutral-darkgray">{{ $program['description'] }}</p>
                </div>
            </x-common.card>
        @endforeach

        <x-common.card
            class="flex flex-col md:flex-row gap-5 md:gap-2 px-2 py-4 justify-center md:justify-start items-center text-primary-blue1 bg-primary-lightblue md:text-left lg:w-50">
            <img class="h-10 w-10" src="{{ asset('images/icon/icon_more.webp') }}" alt="">
            <h4 class="text-sm font-bold">Lainnya</h4>
        </x-common.card>

    </div>
</x-common.content-container>