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
                        <button class="btn btn-primary add-data"><i class="bx bx-plus"></i> Tambah Data</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped dataTable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Slug</th>
                                        <th>Ikon</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $key => $data) : ?>
                                        <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td><?= $data->name ?></td>
                                            <td><?= $data->slug ?? '-' ?></td>
                                            <td><?= $data->icon ?></td>
                                            <td><?= $data->description ?? '-' ?></td>
                                            <td>
                                                <button type="button" data-id="<?= $data->id ?>" class="btn btn-sm btn-primary edit-data"><i class="bx bx-pencil"></i></button>
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
<?php include 'form.php' ?>
<script>
    $('.add-data').on('click', function() {
        $('.modal-title').text('Tambah Fokus Bidang')
        $('input[name="name"]').val('')
        $('input[name="slug"]').val('')
        $('input[name="icon"]').val('')
        $('input[name="description"]').val('')
        $('form').attr('action', '<?= base_url('innovation_field/store') ?>')
        $('#myModal').modal('show');
    })
    $('.edit-data').on('click', function() {
        $('.modal-title').text('Edit Fokus Bidang')
        let id = $(this).data('id');
        $('form').attr('action', `<?= base_url('innovation_field/update/') ?>${id}`)
        $.ajax({
            url: "<?= base_url('innovation_field/show/') ?>" + id,
            method: "GET",
            success: function(result) {
                let obj = JSON.parse(result)
                $('input[name="name"]').val(obj.name)
                $('input[name="slug"]').val(obj.slug)
                $('input[name="icon"]').val(obj.icon)
                $('input[name="description"]').val(obj.description)
            }
        });
        $('#myModal').modal('show');
    })

    $('.delete-data').on('click', function() {
        let res = confirm('Anda yakin ingin menghapus data ?')
        if (res == true) {
            $.ajax({
                url: "<?= base_url('innovation_field/destroy/') ?>" + $(this).data('id'),
                method: "GET",
                success: function(result) {
                    window.location.reload()
                }
            });
        }
    })
</script>