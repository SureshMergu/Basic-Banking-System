<?php
/*require_once('C:\xampp\htdocs\Php_program\db.php');
$query= "select * from customers";
$result=mysqli_query($con,$query);*/
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>All Accounts | Basic Banking System</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@500&display=swap" rel="stylesheet">




  </head>
<style>
  .navbar-brand{
    font-family: 'Alkatra', cursive;
  }
  .nav-link{
    font-family: 'Alkatra', cursive;
  }
  </style>


<body>


  <!-- navbar starts here  -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="./index.html">The Sparks Foundation Bank</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="./index.html" style="color: rgb(223, 4, 4)" ;>
            Home
          </a>
        </li>
        <!--<li class="nav-item active">
          <a class="nav-link" href="./customers.html" style="
                color: rgb(96, 96, 230) !important;
                background-color: rgb(213, 210, 97);
              ">Send Money</a>
        </li>-->
      </ul>
    </div>
  </nav>
  <!-- navbar ends here  -->

  <br>

  <div class="my-info text-center" style="color:rgb(88, 86, 86)">
    <h2>Name: Suresh Mergu</h2>
    <h4>Net Bank Balance: $<span id="myAccountBalance">100000000</span></h4>
    <br>
  
    
  <!-- table  -->
  <div class="container">
    <div class="table-responsive">
      <table class="table table-hover table-bordered">
        <thead>
          <tr class="table-danger">
            <th scope="col">S.No.</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Current Balance</th>
            <th scope="col">Operations</th>
          </tr>
        </thead>
        <tbody>
          
          <?php 
          $sql="Select * from customers ";
          $result=mysqli_query($conn,$sql);
          if($result)
          {
           while($row=mysqli_fetch_assoc($result))
             {
              $id=$row['customer_id'];
              $name=$row['name'];
              $email=$row['email'];
              $curr_bal=$row['current_balance'];
              echo '<tr class="table-light">
              <th scope="row">'.$id.'</th>
              <td>'.$name.'</td>
              <td>'.$email.'</td>
              <td>'.$curr_bal.'</td>
              <td><button class="btn btn-primary" ><a href="update.php?updateid='.$id.'" class="text-light">Send Money</a></button></td> 
              </tr>';
             }

          }
          ?>  
          
          
        </tbody>
      </table>
    </div>
  </div>

  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
