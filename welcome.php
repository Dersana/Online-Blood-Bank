<?php
session_start();
$name=$_SESSION['nam'];
$passwrd=$_SESSION['pas'];
?>
<html>
  <head>
    <meta charset = "UTF-8" />
    <link rel="stylesheet" href="style.css">
    <title>Profile</title>
  </head>
  <body>
    <div id="h">
        <h1>Online Blood Bank</h1>
    </div>
    <br><br><br>
    <div id="lists">
      <h4 align="center">Welcome <?php echo "<i>$name</i>" ?> ! </h4><br>
      <?php
      if(isset($_SESSION['nam']) )
      {
        $con=mysqli_connect('localhost','root', '', 'mydb');
        if(!$con)
        {
         echo "No connection";
        }
        mysqli_select_db($con,"mydb");
        $sql= "SELECT * FROM donor where NAME like '$name' AND Pass like '$passwrd' ";
        $result = mysqli_query($con,$sql);
        if(!empty($result))
        {
            while($row = mysqli_fetch_array($result))
              {
                echo"<table>";
                      echo  "<b>Name : </b> " . $row['NAME']." <br> " ;
                      echo "<b>Place : </b> " .$row['Location']." <br>  ";
                      echo "<b>Phone No. : </b> ".$row['Phone']." <br>    " ;
                      echo "<b>Blood group : </b>  ". $row['Blood']." <br>    " ;
                      echo "<b>Gender : </b> ".$row['Gender']."  <br>   ";
                      echo "<b>Address : </b> ".$row['Address'];
                      echo "<br><br><br>";
                echo "</table>";
              }
            mysqli_free_result($result);
            mysqli_close($con);
        }
      }
      ?>
        <a href="logout.php"><button type="button">LOGOUT</button></a>
        <a href="update.html"><button type="button">UPDATE</button></a>
    </div>
</body>
</html>
