<html>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        <title>
            Rocket League
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
        <h1 style="color: yellow;font-family: 'Times New Roman', Times, serif;font-weight: bold;font-size: 400%;text-align: center;">Rocket League</h1>
        <br>
        <br>
        <br>
        <br>
        <img class="smg" src="https://wallpapercave.com/wp/wp1854243.jpg">
        <br>
        <br>
        <br>
        <br>
        <h1 style="color: yellow;font-family: 'Times New Roman', Times, serif;font-weight: bold;font-size: 200%;text-align: left;">Description :</h1>
        <br>
        <br>
        <p style="color: white;font-family: 'Times New Roman', Times, serif;font-size: 150%;font-weight: bold;text-align: center;">Rocket League is a vehicular soccer video game developed and published by Psyonix. The game was first released for Microsoft Windows and PlayStation 4 in July 2015, with ports for Xbox One and Nintendo Switch being released later on. In June 2016, 505 Games began distributing a physical retail version for PlayStation 4 and Xbox One, with Warner Bros. Interactive Entertainment taking over those duties by the end of 2017. Versions for macOS and Linux were also released in 2016, but support for their online services was dropped in 2020. The game went free-to-play in September 2020.</p>
        <p style="color: white;font-family: 'Times New Roman', Times, serif;font-size: 150%;font-weight: bold;text-align: center;">Described as "soccer, but with rocket-powered cars", Rocket League has up to eight players assigned to each of the two teams, using rocket-powered vehicles to hit a ball into their opponent's goal and score points over the course of a match. The game includes single-player and multiplayer modes which can be played both locally and online, including cross-platform play between all versions. Later updates for the game enabled the ability to modify core rules and added new game modes, including ones based on ice hockey and basketball.

            Rocket League is a sequel to Psyonix's Supersonic Acrobatic Rocket-Powered Battle-Cars,(Also known as SARPBC) a 2008 video game for the PlayStation 3. Battle-Cars received mixed reviews and was not a success, but gained a loyal fan base. Psyonix continued to support themselves through contract development work for other studios while looking to develop a sequel. Psyonix began formal development of Rocket League around 2013, refining the gameplay from Battle-Cars to address criticism and fan input. Psyonix also recognized their lack of marketing from Battle-Cars and engaged in both social media and promotions to market the game, including offering the game for free for PlayStation Plus members on release.</p>
            <br>
            <br>
            <br>
            <br>
            <?php
  
  $conn=mysqli_connect("localhost","root","","sss");
  if(mysqli_connect_errno()){
   echo "FAILED TO CONNECT";
}
  
$result = mysqli_query($conn,"SELECT * FROM gamedata WHERE NAME='Rocket League'");


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
                    <td>Windows 7 (64 bit) or Newer (64 bit) Windows OS</td>
                    <td>2.5 GHz Dual-core</td>
                    <td>4GB</td>
                    <td>NVIDIA GeForce 760, AMD Radeon R7 270X, or better</td>
                    <td>Any</td>
                    <td>20 GB </td>
                  </tr>
            </table>
            <br>
            <br>
            <h1 style="color: yellow;font-family: 'Times New Roman', Times, serif;font-size: 400%;font-weight: bold;text-align: center;">Official Trailer</h1>
            <br>
            <br>
            <iframe class="kggc" style="margin-left: 20%;" width="1080" height="600" src="https://www.youtube.com/embed/OmMF9EDbmQQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
            <br>
            <h1 style="color: yellow;font-family: 'Times New Roman', Times, serif;font-size: 400%;font-weight: bold;text-align: center;">Some famous channels for this title</h1>
            <br>
            <br>
            <div class="con">

                <div class="column">
                <a href="https://www.youtube.com/channel/UCIPPMRA040LQr5QPyJEbmXA">
                <div class="yt">
                    <img class="wall" src="https://1000logos.net/wp-content/uploads/2020/10/MrBeast-Logo.png" alt="MrBeast Gaming">
                    <div class="ytlink">
                      <h1>MrBeast Gaming</h1>
                    </div>
                  </div>
                </div>
                </a>
                <div class="column">
                <a href="https://www.youtube.com/user/TmarTn2">
                    <div class="yt">
                        <img class="wall" src="https://yt3.ggpht.com/ytc/AAUvwnhCENRz8Nkh3MEPtB55yiGjk5iUPLwjKDIvaGWg=s900-c-k-c0x00ffffff-no-rj" alt="TmarTn2">
                        <div class="ytlink">
                          <h1>TmarTn2</h1>
                        </div>
                      </div>
                    </a>
                </div>
                <div class="column">
                    <a href="https://www.youtube.com/user/Throneful">
                        <div class="yt">
                            <img class="wall" src="https://yt3.ggpht.com/ytc/AAUvwniOB4VvWVYfNOFZFzizea1ocUMp5OmQcBcIvy7qVg=s900-c-k-c0x00ffffff-no-rj" alt="Throneful">
                            <div class="ytlink">
                              <h1>Throneful</h1>
                            </div>
                          </div>
                        </a>
                    </div>

            </div>



    </body>
    </html>