<?php
  require_once 'conn.php';
    if (isset($_POST['submit'])) {
      $sql="INSERT INTO city (Name)
      VALUES ('$_POST[city]')";
      if (mysqli_query($conn,$sql)) 
      {
        echo '<script language="javascript">';
        echo 'alert("Add Service")';
        echo '</script>';
        $last_id = $conn->insert_id;
        header('location: add_sub_service.php?id='.$last_id);
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
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<?php
session_start();
$nav = 4;
include 'header.php';
if (!isset($_SESSION['id'])) {
  header('loction:home.php');
}
?>
	<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Create Service</h1>
    </div>
    <div class="block lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
      <div style="width: 44%; margin-right: 28%; margin-left: 28%;" class="relative mb-4">
        <form action="#" method="post" >
        <label for="description" class="leading-7 text-sm text-gray-600">City Name</label>
        <input type="text" required="" id="description" name="city" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 h-16 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        <strong><input style="width: 100%; margin-top: 50px;" type="submit" name="submit" value="Create Service" class="text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg"></strong>
      </div>
    </div>
  </div>
</section>
<?php
include 'bottom.php';
?>
</body>
</html>