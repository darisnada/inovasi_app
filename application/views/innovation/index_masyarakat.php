
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
                    <button type="button" class="btn btn-primary add-data"><i class="bx bx-plus"></i> Tambah Data</button>
                    </div>
                    <div class="card-body">
                        <div>
                        <form action="" method="get">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="">Bidang Fokus</label>
                                    <div data-repeater-item="" class="inner mb-3 row">
                                        <div class="col-md-10 col-8">
                                            <select name="innovation_field_id" id="innovation_field" class="inner form-control">
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
                        <hr>
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
                                                <button type="button" data-id="<?= $data->id ?>" class="btn btn-sm btn-primary edit-data"><i class="bx bx-edit"></i></button>
                                                <button type="button" data-id="<?= $data->id ?>" class="btn btn-sm btn-danger delete-data"><i class="bx bx-trash"></i></button>
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
include 'form.php'; 
?>
<script>
    $('.add-data').on('click', function() {
        $('.modal-title').text('Tambah Inovasi Baru')
        $('#name_user').val('')
                $('#identity_user').val('')
                $('#address_user').val('')
                $('#innovator_name').val('')
                $('#innovator_phone').val('')
                $('#innovator_email').val('')
                $('#innovation_field_id').val('')
                $('#agency_id').val('')
                $('#title').val('')
                $('#year').val('')
                $('#category').val('')
                $('#purpose').val('')
                $('#benefit').val('')
                $('#award').val('')
                $('#stages').val('')
                $('#type').val('')
                $('#date').val('')
                $('#testimonial').val('')
                $('#link').val('')
                $('#description').val('')
                $('#agency_name').val('')
                $('#file').html(``)
                $('#password_file').val('')
        $('form').attr('action', '<?= base_url('innovation/store') ?>')

        $('#myModal').modal('show');
    })
    $('.edit-data').on('click', function() {
        $('.modal-title').text('Edit Inovasi')
        let id = $(this).data('id');
        $('form').attr('action', `<?= base_url('innovation/update/') ?>${id}`)
        $.ajax({
            url: "<?= base_url('innovation/show/') ?>" + id,
            method: "GET",
            success: function(result) {
                let obj = JSON.parse(result)
                console.log(obj)
                $('#name_user').val(obj.name_user)
                $('#identity_user').val(obj.identity_user)
                $('#address_user').val(obj.address_user)
                $('#innovator_name').val(obj.innovator_name)
                $('#innovator_phone').val(obj.innovator_phone)
                $('#innovator_email').val(obj.innovator_email)
                $('#innovation_field_id').val(obj.innovation_field_id)
                $('#agency_id').val(obj.agency_id)
                $('#title').val(obj.title)
                $('#year').val(obj.year)
                $('#category').val(obj.category)
                $('#purpose').val(obj.purpose)
                $('#benefit').val(obj.benefit)
                $('#award').val(obj.award)
                $('#stages').val(obj.stages)
                $('#type').val(obj.type)
                $('#date').val(obj.date)
                $('#testimonial').val(obj.testimonial)
                $('#link').val(obj.link)
                $('#description').val(obj.description)
                $('#agency_name').val(obj.agency_name)
                $('#file').html(`<a href="<?= base_url('assets/innovation') ?>/${obj.file}" class="text-primary" target='_blank'><i class="bx bx-file-blank">Buka File</i></a>`)
                $('#password_file').val(obj.password_file)
            }
        });
        $('#myModal').modal('show');
    })

    $('.delete-data').on('click', function() {
        let res = confirm('Anda yakin ingin menghapus data ?')
        if (res == true) {
            $.ajax({
                url: "<?= base_url('innovation/destroy/') ?>" + $(this).data('id'),
                method: "GET",
                success: function(result) {
                    window.location.reload()
                }
            });
        }
    })
</script>