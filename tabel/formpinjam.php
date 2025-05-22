<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pinjaman perpustakaan</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<div class="container card mt-5 col-md-8">
                <h5 class="mb-0 mt-3 ms-2 fw-bold">Tambah Pesanan</h5><hr>
                <div class="card-body">
                    <form action="tambah.php" method="post">
                    <div class=" mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="tnim" placeholder="Masukkan Nama" required>
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">No Meja</label>
                            <input type="text" class="form-control" id="nama" name="tnama" placeholder="Masukkan No Meja" required>
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <br>
                                <input class="form-check-input" type="radio" name="tjk" id="flexRadioDefault1" value="Laki"> Laki-laki
                                <input class="form-check-input" type="radio" name="tjk" id="flexRadioDefault1" value="Perempuan"> Perempuan
                        </div>
                        <div class=" mb-3">
                        <label class="form-label">Menu Paket</label>
                        <select class="form-select" aria-label="Default select example" name="tfakultas">
                            <option selected>-= PILIH =-</option>
                            <option  value="Paket 1">Paket 1</option>
                            <option  value="Paket 2">Paket 2</option>
                            <option  value="Paket 3">Paket 3</option>
                        </select>
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Menu Pesanan</label>
                            <textarea class="form-control" name="tjudulbuku" id="pertanyaan" rows="3" placeholder="Masukkan Menu Pesanan" required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-success fw-bold">Tambah Data Pesanan</button>
                    </form>
                </div>
    </div>    
    <br><br>
<body>
    
</body>

</html>

