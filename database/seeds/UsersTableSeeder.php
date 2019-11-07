<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();

        $users = [
            ['id' => 1, 'firstname' => 'Gabriela', 'lastname' => 'Cahuex', 'username' => 'gaby.cahuex','email' => 'gaby.cahuex@gruposgestores.org.gt','phone' => 11111111,'status' => 1, 'job' => 'Coordinadora de Dto Desarrollo Institucional','password' => bcrypt('gaby.cahuex')],
            ['id' => 2, 'firstname' => 'Ivan', 'lastname' => 'Dieguez', 'username' => 'ivan.dieguez','email' => 'ivan.dieguez@gruposgestores.org.gt','phone' => 11111111,'status' => 1, 'job' => 'Coordinadora Puentes','password' => bcrypt('ivan.dieguez')],
            ['id' => 3, 'firstname' => 'Alejandro', 'lastname' => 'Arango', 'username' => 'alejandro.arango','email' => 'alejandro.arango@gruposgestores.org.gt','phone' => 11111111,'status' => 1, 'job' => 'Gerente General','password' => bcrypt('alejandro.arango')],
            ['id' => 4, 'firstname' => 'Jhonny', 'lastname' => 'Hernandez', 'username' => 'jhony.hernandez','email' => 'jhony.hernandez@gruposgestores.org.gt','phone' => 11111111,'status' => 1, 'job' => 'Coordinadora de Dto Servicios Desarrollo Empresarial','password' => bcrypt('jhony.hernandez')],
            ['id' => 5, 'firstname' => 'Lester', 'lastname' => 'Herrera', 'username' => 'lester.herrera','email' => 'lester.herrera@gruposgestores.org.gt','phone' => 11111111,'status' => 1, 'job' => 'Gerente Administrativo y Financiero','password' => bcrypt('lester.herrera')],
            ['id' => 6, 'firstname' => 'David', 'lastname' => 'Mazariegos', 'username' => 'david.mazariegos','email' => 'david.mazariegos@gruposgestores.org.gt','phone' => 11111111,'status' => 1, 'job' => 'Coordinadora de Dto Grupos Gestores','password' => bcrypt('david.mazariegos')],
            ['id' => 7, 'firstname' => 'Sintia', 'lastname' => 'Motta', 'username' => 'sintia.motta','email' => 'sintia.motta@gruposgestores.org.gt','phone' => 11111111,'status' => 1, 'job' => 'Asesora Empresarial Sr.','password' => bcrypt('sintia.motta')],
            ['id' => 8, 'firstname' => 'Elmar', 'lastname' => 'De León', 'username' => 'elmar.deleon','email' => 'elmar.deleon@gruposgestores.org.gt','phone' => 11111111,'status' => 1, 'job' => 'Asesor Empresarial Sr.','password' => bcrypt('elmar.deleon')],
        ];

        DB::table('users')->insert($users);
    }
}
