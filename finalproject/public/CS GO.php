<html>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        <title>
            Counter Strike:Global Offensive
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

  .navbar {
      width: 100%;
      background-color:black;
      overflow: hidden;
      position: sticky;
    
    }
    
    /* Navigation links */
    .navbar a {
      float: left;
      padding: 12px;
      transition:0.3s;
      color:yellow;
      text-decoration: none;
      font-size: 17px;
      width: 31.73%; /* Four equal-width links. If you have two links, use 50%, and 33.33% for three links, etc.. */
      text-align: center; /* If you want the text to be centered */
      background-image:linear-gradient(90deg,black 0%,red 50%,black 50%,magenta 100%);
      background-size:200%;
      transition: background-position .3s,color .2s linear;
    transition-delay: 0.0s, 0.15s;
    font-weight:bolder;
    }
    .navbar a:hover{
      color:white;
      cursor:pointer;
      background-position: -100% 200%;
    }
    
    /* Add a background color on mouse-over */
    
    
    
    
    /* Add responsiveness - on screens less than 500px, make the navigation links appear on top of each other, instead of next to each other */
    @media screen and (max-width: 500px) {
      .navbar a {
        float: none;
        display: block;
        width: 100%;
        text-align: left; /* If you want the text to be left-aligned on small screens */
      }
    }
    

  .smg{
      width: 700px;
      height: 400px;
      left: 35px;
  }
  #game {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#game td, #game th {
  border: 1px solid #ddd;
  padding: 8px;
}

#game tr:nth-child(even){background-color: #f2f2f2;}

#game tr:hover {background-color: #ddd;}

#game th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: grey;
  color: white;
}

.kggc{
              width: 60%;
            }

            .con{
  width:100%;
  display:flex;
  flex-direction:row;
  
  }
  
  .con::-webkit-scrollbar {
    display: none;
  }
  
  /* Hide scrollbar for IE, Edge and Firefox */
  .con {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
  }

  .yt {
  position: relative;
  max-width: 800px; /* Maximum width */
  margin: 0 auto; /* Center it */
}

  .ytlink{
    position: absolute; /* Position the background text */
  bottom: 0; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  width: 100%; /* Full width */
  padding: 20px;
  text-align: center ; /* Some padding */
}

.wall{
    height: 300px;
    width: 500px;
}

.column {
  float: left;
  width: 33.33%;
  padding: 10px;
}
</style>
      <img style="float: left;" src="https://cdn.discordapp.com/attachments/759665069746552883/777780569106153482/SquarePic_20201116_11520343.jpg" height="10" width="10">
      <img class="anna" src="https://cdn.discordapp.com/attachments/759665069746552883/777777786811056177/SquarePic_20201116_11355640.jpg" height="10" width="10">
    </head>
    <body>
      <div class="navbar">
        <a href="My_Page.html">Home</a>
        <a class="active" href="Trending.html">Trending</a>
        <a href="News and Updates.html">News and Updates</a>
      </div>
      <br>
      <br>
        <h1 style="color: yellow;font-family: 'Times New Roman', Times, serif;font-weight: bold;font-size: 400%;text-align: center;">Counter Strike:Global Offensive</h1>
        <br>
        <br>
        <br>
        <br>
        <img class="smg" src="https://avante.biz/wp-content/uploads/CS-GO-wallpaper/CS-GO-wallpaper7.jpg">
        <br>
        <br>
        <br>
        <br>
        <h1 style="color: yellow;font-family: 'Times New Roman', Times, serif;font-weight: bold;font-size: 200%;text-align: left;">Description :</h1>
        <br>
        <br>
        <p style="color: white;font-family: 'Times New Roman', Times, serif;font-size: 150%;font-weight: bold;text-align: center;">Counter-Strike: Global Offensive (CS:GO) is a multiplayer first-person shooter video game developed by Valve and Hidden Path Entertainment. It is the fourth game in the Counter-Strike series and was released for Windows, OS X, Xbox 360, and PlayStation 3 in August 2012, while the Linux version was released in 2014.</p>
        <p style="color: white;font-family: 'Times New Roman', Times, serif;font-size: 150%;font-weight: bold;text-align: center;">The game pits two teams against each other: the Terrorists and the Counter-Terrorists. Both sides are tasked with eliminating the other while also completing separate objectives. The Terrorists, depending on the game mode, must either plant the bomb or defend the hostages, while the Counter-Terrorists must either prevent the bomb from being planted, defuse the bomb, or rescue the hostages. There are nine game modes, all of which have distinct characteristics specific to that mode. The game also has matchmaking support that allows players to play on dedicated Valve servers, as well as allowing members of the community to host their own servers with custom maps and game modes. A battle-royale game-mode, "Danger Zone", was introduced in 2018.</p>
            <br>
            <br>
            <br>
            <br>
           <?php
  
  $conn=mysqli_connect("localhost","root","","sss");
  if(mysqli_connect_errno()){
   echo "FAILED TO CONNECT";
}
  
