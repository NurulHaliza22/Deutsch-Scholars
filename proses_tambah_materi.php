<?php
// Include your database connection file
include 'koneksi.php';

if (isset($_POST['submit'])) {
    // Retrieve form data
    $judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $link_youtube = mysqli_real_escape_string($koneksi, $_POST['link_youtube']);
    $penjelasan = mysqli_real_escape_string($koneksi, $_POST['penjelasan']);
    $upload = mysqli_real_escape_string($koneksi, $_POST['upload']);

    // SQL query to insert data into the database
    $query = "INSERT INTO materi ( judul, link_youtube, penjelasan, upload) VALUES ( '$judul', '$link_youtube', '$penjelasan', '$upload')";

    // Execute the query
    if (mysqli_query($koneksi, $query)) {
        // Redirect to a confirmation page or show a success message
        header('Location: materi_tutor.php'); // You can create a confirmation.php page for confirmation message
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    // Close the database connection
    mysqli_close($koneksi);
}
?>