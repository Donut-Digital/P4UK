@extends('layouts.base')

@section('content')
    <section class="flex items-center h-full p-16">
        <div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
            <div class="max-w-md text-center">
                <h2 class="mb-8 font-extrabold text-9xl">
                    <span class="sr-only">Error</span>404
                </h2>
                <p class="text-2xl font-semibold md:text-3xl">Sorry, we couldn't find this page.</p>
                <p class="mt-4 mb-8">But dont worry, you can find plenty of other things on our homepage.</p>
                <a href="/" rel="noopener noreferrer" class="px-8 py-3 font-semibold rounded bg-primary text-white">Back to homepage</a>
            </div>
        </div>
    </section>
@endsection
