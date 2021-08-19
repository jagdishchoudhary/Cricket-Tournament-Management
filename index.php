<?php 
//connect your database

//connection done

$Home=0;
$Matches=0;
$Points=0;
$Prize=0;
$Photos=0;
$login=0;
$Calling=0;
$Whatsapp=0;

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
$Home=$Home+1;

 $query= "UPDATE View SET HOME='$Home',MATCHES='$Matches',POINTS='$Points', PRIZE='$Prize', PHOTOS='$Photos', LOGIN='$Login', CALLING='$Calling', WHATSAPP='$Whatsapp' WHERE 1;";
   $statement=$db->prepare($query);
  //Execute
  $statement->execute();
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
           <link rel="preconnect" href="https://fonts.gstatic.com">
           <style>
           
               body{
                 background-color:  #002966;

               background-repeat: no-repeat;
             background-size: 1300px 5040px;
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
             <p style=" margin-left: 20px; "></p>
             <p style=" margin-left: 20px; "></p>
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
           <br><br><br><br><br><br><br>
           
           
               <img width= 1300px; height=1500 src="Poster.jpg">
           <hr>
               <section style="background-color: azure">
               <h1 style="background-color: dimgray;font-size:60px;">Rules & Regulations: </h1>
               
               <p>&#8608 All players of a team must be belong to same village and a player can only play from one team.</p>
               <p>&#8608 All matches will be of 12-12 overs and semifinals and final will be of 14-14 overs.</p>
                   
                <p >&#8608 All of matches will be Knockout matches.</p>
                   
                <p>&#8608 All of the players should come with two Govt. IDs in their first match.</p>
               
               <p >&#8608 All the rules of ICC will be follows except LBW.</p>
               <br><br>
           </section>
           <br><br>
           <hr><br><br>
            <footer style="color: white;background-color:black;width:1300px; bottom:0px;" >

               <strong style="margin-top: 15px;" >@ <a style="text-decoration: none;color:white;" href="#">Jagdish Choudhary All rights reserved. </a></strong>
           </footer>
           
    </body>
