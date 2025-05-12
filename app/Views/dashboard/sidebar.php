<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading"></div>
                    <br><br>
                    <a class="nav-link" href="<?= base_url('dashboard/hidden_privasi') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <!-- <a class="nav-link" href="<?= base_url('product') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                        Content
                    </a> -->
                    <a class="nav-link" href="<?= base_url('dashboard/product') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                        Products
                    </a>

            </div>
        </nav>
    </div>

    <?= $this->renderSection('content'); ?>



    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2023</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>