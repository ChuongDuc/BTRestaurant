<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div>
        <div id="header" class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <div class="container-fluid">
                    <a href="" class="navbar-brand">
                        <img src="./assets/img/logo/logo.png" alt="wowFood" class="img-fluid">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="categories.php">Categories</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="Foods.php">Foods</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div id="slider" class="container-fluid">
            <form class="d-flex col-6">
                <input class="form-control me-2" type="search" placeholder="Search for food ..." aria-label="Search">
                <button class="btn btn-outline-success btn-search" type="submit">Search</button>
            </form>
        </div>

        <div id="content">
            <div class="containner">
                <div class="row mt-3 me-auto ms-auto">
                    <h1 class="desc-header text-center">Expore Foods</h1>
                </div>
                <div class="row mt-2 justify-content-between text-center ">
                    <div class="col-lg-4 col-12 text-center mb-4 form-floating ">
                        <img src="./assets/img/foods/pizza.jpg" alt="Pizza" class="member-img img-fluid box-desc">
                        <p class="form-floating img-name text-white">Pizza</p>
                    </div>
                    <div class="col-lg-4 col-12 text-center mb-4 form-floating ">
                        <img src="./assets/img/foods/burger.jpg" alt="Burger" class="member-img img-fluid box-desc">
                        <p class="form-floating img-name text-white">Burger</p>
                    </div>
                    <div class="col-lg-4 col-12 text-center mb-4 form-floating">
                        <img src="./assets/img/foods/momo.jpg" alt="Momo" class="member-img img-fluid box-desc">
                        <p class="form-floating img-name text-white">Momo</p>
                    </div>
                </div>
            </div>
            <div class="mybg">
                <div class="container mt-2">
                    <div class="row pt-4 me-auto ms-auto">
                        <h1 class="desc-header text-center">Food Menu</h1>
                    </div>
                    <div class="row mt-2 justify-content-center">
                        <div class="col-12 col-md-5 d-flex box-desc card m-3">

                            <div class="mymenu-img mt-3 ms-3">
                                <img src="./assets/img/menufood/menu-momo.jpg" class="card-img-top myimg" alt="pizza">
                            </div>
                            <div class="card-body desc-body">
                                <h3>Dumpling Specials</h3>
                                <p class="card-text">$5.00</p>
                                <p class="card-text opacity-25">Chicken Dumpling with herbs from Mountains</p>
                                <a href="#" class="btn btn-order">Order Now </a>
                            </div>

                        </div>

                        <div class="col-12 col-md-5 d-flex box-desc card m-3">

                            <div class="mymenu-img mt-3 ms-3">
                                <img src="./assets/img/menufood/menu-burger.jpg" class="card-img-top myimg" alt="pizza">
                            </div>
                            <div class="card-body desc-body">
                                <h3>Best Burger</h3>
                                <p class="card-text">$4.00</p>
                                <p class="card-text opacity-25">Burger with Harm, Pineaplle and lots of cheese</p>
                                <a href="#" class="btn btn-order">Order Now </a>
                            </div>

                        </div>

                        <div class="col-12 col-md-5 d-flex box-desc card m-3">

                            <div class="mymenu-img mt-3 ms-3">
                                <img src="./assets/img/menufood/menu-momo.jpg" class="card-img-top myimg" alt="pizza">
                            </div>
                            <div class="card-body desc-body">
                                <h3>Sadeko Momo</h3>
                                <p class="card-text">$6.00</p>
                                <p class="card-text opacity-25">Best Spicy Momo for Winter</p>
                                <a href="#" class="btn btn-order">Order Now </a>
                            </div>

                        </div>

                        <div class="col-12 col-md-5 d-flex box-desc card m-3">

                            <div class="mymenu-img mt-3 ms-3">
                                <img src="./assets/img/menufood/menu-pizza.jpg" class="card-img-top myimg" alt="pizza">
                            </div>
                            <div class="card-body desc-body">
                                <h3>Mixed Pizza</h3>
                                <p class="card-text">$10.00</p>
                                <p class="card-text opacity-25">Pizza with chicken, Ham, Buff, Mushroom and Vegetables</p>
                                <a href="#" class="btn btn-order">Order Now </a>
                            </div>
                        </div>

                    </div>
                    <div class="row text-center">
                        <a href="Foods.php" class="text-decoration-none mycolor">
                            <p>See All Foods</p>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div id="footer">
            <div class="mx-auto d-flex justify-content-center align-items-center mt-4">

                <a href="#">
                    <img src="./assets/img/app/fb.png" alt="" class="ms-4">
                </a>


                <a href="#">
                    <img src="./assets/img/app/insta.png" alt="" class="ms-4">
                </a>


                <a href="#">
                    <img src="./assets/img/app/twitter.png" alt="" class="ms-4">
                </a>

            </div>

            <div class=" text-center mt-3 ">
                All rights reserved. Designed By
                <a href="#" class="text-decoration-none">
                    DucChuong
                </a>
            </div>
        </div>
    </div>

    </div>

    <script src="bootstrap.bundle.min.js.js"></script>
</body>

</html>