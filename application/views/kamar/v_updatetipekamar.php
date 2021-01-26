<div class="container-fluid">
<!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
             <h3>Edit Tipe Kamar <span class="small">| Administrasi Perubahan Data Tipe Kamar</span></h3>
            </li>
          </ol>
     <?php foreach($kamar_tipe as $ktp){ ?>
	<form action="<?php echo base_url().'admin/update_tipekamar' ?>" method="post">
        <div class="box">
			<div class="box-body">
				<div class="row">
					<div class="col-sm-4">
						<input type="hidden" name="id_kamar_tipe" value="<?php echo $ktp->id_kamar_tipe; ?>">
						<div class="form-group">
							<label>Nama Tipe Kamar</label>
							<input class="form-control" name="nama_kamar_tipe" type="text" value="<?php echo $ktp->nama_kamar_tipe; ?>"required />
							<?php echo form_error('nama_kamar_tipe'); ?>
						</div>
						<div class="form-group">
							<label>Harga / Kamar</label>
							<input class="form-control" type="number" name="harga_malam" value="<?php echo $ktp->harga_malam; ?>"required />
							<?php echo form_error('harga_malam'); ?>
						</div>
						<div class="form-group">
							<label>Harga / Orang</label>
							<input class="form-control" type="number" name="harga_orang" value="<?php echo $ktp->harga_orang; ?>"required />
							<?php echo form_error('harga_orang'); ?>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-grup">
						<label>Keterangan</label>
						<textarea class="form-control" name="keterangan">
							<?php echo $ktp->keterangan; ?>
						</textarea>
						<?php echo form_error('keterangan'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<button class="btn btn-success" type="submit">Update</button>
				<a class="btn btn-danger" href="<?php echo base_url().'admin/hapus_tipekamar/'.$ktp->id_kamar_tipe; ?>">Hapus</a>
				<a class="btn btn-warning" href="<?php echo base_url().'admin/tipekamar' ?>">Batal</a>
			</div>
		</div>
	</form>
	<?php } ?>
</div>