$result = mysqli_query($conn,"SELECT * FROM gamedata WHERE NAME='Counter-Strike: Global Offensive'");


           echo "<table border=1 id=game>
                <tr>
                  <th>Name</th>
                  <th>Developer(s)</th>
                  <th>Publisher(s)</th>
                  <th>Series</th>
                  <th>Engine</th>
                  <th>Platform(s)</th>
                  <th>Release</th>
                  <th>Genre(s)</th>
                  <th>Mode(s)</th>
                  </tr>";


$row = mysqli_fetch_array($result);

echo "<tr>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['Developer(s)'] . "</td>";
echo "<td>" . $row['Publisher(s)'] . "</td>";
echo "<td>" . $row['Series'] . "</td>";
echo "<td>" . $row['Engine'] . "</td>";
echo "<td>" . $row['Platform(s)'] . "</td>";
echo "<td>" . $row['Release'] . "</td>";
echo "<td>" . $row['Genre(s)'] . "</td>";
echo "<td>" . $row['Mode(s)'] . "</td>";

echo "</tr>";


          echo "</table>"

?>

            <br>
            <br>
            <h1 style="color: yellow;font-family: 'Times New Roman', Times, serif;font-size: 400%;font-weight: bold;text-align: center;">Specifications for PC</h1>
            <br>
            <br>
            <table id="game">
                <tr>
                  <th>Operating System</th>
                  <th>CPU</th>
                  <th>GPU</th>
                  <th>Memory</th>
                  <th>Sound Card</th>
                  <th>HDD/SSD Space</th>
                </tr>
                <tr>
                    <td>Windows XP 32 bit. The game can also run on Windows Vista and Windows 7</td>
                    <td>Intel® Core™ 2 Duo E6600 or AMD Phenom™ X3 8750 processor or better</td>
                    <td>2GB</td>
                    <td>Video card must be 256 MB or more and should be a DirectX 9-compatible with support for Pixel Shader 3.0</td>
                    <td>100 Percent DirectX 9 compatible</td>
                    <td>15 GB</td>
                  </tr>
            </table>
            <br>
            <br>
            <h1 style="color: yellow;font-family: 'Times New Roman', Times, serif;font-size: 400%;font-weight: bold;text-align: center;">Official Trailer</h1>
            <br>
            <br>
            <iframe class="kggc" style="margin-left: 20%;" width="1080" height="600" src="https://www.youtube.com/embed/edYCtaNueQY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
            <br>
            <h1 style="color: yellow;font-family: 'Times New Roman', Times, serif;font-size: 400%;font-weight: bold;text-align: center;">Some famous channels for this title</h1>
            <br>
            <br>
            <div class="con">

                <div class="column">
                <a href="https://www.youtube.com/channel/UCfctE9wIF-ZB0fRV375UAsA">
                <div class="yt">
                    <img class="wall" src="https://cdn.discordapp.com/attachments/759665069746552883/779596104407973898/kggc11.jpg" alt="KGGC 11">
                    <div class="ytlink">
                      <h1>KGGC 11</h1>
                    </div>
                  </div>
                </div>
                </a>
                <div class="column">
                <a href="https://www.youtube.com/user/byronlozano">
                    <div class="yt">
                        <img class="wall" src="https://wallpapercave.com/wp/wp2254568.png" alt="Dev1ce">
                        <div class="ytlink">
                          <h1>Dev1ce</h1>
                        </div>
                      </div>
                    </a>
                </div>
                <div class="column">
                    <a href="https://www.youtube.com/channel/UCoz3Kpu5lv-ALhR4h9bDvcw">
                        <div class="yt">
                            <img class="wall" src="https://wallpapercave.com/wp/wp4390730.jpg" alt="Shroud">
                            <div class="ytlink">
                              <h1>Shroud</h1>
                            </div>
                          </div>
                        </a>
                </div>

            </div>



    </body>
    </html>