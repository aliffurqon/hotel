<div class="container-fluid">
<!-- Breadcrumbs-->
   <ol class="breadcrumb">
     <li class="breadcrumb-item">
       <h3>Edit Kamar <span class="small">|Ubah data Kamar</span></h3>
     </li>
   </ol>
 <form action="<?php echo base_url().'admin/updatekamar' ?>" method="post">
 	<?php foreach($editkamar as $ek){ ?>
 	 <?php } ?>
		<div class="box">
			<div class="box-body">
				<div class="row">
					<div class="col-sm-4">
						<input type="hidden" name="id_kamar" value="<?php echo $ek->id_kamar; ?>">
						<div class="form-group">
							<label>Nomor Kamar</label>
							<input class="form-control" type="text"name="nomor_kamar" value="<?php echo $ek->nomor_kamar; ?>"/><?php echo form_error('nomor_kamar'); ?>
						</div>
						<div class="form-group">
							<label>Tipe Kamar</label>
							<input class="form-control" value="<?php echo $ek->nama_kamar_tipe; ?>" disabled />
							<select class="form-control" name="id_kamar_tipe">
							<option value="<?php echo $ek->id_kamar_tipe ?>">-- Pilih --</option>
							<?php foreach ($tipekamar as $tk) { ?>
								<option value="<?php echo $tk->id_kamar_tipe; ?>"><?php echo $tk->nama_kamar_tipe; ?></option>
							<?php } ?>
							</select>
							<?php echo form_error('id_kamar_tipe'); ?>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Maximal Orang Dewasa</label>
							<input class="form-control" value="<?php echo $ek->max_dewasa;?> Orang" disabled />
							<select class="form-control" name="max_dewasa">
								<option value="<?php echo $ek->max_dewasa; ?>">-- Pilih --</option>
								<option value="1">1 Orang </option>
								<option value="2">2 Orang </option>
								<option value="3">3 Orang </option>
								<option value="4">4 Orang </option>
								<option value="5">5 Orang </option>
							</select>
							<?php echo form_error('max_dewasa'); ?>
						</div>
						<div class="form-group">
							<label>Maximal Anak-anak</label>
							<input class="form-control" value="<?php echo $ek->max_anak; ?> Orang" disabled />
							<select class="form-control" name="max_anak">
								<option value="<?php echo $ek->max_anak; ?>">-- Pilih --</option>
								<option value="1">1 Orang </option>
								<option value="2">2 Orang </option>
								<option value="3">3 Orang </option>
								<option value="4">4 Orang </option>
								<option value="5">5 Orang </option>
							</select>
							<?php echo form_error('max_anak'); ?>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Status Kamar</label>
							<input class="form-control" value="<?php echo $ek->status_kamar; ?>" disabled />
							<select class="form-control" name="status_kamar">
								<option value="<?php echo $ek->status_kamar; ?>">-- Pilih --</option>
								<option value="TERSEDIA">TERSEDIA</option>
								<option value="TIDAK TERSEDIA">TIDAK TERSEDIA</option>
								<option value="KOTOR">KOTOR</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<input type="hidden" name="id_kamar" value="<?php echo $ek->id_kamar; ?>" />
				<button class="btn btn-success" type="submit" name="kamar-update">Update Kamar</button>
				<a class="btn btn-danger" href="<?php echo base_url().'admin/hapuskamar/'.$ek->id_kamar; ?>">Hapus Kamar</a>
				<a class="btn btn-warning" href="<?php echo base_url().'admin/kamar' ?>">Batal</a>
			</div>
		</div>
	</form>
</div>
