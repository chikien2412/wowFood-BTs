<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <header>
    <div class="container-fluid">
            <div class="row">
                <div class="col">
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
    </header>
<!-- Content users -->
        <div class="row-md bg-secondary bg-opacity-10">
            <div class="col-md ms-5 ">
                <h2>Manager Users</h2>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col ">S.N.</th>
                        <th scope="col ">Full Name</th>
                        <th scope="col ">Username</th>
                        <th scope="col ">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td scope="row">1.</th>
                        <td>Arsenio Leach</td>
                        <td>toduwasobi</td>
                        <td>
                            <button type="button" class="btn btn-primary">Change Password</button>
                            <button type="button" class="btn btn-success">Update User</button>
                            <button type="button" class="btn btn-danger">Delete User</button>
                        </td>
                        </tr>
                        <tr>
                        <td scope="row">2.</th>
                        <td>Sasha Mendes</td>
                        <td>goxemyde</td>
                        <td>
                        <button type="button" class="btn btn-primary">Change Password</button>
                            <button type="button" class="btn btn-success">Update User</button>
                            <button type="button" class="btn btn-danger">Delete User</button>
                        </td>
                        </tr>
                        <tr>
                        <td scope="row">3.</th>
                        <td >Vijay Thapa</td>
                        <td>vịaythpa</td>
                        <td>
                        <button type="button" class="btn btn-primary">Change Password</button>
                            <button type="button" class="btn btn-success">Update User</button>
                            <button type="button" class="btn btn-danger">Delete User</button>
                        </td>
                        </tr>
                        <tr>
                        <td scope="row">4.</th>
                        <td>Administrator</td>
                        <td>admin</td>
                        <td>
                        <button type="button" class="btn btn-primary">Change Password</button>
                            <button type="button" class="btn btn-success">Update User</button>
                            <button type="button" class="btn btn-danger">Delete User</button>
                        </td>
                        </tr>
                    </tbody>
                    </table>
                
    
            </div>
        </div>



  <!-- Foooter -->
  <div class="">
        <div class="row">
            <div class="col">
                <p class="text-center bg-color">2020 All rights reserved, Food House. Devolop by - <a href="#">CSE485</a></p>
            </div>
        </div>
        
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>