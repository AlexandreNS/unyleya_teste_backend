<?php

use Illuminate\Database\Seeder;
use App\Generos;

class GenerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Generos::insert(
            [
                ['nome' => 'Romance'],
                ['nome' => 'Ficção cientifica'],
                ['nome' => 'Aventura'],
                ['nome' => 'Drama'],
                ['nome' => 'Terror'],
                ['nome' => 'Não-Ficção'],
                ['nome' => 'Fantasia']
            ]
        );
    }
}
