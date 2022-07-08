<?php include 'header.php'?>

<!-- Page content -->
<div class="content">
  <p>

  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="position">
  </div>
  <div class="mb-3">
    <label for="JobDescription" class="form-label">Job Description</label>
    <!-- <input type="message"  class="form-control" id="JobDesc"> -->
    <br>
    <textarea type="message" class="form-control" id="JobDesc" rows="5" cols="150" name="JDesc"></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputSkills" class="form-label" >Skills Required</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  <button type="submit" class="btn btn-primary" name="jobBtn" value="jobBtn">Submit</button>
</form>
</div>
</div>

<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
    <?php
   include('./env.php');
    
    $conn= mysqli_connect($server,$username,$password,$database);
    
    if ($conn->connect_error) {
        die("Connection Failed: ".$conn->connect_error);
    }

    $sql= "Select id, cname, position, CTC from jobs";
    $result=mysqli_query($conn,$sql);
    if ($result->num_rows>0) {
      while ($rows=$result->fetch_assoc()) {
        $i=0;
        echo" <tr>
        <td>".$rows['id']."</td>
        <td>".$rows['cname']."</td>
        <td>".$rows['position']."</td>
        <td>".$rows['CTC']."</td>
        </tr>";

      }}
      mysqli_close($conn);
    ?>
  </tbody>
</table>
</div>

</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <?php
    include_once 'config.php';
    
    ?>
</body>
</html>
