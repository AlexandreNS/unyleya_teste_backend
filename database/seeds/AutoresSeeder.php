<?php

use Illuminate\Database\Seeder;
use App\Autores;

class AutoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Autores::insert(
            [
                ['nome' => 'Tappei Nagatsuki', 'anoNascimento' => 1987, 'sexo' => 'M', 'nacionalidade_id' => 99 ],
                ['nome' => 'Douglas Adams', 'anoNascimento' => 1952, 'sexo' => 'M', 'nacionalidade_id' => 54 ],
                ['nome' => 'George R. R. Martin', 'anoNascimento' => 1948, 'sexo' => 'M', 'nacionalidade_id' => 65 ],
            ]
        );
    }
}
