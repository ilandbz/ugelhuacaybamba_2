<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comunicado;

class ComunicadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comunicado1=Comunicado::firstOrCreate([
            'titulo' => 'REUNION',
            'imagen' => '1674502658.jpg',
            'url' => NULL
        ]);
        $comunicado2=Comunicado::firstOrCreate([
            'titulo' => 'aaaaa',
            'imagen' => '1674486309.jpg',
            'url' => NULL
        ]);
        $comunicado3=Comunicado::firstOrCreate([
            'titulo' => 'PAGO DE SESANTES',
            'imagen' => '1674519108.jpg',
            'url' => 'https://www.facebook.com/photo?fbid=631287522330813&set=a.345302610929307'
        ]);
    }
}
