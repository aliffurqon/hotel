<div class="container-fluid">
 	<ol class="breadcrumb">
       <li class="breadcrumb-item">
         <section class="content-header">
			<h3>Check terpakai <span class="small">Pilih kamar yang terpakai</span></h3>
		 </section>
       </li>
    </ol>

 <div class="row">

  	 <?php if(!empty($data_kamar)) { ?>
		<?php foreach($data_kamar as $dk) { ?>
		 <div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-danger o-hidden h-100">
             <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-bed"></i>
              </div>
				<div class="mr-5"><h3><?php echo $dk->nomor_kamar; ?></h3>
				<p><?php echo $dk->nama_kamar_tipe; ?></p>
			  	</div>
			  	<a class="text-white" href="<?php echo base_url().'checkout/checkout/'.$dk->id_kamar ?>">
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
</div>