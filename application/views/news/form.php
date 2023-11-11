<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Berita Baru
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <form action="<?php echo base_url('news/store') ?>" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label for="">Judul <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal <span class="text-danger">*</span></label>
                        <input type="date" name="date" id="date" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi <span class="text-danger">*</span></label>
                        <textarea name="description" id="description" class="form-control elm4" cols="30" rows="10"></textarea>
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