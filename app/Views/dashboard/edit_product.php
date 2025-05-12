<?= $this->extend('dashboard/template'); ?>
<?= $this->section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="col-12" style="padding-left: 20px; padding-right: 20px;">
            <br>
            <h3>Product Panel JayaTech Mandiri</h3>

            <div class="card card-dark">
                <div class="card-body">
                    <form action="/product/perbarui/<?= $products->id ?>" method="POST" enctype="multipart/form-data">
                        <div class="card card-dark">
                            <div class="card-header">
                                <b class="title" style="font-weight: 700; font-size: 16px;">Edit Product</b>
                            </div>
                            <div class="card-body collapse show">
                                <div class="col-12">
                                    <label>Nama Product</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="<?= esc($products->nama_product) ?>" name="nama_product" required>
                                    </div>
                                </div>
                                <br>

                                <div class="col-12">
                                    <label>Deskripsi Product</label>
                                    <textarea name="deskripsi" class="form-control" style="height: 200px;" required><?= esc($products->deskripsi_product) ?></textarea>
                                </div>

                                <br>
                                <div class="col-12">
                                    <label>Gambar Saat Ini</label><br>
                                    <?php 
                                        echo "<img src='" . base_url('products/' . $products->gambar_product) . "' width='100' style='margin:5px;'>";
                                    ?>
                                </div>

                                <br>
                                <div class="col-12">
                                    <label>Ganti Gambar Product (Opsional)</label>
                                    <input type="file" name="files[]" multiple class="form-control" accept="image/png,image/jpeg">
                                    <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
                                </div>
                                <input type="hidden" name="gambar_lama" value="<?= esc($products->gambar_product) ?>">

                                <br>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?= $this->endSection() ?>

</div>

