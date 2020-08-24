<?php

use Illuminate\Database\Seeder;
use App\Livros;

class LivrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Livros::insert(
            [
                [
                    'titulo' => 'Re: Zero – Começando uma Vida em Outro Mundo: Livro 12', 'anoLancamento' => 2020, 
                    'autor_id' => 1, 'genero_id' => 7, 'editora_id' => 2
                ],
                [
                    'titulo' => 'Re:Zero - Começando uma Vida em Outro Mundo - Livro 08', 'anoLancamento' => 2018, 
                    'autor_id' => 1, 'genero_id' => 7, 'editora_id' => 2
                ],
                [
                    'titulo' => 'A Guerra dos Tronos', 'anoLancamento' => 2010, 
                    'autor_id' => 3, 'genero_id' => 7, 'editora_id' => 1
                ],
                [
                    'titulo' => 'A Dança dos Dragões', 'anoLancamento' => 2012, 
                    'autor_id' => 3, 'genero_id' => 7, 'editora_id' => 1
                ],
                [
                    'titulo' => 'A Tormenta de Espadas', 'anoLancamento' => 2011, 
                    'autor_id' => 3, 'genero_id' => 7, 'editora_id' => 1
                ],
                [
                    'titulo' => 'O Guia do Mochileiro das Galáxias', 'anoLancamento' => 2009, 
                    'autor_id' => 2, 'genero_id' => 2, 'editora_id' => 3
                ],
                [
                    'titulo' => 'O Restaurante no Fim do Universo', 'anoLancamento' => 2010, 
                    'autor_id' => 2, 'genero_id' => 2, 'editora_id' => 3
                ],
                [
                    'titulo' => 'Até mais, e Obrigado pelos Peixes', 'anoLancamento' => 2010, 
                    'autor_id' => 2, 'genero_id' => 2, 'editora_id' => 3
                ],
            ]
        );
    }
}
