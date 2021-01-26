<div class="container-fluid">
<!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
             <h3>Tambah Tipe Kamar <span class="small">| Administrasi Penambahan Tipe Kamar Baru</span></h3>
            </li>
          </ol>
	<form action="<?php echo base_url().'admin/tambahtipekamaract' ?>" method="post">
		<div class="box">
			<div class="box-body">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>Nama Tipe Kamar</label>
							<input class="form-control" name="nama_kamar_tipe" required />
						</div>
						<div class="form-group">
							<label>Harga / Malam</label>
							<input type="number" name="harga_malam" required/>
						</div>
					    <div class="form-group">
							<label>Harga / Orang</label>
							<input type="number" name="harga_orang" required/>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-grup">
							<label>Keterangan</label>
							<textarea class="form-control" name="keterangan"></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
			<div class="box-footer">
				<button class="btn btn-success" type="submit" name="kamar-add">Tambah Kamar</button>
				<a class="btn btn-warning" href="<?php echo base_url().'admin/tipekamar' ?>">Batal</a>
			</div>
		</div>
	</form>
</div>
