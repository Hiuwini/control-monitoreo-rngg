<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
