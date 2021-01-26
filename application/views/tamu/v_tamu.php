<div class="card mb-3">
    <div class="card-header">
       <i class="fas fa-table"></i>
       Data Kamar Hotel</div>
    <div class="card-body">
      <a href="<?php echo base_url().'tamu/tambah_tamu'; ?>" class="btn btn-primary btn-xs mb-2"><span class="fa fa-plus"></span> Tamu Baru</a>
      <div class="table-responsive">
         <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Nama Tamu</th>
                      <th>Warga Negara</th>
                      <th>No.Handphone</th>
                      <th>Email</th>
                      <th>Pilihan</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>NO</th>
                      <th>Nama Tamu</th>
                      <th>Warga Negara</th>
                      <th>No.Handphone</th>
                      <th>Email</th>
                      <th>Pilihan</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  	<?php
                  	$no=1;
                  	foreach($tamu as $t){
                    ?>
                   <tr>
                   	<td><?php echo $no++ ?></td>
                   	<td><?php echo $t->prefix?>.<?php echo $t->nama_depan?>&nbsp;<?php echo $t->nama_belakang?></td>
                   	<td><?php echo $t->warga_negara ?></td>
                   	<td><?php echo $t->nomor_telp ?></td>
                   	<td><?php echo $t->email ?></td>
                    <td><a href="<?php echo base_url().'tamu/edit_tamu/'.$t->id_tamu ?>" class="btn btn-xs btn-info mt-1">Update</a></td>
                   </tr>
               <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
</div>