<?php

use Illuminate\Database\Seeder;

class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('poli')->insert([
            [
                'nama' =>'Poli Umum',
            ],
            [
                'nama' =>'Poli Penyakit Dalam',
            ],
            [
                'nama' =>'Poli Mata',
            ], 
            [
                'nama' =>'Poli Anak',
            ], 
            [
                'nama' =>'Poli Obgyn',
            ], 
           
        ]);
    }
}
