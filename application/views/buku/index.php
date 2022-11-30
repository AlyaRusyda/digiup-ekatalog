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
    <h1 class="mt-2 mb-2">List Buku</h1>
    <a href="<?= base_url("buku/form") ?>" class="btn btn-success">Tambah</a>
    <table class="table table-striped mt-3">
        <tr>
            <th>ISBN</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tanggal Rilis</th>
            <th>Jumlah Halaman</th>
            <th>Nama Pengarang</th>
            <th>Gambar</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php
        foreach ($records as $idx => $data) {
            $this->db->select('*')
                ->from('tbl_penerbit')
                ->where('id', $data['id_penerbit']);
            $query = $this->db->get();

            foreach ($query->result_array() as $row) {
                $namaPenerbit = $row['nama'];
            }
        ?>
            <tr>
                <td><?= $data['isbn'] ?></td>
                <td><?= $data['judul'] ?></td>
                <td><?= $data['pengarang'] ?></td>
                <td><?= $data['tanggal_rilis'] ?></td>
                <td><?= $data['jumlah_halaman'] ?></td>
                <td><?= $namaPenerbit ?></td>
                <td><img src="assets/uploads/<?= $data['gambar'] ?>" width="200" alt=""></td>
                <td><?= $data['tersedia'] ?></td>
                <td>
                    <div class="btn-group">
                        <a href="<?= base_url("buku/detail/{$data['id']}") ?>" class="btn btn-primary">Detail</a>
                        <a href="<?= base_url("buku/form/{$data['id']}") ?>" class="btn btn-warning">Edit</a>
                        <a onclick="return confirm('menghapus data?')" href="<?= base_url("buku/hapus/{$data['id']}") ?>" class="btn btn-danger">Hapus</a>
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