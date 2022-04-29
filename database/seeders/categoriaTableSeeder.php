<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class categoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
            'categoria' => 'Eletronicos'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Moveis'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Produtos de contrabando'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Automoveis'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Drogas ilicitas'
        ]);
    }
}
