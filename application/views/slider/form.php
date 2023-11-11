<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User Baru
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <form action="<?php echo base_url('asn/store') ?>" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label for="">Nama <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi <span class="text-danger">*</span></label>
                        <input type="text" name="description" id="description" class="form-control" autocomplete="off" required>
                    </div>
                    <div id="preview-img"></div>
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" name="image" id="image" class="form-control" autocomplete="off">
                    </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>