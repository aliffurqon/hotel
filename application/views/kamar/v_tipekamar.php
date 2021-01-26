<div class="card mb-3">
    <div class="card-header">
       <i class="fas fa-table"></i>
       Data Tipe Kamar | Administrasi Tipe Kamar</div>
    <div class="card-body">
      <a href="<?php echo base_url().'admin/tambahtipekamar'; ?>" class="btn btn-primary btn-xs mb-2"><span class="fas fa-plus"></span> Tipe Kamar</a>
      <div class="table-responsive">
         <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Tipe Kamar</th>
                      <th>Harga / Malam</th>
                      <th>Harga / Orang</th>
                      <th class="text-center">Fasilitas</th>
                      <th>Pilihan</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>NO</th>
                      <th>Tipe Kamar</th>
                      <th>Harga / Malam</th>
                      <th>Harga / Orang</th>
                      <th class="text-center">Fasilitas</th>
                      <th>Pilihan</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    $no=1;
                    foreach($tipekamar as $tk){
                    ?>
                   <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $tk->nama_kamar_tipe ?></td>
                    <td><?php echo $tk->harga_malam ?> / malam</td>
                    <td><?php echo $tk->harga_orang ?> / orang</td>
                    <td><?php echo $tk->keterangan ?></td>
                    <td><a href="<?php echo base_url().'admin/edit_tipekamar/'.$tk->id_kamar_tipe ?>" class="btn btn-xs btn-info mt-1">Update</a></td>
               <?php } ?>
                  </tbody>
         </table>
      </div>
    </div>
  </div>
</div>