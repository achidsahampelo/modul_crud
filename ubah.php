<?php 

	include 'koneksi.php';

	$ambil = $koneksi->query("SELECT * FROM mahasiswa WHERE no='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tugas UAS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>

	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Ubah Data</h2>

<form method="post" enctype="multipart/form-data">
	<div>
		<input type="text" name="nama" class="field" value="<?php echo $pecah['nama']; ?>">
	</div><br>
	<div>
		<input type="text" name="nim" class="field" value="<?php echo $pecah['nim']; ?>">
	</div><br>
	<div>
		<select name="jk" class="field">
			<option>Laki - Laki</option>
			<option>Perempuan</option> 
		</select>
	</div><br>

	<button name="change" class="btn">Ubah</button>
	
</form>

<?php 

	if (isset($_POST['change'])) 
	{
		$koneksi->query("UPDATE mahasiswa SET nama='$_POST[nama]',
			nim='$_POST[nim]',jenis_kelamin='$_POST[jk]'
			WHERE no='$_GET[id]'");

			echo "<script>alert('Data Berhasil Di Ubah');</script>";
			echo "<script>location='index.php';</script>";
}
 ?>
<br>
 <a href="index.php">Kembali</a>

</body>
</html>