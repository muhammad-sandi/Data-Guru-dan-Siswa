<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = "siswa";
    protected $primaryKey = "id_siswa";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_siswa', 'nama', 'no_absen', 'jenis_kelamin', 'no_telp', 'email', 'alamat'];
}