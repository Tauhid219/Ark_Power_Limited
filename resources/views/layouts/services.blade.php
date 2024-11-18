@extends('layouts.layout')
@section('main-content')
    <div class="min-h-screen">
        <div class="w-full max-w-screen-xl mx-auto p-5">
            <div class="md:mt-24 mt-14">
                <h1 class="text-primary text-center md:text-5xl text-3xl uppercase">Our Services</h1>
                <p class="text-primary text-center md:mt-2 text-xl md:uppercase mb-10 font-medium">We genuinely care about
                    our customers</p>
                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5">
                    <div class="md:border-r-2 p-5 hover:bg-gray-50 transition ease-in-out duration-300">
                        <h1 class="font-bold mb-3 text-xl flex items-center gap-2"><svg stroke="currentColor"
                                fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-primary"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M501.1 395.7L384 278.6c-23.1-23.1-57.6-27.6-85.4-13.9L192 158.1V96L64 0 0 64l96 128h62.1l106.6 106.6c-13.6 27.8-9.2 62.3 13.9 85.4l117.1 117.1c14.6 14.6 38.2 14.6 52.7 0l52.7-52.7c14.5-14.6 14.5-38.2 0-52.7zM331.7 225c28.3 0 54.9 11 74.9 31l19.4 19.4c15.8-6.9 30.8-16.5 43.8-29.5 37.1-37.1 49.7-89.3 37.9-136.7-2.2-9-13.5-12.1-20.1-5.5l-74.4 74.4-67.9-11.3L334 98.9l74.4-74.4c6.6-6.6 3.4-17.9-5.7-20.2-47.4-11.7-99.6.9-136.6 37.9-28.5 28.5-41.9 66.1-41.2 103.6l82.1 82.1c8.1-1.9 16.5-2.9 24.7-2.9zm-103.9 82l-56.7-56.7L18.7 402.8c-25 25-25 65.5 0 90.5s65.5 25 90.5 0l123.6-123.6c-7.6-19.9-9.9-41.6-5-62.7zM64 472c-13.2 0-24-10.8-24-24 0-13.3 10.7-24 24-24s24 10.7 24 24c0 13.2-10.7 24-24 24z">
                                </path>
                            </svg> Our Services</h1>
                        <p class="text-balance text-gray-600 leading-relaxed">We provide a wide range of essential products
                            designed to support critical functions in industrial, commercial, and residential sectors.
                            Our<span class="font-semibold"> Uninterruptible Power Supplies (UPS)</span>, both modular and
                            tower
                            configurations, ensure continuous, reliable power for sensitive devices. Additionally, our<span
                                class="font-semibold"> Automatic Voltage Regulators (AVR)</span> protect your equipment from
                            harmful
                            surges and fluctuations.</p>
                    </div>
                    <div class="md:border-r-2 p-5 hover:bg-gray-50 transition ease-in-out duration-300">
                        <h1 class="font-bold mb-3 text-xl flex items-center gap-2"><svg stroke="currentColor"
                                fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="text-primary"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M488 192H336v56c0 39.7-32.3 72-72 72s-72-32.3-72-72V126.4l-64.9 39C107.8 176.9 96 197.8 96 220.2v47.3l-80 46.2C.7 322.5-4.6 342.1 4.3 357.4l80 138.6c8.8 15.3 28.4 20.5 43.7 11.7L231.4 448H368c35.3 0 64-28.7 64-64h16c17.7 0 32-14.3 32-32v-64h8c13.3 0 24-10.7 24-24v-48c0-13.3-10.7-24-24-24zm147.7-37.4L555.7 16C546.9.7 527.3-4.5 512 4.3L408.6 64H306.4c-12 0-23.7 3.4-33.9 9.7L239 94.6c-9.4 5.8-15 16.1-15 27.1V248c0 22.1 17.9 40 40 40s40-17.9 40-40v-88h184c30.9 0 56 25.1 56 56v28.5l80-46.2c15.3-8.9 20.5-28.4 11.7-43.7z">
                                </path>
                            </svg> After Sale Services</h1>
                        <ul class="list-disc pl-5 text-gray-600 leading-relaxed">
                            <li>Comprehensive product training and support.</li>
                            <li>24/7 customer service for emergency assistance.</li>
                            <li>On-site maintenance and installation guidance.</li>
                            <li>Extended warranties and easy replacements.</li>
                            <li>Tailored solutions for unique customer requirements.</li>
                        </ul>
                    </div>
                    <div class="p-5 hover:bg-gray-50 transition ease-in-out duration-300">
                        <h1 class="font-bold mb-3 text-xl flex items-center gap-2"><svg stroke="currentColor"
                                fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="text-primary"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg> Featured Product</h1>
                        <div
                            class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md overflow-hidden p-3 border hover:shadow-2xl transition-transform duration-300 hover:scale-105">
                            <div
                                class="relative bg-clip-border overflow-hidden bg-transparent text-gray-700 shadow-none m-0 rounded-none">
                                <div class="relative h-44 rounded-lg overflow-hidden"><img
                                        src="{{ asset('/img/service_mushroom.jpeg') }}" alt="Product name"
                                        class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="text-center"><a
                                        class="md:text-lg text-primary font-semibold text-sm hover:underline transition duration-300"
                                        href="/">Product Name</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
