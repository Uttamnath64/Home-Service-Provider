<?php
session_start();
require 'conn.php';
	$sql="UPDATE complain SET Status = 3 where id ='$_GET[id]'";
      if (mysqli_query($conn,$sql)) 
      {
      	   	$sql = "SELECT * FROM complain WHERE id='$_GET[id]'";
    		$result = mysqli_query($conn, $sql);
    		$data = mysqli_fetch_assoc($result);
        $date=date('Y-m-d');
        	$sql="INSERT INTO payment_user (Pay, User_id, Service_id,Provider_id,Date_Payment) VALUES ('$data[price]','$_SESSION[id]', '$_GET[id]','$data[Provider_id]','$date')";
      if (mysqli_query($conn,$sql)) 
      {
        header('location: history_view.php?id='.$_GET[id]);
      } 
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