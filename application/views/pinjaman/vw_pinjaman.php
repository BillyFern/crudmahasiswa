<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <h1 class="h3 mb-4 ">
            <?php echo $judul; ?>
        </h1>
        <div class="row">
            <div class="col-md-6"><a href="<?= base_url('index.php/') ?>Pinjaman/tambah" class="btn btn-info mb-2">Tambah Pinjaman</a></div>
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        </p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>NIK</td>
                                    <td>Nama lengkap</td>
                                    <td>Alamat</td>
                                    <td>No Telp</td>
                                    <td>Email</td>
                                    <td>Besar Pinjaman</td>
                                    <td>Durasi</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;?>
                                <?php foreach ($pinjaman as $us) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $us['nik']; ?></td>
                                        <td><?= $us['nama_lengkap']; ?></td>
                                        <td><?= $us['alamat']; ?></td>
                                        <td><?= $us['no_telpon']; ?></td>
                                        <td><?= $us['email']; ?></td>
                                        <td><?= $us['besar_pinjaman']; ?></td>
                                        <td><?= $us['durasi']; ?></td>
                                        <td>
                                            <a href="<?= base_url('index.php/Pinjaman/hapus/') . $us['nik']?>" class="badge badge-danger">Hapus</a>
                                            <a href="<?= base_url('index.php/Pinjaman/edit/') . $us['nik']?>" class="badge badge-warning">Edit</a>
                                        </td>
                                    </tr>
                                    <?php $i++ ?>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->