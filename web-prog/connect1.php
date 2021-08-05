<?php
/*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	# code...
}*/	
	if(isset($_POST['submit'])){
 	  $name=$_POST['name'];
      $sem=$_POST['sem'];
      $email=$_POST['email'];
      $branch=$_POST['branch'];
      $gender=$_POST['gender'];
      $sport=$_POST['sport'];
      


$conn = new mysqli('localhost','root','','sprots_club');
if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$query="INSERT INTO `registered_students`(`name`, `sem`, `email`, `branch`, `gender`,`sport`) VALUES ('$name','$sem','$email','$branch','$gender','$sport')";
		echo "inserted";
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