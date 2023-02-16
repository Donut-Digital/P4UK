<footer>
    <div>
        <div class="container mx-auto px-14 py-6">
            <div class="md:flex md:justify-between">

                <div class="mb-6 md:mb-0">
                    <a href="#" class="flex items-center px-2 w-max">
                        @if($navigation_settings['footer_company_logo'])
                            <img src="{{ $navigation_settings['footer_company_logo']['permalink'] }}" class="mr-3 h-8">
                        @endif
                        <span class="self-center text-2xl font-semibold whitespace-nowrap">{{ $company_details['company_name'] }}</span>
                    </a>
                </div>

                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    @foreach(Statamic::tag('nav:footer_navigation') as $item)
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">{{ $item['title'] }}</h2>
                        </div>
                    @endforeach
                </div>
            </div>

            <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8">

            <div class="flex flex-col sm:flex-row items-center sm:justify-between">
                <span class="text-sm text-gray-500 text-center">© 2022 <a href="#" class="hover:text-primary">{{ $company_details['company_name'] }}™</a>. All Rights Reserved.</span>
            </div>
        </div>
    </div>
</footer>
