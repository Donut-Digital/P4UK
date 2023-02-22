<section class="bg-white">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-typo-primary">{{ $component['title'] }}</h2>
        <p class="mb-8 lg:mb-16 font-light text-center text-typo-secondary sm:text-xl">{{ $component['description'] }}</p>
        <form method="post" action="/!/forms/contact_form" class="space-y-8">
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-typo-primary">Your email</label>
                <input type="email" id="email" class="block p-2.5 w-full text-sm text-typo-primary bg-gray-50 rounded-lg border border-gray-300 shadow-sm" placeholder="name@flowbite.com" required>
            </div>
            <div>
                <label for="subject" class="block mb-2 text-sm font-medium text-typo-primary">Subject</label>
                <input type="text" id="subject" class="block p-3 w-full text-sm text-typo-primary bg-gray-50 rounded-lg border border-gray-300 shadow-sm" placeholder="Let us know how we can help you" required>
            </div>
            <div class="sm:col-span-2">
                <label for="message" class="block mb-2 text-sm font-medium text-typo-primary">Your message</label>
                <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-typo-primary bg-gray-50 rounded-lg border border-gray-300 shadow-sm" placeholder="Leave a comment..."></textarea>
            </div>
            <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary">Send message</button>
        </form>
    </div>
</section>