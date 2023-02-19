
<nav class="py-5 relative px-5 md:px-0">

    <div class="container m-auto flex justify-between">
        <a href="/" aria-label="return to P4UK homepage">
            @if($navigation_settings['company_logo'])
                <img src="{{ $navigation_settings['company_logo']['permalink'] }}" alt="{{ $navigation_settings['company_logo']['alt'] }}" class=" mr-20 w-28 h-28">
            @endif
        </a>

        <div id="desktop-menu" class="hidden lg:flex w-full">
            <ul class="flex flex-row w-full">

                <li class="flex items-center w-full group cursor-pointer">
                    <div class="w-full block">
                        <i class="opacity-0 group-hover:opacity-100 text-primary w-full text-center fa-solid fa-phone transition-all ease-in-out duration-300"></i>
                        <h2 class="w-full text-center group-hover:text-primary transition-all ease-in-out duration-300">Call us today</h2>
                        <p class="w-full text-center">{{ $company_details['telephone'] }}</p>
                    </div>
                </li>

                @foreach(Statamic::tag('nav:main_navigation') as $item)
                    <li class="flex items-center w-full group" data-sup-col="{{$item['support_color']}}">
                        <a href="{{ $item['url'] }}" class="w-full block" style="color:{{$item['support_color']}}">

                            @if($item['icon'] == 'flame')
                                <i class="opacity-0 group-hover:opacity-100 w-full text-center fa-sharp fa-solid fa-fire-flame-curved transition-all ease-in-out duration-300 group-hover:text-current"></i>
                            @elseif($item['icon'] == 'bone')
                                <i class="opacity-0 group-hover:opacity-100 w-full text-center fa-solid fa-bone transition-all ease-in-out duration-300 group-hover:text-current"></i>
                            @elseif($item['icon'] == 'gamepad')
                                <i class="opacity-0 group-hover:opacity-100 w-full text-center fa-solid fa-gamepad transition-all ease-in-out duration-300 group-hover:text-current"></i>
                            @endif

                            <h2 class="w-full text-center group-hover:text-current transition-all ease-in-out duration-300">{{ $item['title'] }}</h2>
                            <p class="w-full text-center">{{ $item['label'] }}</p>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <button id="menu-btn" type="button" class="text-gray-400 hover:text-gray-900 lg:hidden">

            <div class="relative w-8 h-8">
                <div id="menu-btn-1" class="absolute transition-all ease-in-out duration-300">
                    @includeIf('SVGs.menu')
                </div>

                <div id="menu-btn-2" class="rotate-90 absolute transition-all ease-in-out duration-300 opacity-0">
                    @includeIf('SVGs.menu')
                </div>
            </div>

        </button>
    </div>

    <div id="mobile-menu" class="hidden block w-full absolute bg-white left-0 shadow-md">
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
</nav>
