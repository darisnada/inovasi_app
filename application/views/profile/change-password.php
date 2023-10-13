<div class="content container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title"><?= $title ?></h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php echo $this->session->flashdata('message') ?>
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo base_url('profile/changePassword') ?>" method="post">
                            <div class="form-group mb-2">
                                <label for="">Current Password</label>
                                <input type="password" name="password" class="form-control" autocomplete="off">
                                <?php echo form_error('password', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">New Password</label>
                                <input type="password" name="new_password" class="form-control" autocomplete="off">
                                <?php echo form_error('new_password', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Repeat Password</label>
                                <input type="password" name="repeat_password" class="form-control" autocomplete="off">
                                <?php echo form_error('repeat_password', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group mb-2 ">
                                <button type="submit" class="btn btn-primary float-right"><i class="align-middle mr-2" data-feather="check-square"></i> Change Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>