<?php
require 'conn.php';
if (isset($_GET['c'])) {

    if ($_GET['c']=='p') {
      $sql = "SELECT * FROM provider_data  WHERE id = '$_GET[id]'"; 
      $result = mysqli_query($conn, $sql);
      $result = mysqli_fetch_assoc($result);
    if ($result['pro_b']==0) {
      $sql = "UPDATE provider_data SET pro_b = 1 WHERE id = '$_GET[id]'"; 
      $result = mysqli_query($conn, $sql);
      header('location: provider_profile.php?id='.$_GET['id']);
    }else{
      $sql = "UPDATE provider_data SET pro_b = 0 WHERE id = '$_GET[id]'"; 
      $result = mysqli_query($conn, $sql);
      header('location: provider_profile.php?id='.$_GET['id']);
    }
  }else{
      $sql = "SELECT * FROM user_data  WHERE id = '$_GET[id]'"; 
      $result = mysqli_query($conn, $sql);
      $result = mysqli_fetch_assoc($result);
    if ($result['pro_b']==0) {
      $sql = "UPDATE user_data SET pro_b = 1 WHERE id = '$_GET[id]'"; 
      $result = mysqli_query($conn, $sql);
      header('location: user_profile.php?id='.$_GET['id']);
    }else{
      $sql = "UPDATE user_data SET pro_b = 0 WHERE id = '$_GET[id]'"; 
      $result = mysqli_query($conn, $sql);
      header('location: user_profile.php?id='.$_GET['id']);
    }
  }
  
}
?>