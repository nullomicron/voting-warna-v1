<?php
session_start();
	if ($_SESSION['username'] != "nullomicron") {
		header("location:index.php?pesan=belum_login");
	}
include 'logika.php';
$pilihan = query("SELECT * FROM tb_selection");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hasil Voting</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<table>
		<tr>
			<th colspan="4">HASIL VOTING</th>
		</tr>
		<tr>
			<th>No</th>
			<th>Sample</th>
			<th>Warna</th>
			<th>Peminat</th>
		</tr>
		<?php foreach($pilihan as $row) : ?>
			<tr>
				<td><?= $row['id']; ?></td>
				<td><div id="<?= $row['color']; ?>"></div></td>
				<td><?= $row['warna']; ?></td>
				<td><?= $row['minat']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>
