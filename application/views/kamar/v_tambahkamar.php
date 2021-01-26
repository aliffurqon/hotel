<div class="container-fluid">
<!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
             <h3>Tambah Kamar <span class="small">| Tambah kamar baru</span></h3>
            </li>
          </ol>
	<form action="<?php echo base_url().'admin/tambahkamaract' ?>" method="post">
		<div class="box">
			<div class="box-body">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>Nomor Kamar</label>
							<input class="form-control" name="nomor_kamar" required />
						</div>
						<div class="form-group">
							<label>Tipe Kamar</label>
							<select class="form-control" name="id_kamar_tipe">
								<option>-- Pilih --</option>
								<?php foreach ($tipe_kamar as $tk) { ?>
								<option value="<?php echo $tk->nama_kamar_tipe; ?>"><?php echo $tk->nama_kamar_tipe ; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Maximal Orang Dewasa</label>
							<select class="form-control" name="max_dewasa">
								<option>--Pilih--</option>
								<option value="1">1 Orang </option>
								<option value="2">2 Orang </option>
								<option value="3">3 Orang </option>
								<option value="4">4 Orang </option>
								<option value="5">5 Orang </option>
							</select>
						</div>
						<div class="form-group">
							<label>Maximal Anak-anak</label>
							<select class="form-control" name="max_anak">
								<option>--Pilih--</option>
								<option value="1">1 Orang </option>
								<option value="2">2 Orang </option>
								<option value="3">3 Orang </option>
								<option value="4">4 Orang </option>
								<option value="5">5 Orang </option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<button class="btn btn-success" type="submit" name="kamar-add">Tambah Kamar</button>
				<a class="btn btn-warning" href="<?php echo base_url().'admin/kamar' ?>">Batal</a>
			</div>
		</div>
	</form>
</div>
