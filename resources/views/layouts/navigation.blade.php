
<nav class="px-10 lg:px-20 py-4 items-center bg-white shadow-md">

    <div class="container mx-auto md:px-16 flex flex-wrap items-center">

        <a href="/" class="flex items-center">
            @if($navigation_settings['company_logo'])
                <img src="{{ $navigation_settings['company_logo']['permalink'] }}" class="mr-3 h-6 sm:h-10">
            @endif
        </a>

        <button id="menu-btn" type="button" class="inline-flex justify-center items-center ml-3 text-gray-400 rounded-lg lg:hidden hover:text-gray-900 focus:outline-none">
            <span class="sr-only">Open main menu</span>
            @includeIf('SVGs.menu')
        </button>

        <div id="desktop-menu" class="hidden lg:block w-auto">
            <ul class="flex flex-col lg:flex-row p-2 mt-0 bg-gray-50 rounded-lg border border-gray-100 space-x-10 text-sm font-medium lg:border-0 lg:bg-white">
                @foreach(Statamic::tag('nav:main_navigation') as $item)
                    <li class="flex items-center w-full py-2">
                        <a href="{{ $item['url'] }}" class="w-full block py-2 pr-4 pl-3 rounded lg:p-0 inline-flex justify-between">
                            <span class="whitespace-nowrap">{{ $item['title'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div id="mobile-menu" class="hidden block w-full h-full">
            <ul class="flex flex-col p-2 mt-0 text-sm font-medium">
                @foreach(Statamic::tag('nav:main_navigation') as $item)
                    <li class="flex items-center w-full py-2">
                        <a href="{{ $item['url'] }}" class="w-full block py-2 pr-4 pl-3 rounded lg:p-0 inline-flex justify-between">
                            <span class="whitespace-nowrap m-auto">{{ $item['title'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>

</nav>
