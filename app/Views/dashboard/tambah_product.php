<?= $this->extend('dashboard/template'); ?>

<?= $this->section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
        <div class="col-12" style="padding-left: 20px; padding-right: 20px;">
            <br>
            <h3>Product Panel JayaTech Mandiri </h3>

            <div class="card card-dark">
                <div class="card-body">
                    <form action="/product/simpan" method="POST" enctype="multipart/form-data">
                        <div class="card card-dark">
                            <div class="card-header">
                                <b class="title" style="font-weight: 700; font-size: 16px;">Tambah Product</b>
                            </div>
                            <div class="card-body collapse show">
                                <div class="col-12">
                                    <label for="">Nama Product</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="<?= old('nama_product') ?>" name="nama_product" required>
                                    </div>
                                </div>
                                <br>

                                <div class="col-12">
                                    <label for="">Deskripsi Product</label>
                                    <textarea name="deskripsi" class="form-control" id="deskripsi" style="height: 200px;" required></textarea>
                                </div>

                                <br>
                                <div class="col-12">
                                    <label for="">Gambar Product</label>
                                    <div>
                                        <input type="file" name="files[]" class="dinamis-form" accept="image/png,image/jpeg" required>
                                    </div>
                                </div>

                                <br>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            </form>
        </div>
    </main>
    <?= $this->endSection() ?>
</div>