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
$Login++;

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
             background-size: 1300px 5040px;height: 2000px;
               }
              

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
 form{
     width: 800px;
     margin-left: 200px;
    border-radius: 40px;
     height: 500px;
    }
 .div{
    border-radius: 40px;
     height: 550px;
         }
button {
  background-color: #04AA6D;
  color: white;
  padding: 24px 20px;
  margin: 19px 0;
  border: none;
    
\  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
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
               <li><a href="photos.html">Photos</a></li>
                  
                 
               </ul>
               
           </nav>
           
            <!-- Navigation end-->
           <br><br><br><br><br><br><br>
           <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php


$dns="mysql:host=sql307.epizy.com;dbname=epiz_29301892_cricket";
$username="epiz_29301892";
$password="itoGnKNCI3w";
$query="SELECT * FROM Admin;";
 $db= new PDO($dns, $username, $password);
  $statement=$db->prepare($query);
  //Execute
  $statement->execute();
           $orgi_uname='a';
           $orgi_psw='b';
  while($result = $statement->fetch())
  {$orgi_uname=$result['UserName'];
  $orgi_psw=$result['Password'];}
  $orgi_psw="jd123@123";
$i=0;
        $uname='';
           $psw='';
           $i=0;
if(isset($_POST['submit'])) {
  $uname = $_POST['uname'];
  $psw = $_POST['psw'];
    $i=1;}

if($uname===$orgi_uname && $psw===$orgi_psw)
{
           echo "<p>All good</p><br>";
}
else
{
  echo '<h2 style="font-size: 60px;background-color: dimgray">Login as Admin</h2>
<div class="div">
<form action="Result.php" method="post">
  
      <br>';
      if($i!=0)
      echo '<p style="color: red;font-size: 40px;">*Incorrect Username or Password </p>';
    
    echo '<label for="uname"><b style="font-size: 40px;">Username</b></label>
    <input style="height: 60px;font-size: 30px;" type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b style="font-size: 40px;">Password</b></label>
    <input style="height: 60px;font-size: 30px;" type="password" placeholder="Enter Password" name="psw" required>
        
    <button style="font-size: 40px;" type="submit" name="submit" >Login</button>';
    
    if($i==0)
    {
     echo '<h3>OR</h3>
<a href="#"<h1 style="font-size:40px; color:black; background-color:#ccffee;">Request for Admin</h1> ';} 
echo '</form>';

    }
     echo "</div>

</body>
 </html> ";
 