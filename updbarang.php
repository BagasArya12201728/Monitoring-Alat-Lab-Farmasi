<?php 
include "config/koneksi.php";
$cari = mysqli_fetch_array(mysqli_query($koneksi,"select * from barang where id_barang = '$_GET[id]'"));
if ($_POST['kd_barang']==$cari['kd_barang']) {
	$cek = mysqli_query($koneksi,"update barang set kd_barang='$_POST[kd_barang]',nm_barang = '$_POST[nm_barang]',status = '$_POST[status]',satuan = '$_POST[satuan]' where id_barang = '$_GET[id]'");
	?>
	<script>
		alert('Data barang telah di rubah!');
		window.location.href="admin.php?p=db";
	</script>
	<?php
}else{
	$cari2 = mysqli_num_rows(mysqli_query($koneksi,"select * from barang where kd_barang = '$_POST[kd_barang]'"));
	if ($cari2 > 0) {
		?>
		<script>alert('Kode barang telah terdaftar sebelumnya');window.location.href="admin.php?p=db";</script>
		<?php
	}else{
		$cek = mysqli_query($koneksi,"update barang set kd_barang='$_POST[kd_barang]',nm_barang = '$_POST[nm_barang]',status = '$_POST[status]',satuan = '$_POST[satuan]' where id_barang = '$_GET[id]'");
		?>
		<script>
			alert('Data barang telah di rubah!');
			window.location.href="admin.php?p=db";
		</script>

		<?php
	}
}
?>