<?php
session_start();
?>


<!DOCTYPE html>
<html>

<body>

	<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_fa";

	//ambil data dari form
	$user = $_GET["txtuser"];

	//konek ke database
	$conn = new mysqli($servername, $username, $password, $dbname);

	//cek koneksi( tanda "-" adalah tanda dari mysqli artinya seperti titik"." pada java script)
	if ($conn->connect_error) {
		echo ("koneksi gagal:" . $conn->connect_error);
	} else {
		//$sql = query yang akan dieksekusi
		$sql = " SELECT * FROM data_pelanggan WHERE username ='$user';";

		//eksekusi query dalam $sql di DB yang akan dibuka oleh conn
		//hasilnya disimpan di $tblhasil
		$tblhasil = $conn->query($sql); //belum lengkap

		$row = $tblhasil->fetch_assoc();

		if ($row) {
			echo "<table>";
			echo "<form action='act_edit_pelanggan.php' method='get'>";
            echo "<tr> <td>Username </td>";
			echo "<td> <input name='txtuser' value='" . $row["username"] . "'></td></tr>";
			echo "<tr> <td>Nama </td>";
			echo "<td> <input name='txtnama' value='" . $row["nama"] . "'></td></tr>";
			echo "<tr> <td>Alamat </td>";
			echo "<td> <input name='txtalamat' value='" . $row["alamat"] . "'></td></tr>";
			echo "<input type='submit' value='UPDATE' formtarget='_blank'>";
			echo "</form>";
			echo "</table>";
		} else {
			echo "Tidak ada data pelanggan dengan username " . " " . $user;
		}
	}

	?>
</body>

</html>
