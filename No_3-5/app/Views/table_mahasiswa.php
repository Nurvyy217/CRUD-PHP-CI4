<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($mahasiswa as $mhs): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= esc($mhs['nim']); ?></td>
                <td><?= esc($mhs['nama']); ?></td>
                <td><?= esc($mhs['jk']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
