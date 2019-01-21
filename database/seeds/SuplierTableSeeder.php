<?php

use Illuminate\Database\Seeder;
use DB;

class SuplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suplier')->insert([
        	'nama_perusahaan' => 'PT'.str_random(20),
			'nama_sup' => 'suplier_'.str_random(20),
			'no_hp' => str_random(20),
			'fax' => str_random(15),
			'no_hp' => str_random(15),
			'email' => str_random(20).'@gmail.com',
			'alamat' => 'Jl. '.str_random(20).' Kota',
			'keterangan' => '-'
        ]);
    }
}
