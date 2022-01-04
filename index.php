 <?php 

    include 'koneksi.php';

 ?>

 <!DOCTYPE html>
 <html>
 <head>
    <title>UAS Web Programming</title>
 </head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

 <body>
         <div class="card">
          <h5 class="card-header">Tugas UAS Web Programming</h5>
          <div class="card-body">
            <h5 class="card-title">Achid Sahampelo</h5>
            <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
          </div>
        </div>

    <table class="table table-dark table-hoover table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
   <?php $nomor=1; ?>
        <?php $ambil=$koneksi->query("SELECT * FROM mahasiswa"); ?>
        <?php while($pecah = $ambil->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama']; ?></td>
            <td><?php echo $pecah['nim']; ?></td>
            <td><?php echo $pecah['jenis_kelamin']; ?></td>
            <td>    <a href="hapus.php?hapus&id=<?php echo $pecah['no']; ?>" class="btn btn-danger">Hapus</a> 
                    <a href="ubah.php?ubah&id=<?php echo $pecah['no']; ?>" class="btn btn-warning">Ubah</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
  </tbody>
</table>

 </body>

 </html>
