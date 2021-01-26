<div class="container-fluid">
<!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
             <h3>Tambah Tamu <span class="small">| Tambah Tamu baru</span></h3>
            </li>
          </ol>
	<form action="<?php echo base_url().'tamu/tambah_tamuact' ?>" method="post">
		<div class="box">
			<div class="box-body">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label>Nama Tamu</label>
							<div class="row">
								<div class="col-sm-3">
									<select class="form-control" name="prefix">
										<option value="Mr">Mr</option>
										<option value="Ms">Ms</option>
										<option value="Mrs">Mrs</option>
									</select>
									<?php echo form_error('prefix'); ?>
								</div>
								<div class="col-sm-4">
									<input class="form-control" type="text" name="nama_depan" placeholder="Nama Depan" required />
									<?php echo form_error('nama_depan'); ?>
								</div>
								<div class="col-sm-4">
									<input class="form-control" type="text" name="nama_belakang" placeholder="Nama Belakang" required /><?php echo form_error('nama_belakang'); ?>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Identitas</label>
							<div class="row">
								<div class="col-sm-3">
									<select class="form-control" name="tipe_identitas" />
										<option value="KTP">KTP</option>
										<option value="SIM">SIM</option>
										<option value="PASSPORT">PASSPORT</option>
									</select>
									<?php echo form_error('tipe_indentitas'); ?>
								</div>
								<div class="col-sm-6">
									<input class="form-control" name="nomor_identitas" placeholder="Nomor Identitas" required />
									<?php echo form_error('nomor_identitas'); ?>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Warga Negara</label>
							<div class="row">
								<div class="col-sm-4">
									<input class="form-control" name="warga_negara" />
									<?php echo form_error('warga_negara'); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="form-group">
							<label>Alamat</label>
							<textarea class="form-control" name="alamat_jalan"></textarea>
							<?php echo form_error('alamat_jalan'); ?>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<input class="form-control" name="alamat_kabupaten" placeholder="Kabupaten / Kota" />
									<?php echo form_error('alamat_kabupaten'); ?>
								</div>
								<div class="col-sm-6">
									<input class="form-control" name="alamat_provinsi" placeholder="Provinsi" />
									<?php echo form_error('alamat_provinsi'); ?>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<label>Nomor Telp / Handphone</label>
									<input class="form-control" name="nomor_telp" required />
									<?php echo form_error('nomor_telp'); ?>
								</div>
								<div class="col-sm-6">
									<label>Email</label>
									<input class="form-control" name="email" />
									<?php echo form_error('email'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<button class="btn btn-success" type="submit">Tambah Tamu</button>
				<a class="btn btn-warning" href="<?php echo base_url().'admin' ?>">Batal</a>
			</div>
		</form>
	</div>
</div>