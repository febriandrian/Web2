

<?php 
	$id_berita=$_GET['id'];
	$judul=$_POST['judul'];
	$isi=$_POST['isi'];
	$id_kategori=$_POST['kategori'];


//mengambil data konfigurasi


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
	$stmt = $db->prepare("UPDATE berita SET judul=:judul, isi=:isi, id_kategori=:kategori WHERE id_berita=:id");
	$stmt ->bindparam(":judul",$judul);
	$stmt ->bindparam(":isi",$isi);
	$stmt ->bindparam(":kategori",$id_kategori);
	$stmt ->bindparam(":id",$id_berita);
	$stmt ->execute();
	echo "Berhasil";
	
}
catch(PDOException $e) {
	echo $e->getMessage(); 
}
try {
	$stmt2 = $db->prepare("SELECT * FROM kategori");
	$stmt2->execute();
	$data2= $stmt2->fetchAll();
		
}
catch(PDOException $e) {
	echo $e->getMessage(); 
}


 ?>