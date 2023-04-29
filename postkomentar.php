<?php 
    include 'connector.php';

    if(isset($_POST['isi'])) {
        $nama = strip_tags($_POST['nama']);
        $isi = strip_tags($_POST['isi']);
	$ke = $_GET['ke'] ?? "";

        $simpan = mysqli_query($con, "INSERT INTO tbl_komentar(nama, isi) VALUES('$nama', '$isi')");

        if($simpan) {
            header("location: index.php?ke=$ke&status=sukses");
        } else {
            echo "Tidak dapat mengirimkan ucapan, terjadi masalah pada server";
        }
    }
?>