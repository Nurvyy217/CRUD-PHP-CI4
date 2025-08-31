<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h2>Detail Mahasiswa</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr><th>NIM</th><td><?= esc($mhs['nim']) ?></td></tr>
        <tr><th>Nama Lengkap</th><td><?= esc($mhs['nama_lengkap']) ?></td></tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>
                <?php
                    if ($mhs['jenis_kelamin'] === 'L') {
                        echo 'Laki-Laki';
                    } elseif ($mhs['jenis_kelamin'] === 'P') {
                        echo 'Perempuan';
                    } else {
                        echo esc($mhs['jenis_kelamin']);
                    }
                ?>
            </td>
        </tr>
        <tr><th>Tanggal Lahir</th><td><?= esc($mhs['tanggal_lahir']) ?></td></tr>
    </table>
    <a href="<?= site_url('mahasiswa') ?>">Kembali</a>
</body>
</html>