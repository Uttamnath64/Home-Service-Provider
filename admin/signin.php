<?php
$nav=1;
session_start();
require "conn.php";
$mobile = "";
if (isset($_POST['submit'])) {
  $mobilenumber = $_POST['Mobile_Number'];
  $sql = "SELECT * FROM admin_data  WHERE Mobile_Number = '$_POST[mobile_number]' and Password = '$_POST[password]'";  
  $result = mysqli_query($conn, $sql);    
  $count = mysqli_num_rows($result); 
  if($count == 1)
  {  
    $sql_data = "SELECT * FROM admin_data  WHERE Mobile_Number = '$mobilenumber'"; 
    $result = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($result);
    $_SESSION["admin_id"] = $result['Name'];
    header('location: home.php');
  }  
  else
  {  
    echo '<script language="javascript">';
    echo 'alert("Mobile number and password invalid!")';
    echo '</script>';          
  } 
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign In | Home Service Provider</title>
  
  <link rel="stylesheet" type="text/css" href="http://localhost/hsp_web/css/hsp.css">
</head>
<body style="margin-left: 100px; margin-right: 100px;">
  <?php
  if (!isset($_SESSION['Admin_id'])) {
?>
  <section style="margin-top: 100px;" class="text-gray-600 body-font">
    
  <div class="container px-5 py-10 mx-auto flex flex-wrap items-center">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-gray-900">Sign In</h1>
      <p class="leading-relaxed mt-4">Home Service Provider sign in to Continus.</p>
      <p class="leading-relaxed mt-4">“Personal information” identify or contact you such as: name, address, email address, phone number etc. are security.</p>
    </div>
    <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Sign In</h2>
      <div class="relative mb-4">
        <form action="#" method="post" autocomplete="" name="signup_form" onSubmit="return verifyuser()" >
      <div class="relative mb-4">
        <label for="mobile" class="leading-7 text-sm text-gray-600">Mobile Number</label>
        <input required="" type="mobile" id="mobile_number" name="mobile_number" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="password" class="leading-7 text-sm text-gray-600">Password</label>
        <input required="" type="password" id="password" name="password" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <input type="submit" name="submit" value="Sign In" style="text-align: center;" class="text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg">
      </form>
    </div>

  </div>
</section>

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
  }else
  {
    return true;
  }
}

</script>