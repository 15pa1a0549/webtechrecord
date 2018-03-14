<?php
require "con.php";
$city=$_POST["city"];
$movie=$_POST["movie"];
$theatre=$_POST["theatre"];
$not=$_POST["tickets"];
$date=$_POST["dat"];
$sql="INSERT INTO book  VALUES ('$city','$movie','$theatre','$not','$date')";
$result=$mysqli->query($sql) or die("Error error ocured try again");




?>

<style>

.b{
  text-align:center;
  background-color:darkblue;
  color:white;

}

.col{
 background-color:lightblue;
 margin-left:20%;
 margin-right:20%; 
 
}

</style>


<center>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="tickets.css">    </head>
  <body><div class="b">
    <h1>my movies</h1></div>
    <div class="col">
    select city<select name ="city"> 
      <option value="Bhimavaram" >Bhimavaram</option>
          <option value="Rajahmundry" >Rajahmundry</option>
          <option value="Hyderbad" >Hyderbad</option>  
          <option value="Kakinada" >kakinda</option>
        </select><br><br>
     select movie<select name="movies"> 
      <option value="Rangasthalam" >rangasthalam </option>
          <option value="Sara Narasimha Reddy">sara narasimha reddy</option>
          <option value="Saaho" >saahho</option>  
          <option value="Kaala" >kaala</option>
        </select><br><br>
    select theatres<select name="theaters" > 
      <option value="All" >All </option>
          <option value="PvP">PvP</option>
          <option value="Geetha Multiplex" >geetha multiplux</option>  
          <option value="Avg Movies" >Avg movies</option>
        </select><br><br>
         select no of tickets<select name="not" > 
      <option value="1" >1 </option>
          <option value="2">2</option>
          <option value="3" >3</option>  
          <option value="4" >4</option>
        </select><br><br>
     Date <input name="dat"type="date" id="myDate" value="#"><br>
     <a href="seats.html">done</a>
     <center>
     </div>
  </body>
  </html>
  s
