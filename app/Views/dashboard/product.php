<?= $this->extend('dashboard/template') ?>
<?= $this->section('content') ?>

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
        <div class="container-fluid px-4">
            <h1 class="mt-4">Daftar Product</h1>
            <hr style="height: 10px">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><b>List Product</b></li>
            </ol>
            <div class="row mb-1">
                <div class="col-auto">
                    <a href="<?= base_url('dashboard/tambah_product') ?>" class="btn bg-success text-white" style="font-size: 16px;">
                        Tambah Product
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Nama Product</th>
                                        <th>Deskripsi</th>
                                        <th>Gambar</th>
                                        <th>Tanggal Upload</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($products as $product): ?>
                                        <tr>
                                            <td><?= esc($product->nama_product) ?></td>
                                            <td><?= esc($product->deskripsi_product) ?></td>
                                            <td>
                                                <?php
                                                $gambar = $product->gambar_product;
                                                echo "<img src='" . base_url('products/' . $gambar) . "' width='300' style='margin:5px;'>";
                                                ?>
                                            </td>
                                            <td><?= date('d-m-Y H:i', strtotime($product->created_at)) ?></td>
                                            <td>
                                                <a href="<?= base_url('product/edit/' . $product->id) ?>" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="<?= base_url('product/hapus/' . $product->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus produk ini?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama Product</th>
                                        <th>Deskripsi</th>
                                        <th>Gambar</th>
                                        <th>Tanggal Upload</th>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <?= $this->endSection() ?>
</div>