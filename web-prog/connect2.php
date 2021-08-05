<?php
/*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	# code...
}*/	


	if(isset($_POST['submit'])){
 	  $tournament=$_POST['tournament'];
      $date=$_POST['date'];
      $team1=$_POST['team1'];
      $team2=$_POST['team2'];
      


$conn = new mysqli('localhost','root','','sprots_club');
if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$query="UPDATE `ad` SET `tournament`='$tournament',`date`='$date',`team1`='$team1',`team2`='$team2' WHERE sl_no=1";
		
		$result=mysqli_query($conn,$query);
		$conn->close();
		header('location:index.php');
// $stmt = $conn->prepare("insert into users(`fname`, `email`, `usn`, `sem`, `message`) values($name,$email,$usn,$sem,$message)");
// 		$stmt->bind_param("sssis", $fname, $email, $usn, $sem, $message);
// 		$execval = $stmt->execute();
// 		echo $execval;
// 		echo "Registration successfully...";
// 		$stmt->close();
// 		$conn->close();
	}
}
?>