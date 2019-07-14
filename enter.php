<html>
<head>
  <meta charset = "UTF-8" />
  <link rel="stylesheet" href="style.css">
  <title>Online Blood Bank|Home</title>
</head>
<body>
  <?php
    $con=mysqli_connect('localhost','root', '', 'mydb');
    if(!$con)
    {
      echo "No connection";
    }
    mysqli_select_db($con,"mydb");
    $sql="INSERT INTO donor (Name,Location,Phone,Blood,Gender,Address,Pass) values ('$_POST[name]','$_POST[loc]','$_POST[phno]','$_POST[bg]','$_POST[gender]','$_POST[address]','$_POST[p1]')";
    mysqli_query($con,$sql);
    mysqli_close($con);
    ?>
    <div id="msg" >
      <h1>You are now an official donor :)</h1>
    </div>
  </body>
</html>
