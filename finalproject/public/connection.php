<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sss";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
 echo " ";
 $total = mysqli_num_rows($data); 

}
else
{
 echo "NO";
}
?>