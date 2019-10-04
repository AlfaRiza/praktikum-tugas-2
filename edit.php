<!DOCTYPE html>
<html>
<head>
	<title>Edit data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		
		<div class="row">
			
			<div class="col-md-6">
                <?php 
                
                include 'koneksi.php';
                $id = $_GET['id'];
                $query = mysqli_query($conn,"SELECT * FROM data_tamu WHERE id = '$id'");
                $data=mysqli_fetch_array($query);
                ?>
				<h1>Edit form</h1>
					<form action="update.php" method="post">
                        <div class="form-group">
							<label for="id" >Id</label>
							<input type="hidden" name="id" id="id" class="form-control" value="<?= $data['id'] ?>">
						</div>
						<div class="form-group">
							<label for="nama" >Nama</label>
							<input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama'] ?>">
						</div>
						<div class="form-group">
							<label for="alamat" >Alamat</label>
							<input type="text" name="alamat" id="alamat" class="form-control" value="<?= $data['alamat'] ?>">
						</div>
						<div class="form-group">
							<label for="no_telp">No Telpon</label>
							<input type="text" name="no_telp" id="no_telp" class="form-control" value="<?= $data['no_telp'] ?>">
						</div>

						<a href="tampil.php" class="btn btn-outline-primary float-left">Kembali</a>
						<button type="submit" value="submit" name="submit" class="btn btn-primary float-right">Edit</button>
					</form>
			</div>


		</div>


	</div>

	



</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>