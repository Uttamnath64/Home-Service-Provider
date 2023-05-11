<?php
  require_once 'conn.php';
  session_start();
  $sql="SELECT * FROM sub_service WHERE id = $_GET[id]";
  $re = mysqli_query($conn,$sql);
  $results = mysqli_fetch_assoc($re);
    if (isset($_POST['submit'])) {
      $sql="UPDATE sub_service SET Name='$_POST[name]' WHERE id = $_POST[id]";
      if (mysqli_query($conn,$sql)) 
      {
        echo '<script language="javascript">';
        echo 'alert("Submit your feedback")';
        echo '</script>';
        header('location: view_service.php?service='.$results['Service']);
      } 
      else
      {
        echo '<script language="javascript">';
        echo 'alert("Feedback Feld Try Again.")';
        echo '</script>';
      }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sub-Service | Home Service Provider</title>
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<?php
$nav = 4;
include 'header.php';
if (!isset($_SESSION['id'])) {
  header('loction:home.php');
}
?>
	<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Edit Sub-Service</h1>
    </div>
    <div class="block lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
      <div style="width: 44%; margin-right: 28%; margin-left: 28%;" class="relative mb-4">
        <form action="#" method="post" >
        <label for="description" class="leading-7 text-sm text-gray-600">Name</label>
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <input style="height: 40px;" type="text" name="name" value="<?=$results['Name']?>" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"> 
        <strong><input style="width: 100%; margin-top: 10px;" type="submit" name="submit" value="Save" class="text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg"></strong>
      </div>
    </div>
  </div>
</section>
<?php
include 'bottom.php';
?>
</body>
</html>