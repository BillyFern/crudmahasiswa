
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="<?=base_url('assets/') ?>images/logo.svg">
                </div>
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <form class="user pt-3" method="POST" action="<?= base_url('index.php/Auth/registrasi'); ?>">
                  <div class="form-group">
                    <input type="text" name="nama" value="<?= set_value('nama');?>" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username">
                    <?= form_error('nama','<small class="text-danger pl-3">', '</small>')?>
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" value="<?= set_value('email'); ?>" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                    <?= form_error('email','<small class="text-danger pl-3">', '</small>')?>
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" value="<?= set_value('password'); ?>" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                    <?= form_error('password','<small class="text-danger pl-3">', '</small>')?>
                  </div>
                  <div class="form-group">
                    <input type="password" name="confirm_password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirm Password">
                  </div>
                  <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                    </div>
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</input>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="<?= base_url('Auth') ?>" class="text-primary">Login</a>
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
