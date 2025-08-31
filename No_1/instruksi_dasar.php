<?php
// =====================================
// No.1 - Instruksi PHP Dasar
// Studi kasus: Data Mahasiswa
// =====================================

// --- Instruksi Berurutan ---
$nama = "Muhammad Hasbi";
$nim  = "202501001";
$prodi = "Teknik Informatika";
$nilai = [85, 70, 90, 65, 80]; // nilai beberapa mata kuliah

echo "<pre>"; // supaya newline \n kebaca di browser

echo "=== Data Mahasiswa ===\n";
echo "Nama   : $nama\n";
echo "NIM    : $nim\n";
echo "Prodi  : $prodi\n\n";

// --- Instruksi Pemilihan ---
// Hitung rata-rata nilai
$total = 0;
foreach ($nilai as $n) {
    $total += $n;
}
$rata = $total / count($nilai);

// Tentukan predikat
echo "=== Hasil Studi ===\n";
echo "Rata-rata nilai: $rata\n";

if ($rata >= 85) {
    $predikat = "A (Sangat Baik)";
} elseif ($rata >= 70) {
    $predikat = "B (Baik)";
} elseif ($rata >= 60) {
    $predikat = "C (Cukup)";
} else {
    $predikat = "D (Kurang)";
}
echo "Predikat: $predikat\n\n";

// --- Instruksi Pengulangan ---
// Tampilkan daftar nilai mata kuliah
echo "=== Daftar Nilai Mata Kuliah ===\n";
$mataKuliah = ["Pemrograman Web", "Basis Data", "PBO", "Matematika Diskrit", "Komputer Grafik"];

for ($i = 0; $i < count($mataKuliah); $i++) {
    $ket = ($nilai[$i] >= 70) ? "Lulus" : "Tidak Lulus";
    echo ($i+1) . ". " . $mataKuliah[$i] . " | Nilai: " . $nilai[$i] . " | $ket\n";
}

echo "</pre>";
