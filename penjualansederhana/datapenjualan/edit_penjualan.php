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
	$nomer = $_GET["txtnomer"];

	//konek ke database
	$conn = new mysqli($servername, $username, $password, $dbname);

	//cek koneksi( tanda "-" adalah tanda dari mysqli artinya seperti titik"." pada java script)
	if ($conn->connect_error) {
		echo ("koneksi gagal:" . $conn->connect_error);
	} else {
		//$sql = query yang akan dieksekusi
		$sql = " SELECT * FROM data_penjualan WHERE nomer_penjualan ='$nomer';";

		//eksekusi query dalam $sql di DB yang akan dibuka oleh conn
		//hasilnya disimpan di $tblhasil
		$tblhasil = $conn->query($sql); //belum lengkap

		$row = $tblhasil->fetch_assoc();

		if ($row) {
			echo "<table>";
			echo "<form action='act_edit_penjualan.php' method='get'>";
            echo "<tr> <td>Nomer Struk </td>";
			echo "<td> <input name='txtnomer' value='" . $row["nomer_struk"] . "'></td></tr>";
			echo "<tr> <td>Tanggal </td>";
			echo "<td> <input name='txttanggal' value='" . $row["tanggal"] . "'></td></tr>";
			echo "<tr> <td>Nama Pelanggan </td>";
			echo "<td> <input name='txtnp' value='" . $row["nama_pelanggan"] . "'></td></tr>";
			echo "<tr> <td>Total Transaksi </td>";
			echo "<td> <input name='txttt' value='" . $row["total_transaksi"] . "'></td></tr>";
			echo "<tr> <td>Nama Barang </td>";
			echo "<td> <input name='txtnb' value='" . $row["nama_barang"] . "'></td></tr>";
			echo "<tr> <td>Jumlah </td>";
			echo "<td> <input name='txtjml' value='" . $row["jumlah"] . "'></td></tr>";
			echo "<tr> <td>Harga </td>";
			echo "<td> <input name='txtharga' value='" . $row["harga"] . "'></td></tr>";
			echo "<tr> <td>Total Barang </td>";
			echo "<td> <input name='txttb' value='" . $row["total_barang"] . "'></td></tr>";
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
