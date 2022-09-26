<?php
    $koneksi = mysqli_connect('localhost','root','','pertemuan5');
    
    $id = $_POST['id']; 
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];

    $sqlinsert = "INSERT INTO tbl_mhs VALUE('$id','$prodi','$nama','$alamat')";
    $hasilinsert = mysqli_query($koneksi,$sqlinsert);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .cntr{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        if(!$hasilinsert){
            echo "Data Gagal Dimasukan";
        }else{
            echo "<div class='alert alert-success'><strong>Success! </strong> Data Sukses Dimasukan
          </div><br>";
            echo "<div class='cntr'><a href='Laporan6.php'><button type='button' class='btn btn-info'>Show Data</button></a></div>";
        }
    ?>
</body>
</html>
