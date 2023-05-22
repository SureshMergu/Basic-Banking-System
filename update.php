<?php
include 'db.php';
$id=$_GET['updateid'];
if(isset($_POST['submit']))
 {
    $amt=$_POST['amt'];
    $sql="update customers set current_balance=current_balance+$amt where customer_id=$id ";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "Send Money success";
        header('location:customers.php');
    }
    else
    {
        die(mysqli_error($conn)); 
    }
 }
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
  <br>
  <!-- navbar ends here  -->
<div class="container">
 
<?php 
          $sql="Select * from customers where customer_id=$id";
          $result=mysqli_query($conn,$sql);
          if($result)
          {
           while($row=mysqli_fetch_assoc($result))
             {
              $id=$row['customer_id'];
              $name=$row['name'];
              $email=$row['email'];
              $curr_bal=$row['current_balance'];
              
             }

          }
          ?>


<form method="post">
<fieldset disabled>

<div class="form-row">
    <label for="disabledTextInput">Name</label>
</div>
  <div class="form-row">
  <div class="col-3">
     <?php echo ' <input type="text" id="disabledTextInput"  class="form-control"  placeholder='.$name.'>'; ?>
    </div>
    </div>
  
    <div class="form-row">
    <label for="exampleInputEmail1">Email address</label>
</div>
  <div class="form-row">
  <div class="col-3">
    <?php echo ' <input type="text" class="form-control" placeholder='.$email.'>'; ?>
    </div>
    </div>
    <div class="form-row">
    <label for="exampleInputEmail1">Current Balance</label>
</div>
  <div class="form-row">
  <div class="col-3">
     <?php echo ' <input type="text" class="form-control" placeholder='.$curr_bal.'>'; ?>
    </div>
    
    </div>
    </fieldset>
    <div class="form-row">
    <label for="exampleInputEmail1">Enter Amount</label>
</div>
  <div class="form-row">
  <div class="col-3">
      <input type="text" class="form-control" name="amt">
    </div>
    </div>
    <br>
    
    <div class="form-row">
  <div class="col-3">
      <button type="submit" class="btn btn-primary" name="submit" onclick="myFunction()">Send Money</button>
    </div>
    </div>
    

</form>
</div>


<script>
function myFunction() {
  let text;
  if (confirm("Do you want to confirm!") == true) {
    text = "You pressed OK!";
  } else {
    text = "You canceled!";
  }
  
}
</script>

  
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
