{{-- Footer Start  --}}



<footer
    class="relative bg-cover bg-center bg-[url('https://png.pngtree.com/background/20230527/original/pngtree-render-of-a-3d-model-of-a-power-station-picture-image_2761474.jpg')]">
    <div className="absolute bg-black/80"></div>
    <div class="releted text-white bg-black/50 backdrop-blur-sm">
        <div class="grid md:grid-cols-4 grid-cols-1 py-10 px-5 md:gap-5 w-full max-w-screen-xl p-5 mx-auto">
            <div>
                @if (!empty($siteData->logo))
                    <img class="" src="{{ asset('storage/' . $siteData->logo) }}" alt="ARK Power Ltd.">
                @else
                    <span class="text-red-500 font-semibold">Logo not set</span>
                @endif
                <div class="text-center my-4">
                    <p>Follow us: </p>
                    <div class="flex justify-center items-center gap-3 mt-2">
                        @if (!empty($siteData->fbUrl))
                            <a target="_blank" href="{{ $siteData->fbUrl }}">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                    class="text-xl" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z">
                                    </path>
                                </svg>
                            </a>
                        @else
                            <p class="text-red-500 font-semibold">Facebook link not available.</p>
                        @endif
                        @if (!empty($siteData->teligramUrl))
                            <a target="_blank" href="{{ $siteData->teligramUrl }}">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512"
                                    class="text-xl" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z">
                                    </path>
                                </svg></a>
                        @else
                            <p class="text-red-500 font-semibold">Telegram link not available.</p>
                        @endif
                        @if (!empty($siteData->twitterUrl))
                            <a target="_blank" href="{{ $siteData->twitterUrl }}"><svg stroke="currentColor"
                                    fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-xl"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                    </path>
                                </svg></a>
                        @else
                            <p class="text-red-500 font-semibold">Twitter link not available.</p>
                        @endif
                        @if (!empty($siteData->instragramUrl))
                            <a target="_blank" href="{{ $siteData->instragramUrl }}"><svg stroke="currentColor"
                                    fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="text-xl"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                    </path>
                                </svg></a>
                        @else
                            <p class="text-red-500 font-semibold">Facebook link not available.</p>
                        @endif
                        @if (!empty($siteData->youtubeUrl))
                            <a target="_blank" href="{{ $siteData->youtubeUrl }}"><svg stroke="currentColor"
                                    fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="text-xl"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                                    </path>
                                </svg></a>
                        @else
                            <p class="text-red-500 font-semibold">Facebook link not available.</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 md:my-0 my-5 col-span-2">
                <div class="md:ps-10">
                    <h1 class="text-xl font-bold uppercase opacity-80 pb-3">Quick Link</h1>
                    <ul class="space-y-2">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('about') }}">About us</a></li>
                        <li><a href="{{ route('products') }}">Our Products</a></li>
                        <li><a href="#">Our Clients</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('termcondition') }}">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div>
                    <h1 class="text-xl font-bold uppercase opacity-80 pb-3">Address</h1>
                    <ul class="space-y-2">
                        <li><a class="flex items-center uppercase gap-4" href="#"><svg stroke="currentColor"
                                    fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-3xl"
                                    height="1.2em" width="1.3em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                    </path>
                                </svg>
                                @if (!empty($siteData->address))
                                    <p>{{ $siteData->address }}</p>
                                @else
                                    <p class="text-red-500 font-semibold">Address not available.</p>
                                @endif
                            </a></li>
                        <li><a class="flex items-center gap-3" href="#"><svg stroke="currentColor"
                                    fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-2xl"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z">
                                    </path>
                                </svg>
                                <p>
                                    <span class="font-bold">Hot Line</span> <br>
                                    @if (!empty($siteData->phoneNumber))
                                        Sales - {{ $siteData->phoneNumber }}<br>
                                    @else
                                        <span class="text-red-500">Sales number not available</span><br>
                                    @endif

                                    @if (!empty($siteData->phoneNumber2))
                                        Support - {{ $siteData->phoneNumber2 }}
                                    @else
                                        <span class="text-red-500">Support number not available</span>
                                    @endif
                                </p>
                            </a></li>
                        <li><a class="flex items-center gap-4" href="#"><svg stroke="currentColor"
                                    fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-xl"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z">
                                    </path>
                                </svg>
                                @if (!empty($siteData->email))
                                    <p><span>{{ $siteData->email }}</span></p>
                                @else
                                    <p class="text-red-500 font-semibold">Address not available.</p>
                                @endif
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="md:block flex flex-col justify-center items-center">
                <h1 class="text-xl font-bold uppercase opacity-80 pb-3">KEEP IN TOUCH</h1>
                <ul class="space-y-2 pr-5">
                    <li>
                        <p class="md:text-start text-center">Subscribe to Our Newsletter to get Important
                            News &amp; Offers</p>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <input type="email" id="subscriber" name="subscriber" placeholder="Enter Your Email"
                                class="p-2 border border-black rounded-l-md text-black" />
                            <button type="submit"
                                class="bg-[#209fd1] p-2 -ml-1 border border-black rounded-r-md flex items-center justify-center">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.75 3.09L18.29 20.23C18.06 21.34 17.38 21.63 16.41 21.08L12.93 18.59L10.94 20.5C10.7 20.75 10.49 20.96 10.02 20.96L10.31 17.37L18.63 9.43C18.99 9.1 18.54 8.9 18.05 9.23L7.56 15.95L4.15 14.91C3.1 14.59 3.07 13.87 4.25 13.38L20.25 5.46C21.18 5.06 22.03 5.64 21.75 6.87L21.75 3.09Z"
                                        fill="#ffffff" />
                                </svg>
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bg-black p-4 text-sm">
            <p class="text-center text-white">© All Rights Reserved, ARK POWER LTD.</p>
        </div>
    </div>
</footer>

{{-- Scrips  --}}

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

</body>

</html>
