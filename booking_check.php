<?php
session_start();

$link = mysqli_connect('localhost', 'root', '','greenool');
if (!$link) 
{
    die('Could not connect: ' . mysqli_error());
}


$uname=$_SESSION['username'];
$pickup=$_POST['pickup'];
$destination=$_POST['destination'];

$query = "INSERT INTO booking VALUES ('$uname', '$pickup','$destination')";

mysqli_query($link, $query) or die(mysqli_error($link));


//echo password_hash("$password", PASSWORD_DEFAULT)."\n";


mysqli_close($link);
?>
<html>
  <head>
     
  </head>
  <body>
    <link rel="stylesheet" href="indexstyle.css">
   <div class="overlay"></div>
<div class="main">
  
  
<a href="logout.php">Logout</a>

<div id="txt">
 <h3> Booking successful!! </h3>
 
</div>
</div>
<body>


</body>
</html>