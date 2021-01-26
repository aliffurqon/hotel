<div class="card mb-3">
    <div class="card-header">
       <h4><i class="fas fa-table"></i>
       Data Tamu Menginap</h4></div>
    <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th># Kamar</th>
					  <th>Nama Tamu</th>
					  <th>Tanggal Check-In</th>
					  <th>Tanggal Check-Out</th>
					  <th>Jumlah Deposit</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th># Kamar</th>
					  <th>Nama Tamu</th>
					  <th>Tanggal Check-In</th>
					  <th>Tanggal Check-Out</th>
					  <th>Jumlah Deposit</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  	<?php
                  	$no=1;
                  	foreach($tamu_menginap as $tm){
                    ?>
                   <tr>
                   	<td><?php echo $no++ ?></td>
                   	<td><?php echo $tm->prefix?>.<?php echo $tm->nama_depan?>&nbsp;<?php echo $tm->nama_belakang?></td>
                   	<td><?php echo $tm->tanggal_checkin ?></td>
                   	<td><?php echo $tm->tanggal_checkout ?></td>
                   	<td><?php echo $tm->deposit ?></td>
                   </tr>
               <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
</div>