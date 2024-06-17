<?php
// Include your database connection
include 'koneksi.php';

if (isset($_POST['submit'])) {
    if (!empty($_POST['id_peserta'])) {
        // Loop through selected checkboxes
        foreach ($_POST['id_peserta'] as $id_peserta) {
            // SQL query to delete data from the database
            $query = "DELETE FROM peserta WHERE id_peserta = '".mysqli_real_escape_string($koneksi, $id_peserta)."'";
            mysqli_query($koneksi, $query);
        }
        echo "<script>alert('Data berhasil dihapus');</script>";
    } else {
        echo "<script>alert('Tidak ada data yang dipilih');</script>";
    }
}

// Close the database connection
mysqli_close($koneksi);

// Redirect back to the list page
header("Location: peserta.php");
exit();
?>
