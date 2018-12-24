<?php 

include 'conn.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>SPK Distro</title>
</head>
<body>

<center>
	
<h2>DATA ALTERNATIF</h2>

<table border="1" width="50%">
	<tr>
		<th>No</th>
		<th>Id Alternatif</th>
		<th>Nama Alternatif</th>
		<th>Keterangan</th>
		
	</tr>

	<?php 

	$query = mysqli_query($koneksi, "SELECT * FROM tabel_alternatif");
	$no = 0	;
	foreach ($query as $data) {
	

	$no++;

	 ?>
	 <tr>
	 	<th><?=$no?></th>
	 	<th><?=$data['id_alt']?></th>
	 	<th><?=$data['nama_alt']?></th>
	 	<th><?=$data['keterangan']?></th>
	 </tr>

	 <?php 

		}

	  ?>

</table>

<br><br>

<h3>==========================================================================</h3>

	<br><br>
<h2>DATA KRITERIA</h2>

<table border="1" width="50%">
	<tr>
		<th>No</th>
		<th>Id Kriteria</th>
		<th>Nama Kriteria</th>
		<th>Keterangan</th>
		
	</tr>

	<?php 

	$query = mysqli_query($koneksi, "SELECT * FROM tabel_kriteria");
	$no = 0	;
	foreach ($query as $data) {
	

	$no++;

	 ?>
	 <tr>
	 	<th><?=$no?></th>
	 	<th><?=$data['id_kriteria']?></th>
	 	<th><?=$data['nama_kriteria']?></th>
	 	<th><?=$data['keterangan']?></th>
	 </tr>

	 <?php 

		}

	  ?>

</table>

<br><br>

<h3>==========================================================================</h3>

<h2>BOBOT KRITERIA</h2>

<table border="1" width="50%">
	<tr>
		<th>No</th>
		<th>Id Bobot</th>
		<th>Nama Kriteria</th>
		<th>Nilai Bobot</th>
		
	</tr>

	<?php 

	$query = mysqli_query($koneksi, "SELECT id_bobot, nama_kriteria, bobot FROM bobot, tabel_kriteria WHERE tabel_kriteria.id_kriteria = bobot.id_kriteria");
	$no = 0	;
	foreach ($query as $data) {
	

	$no++;

	 ?>
	 <tr>
	 	<th><?=$no?></th>
	 	<th><?=$data['id_bobot']?></th>
	 	<th><?=$data['nama_kriteria']?></th>
	 	<th><?=$data['bobot']?></th>
	 </tr>

	 <?php 

		}

	  ?>

</table>

<br><br>

<h3>==========================================================================</h3>

<h2>TABEL PENILAIAN</h2>

<table border="1" width="50%">

		<tr>
		<th>No</th>
		<th>Id Nilai</th>
		<th>Alternatif</th>
		<th>Kriteria</th>
		<th>Nilai</th>
		
	</tr>

	<?php 

	$query = mysqli_query($koneksi, "SELECT id_nilai, nama_alt, nama_kriteria, nilai FROM nilai, tabel_alternatif, tabel_kriteria WHERE (tabel_alternatif.id_alt = nilai.id_alt AND tabel_kriteria.id_kriteria = nilai.id_kriteria)");
	$no = 0	;
	foreach ($query as $data) {
	

	$no++;

	 ?>
	 <tr>
	 	<th><?=$no?></th>
	 	<th><?=$data['id_nilai']?></th>
	 	<th><?=$data['nama_alt']?></th>
	 	<th><?=$data['nama_kriteria']?></th>
	 	<th><?=$data['nilai']?></th>
	 </tr>

	 <?php 

		}

	  ?>

</table>

<br><br>

<!--  -->

<br><br>

<h3>==========================================================================</h3>

<h2>TABEL PENILAIAN MATRIKS</h2>

<table border="1" width="50%">

		<tr>
		<th>No</th>
		<th>Id Nilai</th>
		<th>Alternatif</th>
		<th>Jumlah Konsumen</th>
		<th>Kualitas</th>
		<th>Material</th>
		<th>Desain</th>
		
	</tr>

	<?php 

	$query = mysqli_query($koneksi, "SELECT id_nm, nama_alt, K1, K2, K3, K4 FROM tabel_alternatif, tbl_nm WHERE (tabel_alternatif.id_alt = tbl_nm.id_alt)");
	$no = 0	;
	foreach ($query as $data) {
	

	$no++;

	 ?>
	 <tr>
	 	<th><?=$no?></th>
	 	<th><?=$data['id_nm']?></th>
	 	<th><?=$data['nama_alt']?></th>
	 	<th><?=$data['K1']?></th>
	 	<th><?=$data['K2']?></th>
	 	<th><?=$data['K3']?></th>
	 	<th><?=$data['K4']?></th>
	 </tr>

	 <?php 

		}

	  ?>

</table>

<br><br>



	<form method="POST">
		<input type="submit" name="back" value="Kembali"></input>
	</form>

</center>

</body>
</html>

<?php 

if (isset($_POST['back'])) {
	
	echo "<script>window.location.href='index.php'</script>";

}

 ?>