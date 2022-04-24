<?php
  
  $conn=mysqli_connect("localhost","root","","sss");
  if(mysqli_connect_errno()){
   echo "FAILED TO CONNECT";
}
$userid=$_GET['ui']; 
$query ="DELETE FROM information WHERE userid = '$userid'";
$data=mysqli_query($conn,$query);

if($data)
{
echo"<font color='RED'>RECORD DELETED FROM DATABASE"; 
}
else
{
echo"NOT SUCCESSFUL";
}
?>