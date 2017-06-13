<div class="row">
	<h1>Edit Berita</h1>
	<hr>
	<div class="col-md-6 col-sm-6">
		<form class="form-horizontal" action="aksi_ubah.php?id=<?php echo $data_berita['id_berita']?>" method="POST">
		  <div class="form-group">
		    <label for="judul" class="col-sm-2 control-label">Judul</label>
		    <div class="col-sm-10">
		      <input type="judul" class="form-control" id="judul" value="<?php echo $data_berita['judul'];?>" name="judul">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="isi" class="col-sm-2 control-label">Isi</label>
		    <div class="col-sm-10">
		    <textarea class="form-control" name="isi" id="isi" cols="30" rows="10"><?php echo $data_berita['isi'];?></textarea>
		    </div>
		  </div>
		  <div class="form-group">
		  	<label for="kategori" class="col-sm-2 control-label">Kategori</label>
		  	<div class="col-sm-10">
			  	<select name="kategori" id="kategori" class="form-control">
			  		<?php foreach ($data_kategori as $dk): ?>
			  		<option value="<?php echo $dk['id_kategori'] ?>"
			  		
			  		<?php 
			  		if($dk['id_kategori']==$data_berita['id_kategori']){
			  		echo "selected"; 
			  			}
			  		?>

			  		><?php echo $dk['nama_kategori'] ?></option>
			  	<?php endforeach ?>
			  	</select>
		  	</div>
		  </div>
		  <br>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">Edit Berita</button>
		    </div>
		  </div>
		  
		</form>
