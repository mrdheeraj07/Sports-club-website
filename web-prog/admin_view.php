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
  border-radius: 10px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  background-color: white;


}
input[type=datetime-local]
{
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
    width: 50%;
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
   <h3> <a href="index.php">HOME</a></h3>
    <h3>Admin</h3>

</center>

<div class="container">
  <form action="connect2.php" method="post">
    <label for="tournament">Tournament</label>
    <input type="text" id="tournament" name="tournament" placeholder="tournament name..">
    <br>

    <label for="date" id="cor">Date</label>
    <input type="text" id="date" name="date" placeholder="tournament date.."> 
    <br>
    <label for="team1">Team1</label>
    <input type="text" id="team1" name="team1" placeholder="team1 name..">
    <br>
    <label for="team2">Team2</label>
    <input type="text" id="team2" name="team2" placeholder="team2 name..">
    <br>
    <input type="submit" value="submit" name="submit">
  </form>
</div>

</body>
</html>
