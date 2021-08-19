<?php 
           $orgi_uname='Admin';
           $orgi_psw='jd123@123';
$i=0;
        $uname='';
           $psw='';
           $i=0;
if(isset($_POST['submit'])) {
  $uname = $_POST['uname'];
  $psw = $_POST['psw'];
    $i=1;}
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
             background-size: 1300px 5040px;
               }
               .div{
    border-radius: 40px;
     height: 550px;
         }
           
               span{
                   
                  background-color: darkseagreen;
                   width: 500px;
                   height: 400px;
 
               }
               .input{
                    width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
                   height: 60px;font-size: 30px;
               }
               .button{
                    background-color: #04AA6D;
  color: white;
  padding: 24px 20px;
  margin: 19px 0;
  border: none;
  cursor: pointer;
  width: 100%;
 font-size: 40px;
               }
               
               
           </style>
       </head>
    
       <body>
    
        <header>
            
             <!-- my image -->
             <img src="Logo.png"  height="400px" width="500px" >
       <div>
           
           
           <!-- call section-->
           <a href ="" target="_blank" style="margin-left: 1"> <img src="1call.png" width=80 height= 80 style="border-radius: 50%; margin-top: 10px;" ></a>
           
            <!-- whatsapp  section-->
           <p style=" margin-left: 20px; "></p>
           <a href="#"  target="_blank"><img src="whatsapp_logo.jpg" width=80 height= 80 style="border-radius: 50% ; margin-left: 95px;margin-top: 10px;" ></a>
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
           
            <!-- Navigation end-->
           <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
           
           <?php 
              
                if($uname===$orgi_uname && $psw===$orgi_psw)
                   {
           echo '<div style="height: 1000px;">
           <h1 style="font-size: 90px">Welcome Admin ! </h1>
            
               <p style="color: red;margin-right: 700px">*Score will be in proper formetted as given </p>
               <div style="height: 700px;background-color: darkseagreen">
                   <br>
            <h1 style="font-size: 50px;"> Enter result of a Match </h1>
                   
                   <form action="success.php" method="post" style="float: left">
                   
                   <label for="team1"><b style="font-size: 40px;margin-left: 250px;float: left">Team-1</b></label>
                       <label for="team2"><b style="font-size: 40px;margin-left: 330px">Team-2</b></label><br>
    <input style="height: 100px;font-size: 30px;margin-left: 120px;margin-top: 20px; float: left" type="text" placeholder="Name of team " name="team1" required>
                       
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       
                       <input style="height:100px;font-size: 30px;margin-top: 10px;" type="text" placeholder="Name of team " name="team2" required>
                    
                   <br><br><br><br><br><br>
                       <input style="height: 100px;font-size: 30px;margin-left: 120px;margin-top: 30px; float: left" type="text" placeholder="Enter Score eg.110/4(11.2)" name="score1" required>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       
                       <input style="height:100px;font-size: 30px;margin-top: 10px;" type="text" placeholder="Enter Score eg.110/4(11.2)"  name="score2" required>
                   <br><br><br><br><br>
                       
                       <button style="width: 600px;height: 100px;font-size: 70px;background-color: aquamarine;margin-left: 60px" type="submit" name="submit">Enter</button>
                   </form>
                   
                   
                
               
               
               </div>
               
           </div>';

}
else
{

echo '<h2 style="font-size: 60px;background-color: dimgray">Login as Admin</h2>
<div class="div">
<form action="" method="post">
  
      <br> <p style="color: red;font-size: 40px;">*Incorrect Username or Password </p>';
    
    echo '<label for="uname"><b style="font-size: 40px;">Username</b></label>
    <input class="input" type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b style="font-size: 40px;">Password</b></label>
    <input class="input" type="password" placeholder="Enter Password" name="psw" required>
        
    <button class="button" type="submit" name="submit" >Login</button>';

    }
     echo '</div>';

?>
     
            
</body>
</html>