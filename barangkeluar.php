<div class="row">
	<div class="col-xs-12 mt-1 mb-3">
		<h4 class="">
			Alat Keluar
		</h4>
		<p>
			Admin dapat me-manage alat yang keluar disini.
		</p>
		<hr>
	</div>
	<div class="col-xs-12">
	</div>
</div>
<br>
<link rel="stylesheet" type="text/css" href="assets/style.css">
<div class="row" style="margin-top: -30px;">
	<div class="col-12">
		<div class="card">
			<div class="container">
				<div class="card-body">
					<button class="btn btn-outline-primary pull-right" data-toggle="modal" data-target="#tambah">Alat Keluar</button>
					<div class="table-responsive m-t-40" style="margin-bottom: 15px;">
						<table cellspacing="0" class="display nowrap table table-hover table-striped table-bordered tableku" width="100%">
							<thead>
								<tr>
									<th>
										#
									</th>
									<th>
										Tanggal Keluar
									</th>
									<th>
										Kode Alat
									</th>
									<th>
										Nama Alat
									</th>
									<th>
										Stok Awal
									</th>
									<th>
										Keluar
									</th>
									<th>
										Sisa
									</th>
									<th>
										Satuan
									</th>
									<th>
										Status
									</th>
									<!-- <th class="text-center">
										Aksi
									</th> -->
								</tr>
							</thead>
							<tbody id="isi">
								<?php 
								$customer = mysqli_query($koneksi,"select barang.*,barang_keluar.jumlah,barang_keluar.tgl_keluar,barang_keluar.awal,barang_keluar.sisa from barang_keluar inner join barang on barang.id_barang = barang_keluar.id_barang order by id_keluar desc");
								$no = 0;
								while ($data = mysqli_fetch_array($customer)) {
									$no++;
									?>
									<tr>
										<td><?php echo $no ?></td>
										<td><?php echo $data['tgl_keluar'] ?></td>
										<td><?php echo $data['kd_barang'] ?></td>
										<td><?php echo $data['nm_barang'] ?></td>
										<td><?php echo $data['awal'] ?></td>
										<td><?php echo $data['jumlah'] ?></td>
										<td><?php echo $data['sisa'] ?></td>
										<td><?php echo $data['satuan'] ?></td>
										<td><?php echo $data['status'] ?></td>
										<!-- <td>
											<button class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#update<?php echo $data['id_masuk'] ?>"><i data-toggle="tooltip" title="Update siswa" class="fa fa-edit"></i></button>
											<a href="?p=dc&act=del&id=<?php echo $data['id_masuk'] ?>" onclick="return confirm('Hapus data siswa?')" class="btn btn-outline-danger btn-block" data-toggle="tooltip" title="Hapus siswa"><i class="fa fa-trash"></i></a>
										</td> -->
									</tr>
									<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade text-xs-left" id="tambah"  role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel1">Alat Keluar</h4>
			</div>
			<form method="post" onsubmit="return confirm('Apa anda yakin dengan data yang anda masukan?')">
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<label>Siswa</label>
								<select name="id_customer" class="form-control" required="" id="">
									<option value="">Pilih Siswa</option>
									<?php 
									$query = mysqli_query($koneksi,"select * from customer");
									while ($c = mysqli_fetch_array($query)) {
										?>
										<option value="<?php echo $c['id_customer'] ?>"><?php echo $c['nm_cutomer'] ?></option>
										<?php
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label>Alat</label>
								<select name="id_barang" class="form-control" required="" id="">
									<option value="">Pilih Alat</option>
									<?php 
									$query = mysqli_query($koneksi,"select * from barang");
									while ($produk = mysqli_fetch_array($query)) {
										?>
										<option value="<?php echo $produk['id_barang'] ?>"><?php echo $produk['nm_barang'] ?></option>
										<?php
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label>Jumlah Alat</label>
								<input type="number" class="form-control" autocomplete="off"  placeholder="Masukan Jumlah Alat" name="jumlah" min="1" required="">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
					<button name="tambah" id="btn" class="btn btn-outline-primary">Tambah </button>
				</div>
			</form>
		</div>
	</div>
</div>  

<?php 
if (isset($_POST['tambah'])) {
	$barang = mysqli_fetch_array(mysqli_query($koneksi,"select * from barang where id_barang = '$_POST[id_barang]'"));
	if ($barang['stok']<$_POST['jumlah']) {
		?>
		<script>alert('Alat keluar melebihi stok');</script>
		<?php
	}else{
		$awal = $barang['stok'];
		$total = $barang['stok'] - $_POST['jumlah'];
		mysqli_query($koneksi,"update barang set stok = '$total' where id_barang = '$_POST[id_barang]'");
		if (mysqli_query($koneksi,"insert into barang_keluar (id_barang,jumlah,tgl_keluar,awal,sisa,id_costumer) values('$_POST[id_barang]','$_POST[jumlah]','".date('Y-m-d')."','$awal','$total','$_POST[id_customer]')")) {
			?>
			<script>alert('Alat berhasil di keluarkan!'); window.location.href="admin.php?p=bk";</script>
			<?php
		}else{
			echo mysqli_error($koneksi);
		}
	}
}
?>