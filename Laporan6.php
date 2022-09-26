<?php
$koneksi = mysqli_connect('localhost','root','','pertemuan5');

$sql = 'SELECT id_mhs,nama_mhs,nama_prodi,alamat_mhs
FROM tbl_mhs mhs,tbl_prodi prd
WHERE mhs.id_prodi = prd.id_prodi';
$hasil = mysqli_query($koneksi,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data_Mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Data Mahasiswa Teknik</h2>
  <p>Data Ini dari mySQL</p>
  <a href="Form6.php"><button type="submit" class="btn btn-secondary" a href="Form6.php">TAMBAH</button></a>   
  <br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Alamat</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while($baris = mysqli_fetch_assoc($hasil)){
        echo '<tr>
          <td>'.$baris['id_mhs'].'</td>
          <td>'.$baris['nama_mhs'].'</td>
          <td>'.$baris['nama_prodi'].'</td>
          <td>'.$baris['alamat_mhs'].'</td>
          <td><button type="button" class="btn btn-success">Edit</button>
          <button type="button" class="btn btn-danger">Hapus</button></td>
        </tr>';
      }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
