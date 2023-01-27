<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Area;
class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $area1=Area::firstOrCreate([
            'nombre' => 'DIRECCION'
        ]);
        $area2=Area::firstOrCreate([
            'nombre' => 'ASESORIA JURIDICA'
        ]);
        $area3=Area::firstOrCreate([
            'nombre' => 'GESTION ADMINISTRATIVA'
        ]);
        $area4=Area::firstOrCreate([
            'nombre' => 'GESTION INSTITUCIONAL'
        ]);        
        $area5=Area::firstOrCreate([
            'nombre' => 'GESTION PEDAGOGICA'
        ]);  
        $area6=Area::firstOrCreate([
            'nombre' => 'IMAGEN INSTITUCIONAL'
        ]);
    }
}
