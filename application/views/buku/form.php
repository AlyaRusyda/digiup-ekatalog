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
    <form method="post" action="<?= base_url('buku/save') ?>" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>" />
        <div class="mb-1">
            <label></label>
            <div>
                <h3>Tambah/Ubah Buku</h3>
            </div>
        </div>
        <div class="row mb-3">
            <label class="form-label">ISBN</label>
            <div class="col-sm-6">
                <input type="text" name="isbn" id="isbn" value="<?= $isbn ?>" class="form-control" required />
            </div>
        </div>

        <div class="row mb-3">
            <label class="form-label">Judul</label>
            <div class="col-sm-6">
                <input type="text" name="judul" id="judul" value="<?= $judul ?>" class="form-control" required />
            </div>
        </div>

        <div class="row mb-3">
            <label class="form-label">Pengarang</label>
            <div class="col-sm-6">
                <input type="text" name="pengarang" id="pengarang" value="<?= $pengarang ?>" class="form-control" required />
            </div>
        </div>

        <div class="row mb-3">
            <label class="form-label">Tanggal Rilis</label>
            <div class="col-sm-6">
                <input type="date" name="tanggal_rilis" id="tanggal_rilis" value="<?= $tanggal_rilis ?>" class="form-control" required />
            </div>
        </div>

        <div class="row mb-3">
            <label class="form-label">Jumlah Halaman</label>
            <div class="col-sm-6">
                <input type="text" name="jumlah_halaman" id="jumlah_halaman" value="<?= $jumlah_halaman ?>" class="form-control" required />
            </div>
        </div>
        <div class="row mb-3">
            <label class="form-label">Sinopsis</label>
            <div class="col-sm-6">
                <textarea class="form-control" type="text" name="sinopsis" id="sinopsis">
                    <?= $sinopsis ?>
                </textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label class="form-label">Nama Penerbit</label>
            <div class="col-sm-6">
                <select name="id_penerbit" id="id_penerbit" class="form-control">
                    <?php
                    $query = $this->db->get('tbl_penerbit');

                    foreach ($query->result_array() as $row) {
                        echo '<option value="' . $row['id'] . '">' . $row['nama'] . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label class="form-label">Gambar</label>
            <div class="col-sm-6">
                <input type="file" name="gambar" id="gambar" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label class="form-label">Tersedia</label>
            <div class="col-sm-6">
                <select name="tersedia" id="tersedia" class="form-control" require>
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak tersedia</option>
                </select>
            </div>
        </div>

        <div>
            <input type="button" value="Cancel" onclick="history.back()" class="btn btn-danger" />
            <input type="submit" value="Simpan" class="btn btn-success" />
        </div>

    </form>
</body>

</html>