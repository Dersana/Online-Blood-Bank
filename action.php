<html>
<head>
  <meta charset = "UTF-8" />
  <link rel="stylesheet" href="style.css">
  <title>Online Blood Bank|Home</title>
</head>
<body >
  <div id="h">
      <h1>Online Blood Bank</h1>
  </div>
  <br><br>
  <div id="lists">
  <?php
  $con=mysqli_connect('localhost','root', '', 'mydb');
  if(!$con)
  {
   echo "No connection";
  }
  mysqli_select_db($con,"mydb");
  $bloodg=$_POST['bl'];
  $place=$_POST['pla'];
  $sql= "SELECT * FROM donor where Blood like '$bloodg' AND Location like '$place'";
  $result = mysqli_query($con,$sql);
  if(!empty($result))
  {
      while($row = mysqli_fetch_array($result))
        {

                echo  "<i>Name :</i> " . $row['NAME']." <br> " ;
                echo "<i>Place : </i> " .$row['Location']." <br>  ";
                echo "<i>Phone No.</i> :   ".$row['Phone']." <br>    " ;
                echo "<i>Blood group</i> :   ". $row['Blood']." <br>    " ;
                echo "<i>Gender</i>  : ".$row['Gender']."  <br>   ";
                echo "<i>Address </i>  :  ".$row['Address'];
                echo "<br><br><br>";
        }
      mysqli_free_result($result);
      mysqli_close($con);
  }
?>
</div>
</body>
</html>
