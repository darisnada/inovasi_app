<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Inovasi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="desc-tab" data-toggle="tab" href="#nav-desc" role="tab" aria-controls="home" aria-selected="true">Deskripsi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="profile" aria-selected="false">Inovasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="contact" aria-selected="false">Lainnya</a>
                    </li>
                </ul>
                <hr>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-desc" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            <div class="col-5">
                                <div id='giantimages'>
                                    <img src="<?= base_url('assets/innovation') ?>/no-image.png" style="object-fit: cover; width: 300px; height: 300px;" alt="" srcset="">
                                </div>
                                <div class="mt-3" id='kecilimages'>
                                    
                                </div>
                            </div>
                            <div class="col-7">
                            <h4>Deskripsi Inovasi</h4>
                                    <br>
                                    <div id="descrip"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            <div class="col-lg-4">
                                <div>
                                    <strong>Nama User</strong>
                                    <br>
                                    <div id="name_user"></div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-4">
                                <div>
                                    <strong>NIK User</strong>
                                    <br>
                                    <div id="identity_user"></div>
                                </div>
                            </div> -->
                            <div class="col-lg-8">
                                <div>
                                    <strong>Alamat User</strong>
                                    <br>
                                    <div id="address_user"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <strong>Nama Inovator</strong>
                                    <br>
                                    <div id="innovator_name"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <strong>Telp. Inovator</strong>
                                    <br>
                                    <div id="innovator_phone"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <strong>Email Inovator</strong>
                                    <br>
                                    <div id="innovator_email"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row">
                            <div class="col-lg-4">
                                <div>
                                    <strong>Judul</strong>
                                    <br>
                                    <div id="title"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <strong>Tahun</strong>
                                    <br>
                                    <div id="year"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <strong>Kategori</strong>
                                    <br>
                                    <div id="category"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <strong>Tujuan</strong>
                                    <br>
                                    <div id="purpose"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <strong>Benefit</strong>
                                    <br>
                                    <div id="benefit"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <strong>Award</strong>
                                    <br>
                                    <div id="award"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <strong>Stages</strong>
                                    <br>
                                    <div id="stages"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <strong>Type</strong>
                                    <br>
                                    <div id="type"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <strong>Tanggal</strong>
                                    <br>
                                    <div id="date"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <strong>Deskripsi</strong>
                                    <br>
                                    <div id="description"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <strong>Fokus Bidang</strong>
                                    <br>
                                    <div id="innovation_field_name"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <strong>Dinas</strong>
                                    <br>
                                    <div id="agency_name"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show " id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <strong>Testimonial</strong>
                                    <br>
                                    <div id="testimonial"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <strong>Link</strong>
                                    <br>
                                    <div id="link"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <strong>File</strong>
                                    <br>
                                    <div id="file"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <strong>Password File</strong>
                                    <br>
                                    <div id="password_file"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="tutupMod()" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalVid" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Video
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="video-view"></div>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="tutupMod()" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>