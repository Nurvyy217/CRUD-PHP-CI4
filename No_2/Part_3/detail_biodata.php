<?php
// =======================================================================================
// No.2 - Part 3 - Table Detail Mahasiswa (GET dari db)
// Studi kasus: Data Mahasiswa
// =======================================================================================

require_once '../Part_2/connection_db.php';

// Ambil NIM dari parameter URL
$nim = $_GET['nim'] ?? null;
$data = null;

if ($nim) {
    $sql = "SELECT nim, nama_lengkap, jenis_kelamin, tanggal_lahir FROM biodata WHERE nim = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nim);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h2>Detail Mahasiswa</h2>
    <?php if ($data): ?>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>NIM</th>
                <td><?php echo htmlspecialchars($data['nim']); ?></td>
            </tr>
            <tr>
                <th>Nama Lengkap</th>
                <td><?php echo htmlspecialchars($data['nama_lengkap']); ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>
                    <?php
                    if ($data['jenis_kelamin'] === 'L') {
                        echo "Laki-laki";
                    } elseif ($data['jenis_kelamin'] === 'P') {
                        echo "Perempuan";
                    } else {
                        echo htmlspecialchars($data['jenis_kelamin']);
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><?php echo htmlspecialchars($data['tanggal_lahir']); ?></td>
            </tr>
        </table>
    <?php else: ?>
        <p>Data mahasiswa tidak ditemukan.</p>
    <?php endif; ?>
    <br>
    <a href="list_biodata.php">Kembali ke Daftar Mahasiswa</a>
</body>
</html>