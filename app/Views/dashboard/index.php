<?= $this->extend('dashboard/template')?>
<?= $this->section('content')?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <hr style="height: 10px">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><b>Dashboard</b></li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Total Product</div>
                        <div class="card-body"><?= $dashboard?></div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('dashboard/product')?>">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Total Content</div>
                        <div class="card-body">Angka</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('dashboard/product')?>">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div> -->
        </div>
    </main>
    <?= $this->endSection()?>
</div>