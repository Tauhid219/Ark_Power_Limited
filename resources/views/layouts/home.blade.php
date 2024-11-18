@extends('layouts.layout-home')
@section('main-content')
    <div id="background-section"
        class="relative min-h-screen overflow-hidden bg-cover bg-center transition-all duration-1000">
        <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Black shadow overlay -->

        <div class="w-full max-w-screen-xl mx-auto h-screen flex items-center relative z-10">
            <div class="text-center md:text-left p-5 md:w-1/2 bg-transparent backdrop-blur-[1px]">
                <p class="text-xl text-white">Welcome to</p>
                <h1 class="my-3 text-[#19ADEE] md:text-5xl text-3xl md:font-bold font-semibold uppercase ">Ark Power Limited
                </h1>
                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium libero fugiat
                    magnam. Natus fugit
                    deserunt dignissimos blanditiis id tempore praesentium veritatis? Ad, rerum. Veniam, iusto illo dolorum
                    recusandae sint dolorem?</p>
                <div>
                    <a href="/about-us">
                        <button
                            class="btn-primary mt-5 md:mb-0 mb-10 text-black text-blod text-xl bg-slate-100 p-3 rounded-lg">About
                            Us</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // JavaScript to rotate background images
        const images = [
            'url("{{ asset('img/bg_h_1.jpg') }}")',
            'url("{{ asset('img/bg_h_2.jpg') }}")',
            'url("{{ asset('img/bg_h_3.jpg') }}")'
        ];

        let currentImageIndex = 0;

        function changeBackground() {
            const section = document.getElementById('background-section');
            section.style.backgroundImage = images[currentImageIndex];

            // Move to the next image in the array
            currentImageIndex = (currentImageIndex + 1) % images.length;
        }

        // Set interval to change background every 5 seconds
        setInterval(changeBackground, 5000);

        // Initial background setup
        changeBackground();
    </script>


    {{-- Swipper end --}}

    <div class="mx-auto container my-10">
        <div class="relative ">
            <div class="md:grid grid-cols-2 gap-10 mt-10 md:mt-16 w-full max-w-screen-xl p-5 mx-auto">
                <div class="relative w-full h-[330px] md:h-[500px] overflow-hidden rounded-lg shadow-lg">
                    <div class="absolute top-0 left-0 w-full h-full transition-opacity duration-1000 ease-in-out">
                        <img src="{{ asset('/img/home_photo_1.jpeg') }}" alt="Slide 0"
                            class="w-full h-full object-cover rounded-lg" />
                    </div>
                </div>
                <div class="space-y-5 p-5 md:p-10 rounded-lg shadow-lg">
                    <h1 class="text-primary hidden md:block text-xl md:text-4xl text-[#19ADEE]">WELCOME TO <br> ARK POWER
                        LIMITED</h1>
                    <h2 class="text-primary ">WE SUPPORT ALL YOUR NEEDS!</h2>
                    <p class="leading-6 text-gray-700 ">Ark Power is a leading integrated Power,
                        Electronic &amp; communication technology company that develops, manufactures,
                        markets and sells the related equipments. The Company is dedicated to improving
                        power protection &amp; generation all the sectors throughout the Bangladesh. Ark
                        is focused on improving timely delivery, enhancing the quality and customers
                        satisfaction. Located at a prime business location at Banani, Dhaka, the Capital
                        of Bangladesh.</p>
                    <div class="flex justify-center md:justify-start"><a
                            class="bg-blue-500 text-white font-semibold py-3 px-8 rounded-full shadow-lg hover:bg-blue-600 transition duration-300"
                            href="/about-us">Learn More</a></div>
                </div>
            </div>
        </div>

        <div class="min-h-[70vh] flex items-center justify-center p-5 w-full max-w-screen-xl mx-auto">
            <div>
                <h1 class="text-primary md:text-4xl text-2xl text-center my-10">Products and Services
                </h1>
                <div class="grid md:grid-cols-4 grid-cols-2 md:gap-10 gap-2 justify-center items-center text-center">
                    <div class="flex flex-col items-center p-4">
                        <div class="w-16 h-16 mb-5 overflow-hidden"><img
                                class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://cdn-icons-png.freepik.com/512/5388/5388782.png" alt="Security System">
                        </div>
                        <h1 class="md:text-2xl text-xl md:font-bold text-center">Security System</h1>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Perspiciatis, quis.</p>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <div class="w-16 h-16 mb-5 overflow-hidden"><img
                                class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://cdn-icons-png.freepik.com/512/2114/2114385.png" alt="Solar System"></div>
                        <h1 class="md:text-2xl text-xl md:font-bold text-center">Solar System</h1>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Perspiciatis, quis.</p>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <div class="w-16 h-16 mb-5 overflow-hidden"><img
                                class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://cdn-icons-png.flaticon.com/512/4824/4824945.png" alt="Transformer"></div>
                        <h1 class="md:text-2xl text-xl md:font-bold text-center">Transformer</h1>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Perspiciatis, quis.</p>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <div class="w-16 h-16 mb-5 overflow-hidden"><img
                                class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://img.freepik.com/premium-vector/generator-icon-logo-vector-design-template_827767-4583.jpg"
                                alt="Generator"></div>
                        <h1 class="md:text-2xl text-xl md:font-bold text-center">Generator</h1>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Perspiciatis, quis.</p>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <div class="w-16 h-16 mb-5 overflow-hidden"><img
                                class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://static.thenounproject.com/png/2301592-200.png" alt="Data Center"></div>
                        <h1 class="md:text-2xl text-xl md:font-bold text-center">Data Center</h1>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Perspiciatis, quis.</p>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <div class="w-16 h-16 mb-5 overflow-hidden"><img
                                class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://icons.veryicon.com/png/o/construction-tools/equipment-2/ups-1.png"
                                alt="UPS"></div>
                        <h1 class="md:text-2xl text-xl md:font-bold text-center">UPS</h1>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Perspiciatis, quis.</p>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <div class="w-16 h-16 mb-5 overflow-hidden"><img
                                class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://cdn-icons-png.flaticon.com/512/48/48860.png" alt="Communication Equipment">
                        </div>
                        <h1 class="md:text-2xl text-xl md:font-bold text-center">Communication
                            Equipment</h1>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Perspiciatis, quis.</p>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <div class="w-16 h-16 mb-5 overflow-hidden"><img
                                class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://cdn5.vectorstock.com/i/1000x1000/35/29/power-voltage-regulator-icon-simple-vector-41053529.jpg"
                                alt="Automatic Voltage Regulator"></div>
                        <h1 class="md:text-2xl text-xl md:font-bold text-center">Automatic Voltage
                            Regulator</h1>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Perspiciatis, quis.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="min-h-[70vh] flex items-center justify-center p-5 mt-10 w-full max-w-screen-xl mx-auto">
            <div>
                <div class="grid md:grid-cols-2 gap-20">
                    <div>
                        <h1 class="text-2xl font-bold uppercase mb-7">News and event</h1>
                        @if ($latestPosts->isNotEmpty())
                            <div
                                class="scrollbar-thin scrollbar-thumb-rounded scrollbar-thumb-slate-300 scrollbar-w-2 scrollbar-track-transparent overflow-y-auto h-[42vh] border rounded-lg space-y-4 pr-3">
                                @foreach ($latestPosts as $news)
                                    <a href="{{ route('newsdetails', $news->id) }}">
                                        <div class="">
                                            <div
                                                class="flex items-center justify-between gap-5 border-b hover:text-[#00ADF2] ">
                                                <h1 class="text-xl font-bold p-3">{{ $news->title }}</h1><svg
                                                    stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    viewBox="0 0 448 512" class="text-2xl" height="1em" width="1em"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        @else
                            <p class="text-center p-4">No news available at the moment.</p>
                        @endif
                    </div>
                    @livewire('management-tabs')
                </div>
            </div>
        </div>

        {{-- Affiliations --}}
        <div class="p-5 w-full max-w-screen-xl mx-auto">
            <div class="w-full max-w-screen-xl mx-auto">
                <h1 class="text-2xl font-bold uppercase mb-7 text-center">Our Affiliations</h1>
                @if ($affiliations->isNotEmpty())
                    <swiper-container class="mySwiper" slides-per-view="6" space-between="10" free-mode="true"
                        loop="true">
                        @foreach ($affiliations as $affiliation)
                            <swiper-slide class="swiper-slide">
                                <img src="{{ asset('storage/' . $affiliation->logo) }}" alt="Affiliation Logo"
                                    class="w-24 h-24 object-contain">
                            </swiper-slide>
                        @endforeach
                    </swiper-container>
                @else
                    <p class="text-center text-gray-500 font-medium">No affiliations to display at the moment.</p>
                @endif
            </div>
        </div>

        {{-- Affiliations End --}}
    </div>
@endsection
