<?php 

$dns="mysql:host=sql307.epizy.com;dbname=epiz_29301892_cricket";
$username="epiz_29301892";
$password="itoGnKNCI3w";
$db= new PDO($dns, $username, $password);

$Home=0;
$Matches=0;
$Points=0;
$Prize=0;
$Photos=0;
$login=0;
$Calling=0;
$Whatsapp=0;


$dns="mysql:host=sql307.epizy.com;dbname=epiz_29301892_cricket";
$username="epiz_29301892";
$password="itoGnKNCI3w";
$db= new PDO($dns, $username, $password);

$query="SELECT * FROM View WHERE 1;";
  $statement=$db->prepare($query);
  //Execute
  $statement->execute();

 while($result = $statement->fetch())
 {
    $Home=$result['HOME'];
$Matches=$result['MATCHES'];
$Points=$result['POINTS'];
$Prize=$result['PRIZE'];
$Photos=$result['PHOTOS'];
$Login=$result['LOGIN'];
$Calling=$result['CALLING'];
$Whatsapp=$result['WHATSAPP'];
 }
$Matches++;

 $query= "UPDATE View SET HOME='$Home',MATCHES='$Matches',POINTS='$Points', PRIZE='$Prize', PHOTOS='$Photos', LOGIN='$Login', CALLING='$Calling', WHATSAPP='$Whatsapp' WHERE 1;";
   $statement=$db->prepare($query);
  //Execute
  $statement->execute(); 
?>




<?php 

$dns="mysql:host=sql307.epizy.com;dbname=epiz_29301892_cricket";
$username="epiz_29301892";
$password="itoGnKNCI3w";
$db= new PDO($dns, $username, $password);

$query="SELECT * FROM Matches ORDER BY NUMBER DESC;";
  $statement=$db->prepare($query);
  //Execute
  $statement->execute();
$i=0;
?>

<!DOCTYPE html>

<html>
       <head>
    
           <meta charset="utf-8">

           <meta name="viewport" content="width=1300">
           <meta name="description" content="Description">
           <meta name="google-site-verification" content="agal6_gE8A0lzXbkUWB7wCbR5oiwHGuHZXYYdxvDMXk" />
           <title> Thawariya Cricket</title>
           <link rel="stylesheet" type="text/css" href="style.css" media ="screen"/>
           <link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
           <link rel="preconnect" href="https://fonts.gstatic.com">
           <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
           <style>
           
               body{
                   
               background-repeat: no-repeat;
             background-size: 1300px 5040px;
                   background-color:  azure;
               }
               .div{
                   
                   height: 730px;
                   background-color: azure;
                   border-radius: 50px;
                   background-image: url(newvs.jpg);
                   background-repeat: no-repeat;
                   background-size: 1300px 730px;
               }
               .date{
                   float: left;margin-left: 50px;font-size: 30px;font-family: 'Karla', sans-serif;
                   width: 300px;color: azure;
               }
               .match{
                
                   font-size: 90px;
                   border : 5px solid black;
                   width: 500px;
                   margin-top: 90px;
                   margin-left: 400px;
                   background-color:azure;
                   border-radius: 30px;  
                   
               }
               .team{
                   width: 250px;
                   color: white;
                   font-size: 70px;
                   margin-top: 0px;
                   float: left;
                   font-family: 'Roboto Condensed', sans-serif;
                   font-display: fallback;
               }
               .win{
                   font-size: 125px;
                   color: orange;
                   margin-top: 0px;
               }
                  form input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 68%;
                  height: 78px;
                  font-size: 40px;
                  width: 1000px;
  background: #f1f1f1;
}

form button {
  float: left;
  width: 30%;
    height: 100px;
  padding: 10px;
  background: #2196F3;
  color: white;
    width: 278px;
  font-size: 17px;
  border: 1px solid grey;
    font-size: 40px;
  border-left: none;
  cursor: pointer;
}

