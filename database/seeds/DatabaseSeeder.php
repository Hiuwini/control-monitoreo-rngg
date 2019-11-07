<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            CInstitutionalSeeder::class,
            UsersTableSeeder::class,
            RolesTableSeeder::class,
            PermisosTableSeeder::class,
            ProjectsTableSeeder::class
        ]);
    }
}
