<?php
//to use names and other variables in welcome page
session_start();
//to include data base
include("../db.php");

?>

<?php
    if(isset($_REQUEST['submit']))
    {
        $name=$_REQUEST['name'];
        $amt=$_REQUEST['amt'];
        $sql=mysqli_query($conn,"insert into customer(name,amt)value('$name','$amt')" );
        if(mysqli_query($conn,$sql)){
            header("Location: newcus.php?success");
            echo "New data entered";
        }else{
            echo "Something went wrong";
        }
    }
    

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add new customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="stylew.css">
  </head>
  <body>
  <div class="container">
      <form method="post">
          <div class="form-group" >
              <label>Customer Name</label>
              <input type="text" class="form-control" name="name" >
          </div>
          <div class="form-group">
              <label>Amount</label>
              <input type="number" class="form-control" name="amt">
          </div>
          <input type="submit" class="but" class="btn btn-primary" name="submit" value="Add" >
      </form>
      </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>