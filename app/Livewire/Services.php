<?php

namespace App\Livewire;

use Livewire\Component;

class Services extends Component
{
    public $services = [
        [
            'title' => 'Photography',
            'description' => 'Every photograph we produce finds the beauty in your property while serving as a profitable asset.',
            'features' => ['Drone Photography', 'Interiors', 'Exteriors / Architectural'],
            'image' => ['img\image-1a.png', 'img\image-1b.png'],
        ],
        [
            'title' => 'Virtual Staging',
            'description' => 'Our staging will help you sell the potential of your space. We can work off our own photography or photos you provide.',
            'features' => [],
            'image' => ['img\image-2.png'],
        ],
        [
            'title' => 'Renderings',
            'description' => 'Renderings are the gold standard in pre-construction marketing.',
            'features' => ['Interiors', 'Exteriors'],
            'image' => ['img\image-3.png'],
        ],
        [
            'title' => 'Interactive Tours',
            'description' => 'Give your audience the ability to explore your property without requiring in-person travel.',
            'features' => ['Matterport', 'Video Walkthroughs'],
            'image' => ['img\image-4.png'],
        ],
        [
            'title' => 'Floor Plans',
            'description' => 'We produce laser-precise floor plans faster than any other service.',
            'features' => ['On-site Measure', '2D Floor Plans', '3D Floor Plans'],
            'image' => ['img\image-5.png'],
        ],
        [
            'title' => 'Video',
            'description' => 'Video content has higher engagement and will help your property stand out online.',
            'features' => ['Drone Cinematography', 'Interiors', 'Exteriors / Architectural'],
            'image' => ['img\image-6.png'],
        ],
    ];

    public function render()
    {
        return view('livewire.services');
    }
}
