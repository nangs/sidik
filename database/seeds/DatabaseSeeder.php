<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        // DB::table('users')->insert([
        //     'name'      => 'Panitia PSB MIAS',
        //     'email'     => 'panitiapsbmias@gmail.com',
        //     'password'  => bcrypt('password'),
        //     'role'      => 'admin'
        // ]);

        // DB::table('ta')->insert(['periode' => '2016/2017', 'active' => 1]);

        DB::table('rekening')->insert([
            'bank'          => 'BNI Syariah',
            'pemegang'      => 'SDIT ASSUNNAH',
            'nomor'         => '1436 2015 25',
            'keterangan'    => 'Untuk Jenjang SD'
        ]);

        DB::table('rekening')->insert([
            'bank'          => 'BNI Syariah',
            'pemegang'      => 'SDIT ASSUNNAH',
            'nomor'         => '1436 2015 36',
            'keterangan'    => 'Untuk Jenjang SMP'
        ]);

        DB::table('rekening')->insert([
            'bank'          => 'BNI Syariah',
            'pemegang'      => 'SDIT ASSUNNAH',
            'nomor'         => '1436 2015 47',
            'keterangan'    => 'Untuk Jenjang SMA dan TBA'
        ]);

        Model::reguard();
    }
}
