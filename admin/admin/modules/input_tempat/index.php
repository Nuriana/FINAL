

<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<input type="text" name="judul" placeholder="judul" class="form-control">
	</div>
	<div class="form-group">
		<textarea type="text" name="deskripsi" placeholder="deskripsi" class="form-control"></textarea>
	</div>
	
		<div class="form-group">
	<label>Lokasi</label>
	<?php 
	$obj->kategori();
	?>
	
	</div>

	<div class="form-group">
		<input type="file" name="foto" placeholder="file" class="form-control">
	</div>
	<div class="form-group">
	<label>Lokasi</label>
	<?php 
	$obj->getCategory();
	?>
	
	</div>
	</div>
	
	<div class="form-group ">
	<a href=""></a>
		<button type="submit" name="simpan" class="btn btn-default add-to-cart">Simpan</button>
	</div>
</form>
<?php  
if (isset($_POST['simpan'])) {
	$judul = $_POST['judul'];
	$deskripsi = $_POST['deskripsi'];
	$kategori = $_POST['id_kategori'];
	$lokasi = $_POST['nama_lokasi'];
	$gambar = $_FILES['foto']['name'];
	$gambar_file = $_FILES['foto']['tmp_name'];
	{
		$obj->insertBarang($judul,$deskripsi,$kategori,$gambar,$gambar_file);
	}
}
?>
