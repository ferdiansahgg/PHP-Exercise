<!DOCTYPE html>
<html>

<body>

	<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "datasiswa";

	//ambil data dari form
	$skode = $_GET["txtkode"];

	//konek ke database
	$conn = new mysqli($servername, $username, $password, $dbname);

	//cek koneksi( tanda "-" adalah tanda dari mysqli artinya seperti titik"." pada java script)
	if ($conn->connect_error) {
		echo ("koneksi gagal:" . $conn->connect_error);
	} else {
		//$sql = query yang akan dieksekusi
		$sql = " SELECT * FROM pelajaran WHERE kode ='$skode';";

		//eksekusi query dalam $sql di DB yang akan dibuka oleh conn
		//hasilnya disimpan di $tblhasil
		$tblhasil = $conn->query($sql); //belum lengkap

		$row = $tblhasil->fetch_assoc();

		if ($row) {
			echo "<table>";
			echo "<form action='updatepelajaran.php' method='get'>";

			echo "<tr> <td> Kode  </td>";
			echo "<td> <input name='txtkode' value='" . $row["kode"] . "'></td></tr>";
			echo "<tr> <td> Nama Pelajaran </td>";
			echo "<td> <input name='txtnp' value='" . $row["nama_pelajaran"] . "'></td></tr>";
			echo "<tr> <td> Semester </td>";
			echo "<td> <input name='txtsms' value='" . $row["semester"] . "'></td></tr>";
			echo "<tr> <td> Jumlah Pelajaran </td>";
			echo "<td> <input name='txtjp' value='" . $row["jp"] . "'></td></tr>";
			echo "<input type='submit' value='UPDATE' formtarget='_blank'>";
			echo "</form>";
			echo "</table>";
		} else {
			echo "Tidak ada pelajaran dengan kode " . " " . $skode;
		}
	}

	?>
</body>

</html>