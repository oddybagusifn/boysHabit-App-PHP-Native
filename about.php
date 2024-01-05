<?php

include 'koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM product ORDER BY id ASC");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link style css -->
    <link rel="stylesheet" href="style.css">
    <!-- font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bt css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- ubuntu font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>BoysHabit</title>

</head>

<body>
    <div class="about-container">
        <div class="about-wrapper">
            <!-- navigation bar -->
            <div class="sticky-top">
                <div class="bt-navbar">
                    <nav class="navbar navbar-dark navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid hstack gap-3">
                            <a class="navbar-brand p-2" href="#">boyshabit.</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="bt-nav-item">
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="product.php">Products</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Buku Tamu</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bt-nav-item2">
                                <li>
                                    <a href="">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </li>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- navigation bar end -->


            <!-- content section -->

            <div class="main-about">
                <div class="about-content">
                    <div class="title-product">
                        <h1>ABOUT</h1>
                    </div>
                    <div class="about-card">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="<?php echo $data['image'] ?>" class="card-img-top" style="border-radius: 10px;" alt="...">
                                            <hr style="margin-top: 4px;">
                                            <h5 class="card-title">About the Products</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <hr>
                                            <a href="about_product.php" class="btn btn-dark">See More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="https://cdn.discordapp.com/attachments/843046027958288407/1192752812006842498/brand-img.png?ex=65aa389e&is=6597c39e&hm=96fd0b354beb16178ce1c08ac845510b21c218798207a72bdd35b47a73487e04&" class="card-img-top" style="border-radius: 10px;" alt="...">
                                            <hr style="margin-top: 4px;">
                                            <h5 class="card-title">About This Website</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <hr>
                                            <a href="#" class="btn btn-dark">See More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- content section end -->

            <!-- footer section -->

            <footer>
                <div class="footer">
                    <div class="footer-content">


                        <section class="">
                            <div class="container text-center text-md-start mt-5">
                                <!-- Grid row -->
                                <div class="row mt-3">
                                    <!-- Grid column -->
                                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                        <!-- Content -->
                                        <h6 class="text-uppercase fw-bold" id="footer-logo">BOYSHABIT.</h6>
                                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #f8f9fa; height: 2px" />
                                        <p>
                                            Here you can use rows and columns to organize your footer
                                            content. Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit.
                                        </p>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                        <!-- Links -->
                                        <h6 class="text-uppercase fw-bold">Quick Link</h6>
                                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #f8f9fa; height: 2px" />
                                        <p>
                                            <a href="#" style="color: grey">Home</a>
                                        </p>
                                        <p>
                                            <a href="product.php" style="color: grey">Product</a>
                                        </p>
                                        <p>
                                            <a href="about.php" style="color: grey">About</a>
                                        </p>
                                        <p>
                                            <a href="#" style="color: grey">Buku Tamu</a>
                                        </p>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                        <!-- Links -->
                                        <h6 class="text-uppercase fw-bold">Social Media</h6>
                                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #f8f9fa; height: 2px" />
                                        <p>
                                            <a href="https://www.instagram.com/oddybagusifn_" style="color: grey">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        </p>
                                        <p>
                                            <a href="#!" style="color: grey"><i class="fa-brands fa-facebook"></i></a>
                                        </p>
                                        <p>
                                            <a href="#!" style="color: grey"><i class="fa-brands fa-x"></i></a>
                                        </p>
                                        <p>
                                            <a href="#!" style="color: grey"><i class="fa-brands fa-youtube"></i></a>
                                        </p>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                        <!-- Links -->
                                        <h6 class="text-uppercase fw-bold">Contact</h6>
                                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #f8f9fa; height: 2px" />
                                        <p><i class="fas fa-home mr-3"></i>Gajahmungkur,Semarang, Jawa Tengah, Indonesia</p>
                                        <p><i class="fas fa-envelope mr-3"></i>touroroy26@gmail.com</p>
                                        <p><i class="fas fa-phone mr-3"></i>+62 81393149021</p>
                                    </div>
                                    <!-- Grid column -->
                                </div>
                                <!-- Grid row -->
                            </div>
                        </section>
                        <!-- Section: Links  -->

                        <!-- Copyright -->
                        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); color: #f8f9fa;">
                            Copyright © <script>
                                document.write(new Date().getUTCFullYear());
                            </script>
                            <a class="text-white" href="https://www.instagram.com/oddybagusifn_">💓Made with Love💓</a>
                        </div>
                    </div>
            </footer>

            <!-- footer Section End -->




        </div>
    </div>
    <!-- bootsrap js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>