<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postagens')->insert([
            'titulo' => 'Bolo de chocolate',
            'conteudo' => 'receita do bolo de chocolate',
            'user_id' => 1,
            'categoria_id' => 1,
        ]);

        DB::table('postagens')->insert([
            'titulo' => 'Guerra da Ucrânia',
            'conteudo' => 'O acontecimento mais triste de 2022',
            'user_id' => 1,
            'categoria_id' => 2,
        ]);
        DB::table('postagens')->insert([
            'titulo' => 'melzita',
            'conteudo' => 'ioioioioioioio',
            'user_id' => 1,
            'categoria_id' => 3,
        ]);

    }
}
