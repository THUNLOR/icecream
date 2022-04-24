<?php
 
   $userid = $_POST['userid'];
   $emailid = $_POST['emailid'];
   $password = $_POST['password'];
   
      
   $conn = new mysqli('localhost','root','','sss');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into information( userid, emailid, password) values(?, ?, ?)");
		$stmt->bind_param("sss", $userid, $emailid, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
           