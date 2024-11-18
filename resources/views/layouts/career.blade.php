@extends('layouts.layout')
@section('main-content')
    <div class="min-h-screen">
        <div>
            {{-- <div class="bg-[url('https://neevfund.com/wp-content/uploads/2023/03/career-banner.jpg')] bg-cover bg-center">
                <div class="p-5 pt-32 bg-gradient-to-r from-black/60 to-black/30 text-white">
                    <h2 class="text-4xl container mx-auto md:text-6xl font-bold uppercase text-center mt-14 md:mt-32">
                        Career Opportunities</h2>
                </div>
            </div> --}}
            <div class="w-full max-w-screen-xl mx-auto p-5  md:mt-24 mt-14">
                <div class="text-center mb-16">
                    <h1 class="text-primary text-center md:text-5xl text-3xl mb-7">Explore Exciting Career Opportunities</h1>
                    <p class="text-lg text-gray-600">We’re always looking for talented people to join our team.
                        Whether you're looking for a full-time position or an internship, you’ll find all open
                        roles listed below.</p>
                </div>
                <div class="grid md:grid-cols-2 gap-12">
                    <div
                        class="bg-white shadow-lg rounded-xl p-8 border border-gray-100 hover:shadow-2xl transition duration-300">
                        <div class="flex items-center space-x-3 mb-6"><svg stroke="currentColor" fill="currentColor"
                                stroke-width="0" viewBox="0 0 512 512" class="text-3xl text-blue-500" height="1em"
                                width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z">
                                </path>
                            </svg>
                            <h1 class="text-2xl font-bold text-gray-700">Job Opportunities</h1>
                        </div>

                        @php
                            $jobOpportunities = $careers->filter(fn($career) => $career->category->name === 'Job');
                        @endphp

                        @if ($jobOpportunities->isNotEmpty())
                            @foreach ($careers as $career)
                                @if ($career->category->name === 'Job')
                                    <div class="py-4 border-b border-gray-200 hover:bg-gray-50 transition duration-300">
                                        <a class="text-lg text-gray-800 hover:text-blue-500 uppercase"
                                            href="{{ route('careerdetails', $career->id) }}">
                                            {{ $career->title }}
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <p class="text-gray-600">No job opportunities are currently available.</p>
                        @endif
                    </div>

                    <div
                        class="bg-white shadow-lg rounded-xl p-8 border border-gray-100 hover:shadow-2xl transition duration-300">
                        <div class="flex items-center space-x-3 mb-6"><svg stroke="currentColor" fill="currentColor"
                                stroke-width="0" viewBox="0 0 448 512" class="text-3xl text-green-500" height="1em"
                                width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M319.4 320.6L224 416l-95.4-95.4C57.1 323.7 0 382.2 0 454.4v9.6c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-9.6c0-72.2-57.1-130.7-128.6-133.8zM13.6 79.8l6.4 1.5v58.4c-7 4.2-12 11.5-12 20.3 0 8.4 4.6 15.4 11.1 19.7L3.5 242c-1.7 6.9 2.1 14 7.6 14h41.8c5.5 0 9.3-7.1 7.6-14l-15.6-62.3C51.4 175.4 56 168.4 56 160c0-8.8-5-16.1-12-20.3V87.1l66 15.9c-8.6 17.2-14 36.4-14 57 0 70.7 57.3 128 128 128s128-57.3 128-128c0-20.6-5.3-39.8-14-57l96.3-23.2c18.2-4.4 18.2-27.1 0-31.5l-190.4-46c-13-3.1-26.7-3.1-39.7 0L13.6 48.2c-18.1 4.4-18.1 27.2 0 31.6z">
                                </path>
                            </svg>
                            <h1 class="text-2xl font-bold text-gray-700">Internship Opportunities</h1>
                        </div>

                        @php
                            $internshipOpportunities = $careers->filter(
                                fn($career) => $career->category->name === 'Internship',
                            );
                        @endphp

                        @if ($internshipOpportunities->isNotEmpty())
                            @foreach ($careers as $career)
                                @if ($career->category->name === 'Internship')
                                    <div class="py-4 border-b border-gray-200 hover:bg-gray-50 transition duration-300">
                                        <a class="text-lg text-gray-800 hover:text-green-500 uppercase"
                                            href="{{ route('careerdetails', $career->id) }}">
                                            {{ $career->title }}
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <p class="text-gray-600">No internship opportunities are currently available.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
