<div class="container-fluid">
<!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
             <h3>Edit Tamu<span class="small">| Ubah data tamu</span></h3>
            </li>
          </ol>
   <?php foreach($edit_tamu as $et){ ?>
	<form action="<?php echo base_url().'tamu/edit_tamuact' ?>" method="post">
		<div class="box">
			<div class="box-body">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label>Nama Tamu</label>
							<div class="row">
								<div class="col-sm-3">
									<input type="hidden" name="id_tamu" value="<?php echo $et->id_tamu; ?>">
									<input class="form-control" name="prefix" value="<?php echo $et->prefix ?>" readonly />
									<?php echo form_error('prefix'); ?>
								</div>
								<div class="col-sm-4">
									<input class="form-control" type="text" name="nama_depan" value="<?php echo $et->nama_depan ?>" required />
									<?php echo form_error('nama_depan'); ?>
								</div>
								<div class="col-sm-4">
									<input class="form-control" type="text" name="nama_belakang" value="<?php echo $et->nama_belakang ?>"required /><?php echo form_error('nama_belakang'); ?>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Identitas</label>
							<div class="row">
								<div class="col-sm-3">
									<input class="form-control" name="tipe_identitas" value="<?php echo $et->tipe_identitas ?>" readonly />
									<?php echo form_error('tipe_indentitas'); ?>
								</div>
								<div class="col-sm-6">
									<input class="form-control" name="nomor_identitas" value="<?php echo $et->nomor_identitas ?>" required />
									<?php echo form_error('nomor_identitas'); ?>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Warga Negara</label>
							<div class="row">
								<div class="col-sm-4">
									<input class="form-control" name="warga_negara" value="<?php echo $et->warga_negara?>" />
									<?php echo form_error('warga_negara'); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="form-group">
							<label>Alamat</label>
							<textarea class="form-control" name="alamat_jalan" value="<?php echo $et->alamat_jalan ?>">
								<?php echo $et->alamat_jalan ?>
							</textarea>
							<?php echo form_error('alamat_jalan'); ?>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<input class="form-control" name="alamat_kabupaten" value="<?php echo $et->alamat_kabupaten ?>" " />
									<?php echo form_error('alamat_kabupaten'); ?>
								</div>
								<div class="col-sm-6">
									<input class="form-control" name="alamat_provinsi" value="<?php echo $et->alamat_provinsi ?>"/>
									<?php echo form_error('alamat_provinsi'); ?>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<label>Nomor Telp / Handphone</label>
									<input class="form-control" name="nomor_telp" value="<?php echo $et->nomor_telp ?>"required />
									<?php echo form_error('nomor_telp'); ?>
								</div>
								<div class="col-sm-6">
									<label>Email</label>
									<input class="form-control" name="email"  value="<?php echo $et->email ?>" />
									<?php echo form_error('email'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<input type="hidden" name="id_tamu" value="<?php echo $et->id_tamu; ?>" />
				<button class="btn btn-success" type="submit">Update</button>
				<a class="btn btn-danger" href="<?php echo base_url().'tamu/hapustamu/'.$et->id_tamu; ?>">Hapus Tamu</a>
				<a class="btn btn-warning" href="<?php echo base_url().'tamu' ?>">Batal</a>
			</div>
		</form>
	<?php } ?>
</div>