<?php

use Illuminate\Database\Seeder;

class CInstitutionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('c_institutionals')->insert([
            'name' => 'Desarrollo Productivo',
            'status' => 1,
        ]);
        DB::table('c_institutionals')->insert([
            'name' => 'Clima de Negocios',
            'status' => 1,
        ]);
        DB::table('c_institutionals')->insert([
            'name' => 'Desarrollo Social',
            'status' => 1,
        ]);
        DB::table('c_institutionals')->insert([
            'name' => 'Ecosistema Interno',
            'status' => 1,
        ]);
        DB::table('c_institutionals')->insert([
            'name' => 'Desarrollo Institucional',
            'status' => 1,
        ]);
    }
}
