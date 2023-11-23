<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <h1 class="h3 mb-4 ">
            <?php echo $judul; ?>
        </h1>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Profil
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/images/profile/') . $user['gambar']; ?> " class="card-img"
                            alt="">
                    </div>
                    <div class="col-md-7 flex-row">
                        <div class="card-body">
                            <h2 class="card-title">
                                <?= $user['nama']; ?>
                            </h2>
                            <h6 class="card-subtitle mb-2" text-muted>
                                <?= $user['email']; ?>
                            </h6>
                            <h6 class="card-subtitle mb-2">
                                <small class="text-muted">Anggota sejak
                                    <?= date('d F Y', $user['date_created']) ?>
                                </small>
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->