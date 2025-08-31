<?php

namespace App\Controllers;

class TableMahasiswa extends BaseController
{
    public function index()
    {
        $mahasiswa = [
            ['nim' => '241511019', 'nama' => 'Muhammad Hasbi', 'jk' => 'Laki-laki'],
            ['nim' => '241511020', 'nama' => 'Steve', 'jk' => 'Laki-laki'],
            ['nim' => '241511021', 'nama' => 'Alex', 'jk' => 'Laki-laki']
        ];

        return view('table_mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
}
