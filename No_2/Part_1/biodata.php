<?php
// =======================================================================================
// No.2 - Part 1 - Form dan Table Data Mahasiswa yg disimpan dalam array assosiatif session
// Studi kasus: Data Mahasiswa
// =======================================================================================

// Inisialisasi array untuk menyimpan data mahasiswa
session_start();
if (!isset($_SESSION['mahasiswa'])) {
    $_SESSION['mahasiswa'] = [];
}

// Proses submit form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim = $_POST['nim'] ?? '';
    $nama_lengkap = $_POST['nama_lengkap'] ?? '';
    $jenis_kelamin = $_POST['jenis_kelamin'] ?? '';
    $tanggal_lahir = $_POST['tanggal_lahir'] ?? '';

    // Simpan data ke session
    $_SESSION['mahasiswa'][] = [
        'nim' => $nim,
        'nama_lengkap' => $nama_lengkap,
        'jenis_kelamin' => $jenis_kelamin,
        'tanggal_lahir' => $tanggal_lahir
    ];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata Mahasiswa</title>
</head>
<body>
    <h2>Form Biodata Mahasiswa</h2>
    <form method="POST">
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" required><br><br>

        <label for="nama_lengkap">Nama Lengkap:</label><br>
        <input type="text" id="nama_lengkap" name="nama_lengkap" required><br><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="">--Pilih--</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label><br>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br><br>

        <button type="submit">Submit</button>
    </form>

    <h2>Daftar Mahasiswa</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
        </tr>
        <?php if (!empty($_SESSION['mahasiswa'])): ?>
            <?php foreach ($_SESSION['mahasiswa'] as $i => $mhs): ?>
                <tr>
                    <td><?php echo $i + 1; ?></td>
                    <td><?php echo htmlspecialchars($mhs['nim']); ?></td>
                    <td><?php echo htmlspecialchars($mhs['nama_lengkap']); ?></td>
                    <td><?php echo htmlspecialchars($mhs['jenis_kelamin']); ?></td>
                    <td><?php echo htmlspecialchars($mhs['tanggal_lahir']); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">Belum ada data mahasiswa.</td>
            </tr>
        <?php endif; ?>