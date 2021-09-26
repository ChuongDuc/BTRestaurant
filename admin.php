<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foood Order Website</title>
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
                    <a class="nav-link" href="#">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="categoriesadmin.php">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="Foodadmin.php">Food</a>
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
                    <h2>Manage Users</h2>
                    <div class="mt-5">
                        <button type="button" class="btn btn-primary rounded-0">Add New User</button>
                    </div>
                </div>

                <table class="table mt-5 ">
                    <thead>
                        <tr>
                            <th class="col-md-1 ">S.N.</th>
                            <th class="col-md-3  ">Full Name</th>
                            <th class="col-md-2  ">User</th>
                            <th class="col-md-7  ">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="align-middle">
                            <td scope="row">1.</td>
                            <td>Arcenio Leach</td>
                            <td>toduwaxobi</td>
                            <td>
                                <button type="button" class="btn btn-primary rounded-0">Change Password</button>
                                <button type="button" class="btn btn-success rounded-0">Update Admin</button>
                                <button type="button" class="btn btn-danger rounded-0">Delete Admin</button>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td scope="row">2.</td>
                            <td>Shasha Mendez</td>
                            <td>goxemyde</td>
                            <td>
                                <button type="button" class="btn btn-primary rounded-0">Change Password</button>
                                <button type="button" class="btn btn-success rounded-0">Update Admin</button>
                                <button type="button" class="btn btn-danger rounded-0">Delete Admin</button>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td scope="row">3.</td>
                            <td>Vijay Thapa</td>
                            <td>vijaythapa</td>
                            <td>
                                <button type="button" class="btn btn-primary rounded-0">Change Password</button>
                                <button type="button" class="btn btn-success rounded-0">Update Admin</button>
                                <button type="button" class="btn btn-danger rounded-0">Delete Admin</button>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td scope="row">4.</td>
                            <td>Administrator</td>
                            <td>admin</td>
                            <td>
                                <button type="button" class="btn btn-primary rounded-0">Change Password</button>
                                <button type="button" class="btn btn-success rounded-0">Update Admin</button>
                                <button type="button" class="btn btn-danger rounded-0">Delete Admin</button>
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