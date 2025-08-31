<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
</head>
<body>
    <h2><?= isset($mhs) ? 'Edit' : 'Tambah' ?> Mahasiswa</h2>
    <form method="post" action="<?= isset($mhs) ? site_url('mahasiswa/update/'.$mhs['nim']) : site_url('mahasiswa/store') ?>">
        <?php if (!isset($mhs)): ?>
            <label>NIM:</label><br>
            <input type="text" name="nim" required><br>
        <?php else: ?>
            <label>NIM:</label><br>
            <input type="text" name="nim" value="<?= esc($mhs['nim']) ?>" readonly><br>
        <?php endif; ?>
        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama_lengkap" value="<?= isset($mhs) ? esc($mhs['nama_lengkap']) : '' ?>" required><br>
        <label>Jenis Kelamin:</label><br>
        <select name="jenis_kelamin" required>
            <option value="">--Pilih--</option>
            <option value="L" <?= (isset($mhs) && $mhs['jenis_kelamin']=='L') ? 'selected' : '' ?>>Laki-laki</option>
            <option value="P" <?= (isset($mhs) && $mhs['jenis_kelamin']=='P') ? 'selected' : '' ?>>Perempuan</option>
        </select><br>
        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir" value="<?= isset($mhs) ? esc($mhs['tanggal_lahir']) : '' ?>" required><br><br>
        <button type="submit"><?= isset($mhs) ? 'Update' : 'Simpan' ?></button>
        <a href="<?= site_url('mahasiswa') ?>">Batal</a>
    </form>
</body>
</html>