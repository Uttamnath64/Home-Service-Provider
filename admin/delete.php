
<?php
require 'conn.php';
	$sql="DELETE FROM sub_service WHERE id = '$_GET[id]'";
      if (mysqli_query($conn,$sql)) 
      {
        header('location: view_service.php?service='.$_GET['service']);
      } 
      else
      {
        echo '<script language="javascript">';
        echo 'alert("Reject Feld Try Again.")';
        echo '</script>';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete | Provider</title>
</head>
<body>

</body>
</html>