<?php
$nav=1;
session_start();
require "conn.php";
$mobile = "";
function get_citys($conn)
  {
    $sql = "SELECT Name FROM city ";
    $res = mysqli_query($conn, $sql);
    return $res;
  }
  function get_sub_service($conn)
  {
    $sql = "SELECT Name FROM services ";
    $res = mysqli_query($conn, $sql);
    return $res;
  }
if (isset($_POST['submit'])) {
  $mobile=$_POST['mobile_number'];
  $mobile_check = "SELECT * FROM provider_data WHERE Mobile_Number = '$mobile'";
  $res = mysqli_query($conn, $mobile_check);
  
  if(mysqli_num_rows($res) != 0){
    echo '<script language="javascript">';
    echo 'alert("Mobile Number Already Exists.")';
    echo '</script>';
  }
  else
  {   
      $sql="INSERT INTO provider_data (Name, Mobile_Number, Email, Password, Address, Status, Technician, City, key_id,key_secret)
      VALUES ('$_POST[name]', '$_POST[mobile_number]', '$_POST[email]', '$_POST[password]','$_POST[address]','0','$_POST[service]','$_POST[city]','$_POST[key_id]','$_POST[key_secret]')";
      if (mysqli_query($conn,$sql)) 
      {
        $sql_data = "SELECT * FROM provider_data  WHERE Mobile_Number = '$_POST[mobile_number]'"; 
        $result = mysqli_query($conn, $sql_data);
        $result = mysqli_fetch_assoc($result);
        $_SESSION["provider_id"] = $result['id'];
        header('location: home.php');
      } 
      else
      {
        echo '<script language="javascript">';
        echo 'alert("Sign Up Feld Try Again.")';
        echo '</script>';
      }
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up | Home Service Provider</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body style="margin-left: 100px; margin-right: 100px;">
  <?php
  if (!isset($_SESSION['provider_id'])) {
include 'header.php';
?>
  <section class="text-gray-600 body-font">
    
  <div class="container px-5 py-10 mx-auto flex flex-wrap items-center">
    <div style="width: 33.3%;" class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-gray-900">Sign Up</h1>
      <p class="leading-relaxed mt-4">Home Service Provider is much better when you have an account.</p>
      <p class="leading-relaxed mt-4">“Personal information” identify or contact you such as: name, address, email address, phone number etc. are security.</p>
    </div>
    <div style="width: 66.6%;" class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Sign Up</h2>
      <div style="display: flex;">
      <div style="width: 50%; margin-right: 10px;">
      <div class="relative mb-4">
        <form action="#" method="post" autocomplete="" name="signup_form" onSubmit="return verifyuser()" >
        <label for="name" class="leading-7 text-sm text-gray-600">Full Name</label>
        <input required="" type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>

      <div class="relative mb-4">
        <label for="mobile" class="leading-7 text-sm text-gray-600">Mobile Number</label>
        <input required="" type="mobile" id="mobile_number" name="mobile_number" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input required="" type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Address</label>
        <input required="" type="address" id="address" name="address" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label class="lab" >Service</label><br>
          <select style="height: 40px; margin-top: 5px;" name="service" id="service" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"  >
            
                      <option value=""  >-- Select Service --</option>
                      <?php $sub = get_sub_service($conn); 
                       while($row = mysqli_fetch_assoc($sub)) { ?>
                      <option value="<?= $row['Name'] ?>"> <?= $row['Name'] ?>
                      </option>
                      <?php } ?>
                </select>
      </div>
          </div>
    <div style="width: 50%; margin-left: 10px;">
      <div class="relative mb-4">
        <label class="lab">City</label><br>
          <select style="height: 40px; margin-top: 5px;" id="city" name="city" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                      <option value="">-- Select City --</option>
                        <?php $citys = get_citys($conn); 
                       while($row = mysqli_fetch_assoc($citys)) { ?>
                      <option  value="<?= $row['Name'] ?>"> <?= $row['Name'] ?>
                      </option>
                      <?php } ?>
                </select>
      </div>
      <div class="relative mb-4">
        <label for="key_id" class="leading-7 text-sm text-gray-600">key_id</label>
        <input required="" type="text" id="key_id" name="key_id" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="key_secret" class="leading-7 text-sm text-gray-600">key_secret</label>
        <input required="" type="text" id="key_secret" name="key_secret" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="password" class="leading-7 text-sm text-gray-600">Password</label>
        <input required="" type="password" id="password" name="password" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="password" class="leading-7 text-sm text-gray-600">Confirm Password</label>
        <input required="" type="password" id="con_password" name="con_password" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
    </div>
  </div>
  <input type="submit" name="submit" value="Sign Up" style="text-align: center;" class="text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg">
      </form>
      <div style="display: flex; text-align: center; margin-left: 40%;"><p class="text-xs text-gray-500 mt-3">Already have a account?</p><a href="signin.php" class="text-xs text-yellow-500 mt-3 px-4" href="#">Sign In</a></div>

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
  else if(document.signup_form.service.value == "")
  {
    alert("Service should not be empty..");
    document.signup_form.service.focus();
    return false;
  }
  else if(document.signup_form.city.value.length == "")
  {
    alert("City should not be empty..");
    document.signup_form.city.focus();
    return false;
  }
  else if(document.signup_form.password.value.length <= 6)
  {
    alert("Password length should be more than 6 characters...");
    document.signup_form.password.focus();
    return false;
  }
  else if(document.signup_form.password.value != document.signup_form.con_password.value)
  {
    alert("Password and confirm password should be equal...");
    document.signup_form.con_password.focus();
    return false;
  }else
  {
    return true;
  }
}

</script>