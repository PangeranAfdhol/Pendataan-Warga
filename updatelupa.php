
<?php
require_once 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST['username'];
	// $pass = sha1($password);
	$password = $_POST['password'];
	$query = mysqli_query($db, "UPDATE account SET password='" . $password . "' WHERE username='" . $username . "'");
	if ($query) {

		header("location:login.php?pesan=berhasil");
	} else {
		echo "string";
		$_SESSION['error'] = 'Data Gagal Disimpan!';
		header("location:lupa.php?pesan=Gagal");
	}
}

?>