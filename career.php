<!DOCTYPE html>
<html lang="en">
<head>
  <title>Career</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="./style.css" rel="stylesheet">

<style>
  h1{
    color: black;
    text-align: center;
    font-size: 5em;
  }
</style>
</head>
<body>

<div class="jumbotron jumbotron-fluid" style="background-image: url('./images/hero1.jpg'); background-size:cover; height: 25em; opacity: 0.5;">
  <div class="container">
    <h1 style="opacity: 1;">Job Portal</h1>      
    <p style="font-size: 3em; margin-left: 4em; color: black;">Best Jobs available for your skills.</p>
  </div>
</div>

<!-- <div class="general">
  <p>This is some text.</p>      
  <p>This is another text.</p>      
</div>
<div class="general">
  <p>This is some text.</p>      
  <p>This is another text.</p>      
</div>
<div class="general">
  <p>This is some text.</p>      
  <p>This is another text.</p>      
</div>
<div class="general">
  <p>This is some text.</p>      
  <p>This is another text.</p>      
</div>
<div class="general">
  <p>This is some text.</p>      
  <p>This is another text.</p>      
</div> -->
<?php 
  include('./env.php');
  
  $conn= mysqli_connect($server,$username,$password,$database);
  
  if ($conn->connect_error) {
      die("Connection Failed: ".$conn->connect_error);
  }
session_start();

  $sql = "SELECT `id`, `cname`, `position`, `JDesc`, `skills`, `CTC` FROM `jobs`";
  $result = mysqli_query($conn,$sql);
  if($result->num_rows>0){
    echo '<div class="row" style="max-width: 105rem;">';
    while($row=$result->fetch_assoc()){
      echo'
      <div class="general">
      <h3 style="text-align: center; margin-bottom: 35px; margin-top: 10px;">'.$row['position'].'</h3>
      <h4 style="text-align: center;">'.$row['cname'].'</h4>
      <p style="color: black; text-align: justify;">'.$row['JDesc'].'</p>
      <p style="color: black;><b>Skills Required: </b>'.$row['skills'].'</p>
      <p style="color: black;><b>CTC: </b>'.$row['CTC'].'</p>
      <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
      Apply Now
    </button>

      </div>';
    }echo '</div>';
  }else{
    echo"";
  }
// mysqli_close($conn);

  ?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply For Jobs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For</label>
            <input type="text" class="form-control" name="apply0">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qualification">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Passout Year</label>
            <input type="text" class="form-control" name="year">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="apply">Apply</button>
      </div>
      </form>

    </div>
  </div>
</div>



<?php
    include_once 'config.php';
    
    ?>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>