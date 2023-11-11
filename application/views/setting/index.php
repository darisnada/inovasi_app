<?php checkRole('ADMIN') ?>
<div class="page-content">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18"><?= $title ?></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <?php echo $this->session->flashdata('message') ?>
                <div class="card">
                    <div class="card-body">
                        <div class="profile-widgets py-3">

                        
                        <form action="<?= base_url('setting/store')?>" enctype="multipart/form-data" method="post">
                            <div class="text-center">
                                <div class="row">
                                    <!-- Logo -->
                                    <div class="col-4">
                                        <div class="">
                                            <img src="<?= base_url('assets/images/'.$data['logo'])?>" alt="" class="avatar-lg mx-auto img-thumbnail rounded-circle">
                                            <!-- <div class="online-circle"><i class="fas fa-circle text-success"></i>
                                            </div> -->
                                        </div>
        
                                        <div class="mt-3 ">
                                            <a href="#" class="text-reset fw-medium font-size-16">Logo</a>
                                            <!-- <p class="text-body mt-1 mb-1">UI/UX Designer</p> -->
                                        </div>
                                    </div>
                                    <!-- image profile -->
                                    <div class="col-4">
                                        <div class="">
                                            <img src="<?= base_url('assets/images/'.$data['profile_image'])?>" alt="" class="avatar-lg mx-auto img-thumbnail rounded-circle">
                                            <!-- <div class="online-circle"><i class="fas fa-circle text-success"></i>
                                            </div> -->
                                        </div>
        
                                        <div class="mt-3 ">
                                            <a href="#" class="text-reset fw-medium font-size-16">Gambar Profile</a>
                                            <!-- <p class="text-body mt-1 mb-1">UI/UX Designer</p> -->
                                        </div>
                                    </div>

                                    <!-- Icon -->
                                    <div class="col-4">
                                        <div class="">
                                            <img src="<?= base_url('assets/images/'.$data['icon'])?>" alt="" class="avatar-lg mx-auto img-thumbnail rounded-circle">
                                            <!-- <div class="online-circle"><i class="fas fa-circle text-success"></i>
                                            </div> -->
                                        </div>
        
                                        <div class="mt-3 ">
                                            <a href="#" class="text-reset fw-medium font-size-16">Icon</a>
                                            <!-- <p class="text-body mt-1 mb-1">UI/UX Designer</p> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4 border border-start-0 border-end-0 p-3">
                                    <div class="col-lg-6 mt-3">
                                        <div class="form-group">
                                            <label for="">Nama Aplikasi</label>
                                            <input type="text" required name="name_app" class="form-control" value="<?= $data['name_app']?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <div class="form-group">
                                            <label for="">Judul Banner</label>
                                            <input type="text" required name="banner_title" class="form-control" value="<?= $data['banner_title']?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <label for="">Deskripsi Banner</label>
                                            <!-- <textarea id="elm3" name="banner_desc"></textarea> -->
                                            <input type="text" class="form-control" name="banner_desc" value="<?= $data['banner_desc'] ?? ''?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <label for="">Deskripsi Profile</label>
                                            <textarea id="elm2" name="profile_desc"><?= $data['profile_desc'] ?? ''?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <div class="form-group">
                                            <label for="">Gambar Profile</label>
                                            <input type="file" name="profile_image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <div class="form-group">
                                            <label for="">Judul Kontak</label>
                                            <input type="text" name="contact_title" <?= $data['contact_title'] ?? ''?> class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mt-3">
                                        <div class="form-group">
                                            <label for="">Telephone</label>
                                            <input type="text" name="contact_phone" class="form-control" value="<?= $data['contact_title']?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mt-3">
                                        <div class="form-group">
                                            <label for="">Fax</label>
                                            <input type="text" name="contact_fax" value="<?= $data['contact_fax']?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mt-3">
                                        <div class="form-group">
                                            <label for="">Instagram</label>
                                            <input type="text" name="instagram" value="<?= $data['instagram']?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" name="contact_email" class="form-control" value="<?= $data['contact_email']?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <div class="form-group">
                                            <label for="">Alamat</label>
                                            <input type="text" name="contact_address" value="<?= $data['contact_address']?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mt-3">
                                        <div class="form-group">
                                            <label for="">Link Map</label>
                                            <input type="text" name="contact_map" value="<?= $data['contact_map']?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mt-3">
                                        <div class="form-group">
                                            <label for="">Logo</label>
                                            <input type="file" name="logo" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mt-3">
                                        <div class="form-group">
                                            <label for="">Icon</label>
                                            <input type="file" name="icon" class="form-control">
                                        </div>
                                    </div>
                                </div>
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
    </div>
    <!-- end page title -->
</div>