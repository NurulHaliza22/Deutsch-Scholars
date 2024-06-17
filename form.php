<?php
// Include your database connection file
include 'koneksi.php';

if (isset($_POST['submit'])) {
    // Retrieve form data
    $nama_peserta = mysqli_real_escape_string($koneksi, $_POST['nama_peserta']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $no_telp = mysqli_real_escape_string($koneksi, $_POST['no_telp']);
    $paket = mysqli_real_escape_string($koneksi, $_POST['paket']);
    $pembayaran = mysqli_real_escape_string($koneksi, $_POST['pembayaran']);

    // SQL query to insert data into the database
    $query = "INSERT INTO peserta (nama_peserta, email, no_telp, paket, pembayaran) VALUES ('$nama_peserta', '$email', '$no_telp', '$paket', '$pembayaran')";

    // Execute the query
    if (mysqli_query($koneksi, $query)) {
        echo "";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    // Close the database connection
    mysqli_close($koneksi);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Courses - Deutsch Scholars</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Deutsch Scholars</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Form Berlangganan</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->



    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Send to Us</h6>
                <h1 class="mb-5">Isi Form Berlangganan</h1>
                <form method="POST" action="">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="nama_peserta" class="form-control" id="nama_peserta" placeholder="Your Name" required="required">
                                <label for="nama_peserta">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required="required">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="Nomor Telpon" required="required">
                                <label for="no_telp">No Telpon</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="">
                                <select class="form-select" name="paket" required="required" id="paket">
                                    <option selected>Pilih Paket</option>
                                    <option value="Paket Satu - menyediakan video dan 4 pertemuan online">Paket Satu - menyediakan video dan 4 pertemuan online</option>
                                    <option value="Paket Dua - menyediakan video dan 4 pertemuan offline">Paket Dua - menyediakan video dan 4 pertemuan offline</option>
                                    <option value="Paket Tiga - menyediakan video dan 6 pertemuan hybrid">Paket Tiga - menyediakan video dan 6 pertemuan hybrid</option>
                                </select>
                            </div>
                        </div>
                        <div>
                                <label>Pilih Metode Pembayaran</label>
                                <table border=0 cellpadding="10" required="required" id="pembayaran">
                                  <tr>
                                    <th><input type="radio" name="pembayaran" value="BNI" required="required">
                                    <img src="img/bni.png" width="60px" height="20px"></th>
                                    <th><input type="radio"  name="pembayaran" value="BCA" required="required">
                                    <img src="img/logo-bca.png" width="60px" height="20px"></th>
                                    <th><input type="radio"  name="pembayaran" value="BRI" required="required">
                                    <img src="img/bri.png" width="60px" height="25px"></th>
                                  </tr>
                                  <tr>
                                    <th><input type="radio"  name="pembayaran" value="ALFAMART" required="required">
                                    <img src="img/alfa.jpg" width="70px" height="50px"></th>
                                    <th><input type="radio"  name="pembayaran" value="INDOMARET" required="required">
                                    <img src="img/indomaret.png" width="60px" height="20px"></th>
                                    <th><input type="radio"  name="pembayaran" value="GOPAY" required="required">
                                    <img src="img/gopay.jpg" width="65px" height="40px"></th>
                                  </tr>
                                </table>
                              </div>
                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Payment</button>
                        </div>
                        </div>
                        <div class="col-12">
                            <a href="index.html" class="btn btn-primary w-100 py-3">Batal</a>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label>Sudah Berlangganan?</label><a href="login.php"> Klik disini</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
          <div class="modal-dialog modal-xl">
              <div class="modal-content">
                  
                  <div class="modal-body pb-5">
                      <div class="container">
                          <div class="row" style="display-flex">
                              <div class="col-lg-12">
                                  <!-- Portfolio Modal - Title-->
                                  <h2 class="portfolio-modal-title text-secondary text-center text-uppercase mb-0">Lakukan Pembayaran</h2>
                                  <!-- Icon Divider-->
                                  <div class="divider-custom">
                                      <div class="divider-custom-line"></div>
                                  </div> 
                                  <!-- Portfolio Modal - Text-->
                                  <div class="row gy-2 gx-4 mb-4">
                                  <div class="col-sm-6">
                                  <p class="text-center mb-0"><br><br><br>
                                  <i class="fa fa-file text-primary me-2"></i>Paket Satu  : Rp 200.000<br>
                                  <i class="fa fa-file text-primary me-2"></i>Paket Dua : Rp 300.000<br>
                                  <i class="fa fa-file text-primary me-2"></i>Paket Tiga  : Rp 400.000</p><br><br>
                                    </div>
                                    <div class="col-sm-6">
                                    <p class="mb-0"><br><br><br>
                                    <i class="fa fa-download text-primary me-2"></i>BNI   : 9802876253764 a/n Faishal Eka Herlianto<br>
                                    <i class="fa fa-download text-primary me-2"></i>BCA   : 6273839263    a/n Faishal Eka Herlianto<br>
                                    <i class="fa fa-download text-primary me-2"></i>BRI   : 87252739999  a/n Faishal Eka Herlianto<br>
                                    <i class="fa fa-download text-primary me-2"></i>Alfamart  : 082240657891   a/n Faishal Eka Herlianto<br>
                                    <i class="fa fa-download text-primary me-2"></i>Indomaret : 082240657891   a/n Faishal Eka Herlianto<br>
                                    <i class="fa fa-download text-primary me-2"></i>Go-pay  : 082240657891   a/n Faishal Eka Herlianto</p><br><br>
                                </div>
                                </div>
                                </div>
                                <div class="portfolio-item mx-auto text-center" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                                <a class="btn btn-outline-dark btn-lg" role="button">Konfirmasi Pembayaran</a><br><br>
                            </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>


      <!-- Portfolio Modal 2-->
      <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
          <div class="modal-dialog modal-xl">
              <div class="modal-content">
                  
              <div class="modal-body pb-5">
                      <div class="container">
                          <div class="row" style="display-flex">
                              <div class="col-lg-12">
                                  <!-- Portfolio Modal - Title-->
                                  <h2 class="portfolio-modal-title text-secondary text-center text-uppercase mb-0">Tunggu Konfirmasi Email</h2>
                                  <!-- Icon Divider-->
                                  <div class="divider-custom">
                                      <div class="divider-custom-line"></div>
                                  </div> 
                                  <!-- Portfolio Modal - Text-->
                                  <div class="row gy-2 gx-4 mb-4">
                                  <div class="col-sm-12">
                                  <p class="text-center mb-0"><br><br><br><br><br>
                                  Terima kasih telah berlangganan bersama Deutsch Scholars !<br>
                                  Transaksi sedang dalam proses, kami akan mengirimkan Username dan Password melalui email dalam minimal 3 hari ke depan
                                    </p><br><br><br><br>
                                    </div>
                                </div>
                                </div>
                                <div class="portfolio-item mx-auto text-center" data-bs-toggle="modal">
                                <a class="btn btn-outline-dark btn-lg" href="index.html" role="button">Selesai</a><br><br>
                            </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>