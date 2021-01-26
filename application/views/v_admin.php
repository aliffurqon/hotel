<div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <h3>Dashboard || <marquee>Mana Senyummu Hari ini</marquee></h3>
            </li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-bed"></i>
                  </div>
                  <div class="mr-5">Jumlah Seluruh Kamar
                  <h1 class="text-right mt-4"><b><?php echo $this->m_admin->get_data('kamar')->num_rows(); ?></b></h1>
                </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/kamar' ?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-bed"></i>
                  </div>
                  <div class="mr-5">Jumlah Kamar Yang Tersedia
                    <h1 class="text-right mt-4"><b><?php  echo $this->m_admin->edit_data(array('status_kamar'=>'TERSEDIA'),'kamar')->num_rows();  ?></b></h1>
                  </div>
                 </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/kamar' ?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-bed"></i>
                  </div>
                  <div class="mr-5">Jumlah Kamar Yang Terpakai
                     <h1 class="text-right mt-4"><b><?php  echo $this->m_admin->edit_data(array('status_kamar'=>'TIDAK TERSEDIA'),'kamar')->num_rows();  ?></b></h1>
                  </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/kamar' ?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-bed"></i>
                  </div>
                  <div class="mr-5">Jumlah kamar kotor
                   <h1 class="text-right mt-3"><?php  echo $this->m_admin->edit_data(array('status_kamar'=>'KOTOR'),'kamar')->num_rows();  ?></h1>
                 </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/kamar'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>

