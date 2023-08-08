<?php 
include "config/koneksi.php";
$cari = mysqli_fetch_array(mysqli_query($koneksi,"select * from login where id = '$_GET[id]'"));
if ($_POST['username']==$cari['username']) {
	$cek = mysqli_query($koneksi,"update login set username='$_POST[username]',password = '$_POST[password]',fullname = '$_POST[fullname]' where id = '$_GET[id]'");
	?>
	<script>
		alert('Data user telah di rubah!');
		window.location.href="admin.php?p=u";
	</script>
	<?php
}else{
	$cari2 = mysqli_num_rows(mysqli_query($koneksi,"select * from login where username = '$_POST[username]'"));
	if ($cari2 > 0) {
		?>
		<script>alert('Username telah terdaftar sebelumnya');window.location.href="admin.php?p=u"</script>
		<?php
	}else{
		$cek = mysqli_query($koneksi,"update login set username='$_POST[username]',password = '$_POST[password]',fullname = '$_POST[fullname]' where id = '$_GET[id]'");
		?>
		<script>
			alert('Data user telah di rubah!');
			window.location.href="admin.php?p=u";
		</script>

		<?php
	}
}
?>