<?php
	$conn = mysqli_connect("localhost","id10796414_mamangeri","h4cking","id10796414_db_voting");

	if(mysqli_connect_errno()) {
		echo "Koneksi database gagal : ".mysqli_connect_errno();
	}
