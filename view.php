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

?>
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
               <li><a href="photos.html">Photos</a></li>
                  
                 
               </ul>
               
           </nav>
           
            <!-- Navigation end-->
           <br><br><br><br><br><br><br> <br><br><br><br><br><br>
           
          <div style="font-size: 50px;">
           <h1>
              Home : 
               
               <?php 
             echo $Home;
              ?>
              </h1>
              
              <h1>
              Matches : 
               
               <?php 
             echo $Matches;
              ?>
              </h1>
              
              <h1>
              Points Table : 
               
               <?php 
             echo $Points;
              ?>
              </h1>
              
              <h1>
              Prize : 
               
               <?php 
             echo $Prize;
              ?>
              </h1>
              
              <h1>
              Photos : 
               
               <?php 
             echo $Photos;
              ?>
              </h1>
              
              <h1>
              Login : 
               
               <?php 
             echo $Login;
              ?>
              </h1>
           </div>
           
           
    </body></html>