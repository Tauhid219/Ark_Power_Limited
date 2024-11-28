@extends('layouts.layout')
@section('main-content')
    <div class=" min-h-screen">
        <div>
            {{-- <div
                class="bg-[url('https://images.squarespace-cdn.com/content/v1/5876d8d6e3df28c4d83ae377/1485224208084-2QZTQMXNZGNF72C4MWMO/dhaka+new+market+rickshaws+2.jpg')] bg-cover bg-center relative">
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 to-transparent"></div>
                <div class="relative p-5 py-16 text-white">
                    <h2 class="text-3xl container mx-auto md:text-6xl font-bold uppercase mt-14 md:mt-28">
                        Get in Touch with Us</h2>
                </div>
            </div> --}}
            <div class="w-full max-w-screen-xl mx-auto p-5">
                <div class="mt-14 md:mt-24">
                    <h1 class="text-primary text-center md:text-5xl text-3xl uppercase mb-7">
                        Our Contact Address</h1>
                    <div class="grid md:grid-cols-3 gap-12">
                        <div class="md:col-span-2 space-y-8">
                            <div class="grid md:grid-cols-2 gap-8">
                                <div
                                    class=" p-8 rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 border ">
                                    <h1 class="text-2xl font-bold mb-4 flex items-center"><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" viewBox="0 0 384 512"
                                            class="inline-block mr-3 text-3xl" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
                                            </path>
                                        </svg> Corporate Branch:</h1>
                                    @if ($siteData && $siteData->address)
                                        <p class="text-gray-700 leading-relaxed">{{ $siteData->address }}</p>
                                    @else
                                        <p class="text-gray-700 leading-relaxed">Data not available.</p>
                                    @endif
                                </div>
                                <div
                                    class=" p-8 rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 border ">
                                    <h1 class="text-2xl font-bold mb-4 flex items-center"><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" viewBox="0 0 384 512"
                                            class="inline-block mr-3 text-3xl" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
                                            </path>
                                        </svg> Business Branch:</h1>
                                    <p class="text-gray-700 leading-relaxed">House No #450, Road No #31
                                        <br>Mohakhali DOHS, Dhaka-1206.
                                    </p>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-3 gap-8">
                                <div
                                    class=" p-8 rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 border ">
                                    <h1 class="text-2xl font-bold mb-4 flex items-center"><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" viewBox="0 0 384 512"
                                            class="inline-block mr-3 text-3xl" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
                                            </path>
                                        </svg> Chattogram Office:</h1>
                                    <p class="text-gray-700 leading-relaxed">Road # 3, House # 4, Block # G,
                                        Halishahar H/E, Chattogram-4100.</p>
                                </div>
                                <div
                                    class=" p-8 rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 border ">
                                    <h1 class="text-2xl font-bold mb-4 flex items-center"><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" viewBox="0 0 384 512"
                                            class="inline-block mr-3 text-3xl" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
                                            </path>
                                        </svg> Khulna Office:</h1>
                                    <p class="text-gray-700 leading-relaxed">House No #16/E (GF), Road No
                                        #28, Nirala R/A, Khulna-9100.</p>
                                </div>
                                <div
                                    class=" p-8 rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 border ">
                                    <h1 class="text-2xl font-bold mb-4 flex items-center"><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" viewBox="0 0 384 512"
                                            class="inline-block mr-3 text-3xl" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
                                            </path>
                                        </svg> Bogura Office:</h1>
                                    <p class="text-gray-700 leading-relaxed">Haider Bhaban, Betgari, Bonani,
                                        Bogura.</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class=" p-8 rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 border  space-y-8">
                            <div class="">
                                <h1 class="text-2xl font-bold mb-4 flex items-center"><svg stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                        class="inline-block mr-3 text-3xl" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                                        </path>
                                    </svg> Hot Line:</h1>
                                @if ($siteData && $siteData->phoneNumber)
                                    <p class="text-gray-700 leading-relaxed">Sales – {{ $siteData->phoneNumber }} <br>
                                        Support – {{ $siteData->phoneNumber2 }}</p>
                                @else
                                    <p class="text-gray-700 leading-relaxed">Data not available.</p>
                                @endif
                            </div>
                            <div class="">
                                <h1 class="text-2xl font-bold mb-4 flex items-center"><svg stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 384 512"
                                        class="inline-block mr-3 text-3xl" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
                                        </path>
                                    </svg> Factory:</h1>
                                <p class="text-gray-700 leading-relaxed">Hortokitola, Kaliakoir, Gazipur.
                                </p>
                            </div>
                            <div class="">
                                <h1 class="text-2xl font-bold mb-4 flex items-center"><svg stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                        class="inline-block mr-3 text-3xl" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                        </path>
                                    </svg> E-mail:</h1>
                                @if ($siteData && $siteData->email)
                                    <p class="text-gray-700 leading-relaxed">{{ $siteData->email }}</p>
                                @else
                                    <p class="text-gray-700 leading-relaxed">Data not available.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="py-10">
                <div class="min-h-screen flex items-center justify-center p-6">
                    <form class="w-full md:max-w-2xl  rounded-3xl shadow-2xl p-10 space-y-6">
                        <h2 class="text-4xl font-bold text-center mb-8">Get in Touch
                        </h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="relative"><label class="text-gray-600 text-sm font-medium mb-2 block"
                                    for="fullName">Full Name</label>
                                <div class="flex items-center border-b border-gray-300"><svg stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 448 512"
                                        class="text-gray-400 mr-3" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z">
                                        </path>
                                    </svg><input type="text" id="fullName" name="fullName"
                                        class="w-full py-2 px-3 outline-none text-gray-700 focus:ring-0 "
                                        placeholder="Your Name"></div>
                            </div>
                            <div class="relative"><label class="text-gray-600 text-sm font-medium mb-2 block"
                                    for="email">Email Address</label>
                                <div class="flex items-center border-b border-gray-300"><svg stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                        class="text-gray-400 mr-3" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                        </path>
                                    </svg><input type="email" id="email" name="email"
                                        class="w-full py-2 px-3 outline-none text-gray-700 focus:ring-0 "
                                        placeholder="example@email.com"></div>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="relative"><label class="text-gray-600 text-sm font-medium mb-2 block"
                                    for="phone">Phone Number</label>
                                <div class="flex items-center border-b border-gray-300"><svg stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                        class="text-gray-400 mr-3" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                                        </path>
                                    </svg><input type="tel" id="phone" name="phone"
                                        class="w-full py-2 px-3 outline-none text-gray-700 focus:ring-0 "
                                        placeholder="Your Phone Number"></div>
                            </div>
                            <div class="relative"><label class="text-gray-600 text-sm font-medium mb-2 block"
                                    for="subject">Subject</label>
                                <div class="flex items-center border-b border-gray-300"><svg stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                        class="text-gray-400 mr-3" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 252.118V48C0 21.49 21.49 0 48 0h204.118a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882L293.823 497.941c-18.745 18.745-49.137 18.745-67.882 0L14.059 286.059A48 48 0 0 1 0 252.118zM112 64c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48z">
                                        </path>
                                    </svg><input type="text" id="subject" name="subject"
                                        class="w-full py-2 px-3 outline-none text-gray-700 focus:ring-0 "
                                        placeholder="Subject"></div>
                            </div>
                        </div>
                        <div class="relative"><label class="text-gray-600 text-sm font-medium mb-2 block"
                                for="message">Message</label>
                            <div class="flex items-start border-b border-gray-300"><svg stroke="currentColor"
                                    fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                    class="text-gray-400 mr-3 mt-2" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57 130.7C44.5 421.1 2.7 466 2.2 466.5c-2.2 2.3-2.8 5.7-1.5 8.7S4.8 480 8 480c66.3 0 116-31.8 140.6-51.4 32.7 12.3 69 19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32z">
                                    </path>
                                </svg>
                                <textarea id="message" name="message" class="w-full py-2 px-3 outline-none text-gray-700 focus:ring-0 "
                                    rows="4" placeholder="Write your message here..."></textarea>
                            </div>
                        </div><button type="submit"
                            class="w-full py-3 px-6 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-lg shadow-lg transition duration-300 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2">Send
                            Message</button>
                    </form>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
