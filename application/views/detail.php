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
  <h1>Detail buku</h1>
  <dl>
    <dt>ISBN</dt>
    <dd><?= $isbn ?></dd>

    <dt>Judul</dt>
    <dd><?= $judul ?></dd>

    <dt>Pengarang</dt>
    <dd><?= $pengarang ?></dd>

    <dt>Tanggal Rilis</dt>
    <dd><?= $tanggal_rilis ?></dd>

    <dt>Jumlah Halaman</dt>
    <dd><?= $jumlah_halaman ?></dd>

    <dt>Sinopsis</dt>
    <dd><?= $sinopsis ?></dd>


    <dt>ID Penerbit</dt>
    <?php
    $this->db->select('*')
      ->from('tbl_penerbit')
      ->where('id', $id_penerbit);
    $query = $this->db->get();

    foreach ($query->result_array() as $row) {
      $NamaPenerbit = $row['nama'];
    }
    ?>
    <dd><?= $NamaPenerbit ?></dd>

    <dt>Gambar</dt>

    <dd><img src="<?php echo base_url('assets/uploads/' . $gambar); ?>" width="200"></dd>

    <dt>Tersedia</dt>
    <dd><?= $tersedia ?></dd>

  </dl>

  <a href='#' onclick="history.back()" class="btn btn-danger">Back</a>
</body>

</html>