<?php
$host = "localhost"; //host server
$user = "root"; //user login phpmyadmin 
$inpt = ""; //user login phpmyadmin
$db = "jurnal"; //nama database

if (isset($_POST['submit'])) {
			$nim = $_REQUEST['nim'];
			$nama = $_REQUEST['nama'];
			$email = $_REQUEST['email'];


			$conn = mysqli_connect($host, $user, $inpt,$db);
			if ($conn==false) {
			die("Error BRAYY");				
			}
		}

			if($_POST['submit']){

			$nim = $_REQUEST['nim'];
			$nama = $_REQUEST['nama'];
			$email = $_REQUEST['email'];

			if(empty($nim) || empty($nama) || empty($email)){
				echo "Harus Terisi Agar Lanjut";

			}

			else{
			
			$mysqli = "INSERT INTO modul5 (nim, nama, email) 
					  VALUES ('$nim', '$nama', '$email')";
			$result = mysqli_query($conn, $mysqli);
			
			echo "Registrasi Berhasil";  			

		}
}
}



 ?>
