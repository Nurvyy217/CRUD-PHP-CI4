<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use Config\Database;

class DbTest extends Controller
{
    public function index()
    {
        // Koneksi ke database
        $db = Database::connect();
        
        // Query manual
        $query = $db->query("SHOW TABLES");
        $result = $query->getResult();

        echo "<h2>Koneksi Berhasil!</h2>";
        echo "Daftar tabel di database: <br>";

        foreach ($result as $row) {
            print_r($row);
            echo "<br>";
        }
    }
}
