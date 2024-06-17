<?php
// Include your database connection file
include 'koneksi.php';

if (isset($_POST['submit'])) {
    // Retrieve form data
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
    $keterangan = mysqli_real_escape_string($koneksi, $_POST['keterangan']);
    $materi = mysqli_real_escape_string($koneksi, $_POST['materi']);

    // SQL query to insert data into the database
    $query = "INSERT INTO jadwal ( nama, tanggal, keterangan, materi) VALUES ( '$nama', '$tanggal', '$keterangan', '$materi')";

    // Execute the query
    if (mysqli_query($koneksi, $query)) {
        // Redirect to a confirmation page or show a success message
        header('Location: jadwal_tutor.php'); // You can create a confirmation.php page for confirmation message
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    // Close the database connection
    mysqli_close($koneksi);
}
?>