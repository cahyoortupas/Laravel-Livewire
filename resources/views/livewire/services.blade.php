<div class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Title -->
        <div class="max-w-[730px] mx-auto text-center">
            <h2 class="font-poppins text-[56px] font-bold leading-[55px] tracking-[-0.01em]">
                We make creative media <span class="text-blue-600">that adds value</span>
            </h2>
        </div>

        <div class="max-w-[1372.5px] mx-auto min-h-[712px] gap-10 mt-14">
            @foreach(array_chunk($services, 3) as $row)
            <!-- Row -->
            <div class="max-w-[1372.5px] h-[336px] gap-7 flex mt-8">
                @foreach($row as $service)
                <div class="w-[437.5px] h-[336px] bg-white shadow-md rounded-lg overflow-hidden flex">
                    @if(count($service['image']) > 1)
                        <div class="w-[183.5px] h-[336px] flex flex-col">
                            @foreach($service['image'] as $img)
                            <img src="{{ $img }}" alt="{{ $service['title'] }}" class="w-full h-1/2 object-cover">
                            @endforeach
                        </div>
                    @else
                        <img src="{{ $service['image'][0] }}" alt="{{ $service['title'] }}" class="w-[183.5px] h-[336px] object-cover">
                    @endif

                    <div class="p-6 w-2/3">
                        <h3 class="font-poppins text-[20px] font-bold leading-8 text-left mb-3 text-[#353844]">
                            {{ $service['title'] }}
                        </h3>
                        @if(!empty($service['features']))
                        <ul class="text-gray-600 list-disc pl-5">
                            @foreach($service['features'] as $feature)
                            
                            <li class="text-[#D2AD81]">
                                <div class="text-[#353844]">
                                    {{ $feature }}
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                        <p class="mt-4 text-gray-600">{{ $service['description'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="#"
                class="bg-[#1B264F] text-white text-lg px-8 py-3 rounded-lg shadow hover:bg-blue-700 transition">
                Get Started
            </a>
        </div>
    </div>
</div>
