<?php

use Illuminate\Database\Seeder;

class PermisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('permisos')->delete();

        $permisos = [
            ['id' => 1,'user_id' => 1,'rol_id' => 1],
            ['id' => 2,'user_id' => 3,'rol_id' => 1],
            ['id' => 3,'user_id' => 2,'rol_id' => 2],
            ['id' => 4,'user_id' => 4,'rol_id' => 3],
            ['id' => 5,'user_id' => 5,'rol_id' => 3],
            ['id' => 6,'user_id' => 6,'rol_id' => 3],
            ['id' => 7,'user_id' => 7,'rol_id' => 4],
            ['id' => 8,'user_id' => 8,'rol_id' => 4],
        ];

        DB::table('permisos')->insert($permisos);
    }
}
