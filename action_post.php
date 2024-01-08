<?php

if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $jenis = $_POST['jenisKelamin'];
    $sosmed = $_POST['sosmed'];
    $pesan = $_POST['pesan'];
} else if(! isset($_POST['nama'])){
    return "buku-tamu.php";
}
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
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>

<body>



    <div class="about-container">
        <div class="about-wrapper">
            <!-- navigation bar -->
            <div class="sticky-top">
                <div class="bt-navbar">
                    <nav class="navbar navbar-dark navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid hstack gap-3">
                            <a class="navbar-brand p-2" href="indes.php">
                                <img src="img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                                boyshabit.</a>
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
                                            <a class="nav-link" href="about.php">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="buku-tamu.php">Buku Tamu</a>
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
                                    <a href="cart.php">
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
                        <h1>DATA DIRI</h1>
                    </div>
                    <div class="main-input">
                        <div class="input-card">
                            <div class="card" style="width: 45rem;">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><b>Data Diri Anda</b></h5>
                                    <hr>
                                    <div class="card-text">
                                        <form action="action_post.php" method="post">
                                            <div class="input-div">
                                                <table>
                                                    <tr>
                                                        <td><label for="nama"><b>Nama:</b></label></td>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo $nama ?><br><br></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="alamat"><b>Alamat Tinggal</b></label></td>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo $alamat ?><br><br></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="email"><b>Email</b></label></td>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo $email?><br><br></td>
                                                    </tr>
                                                </table>
                                                <div class="jenis-kelamin">
                                                    <label for=""><b>Jenis Kelamin</b></label><br>
                                                    <p><?php echo $jenis ?></p>
                                                </div>
                                                <label for=""><b>Sosial Media</b></label>
                                                <div class="sosmed-div">
                                                    <p><?php echo $sosmed ?></p>
                                                </div>
                                                <label for=""><b>Pesan</b></label>
                                                <div class="message-box" style="display: flex;flex-direction: column;justify-content: center;">
                                                    <p><?php echo $pesan ?></p>
                                                </div>
                                                <br>
                                                <a href="./" type="reset" value="Reset" id="reset" class="btn btn-dark" style="margin-bottom: 10px;">
                                                    Back
                                                </a>
                                            </div>
                                        </form>
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
                                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 mt-4">
                                            <!-- Content -->

                                            <div class="text-uppercase fw-bold" style="color: #f8f9fa;" id="footer-logo">
                                                <a href="index.php"> <img style="width: 60%;padding-bottom: 20px;" src="https://cdn.discordapp.com/attachments/843046027958288407/1193975078594019448/boyshabit-transparent-logo.png?ex=65aeaaf1&is=659c35f1&hm=cbfaf396f251180f4d6b9f4941ad4394aa1b8d869af7944f2d0041a0823b7997&" alt=""></a>
                                            </div>
                                            <p>
                                                Boyshabit adalah destinasi fashion anak muda dengan koleksi trendy dan nyaman. Kami fokus pada desain stylish dan kualitas terbaik untuk menemani kegiatan sehari-hari anda. Temukan pilihan pakaianmu di Boyshabit!
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
                                        <p><i class="fas fa-home mr-3"></i>Gajahmungkur, Semarang, Jawa Tengah, Indonesia</p>
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
                            <a class="text-white" href="https://www.instagram.com/oddybagusifn_">Made with Love ❤</a>
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

    <script src="main.js">

    </script>
</body>

</html>