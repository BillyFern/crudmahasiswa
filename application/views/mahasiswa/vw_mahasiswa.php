<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <h1 class="h3 mb-4 ">
            <?php echo $judul; ?>
        </h1>
        <div class="row">
            <div class="col-md-6"><a href="<?= base_url('index.php/') ?>Mahasiswa/tambah" class="btn btn-info mb-2">Tambah Mahasiswa</a></div>
            <div class="col-md-12 grid-margin stretch-card">
                <?= $this->session->flashdata('message');?>
            </div>      
            <div class="col-md-12 grid-margin stretch-card">
               
                <div class="card">
                    <div class="card-body">
                        </p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama</td>
                                    <td>NIM</td>
                                    <td>Email</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <tr>
                                    <td>1</td>
                                    <td>Ardiyanto</td>
                                    <td>1657301049</td>
                                    <td>ardiyanto@alumni.pcr.ac.id</td>
                                    <td>
                                        <a href="" class="badge badge-danger">Hapus</a>
                                        <a href="" class="badge badge-warning">Edit</a>
                                        <a href="" class="badge badge-info">Detail</a>
                                    </td>
                                </tr> -->
                                <?php $i = 1;?>
                                <?php foreach ($mahasiswa as $us) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $us['nama']; ?></td>
                                        <td><?= $us['nim']; ?></td>
                                        <td><?= $us['email']; ?></td>
                                        <td>
                                            <a href="<?= base_url('index.php/Mahasiswa/hapus/') . $us['id']?>" class="badge badge-danger">Hapus</a>
                                            <a href="<?= base_url('index.php/Mahasiswa/edit/') . $us['id']?>" class="badge badge-warning">Edit</a>
                                            <a href="<?= base_url('index.php/Mahasiswa/detail/') . $us['id']?>" class="badge badge-info">Detail</a>
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