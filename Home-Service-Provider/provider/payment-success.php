<?php
    if(isset($_SESSION["provider_id"])){
      header('location: signup.php');
    }
?>
<?php
session_start();
require 'conn.php';
$date=date('Y-m-d');
if (isset($_GET['id'])) {
 if ($_GET['id']!='HSP^234/success') {
 header('location: home.php');
}else{

      $sql="INSERT INTO subscriptions ( Pay, Provider_id, Date_pay ) VALUES ('5000','$_SESSION[provider_id]','$date')";
      if (mysqli_query($conn,$sql)) 
      {
        $sql="UPDATE provider_data SET Subscriptions_date = '$date'";
        mysqli_query($conn,$sql);
        header('location: home.php');
      }  
      else
      {
        echo '<script language="javascript">';
        echo 'alert("subscriptions Feld Try Again.")';
        echo '</script>';
}
}
}else{
header('location: home.php');
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