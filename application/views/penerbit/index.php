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
    <h1>List Penerbit</h1>
    <a href="<?= base_url("penerbit/form") ?>" class="btn btn-success">Tambah</a>
    <table class="table mt-3">
        <tr>
            <th>Nama Penerbit</th>
            <th>Alamat</th>
            <th>Telpon</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php
        foreach ($records as $idx => $data) {
        ?>
            <tr>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['alamat'] ?></td>
                <td><?= $data['telpon'] ?></td>
                <td><?= $data['email'] ?></td>
                <td>
                    <div class="btn-group">
                        <a href="<?= base_url("penerbit/detail/{$data['id']}") ?>" class="btn btn-primary">Detail</a>
                    <a href="<?= base_url("penerbit/form/{$data['id']}") ?>" class="btn btn-warning">Edit</a>
                    <a onclick="return confirm('menghapus data?')" href="<?= base_url("penerbit/hapus/{$data['id']}") ?>" class="btn btn-danger">Hapus</a>
                    </div>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <?php
    include APPPATH . 'views/fragment/footer.php';
    ?>
</body>

</html>