<div x-data="{ paused: false }" x-on:mouseenter="paused = true" x-on:mouseleave="paused = false" {{ $attributes->merge([
    'class' => 'relative overflow-hidden'
]) }}>
    <div class="flex w-max gap-4 animate-marquee" x-bind:style="{ animationPlayState: paused ? 'paused' : 'running' }">

        {{ $slot }}
        {{ $slot }}

    </div>
</div>