<?php
// =======================================================================================
// No.2 - Part 3 - Table List Mahasiswa (GET dari db)
// Studi kasus: Data Mahasiswa
// =======================================================================================

require_once '../Part_2/connection_db.php';

// Ambil data mahasiswa dari database
$sql = "SELECT nim, nama_lengkap FROM biodata";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>List Mahasiswa (Database)</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Lihat Detail</th>
        </tr>
        <?php if ($result && $result->num_rows > 0): ?>
            <?php $no = 1; ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo htmlspecialchars($row['nama_lengkap']); ?></td>
                    <td>
                        <a href="detail_biodata.php?nim=<?php echo urlencode($row['nim']); ?>">
                            <button>Lihat Detail</button>
                        </a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">Belum ada data mahasiswa.</td>
            </tr>
        <?php endif; ?>