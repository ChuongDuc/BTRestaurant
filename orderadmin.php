<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
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
                    <a class="nav-link " href="Foodadmin.php">Food</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Logout</a>
                </li>
            </ul>
        </div>
        <div id="slider-dash" class="mybg pb-5">
            <div class="container">
                <div class="row pt-5">
                    <h2>Manage Order</h2>
                </div>
                <table class="table mt-5 ">
                    <thead>
                        <tr class="align-middle">
                            <th scope="col ">S.N.</th>
                            <th scope="col ">Food</th>
                            <th scope="col ">Price</th>
                            <th scope="col ">Qty.</th>
                            <th scope="col ">Total</th>
                            <th scope="col ">Order Date</th>
                            <th scope="col ">Status</th>
                            <th scope="col ">Custiom Name</th>
                            <th scope="col ">Contact</th>
                            <th scope="col ">Email</th>
                            <th scope="col ">Address</th>
                            <th scope="col ">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="align-middle">
                            <td scope="row">1.</td>
                            <td>Mixed Pizza</td>
                            <td>10.00</td>
                            <td>2</td>
                            <td>20.00</td>
                            <td>
                                <p class="fs-6">2020-11-30</p>
                                <p class="fs-6">04:07:17</p>
                            </td>
                            <td style="color: green;">
                                Delivered
                            </td>
                            <td>Jana Bush</td>
                            <td>
                                <p>+1 (562)</p>
                                <p class="fs-6">101-2028</p>
                            </td>
                            <td>tydujy@mailinator.com</td>
                            <td>Manima iure ducimus</td>
                            <th>
                                <!-- <button type="button" class="btn btn-success rounded-0">Update Order</button> -->
                                <p class="bg-success"> Update Order</p>
                            </th>
                        </tr>
                        <tr class="align-middle">
                            <td scope="row">2.</td>
                            <td>Best Burgur</td>
                            <td>4.00</td>
                            <td>4</td>
                            <td>16.00</td>
                            <td>
                                <p class="fs-6">2020-11-30</p>
                                <p class="fs-6">03:52:43</p>
                            </td>
                            <td style="color: green;">
                                Delivered
                            </td>
                            <td>Kelly Dillard</td>
                            <td>
                                <p>+1 (980)</p>
                                <p class="fs-6">914-3106</p>
                            </td>
                            <td>fexekihor@mailinator.com</td>
                            <td>Incidunt ipsum ad d</td>
                            <th>
                                <!-- <button type="button" class="btn btn-success rounded-0">Update Order</button> -->
                                <p class="bg-success"> Update Order</p>
                            </th>
                        </tr>
                        <tr class="align-middle">
                            <td scope="row">3.</td>
                            <td>Sadeko Momo</td>
                            <td>6.00</td>
                            <td>3</td>
                            <td>18.00</td>
                            <td>
                                <p class="fs-6">2020-11-30</p>
                                <p class="fs-6">03:49:48</p>
                            </td>
                            <td style="color: red;">
                                Cancelled
                            </td>
                            <td>Bradly Farrell</td>
                            <td>
                                <p>+1 (576)</p>
                                <p class="fs-6">504-4657</p>
                            </td>
                            <td>zauhafiq@mailinator.com</td>
                            <td>Duis aliqua Qui lor</td>
                            <th>
                                <p class="bg-success"> Update Order</p>
                            </th>
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