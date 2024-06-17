<?php
// Include your database connection
include 'koneksi.php';

if (isset($_POST['submit'])) {
    if (!empty($_POST['id_materi'])) {
        $id_materi = mysqli_real_escape_string($koneksi, $_POST['id_materi']);
        // SQL query to delete data from the database
        $query = "DELETE FROM materi WHERE id_materi = '$id_materi'";
        if (mysqli_query($koneksi, $query)) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        } else {
            echo "<script>alert('Gagal menghapus data');</script>";
        }
    } else {
        echo "<script>alert('ID Materi tidak ditemukan');</script>";
    }

    // Redirect back to the list page
    header("Location: materi_tutor.php");
    exit();
}

// Close the database connection
mysqli_close($koneksi);
?>
