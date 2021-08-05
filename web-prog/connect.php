<?php
/*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	# code...
}*/	
	if(isset($_POST['set'])){
 	  $name=$_POST['fname'];
      $email=$_POST['email'];
      $usn=$_POST['usn'];
      $sem=$_POST['sem'];
      $message=$_POST['message'];

      


$conn = new mysqli('localhost','root','','sprots_club');
if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$query="INSERT INTO `users`(`fname`, `email`, `usn`, `sem`, `message`) VALUES ('$name','$email','$usn','$sem','$message')";
		header('location:index.php');
		$result=mysqli_query($conn,$query);
		$conn->close();
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