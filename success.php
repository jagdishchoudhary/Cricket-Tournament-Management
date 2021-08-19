<?php 

 $team1='a';
 $team2='b';
 
 $score1='110/4(11.2)';
 $score2='100/3(12.0)';

 if(isset($_POST['submit'])) {
  $team1 = $_POST['team1'];
  $team2 = $_POST['team2'];
  
  $score1 = $_POST['score1'];
  $score2 = $_POST['score2'];
}

 $team1_runs='';
 $team1_wicket='';
$team1_balls='';

$team2_runs='';
 $team2_wicket='';
$team2_balls='';
//runs for team1 
$i=0;
while($score1[$i]!='/')
{$team1_runs=$team1_runs.$score1[$i];
 $i++;}

//wicket for team 1
$i++;
$team1_wicket=$score1[$i];
$i++;
if($score1[$i]!='(')
$team1_wicket=$team1_wicket.$score1[$i];
else
$i--;
$i=$i+2;

//Balls for team1
$team1_overs=$score1[$i];
$i++;
if($score1[$i]!='.')
$team1_overs=$team1_overs.$score1[$i];
else
$i--;

$i=$i+2;

$balls1=$score1[$i];
$team1_balls=6*$team1_overs+$balls1;

//Team2 start
//runs for team2
$i=0;
while($score2[$i]!='/')
{$team2_runs=$team2_runs.$score2[$i];
 $i++;}

//wicket for team 2
$i++;
$team2_wicket=$score2[$i];
$i++;
if($score2[$i]!='(')
$team2_wicket=$team2_wicket.$score2[$i];
else
$i--;
$i=$i+2;

//Balls for team2
$team2_overs=$score2[$i];
$i++;
if($score2[$i]!='.')
$team2_overs=$team2_overs.$score2[$i];
else
$i--;

$i=$i+2;

$balls2=$score2[$i];
$team2_balls=6*$team2_overs+$balls2;
//Differences
$run_diff=$team1_runs-$team2_runs;
$wicket_diff1=10-$team1_wicket;
$wicket_diff2=10-$team2_wicket;
$ball_diff=$team1_balls-$team2_balls;

//Team1 NRR
$team1_NRR=$team1_runs/$team1_balls*6 - $team2_runs/$team2_balls*6;
$team1_NRR=number_format($team1_NRR,2);

//Team2 NRR
$team2_NRR=-$team1_NRR;


//Insertion start




