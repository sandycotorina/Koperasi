<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AclSeed::class,
            UsersTableSeeder::class,
            TypeTableSeeder::class,
        ]);
    }
}
