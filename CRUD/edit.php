<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Mahasiswa</title>
	<!-- Add bootstrap stylesheet -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container my-4">
		<h2 class="text-center mb-4">EDIT DATA MAHASISWA</h2>
		<a href="index.php" class="btn btn-primary mb-4">KEMBALI</a>
		<?php
		include 'koneksi.php';
		$id = $_GET['id'];
		$data = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE id='$id'");
		while($d = mysqli_fetch_array($data)){
			?>
			<form method="post" action="update.php">
				<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
				<div class="row mb-3">
					<label for="nrp" class="col-sm-2 col-form-label fw-bold">NRP</label>
					<div class="col-sm-10">
						<input type="number" name="NRP" class="form-control border-dark" id="nrp" value="<?php echo $d['NRP']; ?>">
					</div>
				</div>
				<div class="row mb-3">
					<label for="nama" class="col-sm-2 col-form-label fw-bold">Nama</label>
					<div class="col-sm-10">
						<input type="text" name="Nama" class="form-control border-dark" id="nama" value="<?php echo $d['Nama']; ?>">
					</div>
				</div>
				<div class="row mb-3">
					<label for="jenis_kelamin" class="col-sm-2 col-form-label fw-bold">Jenis Kelamin</label>
					<div class="col-sm-10">
						<div class="form-check form-check-inline">
							<input class="form-check-input border-dark" type="radio" name="Jenis_Kelamin" id="laki_laki" value="Laki-laki" <?php if($d['Jenis_Kelamin']=='Laki-laki') echo 'checked'; ?>>
							<label class="form-check-label" for="laki_laki">Laki-laki</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input border-dark" type="radio" name="Jenis_Kelamin" id="perempuan" value="Perempuan" <?php if($d['Jenis_Kelamin']=='Perempuan') echo 'checked'; ?>>
							<label class="form-check-label" for="perempuan">Perempuan</label>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<label for="Jurusan" class="col-sm-2 col-form-label fw-bold">Jurusan</label>
					<div class="col-sm-10">
						<input type="text" name="Jurusan" class="form-control border-dark" id="Jurusan" value="<?php echo $d['Jurusan']; ?>">
					</div>
				</div>
				<div class="row mb-3">
					<label for="Email_Student" class="col-sm-2 col-form-label fw-bold">Email Student</label>
					<div class="col-sm-10">
						<input type="text" name="Email_Student" class="form-control border-dark" id="Email_Student" value="<?php echo $d['Email_Student']; ?>">
					</div>
				</div>
				<div class="row mb-3">
					<label for="Alamat" class="col-sm-2 col-form-label fw-bold">Alamat</label>
					<div class="col-sm-10">
						<input type="text" name="Alamat" class="form-control border-dark" id="Alamat" value="<?php echo $d['Alamat']; ?>">
					</div>
				</div>
				<div class="row mb-3">
					<label for="No_HP" class="col-sm-2 col-form-label fw-bold">No HP</label>
					<div class="col-sm-10">
						<input type="number" name="No_HP" class="form-control border-dark" id="No_HP" value="<?php echo $d['No_HP']; ?>">
					</div>
				</div>
				<div class="row mb-3">
					<label for="Asal_SMA" class="col-sm-2 col-form-label fw-bold">Asal SMA</label>
					<div class="col-sm-10">
						<input type="text" name="Asal_SMA" class="form-control border-dark" id="Asal_SMA" value="<?php echo $d['Asal_SMA']; ?>">
					</div>
				</div>
				<div class="row mb-3">
					<label for="Matakuliahfav" class="col-sm-2 col-form-label fw-bold">Matakuliah Fav</label>
					<div class="col-sm-10">
						<input type="text" name="Matakuliahfav" class="form-control border-dark" id="Matakuliahfav" value="<?php echo $d['Matakuliahfav']; ?>">
					</div>
				</div>
				<input type="submit" class=" btn btn-primary"  style="margin-left: 220px;" value="SIMPAN">
				</form>
		<?php 
	}
	?>
</body>
</html>
