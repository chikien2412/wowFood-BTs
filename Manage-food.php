<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager-food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="row-md">
                <div class="col-md">
                    <ul class="nav justify-content-center border-bottom border-2">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Food</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Logout</a>
                        </li>
                        
                        </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="ms-5">Manage Food</h2>
            <div class="ms-5">
                <button type="button" class="btn btn-primary">Add Food</button>
            </div>
            <table class="table mt-5 mb-5 align-middle">
                    <thead>
                        <tr>
                        <th scope="col ">S.N.</th>
                        <th scope="col ">Title</th>
                        <th scope="col ">Price</th>
                        <th scope="col ">Image</th>
                        <th scope="col ">Featured</th>
                        <th scope="col ">Active</th>
                        <th scope="col ">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                        <td scope="row ">1.</th>
                        <td>Dumplings Special</td>
                        <td>$5.00</td>
                        <td>
                            <img src="images/menu-momo.jpg" alt="">
                        </td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <button type="button" class="btn btn-success">Update Category</button>
                            <button type="button" class="btn btn-danger">Delete Category</button>
                        </td>
                        </tr>
                        <tr>
                        <td scope="row">2.</th>
                        <td>Best Burger</td>
                        <td>$4.00</td>
                        <td>
                            <img src="images/menu-burger.jpg" alt="">
                        </td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <button type="button" class="btn btn-success">Update Category</button>
                            <button type="button" class="btn btn-danger">Delete Category</button>
                        </td>
                        </tr>
                        <tr>
                        <td scope="row">3.</th>
                        <td >Smoky BBQ Pizza</td>
                        <td>$6.00</td>
                        <td>
                            <img src="images/menu-pizza.jpg" alt="">
                        </td>
                        <td>No</td>
                        <td>Yes</td>
                        <td>
                            <button type="button" class="btn btn-success">Update Category</button>
                            <button type="button" class="btn btn-danger">Delete Category</button>
                        </td>
                        </tr>
                        <tr>
                        <td scope="row">4.</th>
                        <td>Sadeko Momo</td>
                        <td>$6.00</td>
                        <td>
                            <img src="images/menu-momo.jpg" alt="">
                        </td>
                        <td>No</td>
                        <td>Yes</td>
                        <td>
                            <button type="button" class="btn btn-success">Update Category</button>
                            <button type="button" class="btn btn-danger">Delete Category</button>
                        </td>
                        </tr>
                        <tr>
                        <td scope="row">5.</th>
                        <td>Mixer Pizza</td>
                        <td>$10.00</td>
                        <td>
                            <img src="images/menu-pizza.jpg" alt="">    
                        </td>
                        <td>No</td>
                        <td>Yes</td>
                        <td>
                            <button type="button" class="btn btn-success">Update Category</button>
                            <button type="button" class="btn btn-danger">Delete Category</button>
                        </td>
                        </tr>
                        <tr>
                        <td scope="row">6.</th>
                        <td>Set ipsum cillum in</td>
                        <td>$52.00</td>
                        <td>
                            <a href="#" class="text-decoration-none">
                                <h5>Images not Added.</h5>
                            </a>
                        </td>
                        <td>No</td>
                        <td>No</td>
                        <td>
                            <button type="button" class="btn btn-success">Update Category</button>
                            <button type="button" class="btn btn-danger">Delete Category</button>
                        </td>
                        </tr>
                    </tbody>
                    </table>
                
        </div>
    </header>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>