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
            <div class="col-md-12">
                <?php echo $this->session->flashdata('message') ?>
                <div class="card">
                    <div class="card-header">
                        <form action="" method="get">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="">Agensi</label>
                                    <div data-repeater-item="" class="inner mb-3 row">
                                        <div class="col-md-10 col-8">
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
                                        <div class="col-md-2 col-4">
                                            <input type="submit" class="btn btn-primary w-100 inner" value="Filter">
                                        </div>

                                    </div>
                                </div>
                                <!-- <div class="col-lg-4">
                                    <button type="submit" class="btn btn-sm btn-primary mt-4">Filter</button>
                                </div> -->
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped dataTable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Judul</th>
                                        <th>Tahun</th>
                                        <th>Bidang Fokus</th>
                                        <th>Kategori</th>
                                        <!-- <th>Agensi</th> -->
                                        <th>Nama Inovator</th>
                                        <th>Telp Inovator</th>
                                        <th>Email Inovator</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $key => $data) : ?>
                                        <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td><?= $data->title ?></td>
                                            <td><?= $data->year ?? '-' ?></td>
                                            <td><?= $data->innovation_field_name ?? '-' ?></td>
                                            <td><?= $data->category ?? '-' ?></td>
                                            <!-- <td><?= $data->agency_id ?? '-' ?></td> -->
                                            <td><?= $data->innovator_name ?></td>
                                            <td><?= $data->innovator_phone ?></td>
                                            <td><?= $data->innovator_email ?></td>
                                            <td>
                                                <button type="button" data-id="<?= $data->id ?>" class="btn btn-sm btn-primary edit-data"><i class="bx bx-detail"></i></button>
                                                <!-- <button type="button" data-id="<?= $data->id ?>" class="btn btn-sm btn-danger delete-data"><i class="bx bx-trash"></i></button> -->
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
</div>
<?php 
include 'detail.php'; 
?>
<script>
    $('.edit-data').on('click', function() {
        $('.modal-title').text('Detail Inovasi')
        let id = $(this).data('id');
        $.ajax({
            url: "<?= base_url('innovation/show/') ?>" + id,
            method: "GET",
            success: function(result) {
                let obj = JSON.parse(result)
                console.log(obj)
                $('#name_user').html(obj.name_user)
                $('#identity_user').html(obj.identity_user)
                $('#address_user').html(obj.address_user)
                $('#innovator_name').html(obj.innovator_name)
                $('#innovator_phone').html(obj.innovator_phone)
                $('#innovator_email').html(obj.innovator_email)
                $('#innovation_field_name').html(obj.innovation_field_name)
                $('#title').html(obj.title)
                $('#year').html(obj.year)
                $('#category').html(obj.category)
                $('#purpose').html(obj.purpose)
                $('#benefit').html(obj.benefit)
                $('#award').html(obj.award)
                $('#stages').html(obj.stages)
                $('#type').html(obj.type)
                $('#date').html(obj.date)
                $('#testimonial').html(obj.testimonial)
                $('#link').html(obj.link)
                $('#description').html(obj.description)
                $('#agency_name').html(obj.agency_name)
                $('#file').html(`<a href="<?= base_url('assets/') ?>files/${obj.file}" class="text-primary" target='_blank'><i class="bx bx-file-blank">Buka File</i></a>`)
                $('#password_file').html(obj.password_file)
            }
        });
        $('#myModal').modal('show');
    })
</script>