<section class="bg-white">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-typo-primary">{{ $component['title'] }}</h2>
        <p class="mb-8 lg:mb-16 font-light text-center text-typo-secondary sm:text-xl">{{ $component['description'] }}</p>

        <contact-us csrf="{{ csrf_token() }}"></contact-us>
    </div>
</section>