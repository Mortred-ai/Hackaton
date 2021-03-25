<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <br>
    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['name']; ?></h5>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
                </div>
            </div>
        </div>
    </div><br>
    <h4> Mengelola Pantai?</h4>
    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart('user/tambahpantai'); ?>
            
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Nama Pantai </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="pantai" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Nama Pengelola</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="pengelola" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Deskripsi</label>
                <div class="col-sm-9">
                    <input type="textarea" class="form-control" id="name" name="desc" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Nomor WhatsApp </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="wa" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Foto </label>
                <div class="col-sm-9">
                    <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </div>


            </form>


        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 