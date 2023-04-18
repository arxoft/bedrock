@extends('layouts.front-page')

@section('content')
    {{-- {# THREE PICS #} --}}
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
            <div class="grid-cols-1 grid gap-6 md:grid-cols-3">
                <a class="group h-80 flex items-end bg-gray-100 overflow-hidden shadow-lg relative p-4 rounded-global lg:h-[450px] xl:h-[600px] 2xl:h-[700px]"
                    href="#"><img
                        class="object-cover w-full h-full object-center absolute inset-0 group-hover:scale-110 transition duration-200 bg-gray-50"
                        alt="No alt"
                        src="https://images.unsplash.com/photo-1655635949348-953b0e3c140a?ixlib=rb-4.0.3&amp;amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=3308&amp;amp;q=80" />
                    <div
                        class="bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50 absolute inset-0 pointer-events-none">
                    </div>
                    <div class="flex flex-col relative">
                        <span class="text-gray-300">Home</span>
                        <span class="text-white text-lg lg:text-xl font-semibold">Bicycle</span>
                    </div>
                </a>
                <a class="group h-80 flex items-end overflow-hidden shadow-lg relative p-4 rounded-global bg-gray-50 lg:h-[450px] xl:h-[600px] 2xl:h-[700px]"
                    href="#"><img
                        class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200"
                        alt="No alt"
                        src="https://images.unsplash.com/photo-1655635131607-3202827a52a2?ixlib=rb-4.0.3&amp;amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=2532&amp;amp;q=80" />
                    <div
                        class="bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50 absolute inset-0 pointer-events-none">
                    </div>
                    <div class="flex flex-col relative">
                        <span class="text-gray-300">Modern</span>
                        <span class="text-white text-lg lg:text-xl font-semibold">e-Bike</span>
                    </div>
                </a>
                <a class="group h-80 flex items-end overflow-hidden shadow-lg relative p-4 rounded-global bg-gray-50 lg:h-[450px] xl:h-[600px] 2xl:h-[700px]"
                    href="#"><img
                        class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200"
                        alt="No alt"
                        src="https://images.unsplash.com/photo-1655635131607-3202827a52a2?ixlib=rb-4.0.3&amp;amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=2532&amp;amp;q=80" />
                    <div
                        class="bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50 absolute inset-0 pointer-events-none">
                    </div>
                    <div class="flex flex-col relative">
                        <span class="text-gray-300">Modern</span>
                        <span class="text-white text-lg lg:text-xl font-semibold">e-Bike</span>
                    </div>
                </a>
            </div>
        </div>
    </div>


    {{-- {# FEATURES #} --}}
    <div class="py-6">

        <div class="grid container mx-auto px-4 grid-cols-1 border-b-2 md:grid-cols-3">
            <div class="text-center mb-[52px] md:w-5/6 md:mx-auto md:max-w-2xl">
                <span class="mx-auto text-black w-[50px]">
                    <span class="mx-auto text-black w-[50px]">
                        <svg class="mx-auto text-black w-[50px]" class="mx-auto text-black w-[50px]"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            id="Layer_1" x="0px" y="0px" viewbox="0 0 499.8 499.8"
                            style="enable-background:new 0 0 499.8 499.8;" xml:space="preserve">
                            <g>
                                <polygon
                                    points="411.89,274.955 397.31,289.335 471.04,364.065 397.31,438.795 411.89,453.175 499.8,364.065"
                                    fill="currentColor"></polygon>
                            </g>
                            <g>
                                <polygon
                                    points="102.48,289.335 87.9,274.955 0,364.065 87.9,453.175 102.48,438.795 28.76,364.065"
                                    fill="currentColor"></polygon>
                            </g>
                            <g>
                                <path
                                    d="M409.83,46.625H89.97l-57.33,114.66l217.26,217.26l217.26-217.26L409.83,46.625z M397.17,67.105l40.96,81.92H326.843 l-13.656-81.92H397.17z M207.373,67.105h85.054l13.656,81.92H193.717L207.373,67.105z M102.63,67.105h83.983l-13.656,81.92H61.67 L102.63,67.105z M69.82,169.505h104.434l52.22,156.654L69.82,169.505z M195.834,169.505h108.133L249.9,331.696L195.834,169.505z M273.326,326.159l52.22-156.654H429.98L273.326,326.159z"
                                    fill="currentColor"></path>
                            </g>
                        </svg>
                    </span>
                </span>
                <h1
                    class="tracking-tighter text-black text-center dark:text-white text-2xl leading-10 my-[25px] font-semibold md:leading-[25px]">
                    No hassle</h1>
                <p class="text-center mt-2 text-base leading-6 tracking-tighter">It is a long established fact that a reader
                    will be distracted by the readable content of a page when looking at its layout</p>
            </div>
            <div class="text-center mb-[52px] md:w-5/6 md:mx-auto md:max-w-2xl">
                <span class="mx-auto text-black w-[50px]">
                    <span class="mx-auto text-black w-[50px]">
                        <svg class="mx-auto text-black w-[50px]" class="mx-auto text-black w-[50px]"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            id="Layer_1" x="0px" y="0px" viewbox="0 0 499.8 499.8"
                            style="enable-background:new 0 0 499.8 499.8;" xml:space="preserve">
                            <g>
                                <polygon
                                    points="411.89,274.955 397.31,289.335 471.04,364.065 397.31,438.795 411.89,453.175 499.8,364.065"
                                    fill="currentColor"></polygon>
                            </g>
                            <g>
                                <polygon
                                    points="102.48,289.335 87.9,274.955 0,364.065 87.9,453.175 102.48,438.795 28.76,364.065"
                                    fill="currentColor"></polygon>
                            </g>
                            <g>
                                <path
                                    d="M409.83,46.625H89.97l-57.33,114.66l217.26,217.26l217.26-217.26L409.83,46.625z M397.17,67.105l40.96,81.92H326.843 l-13.656-81.92H397.17z M207.373,67.105h85.054l13.656,81.92H193.717L207.373,67.105z M102.63,67.105h83.983l-13.656,81.92H61.67 L102.63,67.105z M69.82,169.505h104.434l52.22,156.654L69.82,169.505z M195.834,169.505h108.133L249.9,331.696L195.834,169.505z M273.326,326.159l52.22-156.654H429.98L273.326,326.159z"
                                    fill="currentColor"></path>
                            </g>
                        </svg>
                    </span>
                </span>
                <h1
                    class="tracking-tighter text-black text-center dark:text-white text-2xl leading-10 my-[25px] font-semibold md:leading-[25px]">
                    Professional Support</h1>
                <p class="text-center mt-2 text-base leading-6 tracking-tighter">It is a long established fact that a reader
                    will be distracted by the readable content of a page when looking at its layout</p>
            </div>
            <div class="text-center mb-[52px] md:w-5/6 md:mx-auto md:max-w-2xl">
                <span class="mx-auto text-black w-[50px]">
                    <span class="mx-auto text-black w-[50px]">
                        <svg class="mx-auto text-black w-[50px]" class="mx-auto text-black w-[50px]"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            id="Layer_1" x="0px" y="0px" viewbox="0 0 499.8 499.8"
                            style="enable-background:new 0 0 499.8 499.8;" xml:space="preserve">
                            <g>
                                <polygon
                                    points="411.89,274.955 397.31,289.335 471.04,364.065 397.31,438.795 411.89,453.175 499.8,364.065"
                                    fill="currentColor"></polygon>
                            </g>
                            <g>
                                <polygon
                                    points="102.48,289.335 87.9,274.955 0,364.065 87.9,453.175 102.48,438.795 28.76,364.065"
                                    fill="currentColor"></polygon>
                            </g>
                            <g>
                                <path
                                    d="M409.83,46.625H89.97l-57.33,114.66l217.26,217.26l217.26-217.26L409.83,46.625z M397.17,67.105l40.96,81.92H326.843 l-13.656-81.92H397.17z M207.373,67.105h85.054l13.656,81.92H193.717L207.373,67.105z M102.63,67.105h83.983l-13.656,81.92H61.67 L102.63,67.105z M69.82,169.505h104.434l52.22,156.654L69.82,169.505z M195.834,169.505h108.133L249.9,331.696L195.834,169.505z M273.326,326.159l52.22-156.654H429.98L273.326,326.159z"
                                    fill="currentColor"></path>
                            </g>
                        </svg>
                    </span>
                </span>
                <h1
                    class="tracking-tighter text-black text-center dark:text-white text-2xl leading-10 my-[25px] font-semibold md:leading-[25px]">
                    Customization</h1>
                <p class="text-center mt-2 text-base leading-6 tracking-tighter">It is a long established fact that a reader
                    will be distracted by the readable content of a page when looking at its layout</p>
            </div>
        </div>

    </div>


    {{-- {# TEAM #} --}}
    <div class="py-6">
        <div class="px-4 py-12 mx-auto border-b-2 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8 lg:py-14">
            <div class="md:w-5/6 md:mx-auto md:max-w-2xl">
                <h1 class="text-slate-900 text-3xl text-center font-bold dark:text-white sm:text-4xl">Our Team</h1>
                <p class="text-center text-lg mt-2">It is a long established fact that a reader will be distracted by the
                    readable content of a page when looking at its layout</p>
            </div>
            <div class="grid gap-10 mx-auto mt-8 sm:grid-cols-2 lg:grid-cols-4 lg:max-w-screen-lg">

                @if (have_rows('blocks'))
                    @while (have_rows('blocks'))
                        @php(the_row())
                        @if (have_rows('heros'))
                            @while (have_rows('heros'))
                                @php(the_row())
                                <div class="">
                                    <div class="relative pb-56 mb-4 rounded-global shadow lg:pb-64">
                                        {!! wp_get_attachment_image(get_sub_field('image')['ID'], [333,333], false, [
                                            // 'style' => 'max-width: 120px;',
                                            'class' => 'absolute object-cover w-full h-full rounded-global bg-blue-100 object-center',
                                        ]) !!}
                                    </div>
                                    <div class="flex flex-col sm:text-center">
                                        <p class="text-lg font-bold text-slate-900 dark:text-slate-100">
                                            {!! get_sub_field('name') !!}</p>
                                        <p class="mb-5 text-sm">{!! get_sub_field('designation') !!}</p>
                                        <div class="flex items-center space-x-3 sm:justify-center">
                                            @if (have_rows('social_media'))
                                                @while (have_rows('social_media'))
                                                    @php(the_row())
                                                    <a class="transition-colors duration-300 hover:text-deep-purple-accent-400"
                                                        href="{!! get_sub_field('url') !!}">
                                                        <span class="h-5">
                                                            <i class="fab fa-{!! strtolower(get_sub_field('platform')) !!}"></i>
                                                        </span>
                                                    </a>
                                                @endwhile
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endwhile
                            @endif
                        @endwhile
                    @endif
            </div>
        </div>
    </div>


    {{-- {# QUOTATION #} --}}
    <div class="my-20">
        <div class="max-w-[700px] mx-auto px-5">
            <p class="text-center text-2xl leading-[38px]">“Lambda managed everything from furniture selection, purchase,
                delivery and assembly, and have been a pleasure working with”</p>
            <p
                class="tracking-tighter text-center uppercase text-primary my-5 text-[11px] leading-4 font-bold md:text-xs md:leading-6">
                Cameron Williamson</p>
        </div>
    </div>


    {{-- {# OUR STORY #} --}}
    <div class="grid-cols-2 gap-x-[131px] bg-secondary py-10 block xl:grid">
        <div class="flex flex-col justify-center px-4">
            <p
                class="tracking-tighter uppercase text-primary my-5 text-[11px] leading-4 font-bold text-center md:text-xs md:leading-6 xl:text-left">
                OUR STORY</p>
            <h1
                class="tracking-tighter font-bold font-heading text-[39.5px] leading-[44.5px] text-center text-black lg:text-[47px] lg:leading-[53px] xl:text-5xl xl:leading-[56px] xl:text-left">
                Your office design identity</h1>
            <p class="py-4 text-center xl:text-left">Work with an office interior designer to create the perfect looking
                office space.</p>
            <p class="py-4 text-center xl:text-left">Our office interior design service is an affordable way for you to
                choose the right look for your space and most efficient floor plan for your chosen furniture.</p>
            <div class="px-3 xl:px-0">
                <ul class="items-center flex flex-col justify-center gap-2 md:flex-row xl:justify-start">
                    <li class="">
                        <a class="inline-flex items-center justify-center h-12 px-6 tracking-wide text-white transition duration-200 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none bg-primary rounded-full text-[11px] leading-4 uppercase font-bold border-2 border-primary"
                            href="#">ESTIMATE PROJECT</a>
                    </li>
                    <li class="">
                        <a class="inline-flex items-center justify-center h-12 px-6 tracking-wide transition duration-200 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none rounded-full border-2 text-[11px] leading-4 uppercase font-bold"
                            href="#">GET INSPIRED</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="">
            <a class="group flex items-end overflow-hidden shadow-lg relative p-4 rounded-global bg-gray-50 my-4 h-[580px] w-full mx-auto px-4 lg:h-[450px] xl:h-[600px] 2xl:h-[700px]"
                href="#"><img
                    class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200"
                    alt="No alt"
                    src="https://images.unsplash.com/photo-1655635131607-3202827a52a2?ixlib=rb-4.0.3&amp;amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=2532&amp;amp;q=80" />
                <div
                    class="bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50 absolute inset-0 pointer-events-none">
                </div>
                <div class="flex flex-col relative">
                    <span class="text-gray-300">Modern</span>
                    <span class="text-white text-lg lg:text-xl font-semibold">e-Bike</span>
                </div>
            </a>
        </div>
    </div>


    {{-- {# PROCESS #} --}}
    <div class="py-10 block">
        <div class="px-4">
            <p
                class="tracking-tighter uppercase text-primary my-5 text-[11px] leading-4 font-bold text-center md:text-xs md:leading-6 xl:text-left">
                PROCESS</p>
            <h1
                class="tracking-tighter font-bold font-heading text-[39.5px] leading-[44.5px] text-center lg:text-[47px] lg:leading-[53px] xl:text-5xl xl:leading-[56px]">
                Office interior design made easy</h1>
            <p class="py-4 text-center">You can now design and furnish your office space at the click of a button.</p>
            <section class="py-10">
                <div class="mx-auto max-w-7xl">
                    <div class="flex flex-wrap">
                        <div class="p-4 md:w-1/2 xl:w-1/4">
                            <div class="dark:bg-gray-900">
                                <a class="" href="#"><img
                                        class="rounded object-cover object-center mb-2 w-full h-[206px] xl:mb-0"
                                        alt="No alt"
                                        src="https://images.unsplash.com/photo-1635324944940-0c0a9c8f9bf1?ixlib=rb-4.0.3&amp;amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8M2QlMjBzcXVhcmV8ZW58MHx8MHx8&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=800&amp;amp;q=60" /></a>
                                <div class="p-6 rounded-lg dark:divide-undefined">
                                    <h3
                                        class="text-xs font-medium title-font text-primary mb-2 text-center uppercase tracking-tighter">
                                        SUBTITLE</h3>
                                    <h2
                                        class="text-gray-900 title-font mb-0 font-heading dark:divide-undefined dark:divide-undefined dark:text-gray-200 text-center text-2xl leading-10 font-bold tracking-tighter">
                                        Take our style form</h2>
                                    <p class="text-center">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                                        hexagon disrupt edison bulbche.</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 md:w-1/2 xl:w-1/4">
                            <div class="dark:bg-gray-900">
                                <a class="" href="#"><img
                                        class="rounded object-cover object-center mb-2 w-full h-[206px] xl:mb-0"
                                        alt="No alt"
                                        src="https://images.unsplash.com/photo-1635324944940-0c0a9c8f9bf1?ixlib=rb-4.0.3&amp;amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8M2QlMjBzcXVhcmV8ZW58MHx8MHx8&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=800&amp;amp;q=60" /></a>
                                <div class="p-6 rounded-lg dark:divide-undefined">
                                    <h3
                                        class="text-xs font-medium title-font text-primary mb-2 text-center uppercase tracking-tighter">
                                        Step 2</h3>
                                    <h2
                                        class="text-gray-900 title-font mb-0 font-heading dark:divide-undefined dark:divide-undefined dark:text-gray-200 text-center text-2xl leading-10 font-bold tracking-tighter">
                                        Get an estimate</h2>
                                    <p class="text-center">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                                        hexagon disrupt edison bulbche.</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 md:w-1/2 xl:w-1/4">
                            <div class="dark:bg-gray-900">
                                <a class="" href="#"><img
                                        class="rounded object-cover object-center mb-2 w-full h-[206px] xl:mb-0"
                                        alt="No alt"
                                        src="https://images.unsplash.com/photo-1635324944940-0c0a9c8f9bf1?ixlib=rb-4.0.3&amp;amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8M2QlMjBzcXVhcmV8ZW58MHx8MHx8&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=800&amp;amp;q=60" /></a>
                                <div class="p-6 rounded-lg dark:divide-undefined">
                                    <h3
                                        class="text-xs font-medium title-font text-primary mb-2 text-center uppercase tracking-tighter">
                                        Step 3</h3>
                                    <h2
                                        class="text-gray-900 title-font mb-0 font-heading dark:divide-undefined dark:divide-undefined dark:text-gray-200 text-center text-2xl leading-10 font-bold tracking-tighter">
                                        Your project kicks off!</h2>
                                    <p class="text-center">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                                        hexagon disrupt edison bulbche.</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 md:w-1/2 xl:w-1/4">
                            <div class="dark:bg-gray-900">
                                <a class="" href="#"><img
                                        class="rounded object-cover object-center mb-2 w-full h-[206px] xl:mb-0"
                                        alt="No alt"
                                        src="https://images.unsplash.com/photo-1635324944940-0c0a9c8f9bf1?ixlib=rb-4.0.3&amp;amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8M2QlMjBzcXVhcmV8ZW58MHx8MHx8&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=800&amp;amp;q=60" /></a>
                                <div class="p-6 rounded-lg dark:divide-undefined">
                                    <h3
                                        class="text-xs font-medium title-font text-primary mb-2 text-center uppercase tracking-tighter">
                                        Step 4</h3>
                                    <h2
                                        class="text-gray-900 title-font mb-0 font-heading dark:divide-undefined dark:divide-undefined dark:text-gray-200 text-center text-2xl leading-10 font-bold tracking-tighter">
                                        Collaborate with designer</h2>
                                    <p class="text-center">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                                        hexagon disrupt edison bulbche.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="px-3 xl:px-0">
                <ul class="items-center flex flex-col justify-center gap-2 md:flex-row">
                    <li class="">
                        <a class="inline-flex items-center justify-center h-12 px-6 tracking-wide text-white transition duration-200 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none bg-primary rounded-full text-[11px] leading-4 uppercase font-bold border-2 border-primary"
                            href="#">ESTIMATE PROJECT</a>
                    </li>
                    <li class="">
                        <a class="inline-flex items-center justify-center h-12 px-6 tracking-wide transition duration-200 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none rounded-full border-2 text-[11px] leading-4 uppercase font-bold"
                            href="#">GET INSPIRED</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


@endsection
