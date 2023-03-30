<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <title>CRUD PHP</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
        <div class="container-fluid p">
            <a class="navbar-brand" href="index.php">Data 1 D3 IT A</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- Close Navbar -->

    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="text-center fw-bold text-uppercase">Data Mahasiswa PENS</h3>
                <hr>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <a href="tambah.php" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Data</a>
            </div>
        </div>
		<div class="table-responsive">
        <div class="row my-3">
            <div class="col-md">
                <table id="data" class="table table-striped table-hover text-center" style="width:100%">
                    <thead class="table-dark">
					<tr>
						<th>No</th>
						<th>NRP</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Jurusan</th>
						<th>Email</th>
						<th>Alamat</th>
						<th>No HP</th>
						<th>Asal SMA</th>
						<th>Mata Kuliah Fav</th>
						<th>Opsi</th>
					</tr>
                    </thead>
                    <tbody>
					<?php 
						include 'koneksi.php';
						$no = 1;
						$data = mysqli_query($koneksi,"SELECT * FROM `mahasiswa` WHERE 1");
						while($row = mysqli_fetch_array($data)) {
					?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['NRP']; ?></td>
							<td><?php echo $row['Nama']; ?></td>
							<td><?php echo $row['Jenis_Kelamin']; ?></td>
							<td><?php echo $row['Jurusan']; ?></td>
							<td><?php echo $row['Email_Student']; ?></td>
							<td><?php echo $row['Alamat']; ?></td>
							<td><?php echo $row['No_HP']; ?></td>
							<td><?php echo $row['Asal_SMA']; ?></td>
							<td><?php echo $row['Matakuliahfav']; ?></td>
							<td>
							<a href="edit.php? id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm" style="font-weight: 400;"><i class="bi bi-pencil-square"></i></a>
							<a href="hapus.php? id=<?php echo $row['id'];  ?>" class="btn btn-danger btn-sm" style="font-weight: 400;" onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $row['Nama']; ?> ?');"><i class="bi bi-trash-fill"></i>&nbsp;</a>
							</td>
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
    <!-- Close Container -->

    <!-- Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.table').DataTable();
        })
    </script>
</body>
</html>