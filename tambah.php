<?php 

	include 'koneksi.php';

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
				<h2>Tambah Data</h2>
<form method="post" enctype="multipart/form-data">
	<div>
		<input type="text" name="nama" class="field" placeholder="Nama">
	</div><br>
	<div>
		<input type="text" name="nim" class="field" placeholder="NIM">
	</div><br>
	<div>
		<select name="jk" class="field">
			<option>Laki - Laki</option>
			<option>Perempuan</option>
		</select>
	</div><br>

	<button name="save" class="btn">Save</button>
	
</form>

<?php if (isset($_POST['save'])) 
{
	$koneksi->query("INSERT INTO mahasiswa
		(nama,nim,jenis_kelamin)
		VALUES('$_POST[nama]','$_POST[nim]','$_POST[jk]')");

	echo "<div><h2>Data Tersimpan</h2></div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php'>";
} 
?>

<br>
<a href="index.php">Kembali</a>
			</div>
		</div>
	</div>

</body>
</html>