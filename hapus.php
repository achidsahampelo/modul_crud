<?php 

include 'koneksi.php';

$ambil = $koneksi->query("SELECT * FROM mahasiswa WHERE no='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM mahasiswa WHERE no = '$_GET[id]'");

echo "<script>alert('Data Berhasil Di Hapus');</script>";
echo "<script>location='index.php';</script>";
 ?>