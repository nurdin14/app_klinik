<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#"><?= $brandP ?></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#"><?= $brandS ?></a>
        </div>
        <ul class="sidebar-menu">
            <li class="dropdown active">
                <a href="<?= site_url('Pemilik/index') ?>" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="<?= site_url('Pemilik/laporan') ?>" class="nav-link"><i class="fas fa-file-contract"></i><span>Laporan</span></a>
            </li>
        </ul>
    </aside>
</div>