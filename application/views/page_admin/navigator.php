 <nav class="navbar navbar-expand navbar-light bg-light static-top">

     <a class="navbar-brand mr-1" href="<?php echo base_url().'admin' ?>"> <h3>Ramut Hotel</h3></a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <ul class="navbar-nav ml-auto mr-md-3 ">
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i><?php echo $this->session->userdata("ses_namauser"); ?>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">logout</a>
          </div>
        </li>
      </ul>
  </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">

        <li class="nav-item">
          <div class="user-panel nav-link">
              <div class="pull-left info">
                <p><?php echo $_SESSION["ses_namauser"]; ?></p>
                <span class="small"><?php echo date('l. d M Y'); ?></span>
              </div>
            </div>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#">
              <span>MAIN NAVIGATION</span>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url().'admin' ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class=" fa fa-key"></i>
            <span>Check In / Out</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Menu Check in / Out</h6>
            <a class="dropdown-item" href="<?php echo base_url().'checkin' ?>">Check In</a>
            <a class="dropdown-item" href="<?php echo base_url().'checkout' ?>">Check Out</a>
            <a class="dropdown-item" href="<?php echo base_url().'checkin/tamu_menginap'?>">Tamu In-Hause</a>
          </div>
        </li>
        </li>
            <a class="nav-link" href="#">
              <span>ADMINISTRASI HOTEL</span>
            </a>
        </li>
        </li>
         </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class=" fa fa-bed"></i>
            <span>Data Kamar</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Menu Data Kamar</h6>
            <a class="dropdown-item" href="<?php echo base_url().'admin/kamar' ?>">Lihat Kamar</a>
            <a class="dropdown-item" href="<?php echo base_url().'admin/tambahkamar_nav' ?>">Tambah Kamar</a>
            <a class="dropdown-item" href="<?php echo base_url().'admin/tipekamar' ?>">Tipe Kamar</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class=" fa fa-suitcase"></i>
            <span>Data Tamu</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Menu Data Tamu</h6>
            <a class="dropdown-item" href="<?php echo base_url().'tamu' ?>">Lihat Tamu</a>
            <a class="dropdown-item" href="<?php echo base_url().'tamu/tambah_tamunav' ?>">Tambah Tamu Baru</a>
          </div>
        </li>
      </ul>
<div id="content-wrapper">
      