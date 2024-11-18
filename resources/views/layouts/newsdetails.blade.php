@extends('layouts.layout')
@section('main-content')
    <div class="min-h-screen">
        <div class="md:mt-24 mt-14 w-full max-w-screen-xl mx-auto p-5">
            <div class="mb-10">
                <h1 class="text-primary text-center font-semibold md:text-5xl text-3xl uppercase">News</h1>
            </div>
            <div class="grid md:grid-cols-4 gap-14">
                <div class="md:col-span-3">
                    <div class="">
                        <h1 class="md:text-3xl text-2xl font-semibold mb-3">{{ $data->title }}</h1>
                        <div>
                            <div class="relative overflow-hidden"><img src="{{ asset('storage/' . $data->featured_image) }}"
                                    alt="Ark Power Ltd. is a leading power supply distribution company in Bangladesh"
                                    class="w-full h-full object-cover"></div>
                            <div class="flex justify-between items-center my-2">
                                <p class="font-bold uppercase">{{ $data->category->name }}</p>
                                <p>{{ $data->created_at->format('Y-m-d') }}</p>
                            </div>{!! $data->content !!}
                        </div>
                    </div>
                </div>
                <div class="md:col-span-1 bg-blue-gray-50 p-5">
                    <h1 class="text-2xl pb-4 font-semibold">Related News</h1>
                    @foreach ($relatedNews as $news)
                        <div class="border bg-white p-2 mb-3">
                            <div class="relative h-44 overflow-hidden">
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
                </div>
            </div>
        </div>
    </div>
@endsection
