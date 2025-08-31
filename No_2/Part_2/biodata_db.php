<?php
// =======================================================================================
// No.2 - Part 2 - Form data mahasiswa yg disimpan di db mysql
// Studi kasus: Data Mahasiswa
// =======================================================================================
require_once 'connection_db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim           = $_POST['nim'] ?? '';
    $nama_lengkap  = $_POST['nama_lengkap'] ?? '';
    $jenis_kelamin = $_POST['jenis_kelamin'] ?? '';
    $tanggal_lahir = $_POST['tanggal_lahir'] ?? '';

    // Simpan data ke database (tabel belum dibuat, hanya query)
    $sql = "INSERT INTO biodata (nim, nama_lengkap, jenis_kelamin, tanggal_lahir) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ssss", $nim, $nama_lengkap, $jenis_kelamin, $tanggal_lahir);
        if ($stmt->execute()) {
            $pesan = "Data berhasil disimpan.";
        } else {
            $pesan = "Gagal menyimpan data: " . $stmt->error;
        }
        $stmt->close();
    } else {
        $pesan = "Gagal menyiapkan statement: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata Mahasiswa (DB)</title>
</head>
<body>
    <h2>Form Biodata Mahasiswa (Database)</h2>
    <?php if ($pesan): ?>
        <p><?php echo htmlspecialchars($pesan); ?></p>
    <?php endif; ?>
    <form method="POST">
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" required><br><br>

        <label for="nama_lengkap">Nama Lengkap:</label><br>
        <input type="text" id="nama_lengkap" name="nama_lengkap" required><br><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="">--Pilih--</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select><br><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label><br>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>