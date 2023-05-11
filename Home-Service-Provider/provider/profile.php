<?php
    if(isset($_SESSION["provider_id"])){
      header('location: signup.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Profile | Home Service Provider</title>
   <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <?php
  session_start();
  require 'conn.php';
  if (isset($_SESSION['provider_id'])) {
    $sql = "SELECT * FROM provider_data  WHERE id = '$_SESSION[provider_id]'"; 
    $result = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($result);
    $name= $result['Name'];
    $mobile= $result['Mobile_Number'];
    $email= $result['Email'];
  }
  function all_c($conn,$status='')
  {
    if(empty($status))
    {
    $sql = "SELECT count(id) as total FROM complain  WHERE Provider_id = '$_SESSION[provider_id]' ";
    }
    else{
    $sql = "SELECT count(id) as total FROM complain  WHERE Provider_id = '$_SESSION[provider_id]' and Status='$status'";
     } 
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data['total'];
  }
  if (!isset($_SESSION['provider_id'])) {
      header('location:home.php');
  }
  $nav=5;
include 'header.php';
?>
  <div style="margin-top: 20px;" class="text-center mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">Profile</h1>
      <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">Profile and system setting like edit profile, help, feedback and logout.</p>
    </div>
  <section style=" margin-top: -130px; margin-left: 298px; margin-right: 240px;" class="text-gray-600 body-font">
  <div style="" class="container px-5 py-24 mx-auto flex flex-wrap">
    <div class="flex flex-wrap -m-4">
      <div style="text-align: left; width: 100%;" class="p-4 lg:w-1/2 md:w-full">
        <div class="flex border-2  rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
          <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium"><?=$name ?></h2>
            <p class="leading-relaxed text-base"><?=$email ?></p>
            <div style="display: flex;"><div style="width: 130px;" class="p-4 sm:w-1/2 lg:w-1/2 w-1/2">
        <h2 class="title-font font-medium text-3xl text-gray-900"><?=all_c($conn); ?></h2>
        <p class="leading-relaxed">All Complaint  </p>
      </div>
      <div style="width: 130px;" class="p-4 sm:w-1/2 lg:w-1/2 w-1/2">
        <h2 class="title-font font-medium text-3xl text-gray-900"><?=all_c($conn,3); ?></h2>
        <p class="leading-relaxed">Complete </p>
      </div>
      <div style="width: 130px;" class="p-4 sm:w-1/2 lg:w-1/2 w-1/2">
        <h2 class="title-font font-medium text-3xl text-gray-900"><?=all_c($conn,1); ?></h2>
        <p class="leading-relaxed">Pending</p>
      </div>
      <div style="width: 130px;" class="p-4 sm:w-1/2 lg:w-1/2 w-1/2">
        <h2 class="title-font font-medium text-3xl text-gray-900"><?=all_c($conn,2); ?></h2>
        <p class="leading-relaxed">Processing</p>
      </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section style="margin-left: 170px; margin-right: 170px; margin-top: -160px; margin-bottom: -105px;" class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">

    <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
      <a class="p-2 sm:w-1/2 w-full" href="profile_edit.php">
      <div style="width: 100%;" class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Edit Profile</span>
        </div>
      </div>
  </a>
      <a class="p-2 sm:w-1/2 w-full" href="help.php">
      <div style="width: 100%;" class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Help</span>
        </div>
      </div>
  </a>
      <a class="p-2 sm:w-1/2 w-full" href="Feedback.php">
      <div style="width: 100%;" class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Feedback</span>
        </div>
      </div>
  </a>
      <a class="p-2 sm:w-1/2 w-full" href="logout.php">
      <div style="width: 100%;" class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Logout</span>
        </div>
      </div>
  </a>
    </div>
  </div>
</section>
<?php
include 'bottom.php';
?>
</body>
</html>