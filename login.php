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
        background-image: url("./images/bg1.jpg");
        background-size: cover;
        height: 45em;
        width: 105em;
        backdrop-filter: blur(10px);
      }
      h2{
        color: black;
        padding: 30px;
        margin-top: 50px;
        margin-left: 20em;
        font-family: Georgia, serif;
        color: white;
        font-weight: bold;
      }
      h6{
          margin-left: 3em;
      }
      form{
        margin-top: -1em;
        margin-left: 17em;
        margin-right: 20em;
        padding: 30px;
        box-shadow: 10px 10px 8px 10px rgba(0, 0, 0, 0.5);
        background-color: #B29DFA;
        /* background-color: rgba(249,228,212); */
      }

      .clr{
        margin-left: 27em; 
        margin-top: 12px; 
        background-color: #875CFA;
        color: white;
      }

      .user{
          margin-left: 13em;
      }
    </style>

    <title>Register</title>
</head>
<body>
  <!-- <h1>WELCOME!</h1> -->
  <span><h2>WELCOME BACK!!</h2></span>

    <div class="container">
    <form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn clr btn-lg" name="Login">SUBMIT</button>
  <div class="user">
  <br><h6>New User??</h6>
      Create New Account
  <a href="register.php">SIGN UP</a>
    </div>
</form>
    </div>
    <?php
    include_once 'config.php';
    
    ?>
</body>
</html>