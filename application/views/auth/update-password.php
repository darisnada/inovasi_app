<div class="page-content">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18"><?= $title ?></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <?php echo $this->session->flashdata('message') ?>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('user/updatePass') ?>" method="post">
                            <div class="form-group">
                                <label for="">Password Lama</label>
                                <input type="password" name="password_old" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Password Baru</label>
                                <input type="password" name="password_new" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Konfirmasi Password</label>
                                <input type="password" name="password_confirm" class="form-control" required>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
</div>