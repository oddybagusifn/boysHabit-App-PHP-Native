<?php

include 'koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM product ORDER BY id ASC");

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
    <div class="main">
        <div class="product-wrapper">
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
                                            <a class="nav-link active" href="#">Products</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about.php">About</a>
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

            <div class="content-container">
                <div class="content-wrapper">
                    <div class="main-content">
                        <div class="title-product">
                            <h1>CLOTHING PRODUCTS</h1>
                        </div>
                        <div class="card-content text-center">
                            <div class="container text-center">
                                <div class="row" style="margin-top: 120px;">

                                    <?php
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>

                                        <div class="col-4">
                                            <div class="card mt-2 mb-2 " style="width: 20rem;">
                                                <img src="<?php echo $data['image'] ?>" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <div class="rating">
                                                        <?php
                                                        if ($data['rating'] > 0) {
                                                            $i = 0;
                                                            while ($i < $data['rating']) {
                                                        ?>
                                                                <i class="fa-solid fa-star"></i>
                                                            <?php
                                                                $i++;
                                                            }
                                                        } else if ($data['rating'] == 0) {
                                                            ?>
                                                            <i class="fa-regular fa-star"></i>
                                                        <?php
                                                        }
                                                        ?>
                                                        <?php

                                                        ?>
                                                        <p><?php echo $data['rating'] ?> / 5 </p>
                                                    </div>
                                                    <h5 class="card-title"><?php echo $data['nama']  ?></h5>
                                                    <p><b><?php echo $data['harga'] ?> IDR</b></p>
                                                    <p class="card-text">Size: <?php echo $data['ukuran'] ?></p>
                                                    <hr>
                                                    <a href="#" class="btn btn-dark mr-5 ml-2">Add to Cart</a>
                                                    <a href="detail_product.php?id=<?= $data['id'] ?>" class="a-detail">read more</a>
                                                </div>
                                            </div>
                                        </div>

                                    <?php
                                    }
                                    ?>

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