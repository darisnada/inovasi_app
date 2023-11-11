
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
            <?php if(isset($_GET['typeInno']) && $_GET['typeInno'] == 1) : ?>
                <div class="row">
                    <?php
                    foreach ($data as $key => $value) :
                    ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3 inner-content" >
                        <div class="inner-content" style="box-shadow: 2px 2px 1px grey; border-radius: 10px;">
                            <div class="team-block-two">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <figure class="image-box" style='border-radius:10px;'><a href="#"><img src="<?= base_url('assets/innovation/'.($value->foto ?? 'no-image.png')) ?>" style="object-fit: cover; width: 100%; height: 250px;" alt=""></a></figure>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 content-column d-flex">
                                        <div class="content-box my-auto">
                                            <span>Author : <?= $value->innovator_name?></span>
                                            <h4><a href="#"><?= $value->title?></a></h4>
                                            <div class="text">
                                                <?= substr($value->description,0,100)."...."?>
                                            </div>
                                            <ul class="team-social">
                                                <li><a href="javascript:void(0);" data-id="<?= $value->id ?>" class=" edit-data"><i class="fas fa-search"></i> Detail</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
                <center>
                <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                    </li>
                    <?php
                    for ($i=0; $i < $total_page; $i++) { 
                        # code...
                        $active = $_GET["page"] == ($i+1) ? "active" : '';
                        echo '<li class="page-item"><a class="page-link '.$active.'" href="'.base_url('home/innovationP?category=MASYARAKAT&typeInno=1&page='.($i+1)).'">'. ($i+1) .'</a></li>';
                    }
                    ?>
                    
                    <li class="page-item disabled">
                    <a class="page-link">Next</a>
                    </li>
                </ul>
                </nav>
                </center>
            <?php endif;?>
            <?php if(!isset($_GET['typeInno'])) : ?>
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
                                    <th>Foto</th>
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
                                    <td><?= isset($value->foto) ? "<img src='".base_url('assets/innovation/'.$value->foto)."' width='90px' alt=''>" : "Tidak ada foto" ?></td>
                                    <td><?= $value->title?></td>
                                    <td><?= $value->innovation_field_name?></td>
                                    <td><?= $value->category?></td>
                                    <td><?= $value->type?></td>
                                    <td>
                                        <button type="button" data-id="<?= $value->id ?>" class="btn btn-sm btn-primary edit-data"><i class="fas fa-search"></i> Detail</button>
                                        <button type="button" data-video="<?= $value->link ?>" class="btn btn-sm btn-warning video-data"><i class="fas fa-video"></i> Video Link</button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section><br>
    <!-- feature-section -->
    <?php
    include 'detail-inovasi.php';
    ?>

    <script>
    function viewPDF(a){
        let video = a;

        $('.modal-title').text('File PDF')
        $('.video-view').html(`<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="${video}"></iframe></div>`)
        $('#myModal').modal('hide');
        $('#modalVid').modal('show');
    }
    $('.video-data').on('click', function() {
        let video = $(this).data('video');

        $('.modal-title').text('Video Inovasi')
        $('.video-view').html(`<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="${video}"></iframe></div>`)
        $('#modalVid').modal('show');

    })
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
                $('#descrip').html(obj.description)
                $('#agency_name').html(obj.agency_name)
                $('#file').html(`<a href="javascript:void(0);" onclick="viewPDF('<?= base_url('assets/innovation') ?>/${obj.file}')" class="text-primary"><i class="bx bx-file-blank">Buka File</i></a>`)

                var fot = obj.foto ?? 'no-image.png';
                let img1 = `<a href="javascript:void(0);" onclick="viewFotoImages('${fot}')"><img src="<?= base_url('assets/innovation') ?>/${fot}" style="object-fit: cover; width: 50px; height: 50px;" alt="" srcset=""></a>`;
                
                var fot2 = obj.foto_second ?? 'no-image.png';
                let img2 = `<a href="javascript:void(0);" onclick="viewFotoImages('${fot2}')"><img src="<?= base_url('assets/innovation') ?>/${fot2}" style="object-fit: cover; width: 50px; height: 50px;" alt="" srcset=""></a>`;
                
                var fot3 = obj.foto_third ?? 'no-image.png';
                let img3 = `<a href="javascript:void(0);" onclick='viewFotoImages("${fot3}")'><img src="<?= base_url('assets/innovation') ?>/${fot3}" style="object-fit: cover; width: 50px; height: 50px;" alt="" srcset=""></a>`;

                $('#kecilimages').html(`<div class='row'><div class='col-4'>${img1}</div><div class='col-4'>${img2}</div><div class='col-4'>${img3}</div></div>`)
                $('#password_file').html(obj.password_file)
            }
        });
        $('#myModal').modal('show');
    })

    function viewFotoImages(a='no-image.png'){
        $('#giantimages').html(`<img src="<?= base_url('assets/innovation') ?>/${a}" style="object-fit: cover; width: 300px; height: 300px;" alt="" srcset="">`)
    }

    function tutupMod(){
        $('#myModal').modal('hide');
        $('#modalVid').modal('hide');
    }
    </script>