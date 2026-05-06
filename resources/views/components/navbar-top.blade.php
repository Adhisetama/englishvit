@php
    $mobile_navs = [
        ["icon" => "login", "text" => "Masuk", "selected" => true, "fill" => true],
        ["icon" => "register", "text" => "Buat Akun", "selected" => true, "fill" => true],
        ["icon" => "grid", "text" => "Daftar Kursus", "selected" => false, "fill" => false],
        ["icon" => "article", "text" => "Blog", "selected" => false, "fill" => false],
        ["icon" => "unlock", "text" => "Kebijakan privasi", "selected" => false, "fill" => false],
        ["icon" => "file_warning", "text" => "Syarat dan ketentuan", "selected" => false, "fill" => false],
        ["icon" => "faq", "text" => "Pertanyaan umum", "selected" => false, "fill" => false],
        ["icon" => "chat", "text" => "Kontak", "selected" => false, "fill" => false],
    ];

    $desktop_navs = [
        ["text" => "Beranda", "selected" => true],
        [
            "text" => "Daftar Kursus",
            "selected" => false,
            "children" => [
                ["text" => "Live Class"],
                ["text" => "One on One"],
                ["text" => "Certification Test"],
                ["text" => "Learning Package"],
                ["text" => "Smart Book"],
                ["text" => "Subscription"],
            ]
        ],
        ["text" => "Blog", "selected" => false],
        ["text" => "Promo", "selected" => false],
        ["text" => "Karir", "selected" => false]
    ];
@endphp

<nav x-data="{ open: false }" class="bg-primary-darkblue text-white">
    <x-common.content-container class="py-2 md:py-4 md:pr-2 flex justify-between items-center overflow-visible">

        <img src="{{ asset('images/logo-white.svg') }}" class="lg:h-10" alt="">

        <div class="flex items-center space-x-3">

            <!-- dekstop nav -->
            <div class="hidden md:flex items-center">
                @foreach ($desktop_navs as $index => $nav)
                    <div class="relative" x-data="{open: false}" x-on:click="open = !open">
                        <a href="#"
                            class="px-4 py-2 text-md cursor-pointer hover:text-neutral-300 {{ $nav['selected'] ? 'text-neutral-300' : '' }}">
                            {{ $nav['text'] }}
                            @if (isset($nav['children']))
                                <span class="ei-chevron_down"></span>
                            @endif
                        </a>

                        @if (isset($nav['children']))
                            <div x-cloak x-show="open" x-transition
                                class="absolute left-0 py-2 w-48 bg-white border rounded-lg shadow-xl">

                                @foreach ($nav['children'] as $child)
                                    <a href="#"
                                        class="block px-4 py-1 text-md text-black hover:bg-primary-paleblue transition-colors">
                                        {{ $child['text'] }}
                                    </a>
                                @endforeach

                            </div>
                        @endif

                    </div>
                @endforeach
            </div>

            <button class="bg-primary-blue1 text-white px-6 md:py-2 py-1 font-bold rounded-md">
                Masuk
            </button>

            <button @click="open = !open" class="md:hidden p-2">
                <x-icons.burger />
            </button>

        </div>
    </x-common.content-container>

    <!-- mobile nav -->
    <div x-show="open" x-transition:leave="duration-50" class="fixed inset-0 bg-black/40 md:hidden">

        <button class="text-neutral-dark text-center bg-white h-8 w-8 fixed top-3 right-3 rounded-full" x-transition
            x-show="open" x-on:click="open = !open">
            <x-icons.cross class="m-auto" />
        </button>

        <div x-show="open" x-transition:enter="transition transform duration-200"
            x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition transform duration-50" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full" class="fixed top-0 left-0 right-14 md:hidden flex">
            <div class="bg-white shadow-xl flex-1 rounded-b-xl pb-6">
                @foreach ($mobile_navs as $link)
                    <div class="px-6 {{ $link['fill'] ? 'bg-primary-lightblue' : '' }}">
                        <a href="#"
                            class="flex align-top text-sm {{ $link['fill'] ? '' : 'border-b' }} py-4 border-neutral-300 {{ $link['selected'] ? 'text-primary-blue1 font-bold' : 'text-neutral-darkgray' }}">
                            <span
                                class="ei-{{ $link['icon'] }} {{ $link['selected'] ? 'text-primary-blue1' : 'text-neutral-gray' }} text-3xl"></span>
                            <span class="ml-2 mt-1">{{ $link['text'] }}</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</nav>