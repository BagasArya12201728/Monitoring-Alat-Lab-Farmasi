<?php 
include "config/koneksi.php";
$cari = mysqli_fetch_array(mysqli_query($koneksi,"select * from customer where id_customer = '$_GET[id]'"));
if ($_POST['nm_cutomer']==$cari['nm_cutomer']) {
	$cek = mysqli_query($koneksi,"update customer set nm_cutomer='$_POST[nm_cutomer]',png_jawab = '$_POST[png_jawab]',alamat = '$_POST[alamat]',no_telp = '$_POST[no_telp]',jenis = '$_POST[jenis]' where id_customer = '$_GET[id]'");
	?>
	<script>
		alert('Data Siswa telah di rubah!');
		window.location.href="admin.php?p=dc";
	</script>
	<?php
}else{
	$cari2 = mysqli_num_rows(mysqli_query($koneksi,"select * from customer where nm_cutomer = '$_POST[nm_cutomer]'"));
	if ($cari2 > 0) {
		?>
		<script>alert('Siswa telah terdaftar sebelumnya');window.location.href="admin.php?p=dc";</script>
		<?php
	}else{
		$cek2 = mysqli_query($koneksi,"update customer set nm_cutomer='$_POST[nm_cutomer]',png_jawab = '$_POST[png_jawab]',alamat = '$_POST[alamat]',no_telp = '$_POST[no_telp]',jenis = '$_POST[jenis]' where id_customer = '$_GET[id]'");
		?>
		<script>
			alert('Data siswa telah di rubah!');
			window.location.href="admin.php?p=dc";
		</script>

		<?php
	}
}
?>