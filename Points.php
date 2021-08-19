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
$Points++;

 $query= "UPDATE View SET HOME='$Home',MATCHES='$Matches',POINTS='$Points', PRIZE='$Prize', PHOTOS='$Photos', LOGIN='$Login', CALLING='$Calling', WHATSAPP='$Whatsapp' WHERE 1;";
   $statement=$db->prepare($query);
  //Execute
  $statement->execute(); 
?>






<?php 
$dns="mysql:host=sql307.epizy.com;dbname=epiz_29301892_cricket";
$username="epiz_29301892";
$password="itoGnKNCI3w";
$query="SELECT * FROM points_table ORDER BY POINTS DESC;";
 $db= new PDO($dns, $username, $password);
  $statement=$db->prepare($query);
  //Execute
  $statement->execute();
  
$i=1;
?>


<!DOCTYPE html>

<html>
       <head>
    
           <meta charset="utf-8">

           
           <meta name="viewport" content="width=1300">
           <meta name="google-site-verification" content="agal6_gE8A0lzXbkUWB7wCbR5oiwHGuHZXYYdxvDMXk" />
           <meta name="description" content="Description">
           <title>Points table</title>
           <link rel="stylesheet" type="text/css" href="style.css" media ="screen"/>
           <link rel="preconnect" href="https://fonts.gstatic.com">
            <link rel="preconnect" href="https://fonts.googleapis.com">
       </head>
    
       <style>
           
           body{
               text-align: center;
               margin: 0 auto;
               background-color: dimgray;
               background-color:  #002966;
             background-size: 1300px 3040px;
           }
           table{
               background-color: white;
               border-radius: 20px;
           }
           th{
               font-size:35px;
               background-color:bisque;
               font-style: normal;
               
           }
           tr{
               font-size:35px;
               background-color: lightblue;
               font-family: 'Roboto Slab', serif;
           }
           td{
               font-family: 'Heebo', sans-serif;
           }
           section{
              
               position: fixed;
               top: 400px;
              
               background-image: url(back.jpg);
               background-repeat: no-repeat;
             background-size: 1300px 2040px;
               width: 1300px;
           }
   
   
      </style>
     

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
           
           <!-- You tube-->
           <a href ="https://www.youtube.com/channel/UCgn5ligzStu_dHjZo1Du9Hw" target="_blank" style="margin-left: 1"> <img src="you_tube.png" width=80 height= 80 style="border-radius: 50% ; margin-left: 95px; margin-top: 10px;" ></a>
           
             <p style=" margin-left: 20px; "></p>
            <!-- About section-->
            <a href="login.php" ><img src="Details2_logo.jpg" width=80 height= 80 style="border-radius: 50% ; margin-left: 95px; margin-top: 10px;" ></a>
           
           
            
            </div>
             <!-- my Name section-->
            <h1 style="color: floralwhite; float: left; font-size: 250px; margin-left: 45px; margin-top: 1px;"
                 > BPL-4</h1>
            
           </header>
           <section>
               <!-- navigation -->
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
               <!--navigation end -->
          <br><br>
           
           <h1 style="background-color: white; font-size:50px;width: 350px;;border-radius: 20px;margin-left: 500px">Points Table</h1>
    
           </section>
           <hr><hr><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
           
           <table  style="width: 1300px;" cellpadding="40x" >
             
           <tr style="position:sticky; top: 575px">
               <th style="border-top-left-radius: 20px;">RANK</th>
               <th>TEAM</th>
               <th>MATCHES</th>
               <th>WON</th>
               <th>LOSS</th>
               <th style="border-top-right-radius: 20px;">POINTS</th>
            </tr>
            
               <?php
               
               while($result = $statement->fetch())
               {
               echo '<tr>';
                   echo '<td>'; 
                   echo $i++;
                   echo '</td>';
                   
                    echo '<td>'; 
                   echo $result['TEAM'];
                   echo '</td>';
                   
                    echo '<td>'; 
                   echo $result['MATCHES'];
                   echo '</td>';
                   
                    echo '<td>'; 
                   echo $result['WON'];
                   echo '</td>';
                   
                    echo '<td>'; 
                   echo $result['LOSS'];
                   echo '</td>';
                   
                    echo '<td>'; 
                   echo $result['POINTS'];
                   echo '</td>';
                   
               echo '</tr>';
               }
               if($i==1)
               {
                   echo '<div style="background-color: azure; magin-top:150px" >
           
            <h1>Please wait <br> Matches start from 17th August</h1>
           
           
           </div>';
               }
               ?>
           
           </table>
           <br>
          
    </body>