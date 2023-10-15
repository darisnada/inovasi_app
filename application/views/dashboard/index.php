<?php roleMasyarakat('ADMIN') ?>
<div class="page-content">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18"><?= $title?></h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="avatar-sm font-size-20 me-3">
                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                <i class="mdi mdi-tag-plus-outline"></i>
                            </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">Total Inovasi</div>
                        </div>
                    </div>
                    <h4 class="mt-4"><?= $total_innovations->total?></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="avatar-sm font-size-20 me-3">
                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                <i class="mdi mdi-account-multiple-outline"></i>
                            </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">Admin</div>

                        </div>
                    </div>
                    <h4 class="mt-4"><?= $total_admin->total?></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="avatar-sm font-size-20 me-3">
                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                <i class="mdi mdi-account-multiple-outline"></i>
                            </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">Karyawan</div>

                        </div>
                    </div>
                    <h4 class="mt-4"><?= $total_karyawan->total?></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="avatar-sm font-size-20 me-3">
                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                <i class="mdi mdi-account-multiple-outline"></i>
                            </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">ASN</div>

                        </div>
                    </div>
                    <h4 class="mt-4"><?= $total_asn->total?></h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>10 Inovasi Terbaru</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped dataTable">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Fokus bidang</th>
                                    <th>Tahun</th>
                                    <th>Kategori</th>
                                    <th>Inovator</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach ($innovations as $key => $value) :
                                ?>
                                <tr>
                                    <td><?= $value->title?></td>
                                    <td><?= $value->innovation_field_name?></td>
                                    <td><?= $value->year?></td>
                                    <td><?= $value->category?></td>
                                    <td><?= $value->innovator_name?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Fokus Bidang</h4>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                        <table id="dataTable" class="table table-striped dataTable">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Slug</th>
                                    <th>Ikon</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($innovationField as $key => $value) :
                                ?>
                                <tr>
                                    <td><?= $value->name ?? '-' ?></td>
                                    <td><?= $value->slud ?? '-'?></td>
                                    <td><?= $value->icon ?? '-'?></td>
                                    <td><?= $value->description ?? '-' ?></td>
                                </tr>
                                <?php
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>