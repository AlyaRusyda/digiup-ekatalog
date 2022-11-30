<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <?php
    include APPPATH . 'views/fragment/header.php';
    include APPPATH . 'views/fragment/menu.php';
    ?>
    <h3>
        <?= validation_errors(); ?>
    </h3>
    <form method="post" action="<?= base_url('penerbit/save') ?>">
        <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>" />
        <div>
            <label></label>
            <div>
                <h3>Tambah/Ubah Penerbit</h3>
            </div>
        </div>
        <div>
            <label>Nama Penerbit</label>
            <div class="col-sm-6">
                <input type="text" name="nama" id="nama" value="<?= $nama ?>" class="form-control mb-1" required />
            </div>
        </div>

        <div class="row mb-3">
            <label class="form-label">Alamat</label>
            <div class="col-sm-6">
                <textarea class="form-control" type="text" name="alamat" id="alamat">
                    <?= $alamat ?>
                </textarea>
            </div>
        </div>

        <div>
            <label>Telpon</label>
            <div class="col-sm-6">
                <input type="tel" name="telpon" id="telpon" value="<?= $telpon ?>" class="form-control mb-1" required />
            </div>
        </div>

        <div>
            <label>Email</label>
            <div class="col-sm-6">
                <input type="email" name="email" id="email" value="<?= $email ?>" class="form-control mb-1" required />
            </div>
        </div>

        <div>
            <input type="button" value="Cancel" onclick="history.back()" class="btn btn-danger" />
            <input type="submit" value="Simpan" class="btn btn-success" />
        </div>

    </form>
</body>

</html>