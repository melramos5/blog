<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produto')->insert([
            'nome' => 'sapato',
            'descricao' => 'sasasasasa',
            'valor' => '120.97',
        ]);

        DB::table('produto')->insert([
            'nome' => 'tenis',
            'descricao' => 'tetetetete',
            'valor' => '235.87',
        ]);
    }
}
