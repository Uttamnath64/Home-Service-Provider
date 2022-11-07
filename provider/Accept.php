<?php
    if(isset($_SESSION["provider_id"])){
      header('location: signup.php');
    }
require 'conn.php';
	$sql="UPDATE complain SET Status = 2 where id ='$_GET[id]'";
      if (mysqli_query($conn,$sql)) 
      {
        header('location: new.php');
      } 
      else
      {
        echo '<script language="javascript">';
        echo 'alert("Accept Feld Try Again.")';
        echo '</script>';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Accept | Provider</title>
</head>
<body>

</body>
</html>