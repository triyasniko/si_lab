<?php 
include "../koneksi.php";
if(isset($_POST["simpan_pengajuan"])){
	$nama_bahan=$_POST['nama_bahan'];
	$jenis_bahan=$_POST['jenis_bahan'];
	$jumlah_bahan=$_POST['jumlah_bahan'];
	$lokasi_bahan=$_POST['lokasi_bahan'];

	$sql=$koneksi->query("INSERT INTO tbl_pengajuan (nama_bahan,jenis_bahan,jumlah_bahan,lokasi_bahan) 
						VALUES('$nama_bahan','$jenis_bahan','$jumlah_bahan','$lokasi_bahan') ");
	if ($sql) :
		?>
		<script type="text/javascript">
			alert("Data Berhasil ditambahkan!!");
			window.location.href="pengajuan_bahan.php";
		</script>
		<?php
	endif;
}
?>