<div class="container-fluid">
 	<ol class="breadcrumb">
       <li class="breadcrumb-item">
         <section class="content-header">
			<h3>Check In <span class="small">Pilih kamar yang tersedia</span></h3>
		 </section>
       </li>
    </ol>

 <div class="row">

  	 <?php if(!empty($kamar_tersediaST)) { ?>
		<?php foreach($kamar_tersediaST as $kamar_tersedia) { ?>
		 <div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-success o-hidden h-100">
             <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-bed"></i>
              </div>
				<div class="mr-5"><h3><?php echo $kamar_tersedia->nomor_kamar; ?></h3>
				<p><?php echo $kamar_tersedia->nama_kamar_tipe; ?></p>
			  	</div>
			  	<a class="text-white" href="<?php echo base_url().'checkin/checkin_st/'.$kamar_tersedia->id_kamar ?>">
                  <span class="float-left">Pilih Kamar</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
			 </div>
		    </div>
		</div>
		<?php } ?>
		<?php } else { ?>
		<div class="alert alert-warning">
		 <h4>Mohon Maaf</h4>
		 Untuk sementara, tidak ada kamar dengan type STANDART yang tersedia.
		</div>
		<?php } ?>
 </div>

 <div class="row ">
	 <?php if(!empty($kamar_tersediaSP)) { ?>
		<?php foreach($kamar_tersediaSP as $kamar_tersedia) { ?>
		 <div class="col-xl-3 col-sm-6 mb-3 ">
			<div class="card text-white bg-primary o-hidden h-100">
             <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-bed"></i>
              </div>
				<div class="mr-5"><h3><?php echo $kamar_tersedia->nomor_kamar; ?></h3>
				<p><?php echo $kamar_tersedia->nama_kamar_tipe; ?></p>
			  	</div>
			  	<a class="text-white" href="<?php echo base_url().'checkin/checkin_sp/'.$kamar_tersedia->id_kamar ?>">
                  <span class="float-left">Pilih Kamar</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
			 </div>
		    </div>
		 </div>
		<?php } ?>
		<?php } else { ?>
		<div class="alert alert-warning">
		 <h4>Mohon Maaf</h4>
		 Untuk sementara, tidak ada kamar dengan Type  SUPERIOR yang tersedia.
		</div>
		<?php } ?>
  </div>

</div>
</div>
		