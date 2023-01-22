<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
</head>
<body>
<div class="card">
<div class="card-body">
</div>
</div>
<div class="row">
    <div class="col-md-7">
<form action="" method="GET">
    <div class="input-group mb-3">
  <input type="text" name="search" value="<?php if(isset($_GET['serach'])){echo $_GET['serach'];} ?>" class="form-control" placeholder="Type here to filter" >
<button type="submit" class="btn btn-primary">Search</button>
</div>
</form>
</div>
</div>

<div class="col-md-12">
    <div class="card mt-4">
        <div class="card-body">
            <div class="table table-bordered">

            <table class="table-success">
    <thead>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>contact</th>
                <th>id</th>
            </tr>
        
    </thead>
 <tbody>
          <?php 

        $con = mysqli_connect("localhost","id17598847_contact","5Ky2Vh[Q[+J)h->r","id17598847_tie");
                      if(isset($_GET['search']))
                      {
                          $filtervalues =$_GET['search'];
                          $query ="SELECT *FROM contact WHERE CONCAT(name,email,phonenumber,id) LIKE '%$filtervalues%' ";
                          $query_run = mysqli_query($con,$query);
                  
                          if(mysqli_num_rows($query_run) > 0)
                          {
                              foreach($query_run as $items)
                              {
                              ?>
                                <tr>
                                <td><?= $items['name'];?></td>
                                <td><?= $items['email'];?></td>
                                <td><?= $items['phonenumber'];?></td>
                                <td><?= $items['id'];?></td>
                            </tr>
                              <?php      
                              }
                          }
                          else
                          {
                          ?>
                              <tr>
                                  <td colspan="4">NO RECORD FOUND</td>
                              </tr>
                      
                              <?php
                          } 
                      }

              
          ?>   


  </tbody>
        </div>
        </table> 
    
        </div>
        </div>
            </div>

<?php

$con = mysqli_connect("localhost","id17598847_contact","5Ky2Vh[Q[+J)h->r","id17598847_tie");
$database  =   mysqli_select_db($con, 'id17598847_tie');

$query = "SELECT * FROM contact";
$query_run = mysqli_query($con,$query);
?>
<table class="table table-dark">
  <thead>
  <h1>  DATA TABLE
  </thead>
  <?php
if($query_run)
{
    foreach($query_run as $row)
    {
?>
 
    <tr class="table-active">
    <th >Name</th>
      <th >Email</th>
      <th >Contact Number</th>
      <th >Unique id</th>
    </tr>
    <tbody>
      <td>
          <?php  echo $row['name']; ?>
      </td>
      <td>
          <?php  echo $row['email']; ?>
      </td>
      <td>
          <?php  echo $row['phonenumber']; ?>
      </td>
      <td>
          <?php  echo $row['id']; ?>
      </td>
    
    
    </tr>
  </tbody>
  <?php
    }
}
    else{
        echo  "no record";
    }

?>
</table>
</body>
</html>