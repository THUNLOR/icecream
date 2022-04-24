<html>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        <title>
            Valorant
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
        <h1 style="color: yellow;font-family: 'Times New Roman', Times, serif;font-weight: bold;font-size: 400%;text-align: center;">Valorant</h1>
        <br>
        <br>
        <br>
        <br>
        <img class="smg" src="https://images6.alphacoders.com/107/thumb-1920-1072679.jpg">
        <br>
        <br>
        <br>
        <br>
        <h1 style="color: yellow;font-family: 'Times New Roman', Times, serif;font-weight: bold;font-size: 200%;text-align: left;">Description :</h1>
        <br>
        <br>
        <p style="color: white;font-family: 'Times New Roman', Times, serif;font-size: 150%;font-weight: bold;text-align: center;">Valorant (stylized as VALORANT) is a free-to-play multiplayer tactical first-person shooter developed and published by Riot Games, for Microsoft Windows. First teased under the codename Project A in October 2019, the game began a closed beta period with limited access on April 7, 2020, followed by official release on June 2, 2020.</p>
        <p style="color: white;font-family: 'Times New Roman', Times, serif;font-size: 150%;font-weight: bold;text-align: center;">Valorant is a team-based tactical shooter and first-person shooter set in the near-future.[1][2][3][4] Players play as one of a set of agents, characters designed based on several countries and cultures around the world.[4] In the main game mode, players are assigned to either the attacking or defending team with each team having five players on it. Agents have unique abilities, each requiring charges, as well as a unique ultimate ability which requires charging through kills, deaths, or spike actions. Every player starts each round with a "classic" pistol and one or more "signature ability" charge[2]. Other weapons and ability charges can be purchased using an in game economic system which awards money based on the outcome of the previous round, any kills the player is responsible for, and any actions taken with the spike. The game has an assortment of weapons including sidearms, submachine guns, shotguns, machine guns, assault rifles and sniper rifles.[5][6] There are automatic and semi-automatic weapons that have a shooting pattern which has to be controlled by the player in order to be able to shoot accurately.</p>
            <br>
            <br>
            <br>
            <br><?php
  
  $conn=mysqli_connect("localhost","root","","sss");
  if(mysqli_connect_errno()){
   echo "FAILED TO CONNECT";
}
  
$result = mysqli_query($conn,"SELECT * FROM gamedata WHERE NAME='Valorant'");


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
                    <td>Windows 7/8/10 (64-bit)</td>
                    <td>Intel i3-370M</td>
                    <td>4GB</td>
                    <td>Intel HD 3000</td>
                    <td>Any</td>
                    <td>8GB</td>
                  </tr>
            </table>
            <br>
            <br>
            <h1 style="color: yellow;font-family: 'Times New Roman', Times, serif;font-size: 400%;font-weight: bold;text-align: center;">Official Trailer</h1>
            <br>
            <br>
            <iframe class="kggc" style="margin-left: 20%;" width="1080" height="600" src="https://www.youtube.com/embed/e_E9W2vsRbQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
            <br>
            <h1 style="color: yellow;font-family: 'Times New Roman', Times, serif;font-size: 400%;font-weight: bold;text-align: center;">Some famous channels for this title</h1>
            <br>
            <br>
            <div class="con">

                <div class="column">
                <a href="https://www.youtube.com/channel/UCQ4dS_JStXcK3A30isduBbg">
                <div class="yt">
                    <img class="wall" src="https://gaimer.net/wp-content/uploads/2019/06/noted.jpg" alt="noted">
                    <div class="ytlink">
                      <h1>noted</h1>
                    </div>
                  </div>
                </div>
                </a>
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