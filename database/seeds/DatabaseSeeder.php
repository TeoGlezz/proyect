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
        $this->call(TipoEvento::class);
        $this->call(Users::class);
        //$this->call(Eventos::class);
        // $this->call(UsersTableSeeder::class);
    }
}
