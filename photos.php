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
$Photos++;

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
           <title> Thawariya Cricket</title>
           <link rel="stylesheet" type="text/css" href="style.css" media ="screen"/>
           <link rel="preconnect" href="https://fonts.gstatic.com">
           <style>
               
               body{
                    background-color:  #002966;
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
           
           <!-- You tube-->
           <a href ="https://www.youtube.com/channel/UCgn5ligzStu_dHjZo1Du9Hw" target="_blank" style="margin-left: 1"> <img src="you_tube.png" width=80 height= 80 style="border-radius: 50% ; margin-left: 95px; margin-top: 10px;" ></a>
            <!-- About section-->
            <a href="login.php" ><img src="Details2_logo.jpg" width=80 height= 80 style="border-radius: 50% ; margin-left: 95px; margin-top: 10px;" ></a>
           
           
            
            </div>
             <!-- my Name section-->
            <h1 style="color:floralwhite; float: left; font-size: 250px; margin-left: 45px; margin-top: 1px;"
                 > BPL-4</h1>
            
           </header>
          
                <!-- Naviga tion section-->
            <nav>
              
              <ul>
                  <li style="margin-left: 10px;"><a href="index.php">Home</a></li>
               <li><a href="Matches.php">Matches</a></li>
                   <!-- points table section-->
               <li><a href="Points.php" >Points Table</a></li>
                   <!-- Skills section-->
               <li><a href="Prize.php">Prizes</a></li>
                   <!-- projects section-->
                <li><a href="photos.php">Photos</a></li>
                  
                 
               </ul>
               
           </nav>
           
            <!-- Navigation end-->
           <br><br><br><br><br><br><br>
           
           <img style="margin-top: 400px;width: 550px;height: 550px;border-radius: 50%;" src="parma.png">
           <img class="photos" style="margin-top: 400px;border-radius: 50%;width: 550px;height: 550px;float: none;" src="babu.png">
            <img style="margin-top: 40px;width: 550px;height: 550px;border-radius: 50%;" src="bharat1.png">
           <img class="photos" style="margin-top: 40px;border-radius: 50%;width: 550px;height: 550px;float: none;" src="jagdish.png">
            <img style="margin-top: 40px;width: 550px;height: 550px;border-radius: 50%;" src="lala.png">
           <img class="photos" style="margin-top: 40px;border-radius: 50%;width: 550px;height: 550px;float: none;" src="anil.png">
           <img style="margin-top: 100px;float: none;" width="900px" height="900px" src="photo2.png">
           <br><br>
           <br>
             <img class="photos" style="margin-top: 100px;border-radius: 50%;" src="photo1.png">
           <img class="photos" style="margin-top: 100px;border-radius: 50%;width: 450px;height: 450px;float: none;" src="bharat.jpg">
           </body>
           </html>