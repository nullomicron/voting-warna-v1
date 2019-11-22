<?php
	session_start();
	if ($_SESSION['status'] != "login") {
		header("location:index.php?pesan=belum_login");
	}
include 'logika.php';
$pilihan = query("SELECT * FROM tb_selection");
update();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Voting Warna Baju</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<div class="container">
		<h2 style="text-align: center;color:red;">Selamat Datang <?php echo $_SESSION['username']; ?></h2>
		<form action="" method="post">
			<table>
				<tr>
					<th colspan="4">PILIH WARNA BAJU</th>
				</tr>
				<?php foreach ($pilihan as $row) : ?>
					<tr>
						<td><?= $row['id']; ?></td>
						<td><div id="<?= $row['color']; ?>"></div></td>
						<td><?= $row['warna']; ?></td>
						<td>
							<label class="ceklis">
								<input type="radio" name="pilih" value="<?= $row['warna']; ?>">
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
				<?php endforeach; ?>
				<tr>
					<td colspan="4"><button type="submit" name="submit">VOTING</button></td>

					<?php if (isset($_POST['submit'])) : ?>
						<div style="position: absolute;left: 0;right: 0;top: 0;bottom: 0;background-color: black;opacity: 0.5;z-index: 1000"></div>
						<?php
							$user = $_SESSION['username'];
							mysqli_query($conn,"DELETE FROM tb_login WHERE username = '$user'");
							header("location:index.php");
						?>
					<?php endif; ?>
				</tr>
			</table>
			
		</form>
	</div>
</body>
</html>
