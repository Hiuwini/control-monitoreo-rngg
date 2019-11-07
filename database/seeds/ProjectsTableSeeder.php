<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('users')->delete();

        $projects = [
            ['id' => 1, 'name' => 'Puentes', 'description' => '', 'status' => 0,'date_begin' => '2019-01-01','date_end' => '2020-12-31','user_id' => 2, 'c_institutional_id' => 1],
            ['id' => 2, 'name' => 'Xelajú Naranja', 'description' => '', 'status' => 0,'date_begin' => '2018-01-01','date_end' => '2019-12-31','user_id' => 4, 'c_institutional_id' => 1],
            ['id' => 3, 'name' => 'Emprendo Por Ti', 'description' => '', 'status' => 0,'date_begin' => '2018-01-01','date_end' => '2020-12-31','user_id' => 4, 'c_institutional_id' => 1],
            ['id' => 4, 'name' => 'MCC+', 'description' => '', 'status' => 0,'date_begin' => '2018-08-01','date_end' => '2020-12-31','user_id' => 4, 'c_institutional_id' => 1],
            ['id' => 5, 'name' => 'Acciones de Grupos Gestores', 'description' => '', 'status' => 0,'date_begin' => '2019-01-01','date_end' => '2021-12-31','user_id' => 6, 'c_institutional_id' => 3],
            ['id' => 6, 'name' => 'Grupos Gestores', 'description' => '', 'status' => 0,'date_begin' => '2019-01-01','date_end' => '2021-12-31','user_id' => 6, 'c_institutional_id' => 4],
            ['id' => 7, 'name' => 'Escuela de Liderazgo Local', 'description' => '', 'status' => 0,'date_begin' => '2019-01-01','date_end' => '2021-12-31','user_id' => 3, 'c_institutional_id' => 4],
            ['id' => 8, 'name' => 'REMUDEL', 'description' => '', 'status' => 0,'date_begin' => '2019-01-01','date_end' => '2021-12-31','user_id' => 3, 'c_institutional_id' => 4],
            ['id' => 9, 'name' => 'REDCADET', 'description' => '', 'status' => 0,'date_begin' => '2019-01-01','date_end' => '2021-12-31','user_id' => 3, 'c_institutional_id' => 4],
            ['id' => 10, 'name' => 'Consorcio DEL', 'description' => '', 'status' => 0,'date_begin' => '2019-01-01','date_end' => '2021-12-31','user_id' => 3, 'c_institutional_id' => 4],
            ['id' => 11, 'name' => 'Mesas de Competitividad', 'description' => '', 'status' => 0,'date_begin' => '2019-01-01','date_end' => '2021-12-31','user_id' => 3, 'c_institutional_id' => 4],
            ['id' => 12, 'name' => 'Gerencia General', 'description' => '', 'status' => 0,'date_begin' => '2019-01-01','date_end' => '2021-12-31','user_id' => 3, 'c_institutional_id' => 5],
            ['id' => 13, 'name' => 'Desarrollo Institucional', 'description' => '', 'status' => 0,'date_begin' => '2019-01-01','date_end' => '2021-12-31','user_id' => 1, 'c_institutional_id' => 5],
            ['id' => 14, 'name' => 'Gerencia Financiera', 'description' => '', 'status' => 0,'date_begin' => '2019-01-01','date_end' => '2021-12-31','user_id' => 5, 'c_institutional_id' => 5],
            ['id' => 15, 'name' => 'Comunicación', 'description' => '', 'status' => 0,'date_begin' => '2019-01-01','date_end' => '2021-12-31','user_id' => 1, 'c_institutional_id' => 5],
        ];

        DB::table('projects')->insert($projects);
    }
}
