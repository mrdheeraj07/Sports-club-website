<?php
    session_start();
    echo isset($_SESSION['login']);
    if(isset($_SESSION['login'])) {
      header('LOCATION:index.php'); die();
    }
?>
<!DOCTYPE html>
<html>
   <head>
     <meta http-equiv='content-type' content='text/html;charset=utf-8' /><br><br><br>
     <title>Admin Login</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   </head>
   <style>
     body{
      background-color: Thistle;
      margin: 0 auto;
     }

  .form-control{
    
    width: 50%;
    padding: 15px 32px;
    text-align: center;
    display: inline-block;
    background-color: white;


  }
  .container {
  width: 40%;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 50px;    
  text-align: center;
  margin: auto;

   </style>
<body>
  <div class="container">
    <h3 class="text-center"><a href="index.php">HOME</a></h3><br>
    <h3 class="text-center">Admin Login</h3>
    <?php
      if(isset($_POST['submit'])){
        $username = $_POST['username']; $password = $_POST['password'];
        if($username === 'admin' && $password === 'password'){
          $_SESSION['login'] = true; header('LOCATION:admin.php'); die();
        } {
          echo "<div class='alert alert-danger'>Username and Password do not match.</div>";
        }

      }
      ?>
    <center>
      <br>
      <br>
      <form action="admin_view.php" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div><br>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="password" required>
      </div><br>
      <button type="submit" name="submit" class="btn btn-default">Login</button>
    </form>
    </center>
    
  </div>
</body>
</html>