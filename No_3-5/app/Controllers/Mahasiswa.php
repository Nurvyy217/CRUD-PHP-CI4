<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use Config\Database;

class Mahasiswa extends Controller
{
    public function index()
    {
        $db = Database::connect();
        $keyword = $this->request->getGet('keyword');
        if ($keyword) {
            $sql = "SELECT * FROM biodata WHERE nama_lengkap LIKE ? OR nim LIKE ?";
            $query = $db->query($sql, ['%'.$keyword.'%', '%'.$keyword.'%']);
        } else {
            $sql = "SELECT * FROM biodata";
            $query = $db->query($sql);
        }
        $data['mahasiswa'] = $query->getResultArray();
        return view('mahasiswa_list', $data);
    }

    public function detail($nim)
    {
        $db = Database::connect();
        $sql = "SELECT * FROM biodata WHERE nim = ?";
        $query = $db->query($sql, [$nim]);
        $data['mhs'] = $query->getRowArray();
        return view('mahasiswa_detail', $data);
    }

    public function create()
    {
        return view('mahasiswa_form');
    }

    public function store()
    {
        $db = Database::connect();
        $sql = "INSERT INTO biodata (nim, nama_lengkap, jenis_kelamin, tanggal_lahir) VALUES (?, ?, ?, ?)";
        $db->query($sql, [
            $this->request->getPost('nim'),
            $this->request->getPost('nama_lengkap'),
            $this->request->getPost('jenis_kelamin'),
            $this->request->getPost('tanggal_lahir')
        ]);
        return redirect()->to('/mahasiswa');
    }

    public function edit($nim)
    {
        $db = Database::connect();
        $sql = "SELECT * FROM biodata WHERE nim = ?";
        $query = $db->query($sql, [$nim]);
        $data['mhs'] = $query->getRowArray();
        return view('mahasiswa_form', $data);
    }

    public function update($nim)
    {
        $db = Database::connect();
        $sql = "UPDATE biodata SET nama_lengkap=?, jenis_kelamin=?, tanggal_lahir=? WHERE nim=?";
        $db->query($sql, [
            $this->request->getPost('nama_lengkap'),
            $this->request->getPost('jenis_kelamin'),
            $this->request->getPost('tanggal_lahir'),
            $nim
        ]);
        return redirect()->to('/mahasiswa');
    }

    public function delete($nim)
    {
        $db = Database::connect();
        $sql = "DELETE FROM biodata WHERE nim = ?";
        $db->query($sql, [$nim]);
        return redirect()->to('/mahasiswa');
    }
}