<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <h1 class="h3 mb-4 ">
            <?php echo $judul; ?>
        </h1>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Edit Prodi
                </div>

                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $prodi['id'];?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?= $prodi['nama'];?>" class="form-control" id="nama" placeholder="Nama">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="ruangan">Ruangan</label>
                            <input type="text" name="ruangan" value="<?= $prodi['ruangan'];?>" class="form-control" id="ruangan" placeholder="Ruangan">
                            <?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" name="jurusan" value="<?= $prodi['jurusan'];?>" class="form-control" id="jurusan" placeholder="Jurusan">
                            <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="Akreditasi">Akreditasi</label>
                            <input type="text" name="akreditasi" value="<?= $prodi['akreditasi'];?>" class="form-control" placeholder="akreditasi"> 
                            <?= form_error('akreditasi', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="kaprodi">Nama Kaprodi</label>
                            <input type="text" name="nama_kaprodi" value="<?= $prodi['nama_kaprodi'];?>" class="form-control" placeholder = "Nama Kaprodi">
                            <?= form_error('nama_kaprodi', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun Berdiri</label>
                            <input type="text" name="tahun_berdiri" value="<?= $prodi['tahun_berdiri'];?>" class="form-control" placeholder = "Tahun Berdiri">
                            <?= form_error('tahun_berdiri', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="lulusan">Output lulusan</label>
                            <input type="text" name="output_lulusan" value="<?= $prodi['output_lulusan'];?>" class="form-control" id="lulusan" placeholder="Output Lulusan">
                            <?= form_error('output_lulusan', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                        <div class="form-group">
                            <img src="<?= base_url('assets/images/prodi/') . $prodi['gambar'];?>" style="width:100px" class="img-thumbnail" alt="">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class=""custom-file-label></label>
                                <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                        </div>
                        <a href="<?= base_url('index.php/Prodi') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Edit Prodi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->