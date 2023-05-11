<?php 

require_once 'conn.php';
    if (isset($_SESSION["admin_id"])) {
      $sql = "SELECT * FROM admin_data  WHERE Name = '$_SESSION[admin_id]'"; 
          $result = mysqli_query($conn, $sql);
          $result = mysqli_fetch_assoc($result);
          $name= $result['Name'];
          $name_data=strtoupper(substr($name,0,1));

    }
    if (!isset($_SESSION["admin_id"])) {
  header('location: signin.php');
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Header | Home Service Provider</title>
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=5.0, user-scalable=0">
  <link rel="stylesheet" type="text/css" href="http://localhost/hsp_web/css/hsp.css">
</head>
<style type="text/css">
  .acc-icon{
  background-color: #ff9900;
  border-radius: 100px;

}
.acc-img{
  display: block;
  margin-top: 2px;
  margin-bottom: 2px;
  font-size: 22px;
  border-radius: 100px;
  margin-left: 12px;
  margin-right: 12px;
}
.account-data{
  color: #fff;
  display: block;
  width: 15%;
  border: 0.1px solid #efefef;
  height: 100%;
  display: flex;
  border-radius: 20px;
}
.account-data p{
  color: #000;
  display: block;
  margin-top: 5px;
  margin-left: 10px;
}
</style>
<body style="padding: 0px 100px 0px 100px;">
  <header style="border-bottom: 1px solid #efefef;" class="text-gray-600  body-font" >
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-yellow-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span  class="ml-3 text-xl">Admin | Home Service Provider</span>
    </a>
    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400 flex flex-wrap items-center text-base justify-center">
      <a <?php if ($nav==1) { ?> style="border-bottom: 2px solid #ff9900;" <?php } ?> href="home.php"  class="mr-5 <?php if ($nav==1) { ?> text-yellow-500 <?php } ?> hover:text-yellow-500">Home</a>
      <?php if (isset($_SESSION['admin_id'])) { ?>
      <a <?php if ($nav==2) { ?> style="border-bottom: 2px solid #ff9900;" <?php }?>href="complain.php" class="mr-5 <?php if ($nav==2) { ?> text-yellow-500 <?php } ?> hover:text-yellow-500">Complain View</a>
      <a <?php if ($nav==3) { ?> style="border-bottom: 2px solid #ff9900;" <?php }?>href="service.php" class="mr-5 <?php if ($nav==3) { ?> text-yellow-500 <?php } ?> hover:text-yellow-500">Service Manage</a>
  <a <?php if ($nav==4) { ?> style="border-bottom: 2px solid #ff9900;" <?php } ?>href="History.php" class="mr-5 <?php if ($nav==4) { ?> text-yellow-500 <?php } ?> hover:text-yellow-500">City Manage</a>

    <a <?php if ($nav==5) { ?> style="border-bottom: 2px solid #ff9900;" <?php } ?>href="sub.php" class="mr-5 <?php if ($nav==5) { ?> text-yellow-500 <?php } ?> hover:text-yellow-500">subscription</a>
    <a <?php if ($nav==6) { ?> style="border-bottom: 2px solid #ff9900;" <?php } ?>href="payment.php" class="mr-5 <?php if ($nav==6) { ?> text-yellow-500 <?php } ?> hover:text-yellow-500">Payment</a>
    <a <?php if ($nav==7) { ?> style="border-bottom: 2px solid #ff9900;" <?php } ?>href="Logout.php" class="mr-5 <?php if ($nav==7) { ?> text-yellow-500 <?php } ?> hover:text-yellow-500">Logout</a>
    <?php } ?>
    </nav>
    <?php
    if (isset($_SESSION["admin_id"])) { ?>
     <div class="account-data">
    <div class="acc-icon"><h3 class="acc-img"><?php echo $name_data ; ?></h3></div>
        <p><?php echo $name ; ?></p>
    </div>
     <?php } else { ?>
    <a href="signin.php" class="inline-flex bg-yellow-500 items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none text-white rounded text-base mt-4 md:mt-0">Login
    </a>
  <?php } ?>
  </div>
</header>
</body>
</html>