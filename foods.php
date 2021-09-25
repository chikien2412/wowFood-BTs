<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0-10/css/all.css">
    <!-- person css -->
    <link rel="stylesheet" href="style.css">
    
    <title>WowFood</title>
</head>
<body>
    <!-- begin heading -->
    <div class="heading">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="index.php">
                                <img src="images/logo.png" alt="logo" class="img-fluid">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Categories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./foods.php">Foods</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end heading -->
    <!-- begin search form -->
    <div class="slider-search">
        <nav class="navbar navbar-light pt-auto pb-auto h-100">
            <div class="container-fluid justify-content-center">
                <form class="d-flex w-50">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn btn-warning " type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
    <!-- end search form -->
    <!-- begin food menu -->
    <div class="food-menu bg-secondary bg-opacity-25 ">
        <div class="row col text-center p-4">
            <h2>Food Menu</h2>
        </div>
        <div class="container w-100">
            <div class="row justify-content-between ">
                <div class="card mb-3 col-md-6 food-item">
                    <div class="row g-0">
                        <div class="col-lg-4 text-center m-auto">
                            <img src="images/menu-pizza.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-lg-8 ">
                            <div class="card-body">
                                <h5 class="card-title">Pizza</h5>
                                <p class="card-text">$5.00</p>
                                <p class="card-text">
                                    <small class="text-muted">Pizza with Chicken, Ham, Buff, Mushroom and
                                        Vegetables</small>
                                </p>
                                <a href="./order.php"><button type="button" class="btn btn-danger">Order</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 col-md-6 food-item">
                    <div class="row g-0">
                        <div class="col-lg-4 text-center m-auto">
                            <img src="images/menu-pizza.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-lg-8 ">
                            <div class="card-body">
                                <h5 class="card-title">Pizza</h5>
                                <p class="card-text">$5.00</p>
                                <p class="card-text">
                                    <small class="text-muted">Pizza with Chicken, Ham, Buff, Mushroom and
                                        Vegetables</small>
                                </p>
                                <a href="./order.php"><button type="button" class="btn btn-danger">Order</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between ">
            <div class="card mb-3 col-md-6 food-item">
                    <div class="row g-0">
                        <div class="col-lg-4 text-center m-auto">
                            <img src="images/menu-pizza.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-lg-8 ">
                            <div class="card-body">
                                <h5 class="card-title">Pizza</h5>
                                <p class="card-text">$5.00</p>
                                <p class="card-text">
                                    <small class="text-muted">Pizza with Chicken, Ham, Buff, Mushroom and
                                        Vegetables</small>
                                </p>
                                <a href="./order.php"><button type="button" class="btn btn-danger" >Order</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 col-md-6 food-item">
                    <div class="row g-0">
                        <div class="col-lg-4 text-center m-auto">
                            <img src="images/menu-pizza.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-lg-8 ">
                            <div class="card-body">
                                <h5 class="card-title">Pizza</h5>
                                <p class="card-text">$5.00</p>
                                <p class="card-text">
                                    <small class="text-muted">Pizza with Chicken, Ham, Buff, Mushroom and
                                        Vegetables</small>
                                </p>
                                <a href="./order.php"><button type="button" class="btn btn-danger" >Order</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row col text-center p-4">
                <a href="./order.php" class="link-danger text-decoration-none">See All food</a>
            </div>
        </div>
    </div>
    <!-- end food menu -->
    <!-- begin footer -->
    <div class="footer">
        <div class="container">
            <div class="row col-6 justify-content-center pt-3 pb-3 m-auto">
                <div class="col-1">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </div>
                <div class="col-1 ">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-1 ">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="row col">
                <p class="text-center">All right reserved. Design By <a href="#"
                        class="text-decoration-none coppyright">CSE</a></p>
            </div>
        </div>
    </div>
<!-- end -->
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>
</html>