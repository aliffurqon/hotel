<div class="container-fluid">
 <ol class="breadcrumb">
    <li class="breadcrumb-item">
        <h1>Check out <span class="small">Halaman proses checkout</span></h1>
    </li>
  </ol>

<section class="content">
	<?php foreach ($kamar_tidaktersedia as $ktd) {?>
		<?php } ?>
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">KAMAR NOMOR : <b><?php echo $ktd->nomor_kamar; ?></b></h3>
		</div>
		<form action="<?php echo base_url().'checkout/checkout_act' ?>" method="post">
			<input type="hidden" name="id_user" value="<?php echo $ktd->id_tamu; ?>" />
			<input type="hidden" name="id_kamar" value="<?php echo $ktd->id_kamar; ?>" />
			<div class="box-body">
				<div class="row">
					<div class="col-sm-3">
						<div class="form-group">
							<label># INVOICE</label>
							<input class="form-control" name="nomor_invoice" value="<?php echo $ktd->nomor_invoice; ?>" readonly />
						</div>
						<div class="alert alert-info">
							<h4><?php echo $ktd->nama_kamar_tipe; ?></h4>
							<ul class="list-unstyled">
								<li>Harga / Malam : <b>Rp <?php echo $ktd->harga_malam; ?></b></li>
								<li>Maximal Orang Dewasa : <b><?php echo $ktd->max_dewasa; ?> Orang</b></li>
								<li>Maximal Anak-anak : <b><?php echo $ktd->max_anak; ?> Orang</b></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label>Nama Tamu</label>
							<input class="form-control" name="nomor_invoice" value="<?php echo $ktd->prefix;?>.&nbsp;<?php echo $ktd->nama_depan?>&nbsp;<?php echo $ktd->nama_belakang; ?> " readonly/>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="form-group">
							<label>Jumlah Tamu</label>
							<div class="row">
								<div class="col-sm-6">
									<input class="form-control" name="nomor_invoice" value="<?php echo $ktd->jumlah_anak; ?>" readonly/>
								</div>
								<div class="col-sm-6">
									<input class="form-control" name="nomor_invoice" value="<?php echo $ktd->jumlah_dewasa; ?>" readonly/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Tanggal / Waktu Check-In</label>
							<div class="row">
								<div class="col-sm-6">
									<input class="form-control" type="date" name="tanggal_checkin"  value="<?php echo $ktd->tanggal_checkin; ?>" readonly/>
								</div>
								<div class="col-sm-6">
									<input class="form-control" name="waktu_checkin" value="<?php echo  $ktd->waktu_checkin?>" readonly />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Tanggal / Waktu Check-Out</label>
							<div class="row">
								<div class="col-sm-6">
									<input id="checkout" type="date" class="form-control" name="tanggal_checkout" value="<?php echo  $ktd->tanggal_checkout?>"readonly/>
								</div>
								<div class="col-sm-6">
									<input class="form-control" name="waktu_checkout" value="<?php echo  $ktd->waktu_checkout?>" readonly/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Jumlah Deposit (Rp)</label>
							<input class="form-control" name="deposit" value="<?php echo $ktd->deposit?>" readonly>
						</div>
					</div>
				</div>
			</div>
			<?php 
			$checkin=$ktd->tanggal_checkin;
			$checkout=$ktd->tanggal_checkout;
			$tanggal_datang = strtotime($checkin);
			$tanggal_pulang = strtotime($checkout);
			$durasi = abs(($tanggal_pulang-$tanggal_datang)/(60*60*24));;
			$subtotal_kamar=$durasi * $ktd->harga_malam;
			$subtotal=$subtotal_kamar;
			$ppn=$subtotal * 0.10;
			$grand_total=$subtotal + $ppn - $ktd->deposit; ?>
			<h3>Rincian Tagihan</h3>
				<hr/>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Keterangan Layanan / Produk</th>
							<th>Harga</th>
							<th>Qty</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Room reserved type : <?php echo $ktd->nama_kamar_tipe; ?>&nbsp;<?php $ktd->nomor_kamar ?></td>
							<td>Rp <?php echo $ktd->harga_malam; ?></td>
							<td><?php echo $durasi.' malam'; ?></td>
							<td>Rp <?php echo $subtotal_kamar ; ?></td>
						</tr>
						<tr>
							<td rowspan="4"></td>
							<td colspan="2"><b>Sub-Total</b></td>
							<td><b>Rp <?php echo number_format($subtotal); ?></b></td>
						</tr>
						<tr>							
							<td colspan="2">PPn 10%</td>
							<td>Rp <?php echo number_format($ppn); ?></td>
						</tr>
						<tr>							
							<td colspan="2">Jumlah Deposit</td>
							<td class="text-red">Rp <?php echo number_format($ktd->deposit); ?></td>
						</tr>
						<tr>							
							<td colspan="2"><b>Grand Total</b></td>
							<td><b>Rp <?php echo number_format($ktd->total_biaya_kamar); ?></b></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="box-footer">
				<p><font color="red">* Pastikan anda mencetak invoice terlebih dahulu sebelum ada menekan tombol checkout karena jika anda sudah menekan tombol checkout terlebih dahulu invoice tidak dapat dicetak <br>
				* Jika transaksi cek_out berhasil maka anda akan dialihkan kehalaman utama check out<br>
				* jika halaman ini merefresh maka input data gagal, silahkan coba lagi<br>
				</font></p>
				<input type="hidden" name="id_transaksi_kamar" value="<?php echo $ktd->id_transaksi_kamar; ?>" />
				<input type="hidden" name="id_kamar" value="<?php echo $ktd->id_kamar; ?>" />
				<button class="btn btn-success" type="submit">Check Out</button>
				<a class="btn btn-primary" href="<?php echo base_url().'checkout/printinvoice' ?>" target="_blank">Cetak Invoice</a>
				<a class="btn btn-warning" href="<?php echo base_url().'checkout' ?>">Batal</a>
			</div>
		</div>
	</form>
</section>
</div>