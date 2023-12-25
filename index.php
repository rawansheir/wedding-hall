<?php
$name=$_REQUEST['name'];
$number=$_REQUEST['number'];
$email=$_REQUEST['email'];
$date=$_REQUEST['date'];
$hallreservation=$_REQUEST['hall reservation'];
$camerman=$_REQUEST['camerman'];
$cake=$_REQUEST['cake'];
$music=$_REQUEST['music'];

if(isset($_POST['submit']))
{
$host="localhost";
$user ="root";
$db="wedding hall";
$password="";

$coon =mysqli_connect($host,$user,$db,$password)

$insert="insert into information values( '$name','$number','$email','$date','$hallreservation','$camerman','$cake','$music' )";
  
mysqli_query($conn,$insert);

if($conn){
    echo("<h1 styl=' color:green ;'>your formis done .</h1>");

}
else
{
    echo("<h1 styl=' color:red ;'>your formis faild .</h1>");  
}







}
?>