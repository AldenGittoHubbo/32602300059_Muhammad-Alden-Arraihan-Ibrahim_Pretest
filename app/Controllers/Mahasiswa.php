<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use Config\Database;

class Mahasiswa extends Controller
{
    public function tambah()
    {
        $db = Database::connect();
        $builder = $db->table('tb_mahasiswa');

        $data = [
            'nim'   => '32602300059',
            'nama'  => 'Muhammad Alden Arraihan Ibrahim',
            'prodi' => 'Teknik Informatika'
        ];

        $builder->insert($data);

        return "Data berhasil ditambahkan.";
    }

   public function tampil()
{
    $db = Database::connect();
    $builder = $db->table('tb_mahasiswa');
    $query = $builder->get();

    $data['mahasiswa'] = $query->getResult();

    return view('mahasiswa_view', $data);
}


}
