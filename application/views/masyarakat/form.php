<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User Baru
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <center><span class="text-danger">Password default menggunakan username</span></center>
                <hr>
                <form action="<?php echo base_url('masyarakat/store') ?>" method="post">
                    <div class="form-group">
                        <label for="">Nama Masyarakat <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="">NIK <span class="text-danger">*</span></label>
                        <input type="text" name="identity" id="identity" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="">Username <span class="text-danger">*</span></label>
                        <input type="text" name="username" id="username" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" id="email" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="">No.Telp <span class="text-danger">*</span></label>
                        <input type="text" name="phone" id="phone" class="form-control" autocomplete="off" required>
                    </div>
                    <!-- <div class="form-group">
                        <label for="">Password <span class="text-danger">*</span></label>
                        <input type="password" name="password" id="password" class="form-control" autocomplete="off" required>
                    </div> -->
                    <div class="form-group">
                        <label for="">Address <span class="text-danger">*</span></label>
                        <input type="text" name="address" id="address" class="form-control" autocomplete="off" required>
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