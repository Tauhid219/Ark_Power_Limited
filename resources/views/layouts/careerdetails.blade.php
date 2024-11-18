@extends('layouts.layout')
@section('main-content')
    <div class=" min-h-screen">
        <div class="w-full max-w-screen-xl mx-auto p-5 mt-20 md:mt-24">
            <div class="grid md:grid-cols-4 gap-10">
                <div class="md:col-span-3">
                    <h1 class="text-3xl md:text-5xl font-semibold mb-5">{{ $data->title }}</h1>
                    <div>
                        <div class="mb-2">
                            <p class="text-xl font-bold">Job Description</p>
                            <p>{!! $data->description !!}</p>
                        </div>

                        <div class="mb-2">
                            <p class="text-xl font-bold">Responsibilities</p>
                            <p>{!! $data->responsibilities !!}</p>
                        </div>

                        <div class="mb-2">
                            <p class="text-xl font-bold">Required Skills</p>
                            <p>{!! $data->required_skills !!}</p>
                        </div>

                        <div class="mb-2 flex items-center space-x-2">
                            <p class="text-xl font-bold">Location:</p>
                            <p>{{ $data->location }}</p>
                        </div>

                        <div class="mb-2 flex items-center space-x-2">
                            <p class="text-xl font-bold">Salary:</p>
                            <p>Negotiable</p>
                        </div>

                        <div class="mb-2">
                            <p class="text-xl font-bold">Educational Requirements:</p>
                            <p>{!! $data->qualifications !!}</p>
                        </div>

                        <div class="mb-2">
                            <p class="text-xl font-bold">Benefits:</p>
                            <ul>
                                <li>{!! $data->benefits !!}</li>
                            </ul>
                        </div>

                        <div class="mb-2">
                            <p class="text-xl font-bold">Application Procedure:</p>
                            <p>{!! $data->application_process !!}</p>
                        </div>

                        <div class="mb-2">
                            <p class="text-xl font-bold">Contact Information:</p>
                            <a href="mailto:{!! $data->contact_info !!}">{!! $data->contact_info !!}</a>
                        </div>

                        <div class="mb-2">
                            <p><em>This job will be expired on
                                    {{ \Carbon\Carbon::parse($data->deadline)->format('d F Y') }}.</em></p>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-1 lg:col-span-1 border-l-2 pl-5">
                    @foreach ($careerCategories as $categoryName => $posts)
                        @if ($posts->isNotEmpty())
                            <!-- Check if there are posts for the category -->
                            <p class="text-3xl font-semibold uppercase mb-5">{{ ucfirst($categoryName) }}</p>
                            @foreach ($posts as $post)
                                <div class="mb-3">
                                    <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
                                    <p>{!! \Illuminate\Support\Str::limit($post->description, 50) !!}</p>
                                    <a href="{{ route('careerdetails', $post->id) }}" class="text-blue-500">Read more</a>
                                </div>
                            @endforeach
                        @else
                            <p class="text-gray-600">No related jobs available in the {{ ucfirst($categoryName) }} category.
                            </p>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
