<?php

namespace App\Controllers;

use App\Models\GuruModel;

class Guru extends BaseController
{
    protected $guru;

    function __construct()
    {
        $this->guru = new GuruModel();
    }

    public function index()
    {
        $data['guru'] = $this->guru->findAll();
        return view('guru/index', $data);
    }

    public function create()
    {
        return view('guru/create');
    }

    public function store()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'mata_pelajaran' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'no_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Email Harus Valid'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->guru->insert([
            'nama' => $this->request->getVar('nama'),
            'mata_pelajaran' => $this->request->getVar('mata_pelajaran'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'no_telp' => $this->request->getVar('no_telp'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat')
        ]);
        session()->setFlashdata('message', 'Tambah Data Guru Berhasil');
        return redirect()->to('/guru');
    }

    function edit($id)
    {
        $dataGuru = $this->guru->find($id);
        if (empty($dataGuru)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Guru Tidak ditemukan !');
        }
        $data['guru'] = $dataGuru;
        return view('guru/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'mata_pelajaran' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'no_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Email Harus Valid'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->guru->update($id, [
            'nama' => $this->request->getVar('nama'),
            'mata_pelajaran' => $this->request->getVar('mata_pelajaran'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'no_telp' => $this->request->getVar('no_telp'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat')
        ]);
        session()->setFlashdata('message', 'Update Data Guru Berhasil');
        return redirect()->to('/guru');
    }

    function delete($id)
    {
        $dataGuru = $this->guru->find($id);
        if (empty($dataGuru)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Guru Tidak ditemukan !');
        }
        $this->guru->delete($id);
        session()->setFlashdata('message', 'Delete Data Guru Berhasil');
        return redirect()->to('/guru');
    }
}