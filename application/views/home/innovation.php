
        <!-- page-title -->
        <section class="page-title" style="background-image: url(<?= base_url('assets/')?>images/background/pagetitle-bg.png);">
        <div class="anim-icons">
            <div class="icon icon-1"><img src="<?= base_url('assets/')?>images/icons/anim-icon-17.png" alt=""></div>
            <div class="icon icon-2 rotate-me"><img src="<?= base_url('assets/')?>images/icons/anim-icon-18.png" alt=""></div>
            <div class="icon icon-3 rotate-me"><img src="<?= base_url('assets/')?>images/icons/anim-icon-19.png" alt=""></div>
            <div class="icon icon-4"></div>
        </div>
        <div class="container">
            <div class="content-box clearfix">
                <div class="title-box pull-left">
                    <h1>Innovasi</h1>
                    <!-- <p>Reach out to the world’s most reliable IT services.</p> -->
                </div>
            </div>
        </div>
    </section>
    <!-- page-title end -->

    <!-- feature-section -->
    <section class="feature-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                    <form action="" method="get">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="">Kategori</label>
                                    <div data-repeater-item="" class="inner mb-3 row">
                                        <div class="col-md-10 col-8">
                                            <select name="category" id="category" class="inner form-control">
                                                <option value="MASYARAKAT">MASYARAKAT</option>
                                                <option value="ASN">ASN</option>
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
                        <hr>
                        <table class="table table-striped dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Bidang Fokus</th>
                                    <th>Kategori</th>
                                    <th>Tipe</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data as $key => $value) :
                                ?>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td><?= $value->title?></td>
                                    <td><?= $value->innovation_field_name?></td>
                                    <td><?= $value->category?></td>
                                    <td><?= $value->type?></td>
                                    <td>
                                        <button type="button" data-id="<?= $value->id ?>" class="btn btn-sm btn-primary edit-data">Detail</button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section><br>
    <!-- feature-section -->
    <?php
    include 'detail-inovasi.php';
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
                $('#file').html(`<a href="<?= base_url('assets/innovation') ?>/${obj.file}" target="_blank" class="text-primary" target='_blank'><i class="bx bx-file-blank">Buka File</i></a>`)
                $('#password_file').html(obj.password_file)
            }
        });
        $('#myModal').modal('show');
    })

    function tutupMod(){
        $('#myModal').modal('hide');
    }
    </script>