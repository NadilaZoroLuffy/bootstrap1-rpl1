<?php require_once('components/header.php') ?>
    <div class="container-fluid">
        <div class="row">
            <?php require_once('components/nav.php') ?>
            <div class="col-10 my-3">
                <h2>Data Produk</h2>
                <div class="mb-3"><button type="button" class="btn btn-primary">tambah produk</button></div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga Produk</th>
      <th scope="col">Foto Produk</th>
      <th scope="col">Aksi</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <th class="align-middle" scope="row">1</th>
      <td class="align-middle">Printer HP Pacar saya</td>
      <td class="align-middle">Rp.752400</td>
      <td class="align-middle"><img src="assets/eren.jpg" alt="" class="image-table"></td>
      <td class="align-middle"><button type="button" class="btn btn-success">Edit Produk</button> <button type="button" class="btn btn-danger">Hapus Produk</button></td>
    </tr>
    <tr>
      <th class="align-middle" scope="row">2</th>
      <td class="align-middle">Printer HP Pacar saya</td>
      <td class="align-middle">Rp.752400</td>
      <td class="align-middle"><img src="assets/anos.jpg" alt="" class="image-table"></td>
      <td class="align-middle"><button type="button" class="btn btn-success">Edit Produk</button> <button type="button" class="btn btn-danger">Hapus Produk</button></td>
    </tr>
    <tr>
      <th class="align-middle" scope="row">3</th>
      <td class="align-middle">Printer HP Pacar saya</td>
      <td class="align-middle">Rp.752400</td>
      <td class="align-middle"><img src="assets/levi.jpg" alt="" class="image-table"></td>
      <td class="align-middle"><button type="button" class="btn btn-success">Edit Produk</button> <button type="button" class="btn btn-danger">Hapus Produk</button></td>
    </tr>
  </tbody>
</table>
            </div>
        </div>
    </div>
    <?php require_once('components/footer.php') ?>