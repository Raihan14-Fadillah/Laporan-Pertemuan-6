<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .cntr{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <div class='cntr'>
            <h1>Form Tambah Data Mahasiswa</h1>
        </div>
        <p>Isi data dengan benar</p>
        <form action="action.php" method="POST">
            <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Masukan ID Mahasiswa" name="id">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Masukan Nama Mahasiswa" name="nama">
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col">
                <select name="prodi" class="form-select">
                <option value="-">- Pilih Prodi - 
                <option value=1>Teknik Informatika
                <option value=2>Sistem Informasi
                <option value=3>Teknik Mekatronika
                <option value=4>Teknik Elektro
                <option value=5>Teknik Industri
                <option value=6>Teknik Mesin
                </select>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Masukan Alamat Mahasiswa" name="alamat">    
            </div>
            </div>
            <br>
            <div class="cntr">
            <button type="submit" class="btn btn-secondary">TAMBAH</button> 
            <input type="reset" class="btn btn-dark" name="reset" value="RESET">
            </div>
        </form>
    </div>
</body>
</html>
