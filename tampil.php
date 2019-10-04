<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="my-3" >Tampil Data Mahasiswa</h1>
			</div>
			<div class="col-md">
				<a href="form.php" class="my-3 btn btn-primary" >Tambah Data</a>
			</div>
		</div>
		
		<div class="row">
			
			<div class="col-md-12">
				
				<table class="table table-striped">
					<thead>
						<tr>
						<th scope="col">#</th>
						<th scope="col">Nama</th>
						<th scope="col">Alamat</th>
						<th scope="col">No telpon</th>
						<th scope="col">Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include "koneksi.php";
							$no = 1;
							$query = mysqli_query($conn, "select * from data_tamu");
							while($data = mysqli_fetch_array($query)){
							?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $data['nama'] ?></td>
								<td><?= $data['alamat'] ?></td>
								<td><?= $data['no_telp'] ?></td>
								<td>
									<a href="edit.php?id=<?=$data['id']; ?>" class="btn btn-sm btn-success">Edit</a>
									<a href="hapus.php?id=<?=$data['id']; ?>" class="btn btn-sm btn-danger" onclick="javascript:return confirm('Anda Yakin? hapus <?= $data['nama']; ?>')">Hapus</a>
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



</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>