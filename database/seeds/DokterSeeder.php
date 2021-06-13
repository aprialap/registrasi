<?php

use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dokter')->insert([
            [
                'nama' =>'dr. I Nyoman Sudarsana',
            ],
            [
                'nama' =>'dr. Shirley Octaviani',
            ],
            [
                'nama' =>'dr. Wulandari Hidayat',
            ], 
            [
                'nama' =>'dr. NW Rustika Nala',
            ], 
            [
                'nama' =>'dr. Uswah Hasanah',
            ], 
           
        ]);
    }
}
