<?php
include "koneksi.php";

$id_peserta = $_POST['id_peserta'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$jenis = "user"; 

$query = "INSERT INTO login (nama, email, username, password, jenis) VALUES ('$nama', '$email', '$username', '$password', '$jenis')";
$result = mysqli_query($konek, $query);

if (!$result) {
    die("Query Error : " . mysqli_errno($konek) . " - " . mysqli_error($konek));
} else {
    echo "<script>alert('Registrasi berhasil!');window.location='login.php';</script>";
}
?>
