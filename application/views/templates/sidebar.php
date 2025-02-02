<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Admin') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-money"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ASURANSIKU</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('Admin'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('Admin/dataAnggota') ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Anggota</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('Admin/premi') ?>">
            <i class="fas fa-fw fa-money-check-alt"></i>
            <span>Premi</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('Admin/penarikan') ?>">
            <i class="fas fa-fw fa-money-check-alt"></i>
            <span>Penarikan</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('Admin/klaim') ?>">
            <i class="fas fa-fw fa-money-bill"></i>
            <span>Klaim</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->