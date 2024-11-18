<div>
    <h1 class="text-2xl font-bold uppercase mb-7">Management</h1>
    <div class="overflow-hidden block">
        @if ($managementData)
            <nav>
                <ul role="tablist" class="flex relative bg-blue-gray-50 bg-opacity-60 rounded-lg p-1 flex-row">

                    <!-- Managing Director Tab -->
                    <li class="flex items-center justify-center text-center w-full h-full relative bg-transparent py-1 px-2 text-blue-gray-900 antialiased font-sans text-base font-normal leading-relaxed select-none cursor-pointer {{ $activeTab === 'md' ? 'bg-white shadow rounded-md' : '' }}"
                        wire:click="setTab('md')" role="tab" data-value="md">
                        <div class="z-20 text-inherit">Managing Director (MD)</div>
                    </li>

                    <!-- Chief Executive Officer Tab -->
                    <li class="flex items-center justify-center text-center w-full h-full relative bg-transparent py-1 px-2 text-blue-gray-900 antialiased font-sans text-base font-normal leading-relaxed select-none cursor-pointer {{ $activeTab === 'ceo' ? 'bg-white shadow rounded-md' : '' }}"
                        wire:click="setTab('ceo')" role="tab" data-value="ceo">
                        <div class="z-20 text-inherit">Chief Executive Officer (CEO)</div>
                    </li>
                </ul>
            </nav>

            <div class="block w-full relative bg-transparent overflow-hidden">
                <div role="tabpanel"
                    class="w-full h-max text-gray-700 p-4 antialiased font-sans text-base font-light leading-relaxed"
                    data-value="md" style="opacity: 1; position: relative; z-index: 2;">
                    <div class="md:grid grid-cols-5 md:gap-10 gap-5">
                        <div class="col-span-2">
                            <img src="{{ asset('storage/' . $managementData->image) }}" alt="">
                        </div>
                        <div class="col-span-3 mt-3">
                            <h1 class="text-xl font-bold">{{ $managementData->name }}</h1>
                            <p class="my-3">{{ $managementData->about }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <p class="text-center p-4">No management data available.</p>
        @endif
    </div>
</div>
