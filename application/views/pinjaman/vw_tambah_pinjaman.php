<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <h1 class="h3 mb-4 ">
            <?php echo $judul; ?>
        </h1>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Pinjaman
                </div>

                <div class="card-body">
                    <form action="<?= base_url('index.php/Pinjaman/upload');?>" method="POST">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_lengkap">Nama lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" id="nama lengkap" placeholder="Nama lengkap">
                        </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="Alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="No Telpon">No Telpon</label>
                            <input type="text" name="no_telpon" class="form-control" id="no_telpon" placeholder="No Telpon">
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder = "Email">
                        </div>
                        <div class="form-group">
                            <label for="besar_pinjaman">Besar Pinjaman</label>
                            <input type="number" name="besar_pinjaman" class="form-control" placeholder = "Besar Pinjaman">
                        </div>
                        <div class="form-group">
                            <label for="durasi">Durasi</label>
                            <input type="text" name="durasi" class="form-control" id="durasi" placeholder="Durasi">
                        </div>
                        <a href="<?= base_url('index.php/Pinjaman') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Pinjaman</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->