<?php
session_start();
require "conn.php";
$mobile = "";

$sql = "SELECT * FROM user_data  WHERE id = '$_SESSION[id]'"; 
$result = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($result);
$mobile_g = $result['Mobile_Number'];
$email_g = $result['Email'];
$name_g= $result['Name'];

if (isset($_POST['submit'])) {
      $sql="UPDATE user_data SET Name='$_POST[name]', Mobile_Number='$_POST[mobile_number]', Email='$_POST[email]'  WHERE id=$_SESSION[id]";
      if (mysqli_query($conn,$sql)) 
      {
        header('location: home.php');
      } 
      else
      {
        echo '<script language="javascript">';
        echo 'alert("Profile Edit Feld Try Again.")';
        echo '</script>';
      }
    }
  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Edit | Home Service Provider</title>
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body style="margin-left: 100px; margin-right: 100px;">
  <?php
  $nav =4;
  if (isset($_SESSION['id'])) {
include 'header.php';
?>
  <section class="text-gray-600 body-font">
    
  <div class="container px-5 py-10 mx-auto flex flex-wrap items-center">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-gray-900">Profile Edit</h1>
      <p class="leading-relaxed mt-4">Home Service Provider is much be provide profile edit function.</p>
      <p class="leading-relaxed mt-4">“Personal information” identify or contact you such as: name, address, email address, phone number etc. are security.</p>
    </div>
    <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Profile Edit</h2>
      <div class="relative mb-4">
        <form action="#" method="post" autocomplete="" name="signup_form" onSubmit="return verifyuser()" >
        <label for="name" class="leading-7 text-sm text-gray-600">Full Name</label>
        <input required="" type="text" id="name" name="name" value="<?=$name_g; ?>" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>

      <div class="relative mb-4">
        <label for="mobile"  class="leading-7 text-sm text-gray-600">Mobile Number</label>
        <input value="<?=$mobile_g; ?>" required="" type="mobile" id="mobile_number" name="mobile_number" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input value="<?=$email_g; ?>" required="" type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <input type="submit" name="submit" value="Save Profile" style="text-align: center;" class="text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg">
      </form>
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
<script type="text/javascript">
  var numericExpression = /^[0-9]+$/;
  function verifyuser()
{
  if(!document.signup_form.mobile_number.value.match(numericExpression))
  {
    alert("Mobile Number not valid...");
    document.signup_form.mobile_number.focus();
    return false;
  }
   else if(document.signup_form.mobile_number.value.length != 10)
  {
    alert("Mobile Number length should be 10 digit...");
    document.signup_form.mobile_number.focus();
    return false;
  }
else
  {
    return true;
  }
}

</script>