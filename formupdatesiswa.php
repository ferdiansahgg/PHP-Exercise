<!DOCTYPE html>
<html>

<body>

	<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "datasiswa";

	//ambil data dari form
	$nis = $_GET["nis"];

	//konek ke database
	$conn = new mysqli($servername, $username, $password, $dbname);

	//cek koneksi( tanda "-" adalah tanda dari mysqli artinya seperti titik"." pada java script)
	if ($conn->connect_error) {
		echo ("koneksi gagal:" . $conn->connect_error);
	} else {
		//$sql = query yang akan dieksekusi
		$sql = " SELECT * FROM siswa WHERE NIS ='$nis';";

		//eksekusi query dalam $sql di DB yang akan dibuka oleh conn
		//hasilnya disimpan di $tblhasil
		$tblhasil = $conn->query($sql); //belum lengkap

		$row = $tblhasil->fetch_assoc();

		if ($row) {
			echo "<table>";
			echo "<form action='updatesiswa.php' method='get'>";

			echo "<tr> <td> Nama </td>";
			echo "<td> <input name='nama' value='" . $row["Nama"] . "'></td></tr>";
			echo "<tr> <td> NIS </td>";
			echo "<td> <input name='nis' value='" . $row["NIS"] . "'></td></tr>";
			echo "<tr> <td> Tanggal_lahir </td>";
			echo "<td> <input type='date' name='ttl' value='" . $row["Tanggal_lahir"] . "'></td></tr>";
			echo "<tr> <td> Tempat_lahir </td>";
			echo "<td> <input name='tempatlahir' value='" . $row["Tempat_lahir"] . "'></td></tr>";
			echo "<tr> <td> Alamat </td>";
			echo "<td> <input name='alamat' value='" . $row["Alamat"] . "'></td></tr>";
			echo "<tr> <td> Agama </td>";
			echo "<td> <input name='agama' value='" . $row["Agama"] . "'></td></tr>";
			echo "<tr> <td> No_HP </td>";
			echo "<td> <input name='nohp' value='" . $row["No_hp"] . "'></td></tr>";
			echo "<input type='submit' value='UPDATE' formtarget='_blank'>";
			echo "</form>";
			echo "</table>";
		} else {
			echo "Tidak ada siswa dengan NIS " . " " . $nis;
		}
	}

	?>
</body>

</html>