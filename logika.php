<?php
	include 'config.php';

	function query($query) {
		global $conn;

		// ambil data dari tabel database
		$voting = mysqli_query($conn,$query);
		$rows = [];

		// keluarkan data
		while($row = mysqli_fetch_assoc($voting)) {
			$rows[] = $row;
		}
		return $rows;
	}

	function update() {
		global $conn;

		if(isset($_POST['submit'])) {
			$nama = $_POST['pilih'];
			$update = "UPDATE tb_selection SET minat = minat+1 WHERE warna = '$nama'";
			mysqli_query($conn,$update);
		}
	}
?>
