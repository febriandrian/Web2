<?php 

$id_berita=$_GET['id'];

echo $id_berita;


$host = 'localhost';
$dbname = 'sisfonews';
$username = 'root';
$password = '';
$db = '';
try {
    $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception){
    die("Connection error: " . $exception->getMessage());
}
try {
	$stmt = $db->prepare("SELECT * FROM berita WHERE id_berita=:id");
	$stmt->bindparam(":id",$id_berita);
	$stmt->execute();
	$data = $stmt->fetch();		
}
catch(PDOException $e) {
	echo $e->getMessage(); 
}
try {
	$stmt2 = $db->prepare("SELECT * FROM kategori");
	$stmt2->execute();
	$data2 = $stmt2->fetchAll();		
}
catch(PDOException $e) {
	echo $e->getMessage(); 
}


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Formedit</title>
 </head>
 <body>
<div class="row">
	<h1>Menambahkan Berita</h1>
	<hr>
	<div class="col-md-6 col-sm-6">
		<form class="form-horizontal" action="aksi_ubah.php?id=<?php echo $data['id_berita']?>" method="POST">
		  <div class="form-group">
		    <label for="judul" class="col-sm-2 control-label">Judul</label>
		    <div class="col-sm-10">
		      <input type="judul" class="form-control" id="judul" value="<?php echo $data['judul'];?>" name="judul">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="isi" class="col-sm-2 control-label">Isi</label>
		    <div class="col-sm-10">
		    <textarea class="form-control" name="isi" id="isi" cols="30" rows="10"><?php echo $data['isi'];?></textarea>
		    </div>
		  </div>
		  <div class="form-group">
		  	<label for="kategori" class="col-sm-2 control-label">Kategori</label>
		  	<div class="col-sm-10">
			  	<select name="kategori" id="kategori" class="form-control">
			  		<?php foreach ($data2 as $dk): ?>
			  		<option value="<?php echo $dk['id_kategori'] ?>"
			  		
			  		<?php 
			  		if($dk['id_kategori']==$data['id_kategori']){
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
	</div>
</div>
 </body>
 </html>