<div class="container-fluid">
<?php $nomor_invoice='INV-'.date('Ymd').'-'.(rand(10,100));

?>
 <ol class="breadcrumb">
    <li class="breadcrumb-item">
        <h1>Check In <span class="small">Halaman input registrasi check in</span></h1>
    </li>
  </ol>

<section class="content">
	<?php foreach ($kamar as $k ) {?>
		<?php } ?>
	<?php foreach($tamu as $t) { ?>
		<?php } ?>
	<?php foreach ($kamar_tersediaST as $ki) { ?>
	    <?php } ?>
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">KAMAR NOMOR : <b><?php echo $k->nomor_kamar; ?></b></h3>
		</div>
		<form action="<?php echo base_url().'checkin/checkin_stact' ?>" method="post">
			<input type="hidden" name="id_user" value="<?php echo $t->id_tamu; ?>" />
			<div class="box-body">
				<div class="row">
					<div class="col-sm-3">
						<div class="form-group">
							<label># INVOICE</label>
							<input class="form-control" name="nomor_invoice" value="<?php echo $nomor_invoice; ?>" />
						</div>
						<div class="alert alert-info">
							<h4><?php echo $ki->nama_kamar_tipe; ?></h4>
							<ul class="list-unstyled">
								<li>Harga / Malam : <b>Rp <?php echo $ki->harga_malam; ?></b></li>
								<li>Maximal Orang Dewasa : <b><?php echo $ki->max_dewasa; ?> Orang</b></li>
								<li>Maximal Anak-anak : <b><?php echo $ki->max_anak; ?> Orang</b></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label>Nama Tamu</label>
							<select class="form-control nama_tamu" name="id_tamu" required="required">
								<option>--Pilih--</option>
								<?php foreach($tamu as $t) { ?>
								<option value="<?php echo $t->id_tamu; ?>">
									<?php echo $t->prefix;?>.&nbsp;<?php echo $t->nama_depan?>&nbsp;<?php echo $t->nama_belakang; ?>
								</option>
								<?php } ?>
							</select>
						</div>
						<div class="well">
							<a href="<?php echo base_url().'tamu/tambah_tamunav' ?>"><b>Klik disini</b></a> jika nama tamu yang dimaksud tidak ditemukan untuk ditambah pada daftar buku tamu.
						</div>
					</div>
					<div class="col-sm-5">
						<div class="form-group">
							<label>Jumlah Tambahan Tamu</label>
							<div class="row">
								<div class="col-sm-6">
									<select class="form-control" name="jumlah_dewasa">
										<option value="0">- Dewasa -</option>
										<option value="1">1 Orang</option>
										<option value="2">2 Orang</option>
									</select>
								</div>
								<div class="col-sm-6">
									<select class="form-control" name="jumlah_anak">
										<option value="0">- Anak-anak -</option>
										<option value="1">1 Orang</option>
										<option value="2">2 Orang</option>

									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Tanggal / Waktu Check-In</label>
							<div class="row">
								<div class="col-sm-6">
									<input class="form-control" type="date" name="tanggal_checkin"  required="required" />
								</div>
								<div class="col-sm-6">
									<input class="form-control" name="waktu_checkin" value="<?php echo date('H:i'); ?>" readonly />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Tanggal / Waktu Check-Out</label>
							<div class="row">
								<div class="col-sm-6">
									<input id="checkout" type="date" class="form-control" name="tanggal_checkout" required="required" />
								</div>
								<div class="col-sm-6">
									<input class="form-control" name="waktu_checkout" value="<?php echo date('H:i'); ?>" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Jumlah Deposit (Rp)</label>
							<input class="form-control" name="deposit" required />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<p><font color="red">*Jika input transaksi cek_in berhasil maka anda akan dialihkan kehalaman utama check in<br>
				*jika halaman ini merefresh maka input data gagal, input data kembali ! pastikan semua form telah terisi<br></font></p>
				<input type="hidden" name="id_kamar" value="<?php echo $k->id_kamar; ?>" />
				<button class="btn btn-success" type="submit" name="checkin">Check In</button>
				<a class="btn btn-warning" href="<?php echo base_url().'checkin' ?>">Batal</a>
			</div>
		</form>
	</div>
</section>
</div>