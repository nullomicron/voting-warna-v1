
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOGIN</title>
	<style>
		* {
			font-family: arial,sans-serif;
		}
		table {
			margin: 0 auto;
		}
		table,th,td {
			border: 1px solid black;
			border-spacing: 0;
			border-collapse: collapse;
		}
		td {
			padding: 5px 10px;
		}
		tr:last-of-type td {
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
		if (isset($_GET['pesan'])) {
			if ($_GET['pesan'] == "gagal") {
				echo "Login gagal! username dan password salah!";
			}
			else if ($_GET['pesan'] == "logout") {
				echo "Anda berhasil logout";
			}
			else if ($_GET['pesan'] == "belum_login") {
				echo "Anda harus login";
			}
		}
	?>
	<form action="login.php" method="post">
		<table>
			<tr>
				<th colspan="3">LOGIN</th>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan="3"><button type="submit" name="submit">Login</button></td>
			</tr>
		</table>
	</form>
</body>
</html>
