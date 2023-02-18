<footer>
    <div class="flex flex-wrap justify-center bg-[#F2F2F2] space-x-5 py-2">
        <p>Tel: <span>{{ $company_details['telephone'] }}</span></p>
        <p>Email: <span>{{ $company_details['email'] }}</span></p>
        <p>Out of Hours Contact: <span>{{ $company_details['out_of_hours_contact'] }}</span></p>
    </div>
    <div class="flex flex-wrap justify-center py-3 divide-x">
        @foreach(Statamic::tag('nav:footer_navigation') as $item)
            <a href="{{ $item['url'] }}" class="px-2 hover:text-typo-support">{{ $item['title'] }}</a>
        @endforeach
    </div>

</footer>
