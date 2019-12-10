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
	$nama = $_GET["txtnama"];

	//konek ke database
	$conn = new mysqli($servername, $username, $password, $dbname);

	//cek koneksi( tanda "-" adalah tanda dari mysqli artinya seperti titik"." pada java script)
	if ($conn->connect_error) {
		echo ("koneksi gagal:" . $conn->connect_error);
	} else {
		//$sql = query yang akan dieksekusi
		$sql = " SELECT * FROM data_barang WHERE nama ='$nama';";

		//eksekusi query dalam $sql di DB yang akan dibuka oleh conn
		//hasilnya disimpan di $tblhasil
		$tblhasil = $conn->query($sql); //belum lengkap

		$row = $tblhasil->fetch_assoc();

		if ($row) {
			echo "<table>";
			echo "<form action='act_edit_barang.php' method='get'>";
            echo "<tr> <td>Nama </td>";
			echo "<td> <input name='txtnama' value='" . $row["nama"] . "'></td></tr>";
			echo "<tr> <td>Harga </td>";
			echo "<td> <input name='txtharga' value='" . $row["harga"] . "'></td></tr>";
			echo "<tr> <td>Stok </td>";
			echo "<td> <input name='txtstok' value='" . $row["stok"] . "'></td></tr>";
			echo "<input type='submit' value='UPDATE' formtarget='_blank'>";
			echo "</form>";
			echo "</table>";
		} else {
			echo "Tidak ada data barang dengan nama " . " " . $nama;
		}
	}

	?>
</body>

</html>
