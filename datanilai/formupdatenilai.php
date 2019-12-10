<!DOCTYPE html>
<html>

<body>

	<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "datasiswa";

	//ambil data dari form
	$snis = $_GET["txtnis"];

	//konek ke database
	$conn = new mysqli($servername, $username, $password, $dbname);

	//cek koneksi( tanda "-" adalah tanda dari mysqli artinya seperti titik"." pada java script)
	if ($conn->connect_error) {
		echo ("koneksi gagal:" . $conn->connect_error);
	} else {
		//$sql = query yang akan dieksekusi
		$sql = " SELECT * FROM Nilai WHERE NIS ='$snis';";

		//eksekusi query dalam $sql di DB yang akan dibuka oleh conn
		//hasilnya disimpan di $tblhasil
		$tblhasil = $conn->query($sql); //belum lengkap

		$row = $tblhasil->fetch_assoc();

		if ($row) {
			echo "<table>";
			echo "<form action='updatenilai.php' method='get'>";

			echo "<tr> <td> NIS </td>";
			echo "<td> <input name='nis' value='" . $row["NIS"] . "'></td></tr>";
			echo "<tr> <td> kode </td>";
			echo "<td> <input name='txtkode' value='" . $row["kode"] . "'></td></tr>";
			echo "<tr> <td> Nilai </td>";
			echo "<td> <input name='txtnilai' value='" . $row["nilai"] . "'></td></tr>";
			echo "<input type='submit' value='UPDATE' formtarget='_blank'>";
			echo "</form>";
			echo "</table>";
		} else {
			echo "Tidak ada siswa dengan NIS " . " " . $snis;
		}
	}

	?>
</body>

</html>