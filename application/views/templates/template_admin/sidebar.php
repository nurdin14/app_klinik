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
                <a href="<?= site_url('Admin/index') ?>" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-address-book"></i><span>Data User</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href="<?= site_url('Admin_pasien/index') ?>">Data Pasien</a></li>
                    <li class=""><a class="nav-link" href="<?= site_url('Admin_petugas/index') ?>">Data Petugas</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="<?= site_url('Data_pemeriksaan/index') ?>" class="nav-link"><i class="fas fa-stethoscope"></i><span>Data Pemeriksaan</span></a>
            </li>
            <li class="dropdown" style="display: none;">
                <a href="<?= site_url('pembayaran/index') ?>" class="nav-link"><i class="fas fa-credit-card"></i><span>Transaksi</span></a>
            </li>
            <li class="dropdown" style="display: none;">
                <a href="<?= site_url('admin/laporan') ?>" class="nav-link"><i class="fas fa-file-contract"></i><span>Laporan</span></a>
            </li>
        </ul>
    </aside>
</div>