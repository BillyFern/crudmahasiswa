<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <h1 class="h3 mb-4 ">
            <?php echo $judul; ?>
        </h1>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Edit Data Mahasiswa
                </div>

                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?= $mahasiswa['nama']; ?>" class="form-control" id="nama" placeholder="Nama">                        
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" name="nim" value="<?= $mahasiswa['nim']; ?>" class="form-control"  id="nim" placeholder="NIM">
                            <?= form_error('nim', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="Laki-laki" <?php if ($mahasiswa['jenis_kelamin'] == "Laki-laki"){
                                    echo "selected";
                                }?>>Laki-laki</option>
                                <option value="Perempuan"<?php if ($mahasiswa['jenis_kelamin'] == "Perempuan"){
                                    echo "selected";
                                }?>>Perempuan</option>
                            </select>
                            <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="<?= $mahasiswa['email']; ?>" class="form-control" placeholder="email">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="prodi">Prodi</label>
                            <select name="prodi" id="prodi" class="form-control">
                                <?php foreach ($prodi as $p) : ?>
                                    <option value="<?= $p['id']; ?>" <?php if($mahasiswa['prodi'] == $p['id']){
                                        echo "selected";
                                    } ?>  ><?= $p['nama'];?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('prodi', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="asal_sekolah"></label>
                            <input type="text" name="asal_sekolah" value="<?= $mahasiswa['asal_sekolah']; ?>" class="form-control" id="asal_sekolah" placeholder="Asal Sekolah">
                            <?= form_error('asal_sekolah', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="no_hp"></label>
                            <input type="text" name="no_hp" value="<?= $mahasiswa['no_hp']; ?>" class="form-control" id="no_hp" placeholder="No HP">
                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="alamat"></label>
                            <input type="text" name="alamat" value="<?= $mahasiswa['alamat']; ?>" class="form-control" id="alamat" placeholder="Alamat">
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                        <a href="<?= base_url('index.php/Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Edit Mahasiswa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->