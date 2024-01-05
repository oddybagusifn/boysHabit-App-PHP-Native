<?php

include 'koneksi.php';

$id_product = (int)$_GET['id'];

$detail_query = mysqli_query($conn, "SELECT * FROM product WHERE id = $id_product");
$data = mysqli_fetch_assoc($detail_query);
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

            <div class="main-product-detail">
                <div class="about-product-content">
                    <div class="title-product">
                        <h1>ABOUT PRODUCTS</h1>
                    </div>
                    <div class="list-about">
                        <div class="card mb-3" style="width: 700px;">
                            <center>
                                <img src="<?php echo $data['image'] ?>" style="width: 700px;" class="card-img-top" alt="...">
                            </center>
                            <hr style="margin-top: 4px;">
                            <div class="card-body">
                                <div class="rating text-center">
                                    <?php
                                    $i = 0;
                                    while ($i < $data['rating']) {
                                    ?>
                                        <i class="fa-solid fa-star"></i>
                                    <?php
                                        $i++;
                                    }
                                    ?>
                                    <p><?php echo $data['rating'] ?> / 5 </p>
                                </div>
                                <h5 class="card-title text-center"><?php echo $data['nama'] ?></h5>
                                <p class="card-text text-center"><b><?php echo $data['harga'] ?> IDR</b></p>
                                <p class="card-text">Product Stock: <?php echo $data['stok'] ?></p>
                                <p class="card-text"><b>Description:</b></p>
                                <p class="card-text">Size: <?php echo $data['ukuran'] ?></p>
                                <p class="card-text">Gender: <?php echo $data['gender'] ?></p>
                                <p class="card-text"><?php echo $data['deskripsi'] ?></p>
                                <hr>
                                <div class="detail-button" style="display: flex; justify-content: space-between; align-items: center;">
                                    <a href="./" style="text-decoration: none;">
                                        <p class="card-text" style="color: grey;">
                                            < back</p>
                                    </a>
                                    <a href="#" class="btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- content section end -->

            <!-- footer section -->

            <div class="footer">

            </div>

            <!-- footer Section End -->




        </div>
    </div>
    <!-- bootsrap js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>