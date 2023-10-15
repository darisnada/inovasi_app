<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Inovasi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('innovation/update')?>" enctype="multipart/form-data" method="post">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div>
                            <strong>Nama Inovator</strong>
                            <br>
                            <input type="text" class="form-control" name="innovator_name" id="innovator_name">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <strong>Telp. Inovator</strong>
                            <br>
                            <input type="text" name="innovator_phone" id="innovator_phone" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <strong>Email Inovator</strong>
                            <br>
                            <input type="text" name="innovator_email" id="innovator_email" class="form-control">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-4">
                        <div>
                            <strong>Judul</strong>
                            <br>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <strong>Tahun</strong>
                            <br>
                            <input type="text" name="year" id="year" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <strong>Kategori</strong>
                            <br>
                            <select name="category" id="category" class="form-control">
                                <option value="ASN">ASN</option>
                                <option value="MASYARAKAT">MASYARAKAT</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <strong>Tujuan</strong>
                            <br>
                            <input type="text" name="purpose" id="purpose" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <strong>Benefit</strong>
                            <br>
                            <input type="text" name="benefit" id="benefit" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <strong>Award</strong>
                            <br>
                            <!-- <input type="text" name="award" id="award" class="form-control"> -->
                            <select name="award" id="award" class="form-control">
                                <option value="TIDAK ADA">TIDAK ADA</option>
                                <option value="KOTA">KOTA</option>
                                <option value="NASIONAL">NASIONAL</option>
                                <option value="INTERNASIONAL">INTERNASIONAL</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <strong>Stages</strong>
                            <br>
                            <select name="stages" id="stages" class="form-control">
                                <option value="UJI COBA">UJI COBA</option>
                                <option value="PENERAPAN">PENERAPAN</option>
                                <option value="DIPASARKAN">DIPASARKAN</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <strong>Type</strong>
                            <br>
                            <!-- <input type="text" name="type" id="type" class="form-control"> -->
                            <select name="type" id="type" class="form-control">
                                <option value="DIGITAL">DIGITAL</option>
                                <option value="NON DIGITAL">NON DIGITAL</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <strong>Tanggal</strong>
                            <br>
                            <input type="date" name="date" id="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <strong>Deskripsi</strong>
                            <br>
                            <input type="text" name="description" id="description" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <strong>Fokus Bidang</strong>
                            <br>
                            <select name="innovation_field_id" id="innovation_field_id" class="inner form-control">
                                <option value=""> </option>
                                <?php
                                foreach ($innovationField as $key => $val){
                                ?>
                                <option value="<?= $val->id?>"><?= $val->name?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <strong>Agensi</strong>
                            <br>
                            <select name="agency_id" id="agency_id" class="inner form-control">
                                <option value=""> </option>
                                <?php
                                foreach ($agencyData as $key => $val){
                                ?>
                                <option value="<?= $val->id?>"><?= $val->name?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <strong>Testimonial</strong>
                            <br>
                            <input type="text" name="testimonial" id="testimonial" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <strong>Link</strong>
                            <br>
                            <input type="text" name="link" id="link" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <strong>File</strong>
                            <br>
                            <input type="file" name="file" class="form-control">
                            <div id="file"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <strong>Password File</strong>
                            <br>
                            <input type="text" name="password_file" id="password_file" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>