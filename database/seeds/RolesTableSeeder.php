<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->delete();

        $roles = [
            ['id' => 1,'descripcion' => 'Administrador Principal'],
            ['id' => 2,'descripcion' => 'Administrador Secundario'],
            ['id' => 3,'descripcion' => 'Coordinador'],
            ['id' => 4,'descripcion' => 'Operativo'],
        ];

        DB::table('roles')->insert($roles);
    }
}
