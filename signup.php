<?php
$name=$_POST["name"];
$email=$_POST["email"];
$roll=$_POST["roll"];
$course=$_POST["course"];
$password=$_POST["password"];
$datastore=mysqli_connect("localhost:8080","root","",$datastore);

if  ($email==NULL or $password==NULL)
{  echo "Mandatory Fields left empty!!";}

elseif (not (mysqli_query($datastore,"SELECT (Name,Email) FROM registered_users WHERE Email=$email")))
{  mysqli_query($datastore,"INSERT INTO registered_users(Name,Email,RollNo,Course,Password) VALUES ($name,$email,$roll,$course,$password");
   echo "<h1>VERIFICATION PAGE</h1>";
   echo "Name:".$name."<br>";
   echo "Email:".$email."<br>";
   echo "Roll No:".$roll."<br>";
   echo "Course:".$course."<br>";
   echo "Password:".$password."<br>";}

else
{  echo "Already existing account on this mail-id";}

mysqli_close($datastore);
?>
