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
        DB::table('c_institutionals')->delete();

        $ci = [
            ['id' => 1, 'name' => 'Desarrollo Productivo', 'status' => '1'],
            ['id' => 2, 'name' => 'Clima de Negocios', 'status' => '1'],
            ['id' => 3, 'name' => 'Desarrollo Social', 'status' => '1'],
            ['id' => 4, 'name' => 'Ecosistema Interno', 'status' => '1'],
            ['id' => 5, 'name' => 'Unidad Ejecutora', 'status' => '1'],
        ];

        DB::table('c_institutionals')->insert($ci);
        
    }
}
