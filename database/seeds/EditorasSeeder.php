<?php

use Illuminate\Database\Seeder;
use App\Editoras;

class EditorasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Editoras::insert(
            [
                ['nome' => 'Leya'],
                ['nome' => 'New Pop'],
                ['nome' => 'Arqueiro']
            ]
        );
    }
}
