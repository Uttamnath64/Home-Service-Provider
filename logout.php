<!DOCTYPE html>
<html>
<head>
	<title>Logout | Home Service Provider</title>
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<?php
session_start();
if (isset($_POST['submit'])) {
  logout();
}
function logout()
{
  unset($_SESSION["id"]);
  header('location: home.php');  
}
  if (isset($_SESSION['id'])) {
  $nav = 4;
include 'header.php';
?>
	<section style="margin-bottom: 23%;" class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
      <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-gray-900">Click On button to logout <br>If you have any issue, send feedback.</h1>
      <form action="#" method="post">
      <input type="submit" name="submit" value="Logout" class="flex-shrink-0 text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg mt-10 sm:mt-0"></form>
    </div>
  </div>
</section>
<?php
include 'bottom.php';
?>
<?php } else {
  header('location: home.php');
}
  ?>
</body>
</html>