//Insertion end



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
                    background-image: url(1back.jpg);
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
           <a href ="" target="_blank" style="margin-left: 1"> <img src="1call.png" width=80 height= 80 style="border-radius: 50%; margin-top: 10px;" ></a>
           
            <!-- whatsapp  section-->
           <p style=" margin-left: 20px; "></p>
           <a href="#"  target="_blank"><img src="whatsapp_logo.jpg" width=80 height= 80 style="border-radius: 50% ; margin-left: 95px;margin-top: 10px;" ></a>
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
               <li><a href="Points.php">Points Table</a></li>
                   <!-- Skills section-->
               <li><a href="Prize.php">Prizes</a></li>
                   <!-- projects section-->
               <li><a href="photos.php">Photos</a></li>
                  
                 
               </ul>
               
           </nav>
           
            <!-- Navigation end-->
           <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
           
           <?php 

             if(is_numeric($team1_runs) && is_numeric($team2_runs) && is_numeric($team1_wicket) && is_numeric($team1_wicket) )
             {
                //insertion strat
                  
                $dns="mysql:host=sql307.epizy.com;dbname=epiz_29301892_cricket";
$username="epiz_29301892";
$password="itoGnKNCI3w";
 $db= new PDO($dns, $username, $password);
 $win=2;
 if($run_diff>0)
$win=1;
 
 //for team1
 $query="SELECT * FROM points_table WHERE TEAM='$team1';";
  $statement=$db->prepare($query);
  //Execute
  $statement->execute();
  $i=0;
  while($result = $statement->fetch())
  {
      // Already presented
      $i=1;
      $team=$result['TEAM'];
      $matc=$result['MATCHES'];
      $won=$result['WON'];
      $loss=$result['LOSS'];
      $points=$result['POINTS'];
      
      if($win==1)
      {
       $matc++;
      $won++;
      $points=$points+2;
   $query= "UPDATE points_table SET RANK=1,TEAM='$team',MATCHES='$matc', WON='$won', LOSS='$loss', POINTS='$points' WHERE TEAM='$team';";
   $statement=$db->prepare($query);
  //Execute
  $statement->execute(); 
      }
  else
  {
  $matc++;
    $loss++;
    $query= "UPDATE points_table SET RANK=1,TEAM='$team',MATCHES='$matc', WON='$won', LOSS='$loss', POINTS='$points' WHERE TEAM='$team';";
   $statement=$db->prepare($query);
  //Execute
  $statement->execute(); 
  }
   
  }
 
 if($i==0)
 {
    // Not present -> Insert
    if($win==1)
    {
    $query= "INSERT INTO points_table (RANK, TEAM, MATCHES, WON, LOSS, POINTS) VALUES (1,'$team1',1,1,0,2);";
   $statement=$db->prepare($query);
  //Execute
  $statement->execute(); 
    }
else
  {
      $query= "INSERT INTO points_table (RANK, TEAM, MATCHES, WON, LOSS, POINTS) VALUES (1,'$team1',1,0,1,0);";
   $statement=$db->prepare($query);
  //Execute
  $statement->execute();  
  }
    
 }
 
 
 //for team2
 $query="SELECT * FROM points_table WHERE TEAM ='$team2';";
  $statement=$db->prepare($query);
  //Execute
  $statement->execute();
  $i=0;
  while($result = $statement->fetch())
  {
      $i=1;
      // Already presented
      $team=$result['TEAM'];
      $matc=$result['MATCHES'];
      $won=$result['WON'];
      $loss=$result['LOSS'];
      $points=$result['POINTS'];
      
      if($win==2)
      {
       $matc++;
      $won++;
      $points=$points+2;
   $query= "UPDATE points_table SET RANK=1,TEAM='$team',MATCHES='$matc', WON='$won', LOSS='$loss', POINTS='$points' WHERE TEAM='$team';";
   $statement=$db->prepare($query);
  //Execute
  $statement->execute(); 
      }
  else
  {
  $matc++;
    $loss++;
   $query= "UPDATE points_table SET RANK=1, TEAM ='$team', MATCHES='$matc', WON='$won', LOSS='$loss', POINTS='$points' WHERE TEAM='$team';";
   $statement=$db->prepare($query);
   $statement->execute();
  }
   
  }
 
 if($i==0)
 {
    // Not present -> Insert
    if($win==2)
    {
    $query= "INSERT INTO points_table(RANK, TEAM, MATCHES, WON, LOSS, POINTS) VALUES (1,'$team2',1,1,0,2)";
   $statement=$db->prepare($query);
  //Execute
  $statement->execute(); 
    }
  else
  {
      $query= "INSERT INTO points_table (RANK,TEAM, MATCHES, WON, LOSS, POINTS) VALUES (1,'$team2',1,0,1,0)";
   $statement=$db->prepare($query);
  //Execute
  $statement->execute();  
  }
    
 }
//for Matches table insertion
$query="SELECT * FROM Matches;";
$statement=$db->prepare($query);
$statement->execute(); 
$m=1;
while($result = $statement->fetch())  
{$m++;}
                 
//for date
 date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$date=date('d-m-Y'); 
                 
//for time
date_default_timezone_set('Asia/Kolkata');
$time = date("h:i:s");              
                 
 $query= "INSERT INTO Matches (NUMBER,TEAM1, SCORE1, TEAM2, SCORE2,DATE,TIME,WON) VALUES ('$m', '$team1','$score1', '$team2','$score2','$date','$time',$win)";
   $statement=$db->prepare($query);
  //Execute
  $statement->execute(); 
 

                 



                //Insertion end
               echo'<div style="height: 1000px">
               <br>
            <h1 style="font-size: 95px;color: green"> Successfully Inserted !</h1> <br>
              <p style="font-size: 60px">';
              echo $team1;
             echo ":";
                 echo $score1;
                 echo '&nbsp;'; 
                 echo "|";
                 echo '&nbsp;';
                 echo $team2;
                 echo ":";
                 echo $score2;
                 
               
               echo '<br>
    
               </p>';


if($run_diff>0)
{
     if($wicket_diff<0)
    $wicket_diff=-$wicket_diff;
    if($team1_overs!=12 && $team1_wicket!=10)
    {echo '<p style="font-size: 80px" ><b>';
    echo $team1;
    echo ' Won by ';
    echo $wicket_diff1;
    echo ' Wickets</p>';}
    else
    {
    echo '<p style="font-size: 80px" ><b>';
    echo $team1;
    echo ' Won by ';
    echo $run_diff;
    echo' Runs</b></p></div>';}
}
else
{   
    if($wicket_diff<0)
    $wicket_diff=-$wicket_diff;
    $run_diff=-$run_diff;
    if($team2_overs!=12 && $team2_wicket!=10)
    {echo '<p style="font-size: 80px" ><b>';
    echo $team2;
    echo ' Won by ';
    echo $wicket_diff2;
    echo 'Wickets</b></p>';}
    else
    {
    echo '<p style="font-size: 80px" ><b>';
    echo $team2 ;
        echo ' Won by ';
    echo $run_diff;
    echo' Runs</b></p></div>';}
}
}
else
{
   echo'<div style="height: 400px">
           <br>
<h1 style="font-size: 65px;color: green"> Please check format !</h1> <br></div>';
}

 ?>
    </body>
</html>