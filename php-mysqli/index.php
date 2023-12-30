<?php
include 'config/databases.php';
include 'layouts/header.php';
?>
<br>
<br>

<div class="mx-auto mt-5">
    <div class="card">
        <h5 class="card-header">Masukan Data Anda</h5>
        <div class="card-body">
            <form action="" method="POST">
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">NPM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="npm" value="<?php $npm ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="<?php $name ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" value=" <?php $alamat ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">faculty</label>
                    <div class="col-sm-10">
                        <select id="faculty" class="form-control">

                            <option value="">-pilih Fakultas-</option>
                            <option value="INFORMATIKA" <?php if ($faculty == "INFORMATIKA") echo "selected" ?>>INFORMATIKA</option>
                            <option value="AGRIBISNIS" <?php if ($faculty == "AGRIBISNIS") echo "selected" ?>>AGRIBISNIS</option>
                            <option value="SISTEM INFORMASI" <?php if ($faculty == "SISTEM INFORMASI") echo "selected" ?>>SISTEM INFORMASI</option>
                            <option value="MANAJEMENT" <?php if ($faculty == "MANAJEMENT") echo "selected" ?>>MANAJEMENT</option>
                        </select>
                    </div>
                </div>
                <div class="vol-12">
                    <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- untuk memasukan data -->

<!-- untuk menampilkan data  -->

<div class="card-body">
    <form action="" method="GET">


    </form>
</div>

</body>

</html>