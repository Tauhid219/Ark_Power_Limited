@extends('layouts.layout')
@section('main-content')
    <div class="min-h-screen">
        <div class="w-full max-w-screen-xl mx-auto p-5">
            <div class="md:mt-24 mt-14">
                <div class="grid md:grid-cols-5 gap-16 ">
                    <div class="md:col-span-2"><img src="{{ asset('storage/' . $data->image) }}" alt="Product Image"
                            class="object-cover rounded-lg"></div>
                    <div class="md:col-span-3">
                        <h1 class="text-primary mb-5 md:text-5xl text-3xl uppercase">{{ $data->name }}</h1>
                        <h1 class="text-primary mb-5 text-md md:text-xl">Category: {{ $data->category->name }}</h1>
                        <p class="text-gray-600">{{ $data->description }}</p>
                        <div class="pt-10">
                            {{-- <h4 class="text-xl font-bold text-gray-700 mb-2">PDF Link</h4> --}}
                            <a href="{{ $data->source_url }}" class="text-blue-500 hover:underline cursor-pointer"
                                target="_blank" rel="noopener noreferrer">View Catalog</a>
                        </div>
                    </div>
                </div>
                <div class="my-10">
                    <h2 class="text-3xl font-bold text-gray-700 mb-5">Related Product</h2>
                    @if ($relatedProducts->isNotEmpty())
                        <div class="grid md:grid-cols-3 gap-10">
                            @foreach ($relatedProducts as $rproducts)
                                <div
                                    class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md overflow-hidden p-1 border hover:shadow-xl">
                                    <div
                                        class="relative bg-clip-border overflow-hidden bg-transparent text-gray-700 shadow-none m-0 rounded-none">
                                        <div class="relative h-44 rounded-lg overflow-hidden"><a
                                                href="{{ route('productdetails', $rproducts->id) }}"><img
                                                    src="{{ asset('storage/' . $rproducts->image) }}"
                                                    alt="{{ $rproducts->name }}"
                                                    class="w-full h-full object-cover transition-transform duration-300 hover:scale-110"></a>
                                        </div>
                                    </div>
                                    <div class="p-6">
                                        <div class="py-3"><a class="md:text-xl text-black font-semibold text-sm"
                                                href="{{ route('productdetails', $rproducts->id) }}">{{ $rproducts->name }}</a>
                                        </div>
                                        <div><a href="{{ route('productdetails', $rproducts->id) }}">{{ Str::limit($rproducts->description, 100) }}<span
                                                    class="text-blue-700 hover:underline">Read more</span></a></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-10 flex justify-center"><a
                                class="p-3 border-2 uppercase font-semibold rounded border-black hover:bg-black hover:text-white"
                                href="{{ route('products') }}">View More Product</a></div>
                    @else
                        <p class="text-gray-500">No related products available at the moment.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
