<!-- add space when navbar is shown -->
<div class="md:hidden h-13"></div>

<!-- bottom navbar (mobile only) -->
<nav class="fixed bottom-0 left-0 right-0 z-50 bg-white md:hidden">
    <div class="grid grid-cols-4 text-xs py-1">

        <a href="#" class="flex flex-col items-center justify-center text-primary-blue1">
            <span class="ei-home text-3xl"></span>
            <span>Home</span>
        </a>

        <a href="#" class="flex flex-col items-center justify-center">
            <span class="ei-my_class text-3xl text-neutral-lightgray"></span>
            <span>My Class</span>
        </a>

        <a href="#" class="flex flex-col items-center justify-center">
            <lottie-player src="{{ asset('images/lottie/diskon.json') }}" background="transparent" speed="1"
                style="width:30px;height:30px;" loop autoplay>
            </lottie-player>
            <span>Promo</span>
        </a>

        <a href="#" class="flex flex-col items-center justify-center">
            <span class="ei-payment text-3xl text-neutral-lightgray"></span>
            <span>Transaction</span>
        </a>

    </div>
</nav>