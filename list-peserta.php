<!DOCTYPE html>
<html>
<head>
	<title>Daftar Calon Peserta</title>
</head>
<body>
	<h1><img src="logo.png" align="middle" style="width:80px;height:80px"> DIGITAL TALENT</h1>
	<h2 style="font-family:verdana;">Pendaftar</h2>
	<table border="1" cellspacing="0" cellpadding="7" width="80%" style="font-family:times">
	<tr style="text-align:center; font-weight:bold; background-color:#2F4F4F; color:white">
			<th>NO.</th>
			<th>Nama Peserta</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Sekolah Asal</th>
			<th>Tindakan</th>
		</tr>
		<?php
		include 'koneksi.php';
		$no=1;
		$data = mysqli_query($db,"SELECT * FROM peserta");
		if(mysqli_num_rows($data) > 0){
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['jenisKelamin']; ?></td>
				<td><?php echo $d['agama']; ?></td>
				<td><?php echo $d['sekolah']; ?></td>
				<td>
					<a href="edit-peserta.php" style="border-radius: 10%; padding:0.8% 0.8%; background-color:#FFD700; color:black; text-decoration:none;">Edit</a>&ensp;
					<a href="delete-peserta.php" style="border-radius: 10%; padding:0.8% 0.8%; background-color:#CD5C5C; color:black; text-decoration:none;"> Hapus</a>
				</td>
			</tr>
		<?php }}else { ?>
			<tr>
				<td colspan="6" align="center";>Data Kosong</td>
			</tr>
		<?php } ?>
	</table>
	<p>Jumlah Peserta: <?php echo mysqli_num_rows($data) ?></p>
	<br><br>
	<a href="form-peserta.php" style="padding:0.4% 0.8%; background-color:#1E90FF; color:white; text-decoration:none;">Daftar</a>
	<a href="index.php" style="padding:0.4% 0.8%; background-color:#1E90FF; color:white; text-decoration:none;">Beranda</a>
</body>
</html>