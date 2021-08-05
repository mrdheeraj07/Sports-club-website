<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style>
body {font-family: Arial, Helvetica, sans-serif; background-color: Thistle;}
* {box-sizing: content-box;}

input[type=text], select, textarea {
 width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  background-color: white;
}

input[type=submit] {
   background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  width: 40%;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 50px;    
  text-align: center;
  margin: auto;

}
</style>
</head>
<body>

<center>
  <h3>Sports Tournament Regestration</h3>
<h3><a href="index.php">HOME</a></h3>
</center>

<div class="container">
  <form action="connect1.php" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name.."><br>

    <label for="sem">SEM</label>
    <input type="text" id="sem" name="sem" placeholder="Your sem.."><br>

    <label for="email">EMAIL</label>
    <input type="text" id="email" name="email" placeholder="Your email..">
    <br>

    <label for="branch">BRANCH</label>
    <select id="branch" name="branch">
      <option value="cs">CS</option>
      <option value="is">IS</option>
      <option value="ec">EC</option>
      <option value="mec">MEC</option>
    </select><br>

    <label for="gender">GENDER</label>
    <select id="gender" name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="others">Others</option>
    </select><br>

    <label for="sport">SPORTS</label>
    <select id="sport" name="sport">
      <option value="football">Football</option>
      <option value="volleyball">Volleyball</option>
      <option value="throwball">Throwball</option>
      <option value="cricket">Cricket</option>
    </select><br>


    <input type="submit" value="Submit" name="submit">
  </form>
</div>

</body>
</html>
