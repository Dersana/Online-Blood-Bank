<?php
session_start(); //sessionn start for each user
if(isset($_POST['name']))
{
  $user=$_POST['name'];
  $pwd= $_POST['pass'];
  $_SESSION['nam']=$user;
  $_SESSION['pas']=$pwd;
  $con=mysqli_connect('localhost','root','','mydb');
  mysqli_select_db($con,"mydb");
  $sql="SELECT * from donor WHERE NAME like '$user'  AND Pass like '$pwd' ";
  $result=mysqli_query($con,$sql);
  $rows = mysqli_num_rows($result);
  if($rows == 1)
  {
    header("Location:welcome.php");
  }
  else
  {
    echo  "<h1><b>Username/Password is Invalid<b><h1>";
  }
  mysqli_close($con);
}
?>
