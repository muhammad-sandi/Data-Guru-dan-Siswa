<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class SiswaSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama'          =>  'Sandi',
                'no_absen'      =>  '1',
				'jenis_kelamin' =>  'pria',
				'no_telp'       =>  '081234555678',
				'email'         =>  'sandi@gmail.com',
				'alamat'	=>  'Jl. Mawar Putih No. 90, Waru Sidoarjo',
				'created_at' => Time::now()
			],
			[
				'nama'          =>  'Faiq',
                'no_absen'      =>  '2',
				'jenis_kelamin' =>  'pria',
				'no_telp'       =>  '081234555678',
				'email'         =>  'faiq@gmail.com',
				'alamat'	=>  'Jl. Mawar Putih No. 19, Waru Sidoarjo',
				'created_at' => Time::now()
			],
            [
				'nama'          =>  'Vapeng',
                'no_absen'      =>  '3',
				'jenis_kelamin' =>  'pria',
				'no_telp'       =>  '081234555678',
				'email'         =>  'vapeng@gmail.com',
				'alamat'	=>  'Jl. Mawar Putih No. 10, Waru Sidoarjo',
				'created_at' => Time::now()
			],
		];
		$this->db->table('siswa')->insertBatch($data);
	}
}