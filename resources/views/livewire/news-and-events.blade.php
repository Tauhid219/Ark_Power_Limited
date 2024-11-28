<div class="">
    <div class="min-h-screen w-full max-w-screen-xl mx-auto flex items-start justify-center p-5">
        <div>
            <div class="md:mt-24 mt-14">
                <h1 class="text-primary text-center md:text-5xl text-3xl uppercase">
                    News &amp; Events
                </h1>
            </div>

            <div class="flex flex-wrap justify-center my-5 gap-2">
                <!-- 'All' Button -->
                <button wire:click="setFilter('all')"
                    class="px-4 py-2 mx-2 my-1 {{ $filter === 'all' ? 'bg-blue-600 text-white' : 'bg-gray-200' }}">
                    All
                </button>

                <!-- Dynamically Generated Category Buttons -->
                @foreach ($categories as $category)
                    <button wire:click="setFilter('{{ $category->slug }}')"
                        class="px-4 py-2 mx-2 my-1 {{ $filter === $category->slug ? 'bg-blue-600 text-white' : 'bg-gray-200' }}">
                        {{ $category->name }}
                    </button>
                @endforeach
            </div>

            @if ($posts->isNotEmpty())
                <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-5 my-10">
                    @foreach ($posts as $post)
                        <div class="border p-2">
                            <div class="relative h-44 overflow-hidden">
                                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}"
                                    class="w-full h-full object-cover transition-transform duration-300 hover:scale-110" />
                            </div>
                            <div class="flex justify-between items-center my-2">
                                <p class="font-bold uppercase">{{ $post->category->name }}</p>
                                <p>{{ $post->published_at->format('Y-m-d') }}</p>
                            </div>
                            <a class="hover:underline text-2xl text-gray-700 font-bold"
                                href="{{ route('newsdetails', $post->id) }}">
                                {{ $post->title }}
                            </a>
                            <div class="mt-2">
                                {!! \Illuminate\Support\Str::limit($post->content, 100) !!}
                                <a class="text-blue-700 hover:underline"
                                    href="{{ route('newsdetails', $post->id) }}">Read
                                    Details</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Custom pagination design -->
                @if ($totalPosts > 12)
                    <div class="flex justify-center items-center space-x-2 mt-6 mb-16">
                        <!-- Previous Button -->
                        <button class="px-4 py-2 bg-gray-300 rounded" wire:click="previousPage"
                            @if ($posts->onFirstPage()) disabled @endif>
                            Previous
                        </button>

                        <!-- Page Numbers -->
                        @for ($page = 1; $page <= $posts->lastPage(); $page++)
                            <button
                                class="px-4 py-2 rounded {{ $posts->currentPage() === $page ? 'bg-blue-600 text-white' : 'bg-gray-200' }}"
                                wire:click="gotoPage({{ $page }})">
                                {{ $page }}
                            </button>
                        @endfor

                        <!-- Next Button -->
                        <button class="px-4 py-2 bg-blue-500 text-white rounded" wire:click="nextPage"
                            @if (!$posts->hasMorePages()) disabled @endif>
                            Next
                        </button>
                    </div>
                @endif
            @else
                <div class="col-span-full text-center text-gray-700 font-semibold">
                    <p>No news available at the moment.</p>
                </div>
            @endif
        </div>
    </div>
</div>
