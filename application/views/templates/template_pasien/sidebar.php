<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">Abata Farma</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">AF</a>
        </div>
        <ul class="sidebar-menu">
            <li class="dropdown active">
                <a href="<?= site_url('pasien/index') ?>" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="<?= site_url('pasien/rekamMedis') ?>" class="nav-link"><i class="fas fa-file-medical"></i><span>Rekam Medis</span></a>
            </li>
            <li class="dropdown">
                <a href="<?= site_url('pasien/kartuPasien') ?>" class="nav-link"><i class="fas fa-id-card-alt"></i><span>Kartu Pasien</span></a>
            </li>
            <li class="dropdown">
                <a href="<?= site_url('pasien/daftar') ?>" class="nav-link"><i class="fas fa-paper-plane"></i><span>Ajukan Pemeriksaan</span></a>
            </li>
            <li class="dropdown">
                <?php foreach ($tampil as $t) : ?>
                    <a href="<?= site_url('pasien/akun/' . $t['id_pasien']) ?>" class="nav-link"><i class="fas fa-user"></i><span>Akun</span></a>
                <?php endforeach; ?>
            </li>
        </ul>
    </aside>
</div>