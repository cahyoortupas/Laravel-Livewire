@extends('layouts.app')

@section('content')
<div class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Title -->
        <div class="max-w-[730px] mx-auto text-center">
            <h2 class="font-poppins text-[56px] font-bold leading-[55px] tracking-[-0.01em]">
                We make <span class="text-blue-600">creative media</span> that <span class="text-blue-600">adds value</span>
            </h2>
        </div>
                        

        <div class="max-w-[1372.5px] mx-auto min-h-[712px] gap-10 mt-14">
            <!-- Row 1 -->
            <div class="max-w-[1372.5px] h-[336px] gap-7 flex">
                <div class="w-[437.5px] h-[336px] bg-white shadow-md rounded-lg overflow-hidden flex">
                    <div class="w-[183.5px] h-[336px] gap-0 rounded-l-[8px]">
                        <div class="w-[184px] h-[160px] top-[176px] left-[0.13px] px-[0.5px] ">
                            <img src="img\image-1a.png" alt="Image 1" class="w-full h-full object-cover rounded-l-[8px]">
                        </div>
                        <div class="w-[184px] h-[160px] top-[176px] left-[0.13px] px-[0.5px] ">
                            <img src="img\image-1b.png" alt="Image 2" class="w-full h-full object-cover rounded-l-[8px] mt-4">
                        </div>
                    </div>
                    <div class="p-6 w-2/3">
                        <h3 class="text-xl font-semibold mb-4">Photography</h3>
                        <ul class="text-gray-600 list-disc pl-5">
                            <li>Drone Photography</li>
                            <li>Interiors</li>
                            <li>Exteriors / Architectural</li>
                        </ul>
                        <p class="mt-4">Every photograph we produce finds the beauty in your property while serving as a profitable asset.</p>
                    </div>
                </div>

                <div class="w-[437.5px] h-[336px] bg-white shadow-md rounded-lg overflow-hidden flex">
                    <img src="img\image-2.png" alt="Virtual Staging" class="w-[183.5px] h-[336px] object-cover">
                    <div class="p-6 w-2/3 w-2/3">
                        <h3 class="text-xl font-semibold mb-4">Virtual Staging</h3>
                        <p class="text-gray-600">
                        Our staging will help you sell the potential of your space. We can work off our own photography or photos you provide.
                        </p>
                    </div>
                </div>
                <div class="w-[437.5px] h-[336px] bg-white shadow-md rounded-lg overflow-hidden flex">
                    <img src="img\image-3.png" alt="Virtual Staging" class="w-[183.5px] h-[336px] object-cover">

                    <div class="p-6 w-2/3">
                        <h3 class="text-xl font-semibold mb-4">Renderings</h3>
                        <ul class="text-gray-600 list-disc pl-5">
                            <li>Interiors</li>
                            <li>Exteriors</li>
                        </ul>
                        <p class="mt-4">Renderings are the gold standard in pre-construction marketing.</p>
                    </div>
                </div>
            </div>
        
            <!-- Row 2 -->
            <div class="max-w-[1372.5px] h-[336px] gap-7 flex mt-8">
                <div class="w-[437.5px] h-[336px] bg-white shadow-md rounded-lg overflow-hidden flex">
                    <img src="img\image-4.png" alt="Interactive Tours" class="w-[183.5px] h-[336px] object-cover">
                    <div class="p-6 w-2/3">
                        <h3 class="text-xl font-semibold mb-4">Interactive Tours</h3>
                        <ul class="text-gray-600 list-disc pl-5">
                            <li>Matterport</li>
                            <li>Video Walkthroughs</li>
                        </ul>
                        <p class="mt-4">Give your audience the ability to explore your property without requiring in-person travel.</p>
                    </div>
                </div>
    
                <!-- Card Service 5 -->
                <div class="w-[437.5px] h-[336px] bg-white shadow-md rounded-lg overflow-hidden flex">
                    <img src="img\image-5.png" alt="Floor Plans" class="w-[183.5px] h-[336px] object-cover">
                    <div class="p-6 w-2/3">
                        <h3 class="text-xl font-semibold mb-4">Floor Plans</h3>
                        <ul class="text-gray-600 list-disc pl-5">
                            <li>On-site Measure</li>
                            <li>2D Floor Plans</li>
                            <li>3D Floor Plans</li>
                        </ul>
                        <p class="mt-4">We produce laser-precise floor plans faster than any other service.</p>
                    </div>
                </div>
    
                <!-- Card Service 6 -->
                <div class="w-[437.5px] h-[336px] bg-white shadow-md rounded-lg overflow-hidden flex">
                    <img src="img\image-6.png" alt="Video" class="w-[183.5px] h-[336px] object-cover">
                    <div class="p-6 w-2/3">
                        <h3 class="text-xl font-semibold mb-4">Video</h3>
                        <ul class="text-gray-600 list-disc pl-5">
                            <li>Drone Cinematography</li>
                            <li>Interiors</li>
                            <li>Exteriors / Architectural</li>
                        </ul>
                        <p class="mt-4">Video content has higher engagement and will help your property stand out online.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="#"
                class="bg-[#1B264F] text-white text-lg px-8 py-3 rounded-lg shadow hover:bg-blue-700 transition">
                Get Started
            </a>
        </div>
    </div>
</div>
@endsection
