<div>
    <h1 class="text-2xl font-bold uppercase mb-7">Management</h1>
    <div class="overflow-hidden block">
        @if ($currentData)
            <nav>
                <ul role="tablist" class="flex relative bg-blue-gray-50 bg-opacity-60 rounded-lg p-1 flex-row">

                    <!-- First Tab -->
                    <li class="flex items-center justify-center text-center w-full h-full relative bg-transparent py-1 px-2 text-blue-gray-900 antialiased font-sans text-base font-normal leading-relaxed select-none cursor-pointer {{ $activeTab === 'first' ? 'bg-white shadow rounded-md' : '' }}"
                        wire:click="setTab('first')" role="tab" data-value="first">
                        <div class="z-20 text-inherit">
                            {{ $managementData->first()?->designation ?? 'Managing Director (MD)' }}</div>
                    </li>

                    <!-- Second Tab (Hidden Designation if Only One Record) -->
                    <li class="flex items-center justify-center text-center w-full h-full relative bg-transparent py-1 px-2 text-blue-gray-400 antialiased font-sans text-base font-normal leading-relaxed select-none {{ $managementData->count() > 1 ? 'cursor-pointer text-blue-gray-900' : 'opacity-50 cursor-not-allowed' }} {{ $activeTab === 'second' && $managementData->count() > 1 ? 'bg-white shadow rounded-md' : '' }}"
                        @if ($managementData->count() > 1) wire:click="setTab('second')" @endif role="tab"
                        data-value="second">
                        <div class="z-20 text-inherit">
                            @if ($managementData->count() > 1)
                                {{ $managementData->get(1)?->designation }}
                            @else
                                <!-- No designation shown -->
                            @endif
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="block w-full relative bg-transparent overflow-hidden">
                <div role="tabpanel"
                    class="w-full h-max text-gray-700 p-4 antialiased font-sans text-base font-light leading-relaxed"
                    data-value="md" style="opacity: 1; position: relative; z-index: 2;">
                    <div class="md:grid grid-cols-5 md:gap-10 gap-5">
                        <div class="col-span-2">
                            <img src="{{ asset('storage/' . $currentData->image) }}" alt="">
                        </div>
                        <div class="col-span-3 mt-3">
                            <h1 class="text-xl font-bold">{{ $currentData->name }}</h1>
                            <p class="my-3">{{ $currentData->about }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <p class="text-center p-4">No management data available.</p>
        @endif
    </div>
</div>
