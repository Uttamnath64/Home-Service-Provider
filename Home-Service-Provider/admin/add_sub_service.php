<?php
  require_once 'conn.php';
  function get_name($conn)
  {
    $sql = "SELECT Name FROM services  WHERE id = '$_GET[id]'"; 
    $result = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($result);
    $data = $result['Name'];
    return $data;
  }
    if (isset($_POST['submit'])) {
      $data = get_name($conn);
      $sql="INSERT INTO sub_service (Name,Service)
      VALUES ('$_POST[name]','$data')";
      if (mysqli_query($conn,$sql)) 
      {
        echo '<script language="javascript">';
        echo 'alert("Add Service")';
        echo '</script>';
      } 
      else
      {
        echo '<script language="javascript">';
        echo 'alert("Service Feld Try Again.")';
        echo '</script>';
      }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Service | Home Service Provider</title>
</head>
<body>
<?php
session_start();
$nav = 3;
include 'header.php';
if (!isset($_SESSION["admin_id"])) {
  header('location: signin.php');
}
?>
	<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Add Sub-Service</h1>
    </div>
    <div class="block lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
      <div style="width: 44%; margin-right: 28%; margin-left: 28%;" class="relative mb-4">
        <form action="#" method="post" >
        <label for="description" class="leading-7 text-sm text-gray-600">Sub-Service</label>
        <input type="hidden" name="service" value="<?=$_GET['id'] ?> ">
        <input type="text" required="" id="description" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 h-16 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        <strong><input style="width: 100%; margin-top: 50px;" type="submit" name="submit" value="Add Sub-Service" class="text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg"></strong>
      </div>
    </div>
  </div>
</section>
<?php
include 'bottom.php';
?>
</body>
</html>