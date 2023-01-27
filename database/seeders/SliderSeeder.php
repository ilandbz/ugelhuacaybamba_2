<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;
class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slider1 = Slider::firstOrCreate([
            'titulo' => '',
            'img_slider' => '5.jpg',
            'descripcioncorta' => '',
            'link' => 'http://digital.regionhuanuco.gob.pe/registro/mpv/obs/3'
        ]);
        $slider2 = Slider::firstOrCreate([
            'titulo' => '',
            'img_slider' => '6.jpg',
            'descripcioncorta' => '',
            'link' => ''
        ]);
        $slider3 = Slider::firstOrCreate([
            'titulo' => '',
            'img_slider' => '7.jpg',
            'descripcioncorta' => '',
            'link' => 'http://digital.regionhuanuco.gob.pe/registro/mesa-partes-virtual/261'
        ]);
        $slider4 = Slider::firstOrCreate([
            'titulo' => 'slid4',
            'img_slider' => '1674099028.jpg',
            'descripcioncorta' => 'prueba de slider',
            'link' => 'http://digital.regionhuanuco.gob.pe/registro/mesa-partes-virtual/261'
        ]);                 
    }
}
