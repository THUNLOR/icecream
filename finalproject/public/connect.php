<?php
 
   $userid = $_POST['userid'];
   $password = $_POST['password'];
   
      
   $con = new mysqli('localhost','root','','sss');
      if($con->connect_error){
           die("Faied to connect :".$con->connect_error);
}else{
      $stmt = $con->prepare("select * from information where userid =?");
      $stmt->bind_param("s",$userid);
      $stmt->execute();
      $stmt_result = $stmt->get_result();
      if($stmt_result->num_rows > 0){
         $data = $stmt_result->fetch_assoc();
          if($data['password'] === $password){
             if($data['userid'] === 'admin'){ 

              include 'Admin_Page (2).php';
         }else{
           include 'My_Page.html';
}
   
             
             
         }else{
             echo"<h2>Invalid USERID or PASSWORD</h2>";
         }  
         } else {
            echo"<h2>Invalid USERID or PASSWORD</h2>";
         }   
}	

?>
           