form. button:hover {
  background: #0b7dda;
}
            
           
           </style>
       </head>
    
       <body>
    
        <header>
            
             <!-- my image -->
             <img src="Logo.png"  height="400px" width="500px" >
       <div>
           
           
          <!-- call section-->
           <a href ="call.html" target="_blank" style="margin-left: 1"> <img src="1call.png" width=80 height= 80 style="border-radius: 50%; margin-top: 10px;" ></a>
           
            <!-- whatsapp  section-->
           <p style=" margin-left: 20px; "></p>
           <a href="whatsapp.html"  target="_blank"><img src="whatsapp_logo.jpg" width=80 height= 80 style="border-radius: 50% ; margin-left: 95px;margin-top: 10px;" ></a>
            <p style=" margin-left: 20px; "></p>
            <!-- Location section-->
            <a href="https://goo.gl/maps/DJ72mAfMPy6Z37166" target="_blank" ><img src="Address.png" width=80 height= 80 style="border-radius: 50% ; margin-left: 95px; margin-top: 10px; " ></a>
           
           <!-- Live -->
           <a href ="https://www.facebook.com/thawariya/" target="_blank" style="margin-left: 1"> <img src="live3.jpg" width=80 height= 80 style="border-radius: 50% ; margin-left: 95px; margin-top: 10px;" ></a>
           <!-- About section-->
            <a href="login.php" ><img src="Details2_logo.jpg" width=80 height= 80 style="border-radius: 50% ; margin-left: 95px; margin-top: 10px;" ></a>
           
           
            
            </div>
             <!-- my Name section-->
            <h1 style="color: floralwhite; float: left; font-size: 250px; margin-left: 45px; margin-top: 1px;"
                 > BPL-4</h1>
            
           </header>
          
                <!-- Navigation section-->
           <nav>
              
              <ul>
                  <li style="margin-left: 10px;"><a href="index.php">Home</a></li>
               <li><a href="Matches.php">Matches</a></li>
                   <!-- points table section-->
               <li><a href="Points.php" onfocus="23px;">Points Table</a></li>
                   <!-- Skills section-->
               <li><a href="Prize.php">Prizes</a></li>
                   <!-- projects section-->
               <li><a href="photos.php">Photos</a></li>
                  
                 
               </ul>
               
           </nav>
           
            <!-- Navigation end-->
           <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
           
           <form action="search.php" method="post">
  <input type="text" placeholder="Enter Name of Team or Match No." name="search" required>
  <button name="submit" type="submit">Search<i class="fa fa-search"></i></button>
</form>
           
           <br><br><br><br><br><br><br><br>
           
           <?php
               
               while($result = $statement->fetch())
               {
                 echo '<div class="div">
               <br>
               <h2 class="date">Date:'; 
                   echo $result['DATE'];
               echo '</h2>
                <h2 class="date" style="margin-left: 600px;">Time: '; 
                   echo $result['TIME'];
               echo '</h2>
               <h1 class="match">Match-';
                   echo $result['NUMBER'];
               echo '</h1>
               <h2 class="team" style="margin-left: 100px">';
                  echo $result['TEAM1'];
                     echo '<br>'; 
                   echo $result['SCORE1'];
               echo '</h2>
                <h2 class="team" style="margin-left: 500px;">';
                   echo $result['TEAM2'];
                   echo ' <br>';
                   echo $result['SCORE2'];
               echo '</h2><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';

               echo '<h1 class="win">';
               if($result['WON']==1)
                 echo $result['TEAM1'];
               else
                 echo $result['TEAM2'];
               
                echo ' Won !
               
               </h1> 
           
           </div>
           <br><br>';
                   $i=1;
           }
            if($i==0)
              {
                
               echo '<div style="background-color: azure;" >
           
            <h1>Please wait <br> Matches start from 17th August</h1>
           
           
           </div>';
                
                
            }

           ?>
           
    </body>
</html>