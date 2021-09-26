<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food User</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div>
        <div id="header-admin">
            <ul class="nav justify-content-center border-bottom border-2 border-dark">
                <li class="nav-item">
                    <a class="nav-link " href="homeadmin.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="categoriesadmin.php">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Food</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="orderadmin.php">Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Logout</a>
                </li>
            </ul>
        </div>
        <div id="slider-admin" class="mybg pb-5">
            <div class="container">
                <div class="row pt-5">
                    <h2>Manage Food</h2>
                    <div class="mt-5">
                        <button type="button" class="btn btn-primary rounded-0">Add Food</button>
                    </div>
                </div>
                <table class="table mt-5 ">
                <thead>
                    <tr class="align-middle">
                        <th class="col-md-1 ">S.N.</th>
                        <th class="col-md-2 ">Title</th>
                        <th class="col-md-1 ">Price</th>
                        <th class="col-md-2 ">Image</th>
                        <th class="col-md-1 ">Featured</th>
                        <th class="col-md-1 ">Active</th>
                        <th class="col-md-4 ">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="align-middle">
                        <td scope="row">1.</td>
                        <td>Dumpling Specials</td>
                        <td>$5.00</td>
                        <td class="text-center align-item-center">
                            <img src="./assets/img/foods/momo.jpg" alt="" class="img-fluid myimg2">
                        </td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <button type="button" class="btn btn-success rounded-0">Update Food</button>
                            <button type="button" class="btn btn-danger rounded-0">Delete Food</button>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td scope="row">2.</td>
                        <td> Best Burger</td>
                        <td>$4.00</td>
                        <td class="text-center align-item-center">
                            <img src="./assets/img/foods/burger.jpg" alt="" class="img-fluid myimg2">
                        </td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <button type="button" class="btn btn-success rounded-0">Update Food</button>
                            <button type="button" class="btn btn-danger rounded-0">Delete Food</button>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td scope="row">3.</td>
                        <td>Smoky BBQ Pizza</td>
                        <td>$6.00</td>
                        <td class="text-center align-item-center ">
                            <img src="./assets/img/foods/pizza.jpg" alt="" class="img-fluid myimg2">
                        </td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <button type="button" class="btn btn-success rounded-0">Update Food</button>
                            <button type="button" class="btn btn-danger rounded-0">Delete Food</button>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td scope="row">4.</td>
                        <td> Sadeko momo</td>
                        <td>$6.00</td>
                        <td class="text-center align-item-center">
                            <img src="./assets/img/foods/momo.jpg" alt="" class="img-fluid myimg2">
                        </td>
                        <td>No</td>
                        <td>Yes</td>
                        <td>
                            <button type="button" class="btn btn-success rounded-0">Update Food</button>
                            <button type="button" class="btn btn-danger rounded-0">Delete Food</button>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td scope="row">5.</td>
                        <td> Mixed Pizza</td>
                        <td>$10.00</td>
                        <td class="text-center align-item-center">
                            <img src="./assets/img/foods/pizza.jpg" alt="" class="img-fluid myimg2">
                        </td>
                        <td>No</td>
                        <td>Yes</td>
                        <td>
                            <button type="button" class="btn btn-success rounded-0">Update Food</button>
                            <button type="button" class="btn btn-danger rounded-0">Delete Food</button>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td scope="row">6.</td>
                        <td> Sed ipsum cillum in</td>
                        <td>$52.00</td>
                        <td class="text-center align-item-center">
                            <img src="./assets/img/foods/mosmo.jpg" alt="Image not Added" class="img-fluid myimg2">
                        </td>
                        <td>No</td>
                        <td>Yes</td>
                        <td>
                            <button type="button" class="btn btn-success rounded-0">Update Food</button>
                            <button type="button" class="btn btn-danger rounded-0">Delete Food</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
        <div id="footer-admin" class="bgfooter">
        <div class=" text-center pt-3 pb-3 text-white">
                2020 All rights reserved, Food House. Designed By-
                <a href="#" class="">
                    DucChuong
                </a>
            </div>
        </div>
    </div>
</body>

</html>