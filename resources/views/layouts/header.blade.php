<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if (!empty($siteData->favIcon))
        <link rel="icon" href="{{ asset('storage/' . $siteData->favIcon) }}" type="image/x-icon">
    @else
        <p class="text-red-500 font-semibold">Favicon is not set. Please upload a favicon.</p>
    @endif

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">

    <header>
        <div class="shadow-md w-full fixed top-0 z-50 left-0 py-2 navbar transition-colors ease-in-out">
            <div class="flex items-center justify-between w-full max-w-screen-xl mx-auto p-5">

                <a href="/" id="logo" class="font-bold text-2xl flex items-center gap-1">
                    @if (!empty($siteData->logo))
                        <img src="{{ asset('storage/' . $siteData->logo) }}" alt="Logo" class="max-h-6 max-w-48" />
                    @else
                        <span class="text-red-500 font-semibold">Logo not set</span>
                    @endif
                </a>

                <div onclick="toggleMenu()" class="absolute right-8 cursor-pointer lg:hidden w-7 h-7">
                    <svg id="menuIcon" class="fill-current text-gray-800" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path d="M3 12h18v-2h-18v2zm0 7h18v-2h-18v2zm0-14v2h18v-2h-18z" />
                    </svg>
                    <svg id="closeIcon" class="hidden fill-current text-gray-800" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z" />
                    </svg>
                </div>

                <ul id="navLinks"
                    class="hidden lg:flex items-center absolute lg:static bg-slate-200 lg:bg-transparent w-full text-bold lg:w-auto left-0 top-16 lg:top-auto opacity-100 lg:opacity-100 transition-all duration-500 ease-in text-center">
                    <li class="lg:ml-8 my-2 lg:my-0">
                        <a href="/" class=" hover:text-blue-500 ">Home</a>
                    </li>
                    <li class="lg:ml-8 my-2 lg:my-0">
                        <a href="{{ route('services') }}" class="hover:text-blue-500 ">Service</a>
                    </li>
                    <li class="lg:ml-8 my-2 lg:my-0">
                        <a href="{{ route('products') }}" class="hover:text-blue-500 ">Products</a>
                    </li>
                    <li class="lg:ml-8 my-2 lg:my-0">
                        <a href="{{ route('news') }}" class="hover:text-blue-500 ">News &
                            Event</a>
                    </li>
                    <li class="lg:ml-8 my-2 lg:my-0">
                        <a href="{{ route('about') }}" class="hover:text-blue-500 ">About
                            Us</a>
                    </li>
                    <li class="lg:ml-8 my-2 lg:my-0">
                        <a href="{{ route('contact') }}" class=" hover:text-blue-500 ">Contact</a>
                    </li>
                    <li class="lg:ml-8 my-2 lg:my-0">
                        <a href="{{ route('career') }}" class="hover:text-blue-500">Career</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <script>
        const navLinks = document.getElementById("navLinks");
        const menuIcon = document.getElementById("menuIcon");
        const closeIcon = document.getElementById("closeIcon");
        const logo = document.getElementById("logo");

        function toggleMenu() {
            if (navLinks.classList.contains("hidden")) {
                navLinks.classList.remove("hidden");
                closeIcon.classList.remove("hidden");
                menuIcon.classList.add("hidden");
                logo.classList.remove("hidden");
            } else {
                navLinks.classList.add("hidden");
                closeIcon.classList.add("hidden");
                menuIcon.classList.remove("hidden");
                logo.classList.remove("hidden");
            }
        }

        function handleNavbarScroll() {
            const navbar = document.querySelector(".navbar");
            if (window.scrollY > 50) {
                navbar.classList.add("bg-white", "shadow-md");
                navbar.classList.remove("bg-transparent", "md:text-black", "backdrop-blur-sm", "shadow-lg");
            } else {
                navbar.classList.add("bg-transparent", "md:text-black", "backdrop-blur-sm", "shadow-lg");
                navbar.classList.remove("bg-white", "shadow-md");
            }
        }

        window.addEventListener("scroll", handleNavbarScroll);
        handleNavbarScroll();
    </script>


    {{-- End Hedder --}}
