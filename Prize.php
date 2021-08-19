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
$Prize++;

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
           <meta name="google-site-verification" content="agal6_gE8A0lzXbkUWB7wCbR5oiwHGuHZXYYdxvDMXk" />
           <meta name="description" content="Description">
           <title> Thawariya Cricket</title>
           <link rel="stylesheet" type="text/css" href="style.css" media ="screen"/>
           <link rel="preconnect" href="https://fonts.gstatic.com">
           <style>
           
               section div{
                   width: 900px;
                   height: 400px;
                   border-radius: 340px;
                   background-color:cadetblue;
                   margin-left: 200px;
               }
           
               body{
                    background-color:  #002966;
             background-size: 1300px 2040px;
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
           <!-- navigation end -->
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
           
           <section>
           
               <div style="width: 1100px;height: 500px; margin-left: 100px">
               <h1 style="font-size: 200px; margin-top: 70px;">Winner <br> ₹ 15000/-</h1>
                   
               </div>
              
               <div style="width: 1100px;height: 400px; margin-left: 100px">
               <h1 style="font-size: 150px; margin-top: 70px;">Runner-up <br> ₹ 7100/-</h1>
                   
               </div>
               
               <div style="width: 1200px;height: 300px; margin-left: 50px">
               <h1 style="font-size: 120px; margin-top: 70px;">Fair Play Award <br> ₹ 1100/-</h1>
                   
               </div>
               <div style="width: 1200px;height: 300px; margin-left: 50px">
               <h1 style="font-size: 120px; margin-top: 70px;">Man of the series <br> ₹ 1100/-</h1>
                   
               </div>
               <div style="width: 1250px;height: 300px; margin-left: 20px">
               <h1 style="font-size: 120px; margin-top: 70px;">6 sixes in one over <br> ₹ 500/-</h1>
                   
               </div>
               <div style="width: 1100px;height: 300px; margin-left: 100px">
               <h1 style="font-size: 120px; margin-top: 70px;">Hundred <br> ₹ 200/-</h1>
               </div>
               <div style="width: 1100px;height: 250px; margin-left: 100px">
               <h1 style="font-size: 100px; margin-top: 70px"> Hat-trick<br> ₹ 100/-</h1>
                   
               </div>
               <br><br><br><hr><hr><br><br><br><br><br><br>
               
               <br><br><br>
           </section>
           <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
           
           
    </body>