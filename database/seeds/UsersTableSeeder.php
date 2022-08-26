<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ketua = factory(User::class)->create([
            'nip' => '1993121020180810001',
            'name' => 'KETUA',
            'email' => 'ketua@koperasi.com',
            'email_verified_at' => now(),
            'password' => bcrypt('koperasi'),
        ]);

        $ketua->assignRole('ketua');

        $this->command->info('>_Here is your ketua details to login:');
        $this->command->warn($ketua->email);
        $this->command->warn('Password is "koperasi"');

        $bendahara = factory(USer::class)->create([
            'nip' => '1993121020180810002',
            'name' => 'BENDAHARA',
            'email' => 'bendahara@koperasi.com',
            'email_verified_at' => now(),
            'password' => bcrypt('koperasi'),
        ]);

        $bendahara->assignRole('bendahara');

        $this->command->info('>_Here is your bendahara details to login:');
        $this->command->warn($bendahara->email);
        $this->command->warn('Password is "koperasi"');

        $anggota = factory(USer::class)->create([
            'nip' => '1993121020180810004',
            'name' => 'ANGGOTA',
            'email' => 'anggota@koperasi.com',
            'email_verified_at' => now(),
            'password' => bcrypt('koperasi'),
            'phone' => '89672650972',
        ]);

        $anggota->assignRole('anggota');

        $this->command->info('>_Here is your anggota details to login:');
        $this->command->warn($anggota->email);
        $this->command->warn('Password is "koperasi"');

        //bersihkan cache
        $this->command->call('cache:clear');
    }
}
