<?php
$queryUser = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id DESC");
?>
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">Data User</div>
        <div class="card-body">
          <div align="right" class="mb-3">
            <a href="?pg=tambah-user" class="btn btn-success">Tambah</a>
          </div>
          <?php if (isset($_GET['tambah'])) : ?>
            <div class="alert alert-secondary">
              Data Berhasil ditambah !!!
            </div>
          <?php endif ?>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              while ($rowUser = mysqli_fetch_assoc($queryUser)) : ?>
                <tr>
                  <td>
                    <?= $no++ ?>
                  </td>
                  <td><?php echo $rowUser['nama_lengkap'] ?></td>
                  <td><?php echo $rowUser['email'] ?></td>
                  <td>
                    <a href="?pg=tambah-user&edit=<?= $rowUser['id'] ?>" class="btn btn-sm btn-success">Edit</a> |

                    <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?pg=tambah-user&delete=<?php echo $rowUser['id'] ?> " class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>
              <?php endwhile ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>