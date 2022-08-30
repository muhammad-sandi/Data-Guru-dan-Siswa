<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class GuruSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama'          =>  'Maesitoh',
                'mata_pelajaran'=>  'b_indonesia',
				'jenis_kelamin' =>  'wanita',
				'no_telp'       =>  '081234555678',
				'email'         =>  'maesitoh@gmail.com',
				'alamat'	=>  'Jl. Mawar Putih No. 90, Waru Sidoarjo',
				'created_at' => Time::now()
			],
			[
				'nama'          =>  'Agus',
                'mata_pelajaran'=>  'mapel_kejuruan',
				'jenis_kelamin' =>  'pria',
				'no_telp'       =>  '081234555678',
				'email'         =>  'agus@gmail.com',
				'alamat'	=>  'Jl. Mawar Putih No. 19, Waru Sidoarjo',
				'created_at' => Time::now()
			],
            [
				'nama'          =>  'Lia',
                'mata_pelajaran'=>  'b_inggris',
				'jenis_kelamin' =>  'wanita',
				'no_telp'       =>  '081234555678',
				'email'         =>  'liadebby@gmail.com',
				'alamat'	=>  'Jl. Mawar Putih No. 10, Waru Sidoarjo',
				'created_at' => Time::now()
			],
		];
		$this->db->table('guru')->insertBatch($data);
	}
}