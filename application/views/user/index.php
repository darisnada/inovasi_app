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
                                        <th>Nama User</th>
                                        <th>Akun</th>
                                        <th>Role</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($userData as $key => $data) : ?>
                                        <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td><?= $data->name ?></td>
                                            <td>
                                                <ul>
                                                    <li>Username : <?= $data->username ?></li>
                                                    <li>Email : <?= $data->email ?></li>
                                                    <li>Phone : <?= $data->phone ?></li>
                                                </ul>
                                            </td>
                                            <td><?= $data->role ?></td>
                                            <td><?= $data->address ?></td>
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
        $('.modal-title').text('Tambah User Baru')
        $('input[name="name"]').val('')
        $('input[name="phone"]').val('')
        $('input[name="address"]').val('')
        $('input[name="username"]').val('')
        $('input[name="email"]').val('')
        $('form').attr('action', '<?= base_url('user/store') ?>')
        $('#myModal').modal('show');
    })
    $('.edit-data').on('click', function() {
        $('.modal-title').text('Edit User')
        let id = $(this).data('id');
        $('form').attr('action', `<?= base_url('user/update/') ?>${id}`)
        $.ajax({
            url: "<?= base_url('user/show/') ?>" + id,
            method: "GET",
            success: function(result) {
                let obj = JSON.parse(result)
                $('input[name="name"]').val(obj.name)
                $('input[name="phone"]').val(obj.phone)
                $('input[name="address"]').val(obj.address)
                $('input[name="role"]').val(obj.role)
                $('input[name="username"]').val(obj.username)
                $('input[name="email"]').val(obj.email)
            }
        });
        $('#myModal').modal('show');
    })

    $('.delete-data').on('click', function() {
        let res = confirm('Anda yakin ingin menghapus data ?')
        if (res == true) {
            $.ajax({
                url: "<?= base_url('user/destroy/') ?>" + $(this).data('id'),
                method: "GET",
                success: function(result) {
                    window.location.reload()
                }
            });
        }
    })
</script>