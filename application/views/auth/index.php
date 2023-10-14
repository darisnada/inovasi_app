<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-login text-center">
                        <div class="bg-login-overlay"></div>
                        <div class="position-relative">
                            <h5 class="text-white font-size-20">Welcome Back !</h5>
                            <p class="text-white-50 mb-0"><?= $setting['name_app']?>.</p>
                            <a href="#" class="logo logo-admin mt-4">
                                <img src="<?= base_url('assets/') ?>images/<?= $setting['logo']?>" alt="" height="30">
                            </a>
                        </div>
                    </div>
                    <div class="card-body pt-5">
                        <div class="p-2">
                            <form class="form-horizontal" action="<?= base_url('auth') ?>" method="post">
                                <div class="mb-3">
                                    <label class="form-label" for="username">Username</label>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                                    <?php echo form_error('username', '<small class="text-danger pl-1">', '</small>');
                                    ?>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="userpassword">Password</label>
                                    <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                    <?php echo form_error('password', '<small class="text-danger pl-1">', '</small>');
                                    ?>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customControlInline">
                                    <label class="form-check-label" for="customControlInline">Remember
                                        me</label>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log
                                        In</button>
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