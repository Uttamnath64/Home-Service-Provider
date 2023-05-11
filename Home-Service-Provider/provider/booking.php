<?php
session_start();
    if(isset($_SESSION["provider_id"])){
      header('location: signup.php');
    }
require 'conn.php';
  $nav=2;
  if (isset($_SESSION['id'])) {
    $sql = "SELECT * FROM user_data  WHERE id = '$_SESSION[id]'"; 
    $result = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($result);
    $name= $result['Name'];
    $mobile= $result['Mobile_Number'];
    $email= $result['Email'];
    $service= $_GET['service'];
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <script type="text/javascript"></script>
</head>
<body>
  <?php
include 'header.php';
?>
<section style=" margin-left: 50px; margin-right: 50px;" class="text-gray-600 body-font relative">
  <div class="container px-5 py-5 mx-auto flex sm:flex-nowrap flex-wrap">
    <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
      <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118106.71283246088!2d73.10304579997413!3d22.322087608659846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc8ab91a3ddab%3A0xac39d3bfe1473fb8!2sVadodara%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1614583353209!5m2!1sen!2sin" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
      <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
        <div class="lg:w-1/2 px-10">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">Name</h2>
          <p class="mt-1 address" jstcache="37" jsan="7.address"><?php echo $name; ?></p>
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">EMAIL</h2>
          <a class="text-yellow-500 leading-relaxed"><?php echo $email; ?></a>
        </div>
        <div class="lg:w-1/2 px-10 mt-4 lg:mt-0">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">MOBILE NO.</h2>
          <p class="leading-relaxed"><?php echo $mobile; ?></p>
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">SERVICE</h2>
          <a class="text-yellow-500 leading-relaxed"><?php echo $service; ?></a>
        </div>
      </div>
    </div>
    <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
      <form action="#" name="verifydata" onSubmit="return verify_data()">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Booking Info</h2>
      <p class="leading-relaxed mb-5 text-gray-600">Service Booking Info Like Address, Date</p>
      <div class="relative mb-4">
        <label for="date" class="leading-7 text-sm text-gray-600">Date</label>
        <input type="date" id="date" name="date" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="address" class="leading-7 text-sm text-gray-600">Address</label>
        <input type="address" id="address" name="address" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="description" class="leading-7 text-sm text-gray-600">Description</label>
        <textarea id="description" name="description" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      </div>
      <strong><input type="submit" style="width: 100%;" value="Book Now" class="text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg "> </strong>
      <p class="text-xs text-gray-500 mt-3">*All fields are required</p>
    </div>
  </div>
</section>
<?php
include 'bottom.php';
?>
</body>
</html>
<script type="text/javascript">
  function verify_data() {
    if(document.verifydata.date.value == "")
  {
    alert("Date field should not be empty..");
    document.verifydata.date.focus();
    return false;
  }else if(document.verifydata.address.value == "")
  {
    alert("Address field should not be empty..");
    document.verifydata.address.focus();
    return false;
  }else if(document.verifydata.description.value == "")
  {
    alert("Description field should not be empty..");
    document.verifydata.description.focus();
    return false;
  }else{
    return true;
  }

  }
</script>