<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
    protected $table = "guru";
    protected $primaryKey = "id_guru";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_siswa', 'nama', 'mata_pelajaran', 'jenis_kelamin', 'no_telp', 'email', 'alamat'];
}