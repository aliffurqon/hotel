<div class="card mb-3">
    <div class="card-header">
       <i class="fas fa-table"></i>
       Data Kamar Hotel</div>
    <div class="card-body">
    	<a href="<?php echo base_url().'admin/tambahkamar'; ?>" class="btn btn-primary btn-xs mb-2"><span class="fas fa-plus"></span> Kamar Baru</a>
      <div class="table-responsive">
         <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>No. kamar</th>
                      <th>Harga/Malam</th>
                      <th>Max. Dewasa</th>
                      <th>Max. Anak-anak</th>
                      <th>Status</th>
                      <th>Pilihan</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>No. kamar</th>
                      <th>Harga/Malam</th>
                      <th>Max. Dewasa</th>
                      <th>Max. Anak-anak</th>
                      <th>Status</th>
                      <th>Pilihan</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  	<?php
                  	$no=1;
                  	foreach($lihatkamar as $k){
                    ?>
                   <tr>
                   	<td><?php echo $no++ ?></td>
                   	<td><?php echo $k->nomor_kamar ?></td>
                   	<td><?php echo $k->harga_malam ?> /Malam</td>
                   	<td><?php echo $k->max_dewasa ?> Orang</td>
                   	<td><?php echo $k->max_anak ?> Anak</td>
                   	<td><?php 

                    if($k->status_kamar=='TERSEDIA') {

                      $status_kamar='primary';
                    }

                    if($k->status_kamar=='TIDAK TERSEDIA') {

                      $status_kamar='danger';
                    }

                    if($k->status_kamar=='KOTOR') {

                      $status_kamar='warning';
                    }?>
                    <span class="badge bg-<?php echo $status_kamar; ?>"><?php echo $k->status_kamar; ?></span>
                      
                    </td>
                    <td><a href="<?php echo base_url().'admin/edit_kamar/'.$k->id_kamar ?>" class="btn btn-xs btn-info mt-1">Update</a>
                    </td>
               <?php } ?>
                  </tbody>
         </table>
      </div>
    </div>
  </div>
</div>