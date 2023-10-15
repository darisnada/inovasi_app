<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-login text-center">
                        <div class="bg-login-overlay"></div>
                        <div class="position-relative">
                            <h5 class="text-white font-size-20">Welcome !</h5>
                            <p class="text-white-50 mb-0"><?= $setting['name_app']?>.</p>
                            <a href="#" class="logo logo-admin mt-4">
                                <img src="<?= base_url('assets/') ?>images/<?= $setting['logo']?>" alt="" height="30">
                            </a>
                        </div>
                    </div>
                    <div class="card-body pt-5">
                        <div class="p-2">
                        <form class="form-horizontal" action="<?= base_url('auth/proses_signup') ?>" method="post">
                        <p><span class="text-danger">*Password default sesuai dengan username</span></p>
                        <div class="form-group">
                        <label for="">Nama Masyarakat <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="">NIK <span class="text-danger">*</span></label>
                        <input type="text" name="identity" id="identity" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="">Username <span class="text-danger">*</span></label>
                        <input type="text" name="username" id="username" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" id="email" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="">No.Telp <span class="text-danger">*</span></label>
                        <input type="text" name="phone" id="phone" class="form-control" autocomplete="off" required>
                    </div>
                    <!-- <div class="form-group">
                        <label for="">Password <span class="text-danger">*</span></label>
                        <input type="password" name="password" id="password" class="form-control" autocomplete="off" required>
                    </div> -->
                    <div class="form-group">
                        <label for="">Address <span class="text-danger">*</span></label>
                        <input type="text" name="address" id="address" class="form-control" autocomplete="off" required>
                    </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Sign Up</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url('assets/modjs/mod-auth.js') ?>"></script>