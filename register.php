<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="./images/form.png" rel="icon">
    <style>
      body{
        background-image: url("./images/bg.png");
        background-size: cover;
        /* max-width: 100px; */
        /* margin-left: 40em; */
        backdrop-filter: blur(7px);
      }
      h1{
        padding: 30px;
        margin-top: -20px;
        font-family: Georgia, serif;
        float: left;
        color: #1A1A40;
      }
      h2{
        color: black;
        padding: 30px;
        margin-left: 37em;
        margin-top: 75px;
        font-family: Georgia, serif;
        color: #1A1A40;
        font-weight: bold;
      }
      form{
        margin-top: -7em;
        margin-left: 50em;
        margin-right: -3em;
        padding: 30px;
        box-shadow: 10px 10px 8px 10px rgba(0, 0, 0, 0.4);
        background-color: lightpink;
      }

      .clr{
        margin-left: 10.5em; 
        margin-top: 12px; 
        background-color: rgba(239,109,109);
        color: white;
      }
      .user{
          margin-left: 10em;
      }
    </style>

    <title>Register</title>
</head>
<body>
  <h1>Registration Form</h1>
  <h2></h2>

    <div class="container">
    <form method="Post">
    <div class="mb-3">
    <label for="exampleInputName" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputNumber" class="form-label">Contact Number</label>
    <input type="number" class="form-control" id="exampleInputNumber" name="phone_no">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2">
  </div>
  <button type="submit" class="btn clr btn-lg" name="submit" value="submit">SUBMIT</button>
  <div class="user">
  <br>
  Already Registered?? <a href="login.php">LOGIN</a>
  </div>
</form>
    </div>
    <?php
    include_once 'config.php';
    
    ?>
</body>
</html>