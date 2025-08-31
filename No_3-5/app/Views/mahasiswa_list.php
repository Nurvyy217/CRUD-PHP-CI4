<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <form method="get" action="">
        <input type="text" name="keyword" placeholder="Cari NIM/Nama">
        <button type="submit">Cari</button>
        <a href="<?= site_url('mahasiswa/create') ?>">Tambah Mahasiswa</a>
    </form>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama Lengkap</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; foreach ($mahasiswa as $mhs): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= esc($mhs['nim']) ?></td>
            <td><?= esc($mhs['nama_lengkap']) ?></td>
            <td>
                <a href="<?= site_url('mahasiswa/detail/'.$mhs['nim']) ?>">Detail</a> |
                <a href="<?= site_url('mahasiswa/edit/'.$mhs['nim']) ?>">Edit</a> |
                <a href="<?= site_url('mahasiswa/delete/'.$mhs['nim']) ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>