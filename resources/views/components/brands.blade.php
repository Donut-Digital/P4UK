<section id="brands" class="py-20 mt-1 container mx-auto">

    <h1 class="px-4"> {{ $component['label'] }} </h1>
    <hr class="w-[200px] m-auto bg-[#444] h-[3px] mt-2 mb-4 px-4">
    <p class="px-4"> {{ $component['description'] }} </p>

    <div class="flex flex-col lg:flex-row mt-10 lg:mt-4">
        @foreach($component['brands'] as $brand)
            <div class="brand px-4 group relative mb-5 lg:mb-0">

                <div class="flex flex-col justify-center text-center space-y-5 p-5 lg:hidden" style="background-color: {{ $brand['brand_colour'] }}">
                    <h2>{{ $brand['brand_name'] }}</h2>
                    <p>{{ $brand['brand_description'] }}</p>
                    <a class="border-2 border-white w-max m-auto py-2.5 px-5" href="{{ $brand['brand_link'] }}">{{ $brand['brand_link_label'] }}</a>
                </div>

                <img class="h-full object-cover" src="{{ $brand['brand_image']['permalink'] }}" alt="{{ $brand['brand_image']['alt'] }}" width="900" height="1600">

                <div class="hidden lg:block absolute z-10 top-0 left-0 w-full h-full px-4">
                    <div class="w-full h-full opacity-0 group-hover:opacity-90 transition-all ease-in-out duration-500" style="background-color: {{ $brand['brand_colour'] }}">
                        <div class="h-full flex flex-col justify-center text-center space-y-2 xl:space-y-5 px-5">
                            <h2>{{ $brand['brand_name'] }}</h2>
                            <p>{{ $brand['brand_description'] }}</p>
                            <a class="border-2 border-white w-max m-auto py-2.5 px-5 hover:bg-white hover:text-black transition-all ease-in-out duration-300" href="{{ $brand['brand_link'] }}">{{ $brand['brand_link_label'] }}</a>
                        </div>
                    </div>
                </div>

            </div>

        @endforeach
    </div>

</section>