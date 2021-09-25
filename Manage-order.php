<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Order</title>
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
        <div class="row bg-secondary bg-opacity-10">
            <div class="col ms-5 me-5">
                <h2>Manager Order</h2>
                    <table class="table mt-5 me-5 align-middle">
                    <thead>
                        <tr>
                        <th scope="col ">S.N.</th>
                        <th scope="col ">Food</th>
                        <th scope="col ">Price</th>
                        <th scope="col ">Qty.</th>
                        <th scope="col ">Total</th>
                        <th scope="col ">Order date</th>
                        <th scope="col ">Status</th>
                        <th scope="col ">Customer name</th>
                        <th scope="col ">Contact</th>
                        <th scope="col ">Email</th>
                        <th scope="col ">Address</th>
                        <th scope="col ">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td scope="row">1.</th>
                        <td>Mixed Pizza</td>
                        <td>10.00</td>
                        <td>2</td>
                        <td>20.00</td>
                        <td>2020-11-30 04:07:17</td>
                        <td class="Deliverd">Deliverd</td>
                        <td>Janna Bush</td>
                        <td>+1(562)101-2028</td>
                        <td>tydujy@mailinator.com</td>
                        <td>Minima iure ducimus</td>
                        <td>
                            <button type="button" class="btn btn-success">Update Order</button>
                        </td>
                        
                
                        
                        </tr>
                        <tr>
                        <td scope="row">2.</th>
                        <td>Sasha Mendes</td>
                        <td>4.00</td>
                        <td>4</td>
                        <td>16.00</td>
                        <td>2020-11-30 03:52:43</td>
                        <td class="Deliverd">Deliverd</td>
                        <td>Kelly Dillard</td>
                        <td>+1(908)914-3106</td>
                        <td>fexekihor@mailinator.com</td>
                        <td>Incidum ipsum ad d</td>
                        <td>
                            <button type="button" class="btn btn-success">Update Order</button>
                        </td>
                        
                        
                        </tr>
                        <tr>
                        <td scope="row">3.</th>
                        <td >Vijay Thapa</td>
                        <td>6.00</td>
                        <td>3</td>
                        <td>18.00</td>
                        <td>2020-11-30 03:49:48</td>
                        <td class="Cancelled">Cancelled</td>
                        <td>Bradley Farrell</td>
                        <td>+1(576)504-4657</td>
                        <td>zuhafiq@mailinator.com</td>
                        <td>Duis aliqua Qui lor</td>
                        <td><button type="button" class="btn btn-success">Update Order</button></td>
                        
                        
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