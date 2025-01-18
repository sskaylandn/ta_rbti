 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon ">
        <i class="fas fa-university"></i>
    </div>
    <div class="sidebar-brand-text mx-3">E-LOMBA START-UP</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('juri/index')?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Penilaian Proposal
</div>
<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo base_url('juri/index_penilaian')?>" data-toggle="#" data-target="#"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-file fa-file"></i>
        <span>Penilaian Proposal</span>
</a>
</li>
<!-- Divider -->
<hr class="sidebar-divider">


<!-- Heading -->
<div class="sidebar-heading">
    Klasemen Nilai
</div>
<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo base_url('juri/index_klasemen')?>" data-toggle="#" data-target="#"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-file fa-file"></i>
        <span>Klasemen Nilai</span>
</a>
</li>
<!-- Divider -->
<hr class="sidebar-divider">
 
<!-- Heading -->

    <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('auth/logout')?>" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
    </li>
<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
