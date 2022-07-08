<?php include 'header.php'?>

<div class="content">
<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Applying For</th>

      <th scope="col">Qualification</th>
      <th scope="col">Year</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include('./env.php');
    
    $conn= mysqli_connect($server,$username,$password,$database);
    
    if ($conn->connect_error) {
        die("Connection Failed: ".$conn->connect_error);
    }
    echo"";
    
    $sql="Select name, apply, qualification, year from candidates";
    $result=mysqli_query($conn, $sql);
    if ($result->num_rows>0) {
      while ($rows=$result->fetch_assoc()) {
        $i=0;
        echo" <tr>
        <th>".++$i."</th>
        
        <td>".$rows['name']."</td>
        <td>".$rows['apply']."</td>
        <td>".$rows['qualification']."</td>
        <td>".$rows['year']."</td>
        </tr>";

      }}else{
        echo "";
      }
    mysqli_close($conn);
    

    ?>
  </tbody>
</table>
</div>