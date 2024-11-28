@extends('layouts.layout')
@section('main-content')
    <div class="min-h-screen mb-10">
        <div class="md:mt-24 mt-14 w-full max-w-screen-xl mx-auto p-5">
            <div class="mb-10">
                <h1 class="text-primary text-center font-semibold md:text-5xl text-3xl uppercase">News</h1>
            </div>
            <div class="grid md:grid-cols-4 gap-14">
                <div class="md:col-span-3">
                    <div class="">

                        <div>
                            <div class="relative overflow-hidden"><img src="{{ asset('storage/' . $data->featured_image) }}"
                                    alt="blog image" class="w-full h-auto object-cover">
                            </div>
                            <div class="flex justify-between items-center my-6">
                                <p class="font-bold uppercase">{{ $data->category->name }}</p>
                                <p>{{ $data->published_at->format('Y-m-d') }}</p>

                            </div>

                            <h1 class="text-2xl md:text-5xl  font-semibold mb-8">{{ $data->title }}</h1>
                            <p>{!! $data->content !!} </p>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-1 bg-blue-gray-50 p-5">
                    <h1 class="text-2xl pb-4 font-semibold">Related News</h1>
                    @if ($relatedNews->isNotEmpty())
                        @foreach ($relatedNews as $news)
                            <div class="border bg-white p-2 mb-3">
                                <div class="relative h-28 overflow-hidden">
                                    <img src="{{ asset('storage/' . $news->featured_image) }}" alt="{{ $news->title }}"
                                        class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                                </div>
                                <div class="flex justify-between items-center my-2">
                                    <p class="font-bold uppercase">{{ $news->category->name }}</p>
                                    <p>{{ $news->created_at->format('Y-m-d') }}</p>
                                </div>
                                <a class="hover:underline text-2xl font-bold mb-3"
                                    href="{{ route('newsdetails', $news->id) }}">{{ Str::limit($news->title, 20) }}</a>
                            </div>
                        @endforeach
                    @else
                        <p class="text-gray-500">No related news available at the moment.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
