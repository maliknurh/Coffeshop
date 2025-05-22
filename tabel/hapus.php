<?php

    include "koneksi.php";

    if(isset($_GET['id'])){
		$delete = mysqli_query($conn, "DELETE FROM pinjam WHERE id_pinjam = '".$_GET['id']."' ");
		echo '<script>window.location="tampil.php"</script>';
	}


?>