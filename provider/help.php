<!DOCTYPE html>
<html>
<head>
	<title>Help | Home Service Provider</title>
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
	<?php
	session_start();
  if (isset($_SESSION["provider_id"])) { 
  $nav = 5;
  } else { 
  $nav = 2;
}
include 'header.php';
?>
	<h1 style="margin-bottom: 40%;">Help</h1>
<?php
include 'bottom.php';
?>
</body>
</html>