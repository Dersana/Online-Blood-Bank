<?php
session_start();
$user=$_SESSION['nam'];
$pass=$_SESSION['pas'];
$n=$_POST['name'];
$l=$_POST['loc'];
$ph=$_POST['phno'];
$b=$_POST['bg'];
$g=$_POST['gender'];
$add=$_POST['address'];
$p=$_POST['p1'];
if(isset($_SESSION['nam']) && isset($_POST['loc'])  && isset($_POST['p1']))
{
  $con=mysqli_connect('localhost','root', '', 'mydb');
  if(!$con)
  {
   echo "No connection";
  }
  mysqli_select_db($con,"mydb");
  $sql= "UPDATE donor SET NAME='$user',Location='$l',Phone='$ph',Blood='$b',Gender='$g',Address='$add',Pass='$p' where NAME like '$user' AND Pass like '$pass' ";
  mysqli_query($con,$sql);
  mysqli_close($con);
  echo "Changes have been made !";
}
?>
