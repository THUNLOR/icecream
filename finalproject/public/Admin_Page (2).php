

<html>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>


        <title>
            Admin Page
          </title>
        <style>
            html{
                background-color: black;
            }
            img{
    width: 28%;
    height: 30%;
    display: block;
    margin-left: auto;
    margin-right: auto;
      

  }
  .anna{
    margin-left: 38%;
    margin-right: auto;
    width: 30%;
    height: 30%;
    display: block;
  }

  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
  color: white;
}


        </style>
      <img style="float: left;" src="https://cdn.discordapp.com/attachments/759665069746552883/777780569106153482/SquarePic_20201116_11520343.jpg" height="10" width="10">
      <img class="anna" src="https://cdn.discordapp.com/attachments/759665069746552883/777777786811056177/SquarePic_20201116_11355640.jpg" height="10" width="10">
    </head>
    <body>
        <h1 style="font-size: 200%;font-weight: bold;color: yellow;font-family: 'Times New Roman', Times, serif;text-align: center;">User Login Details</h1>
       
<?php
  
  $conn=mysqli_connect("localhost","root","","sss");
  if(mysqli_connect_errno()){
   echo "FAILED TO CONNECT";
}
  
$result = mysqli_query($conn,"SELECT * FROM information");

 echo "<table border=1 >
            <tr>
              <th>User ID</th>
              <th>Password</th>
              <th>Email ID</th>
              <th>OPERATIONS</th> 
            </tr>";
while($row = mysqli_fetch_array($result))
{ 
           echo "<tr>";
              echo "<td>" . $row['userid'] . "</td>"; 
              echo "<td>" . $row['password'] . "</td>";
              echo "<td>" . $row['emailid'] . "</td>";
              echo "<td><a href ='delete.php?ui=$row[userid]'>DELETE</td>";
           echo"</tr>"; 
}
echo "</table>";
mysqli_close($conn); 
?>
    
    </body>
?>    </html>