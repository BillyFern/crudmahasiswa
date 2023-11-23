
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="<?= base_url('assets/')?>images/logo.svg">
                </div>
                <h4>Halaman Login</h4>
                <!-- <h6 class="font-weight-light">Halaman Login</h6> -->
                <?= $this->session->flashdata('message');?>
                <form class="user pt-3" method="POST" action="<?= base_url('index.php/auth'); ?>">
                  <div class="form-group">
                    <input name="email" type="email" value="<?= set_value('email')?>" class="form-control form-control-lg" id="email" placeholder="Email">
                    <?= form_error('email', '<small class = "text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <input name="password" type="password" value="<?= set_value('nama');?>" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</a>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <!-- <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div> -->
                    <a href="#" class="auth-link text-black">Lupa password?</a>
                  </div>
                  <!-- <div class="mb-2">
                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                      <i class="mdi mdi-facebook me-2"></i>Connect using facebook </button>
                  </div> -->
                  <div class="text-center mt-4 font-weight-light"> Buat Akun! <a href="<?= base_url('index.php/') ?>Auth/registrasi" class="text-primary">Create</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   