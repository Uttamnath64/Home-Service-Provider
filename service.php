<?php
session_start();
$nav=2;
require "conn.php";
function make_query($connect)
{
 $query = "SELECT Name FROM services order by id DESC";
 $result = mysqli_query($connect, $query);
 return $result;
}
function sub_service($value ,$connect)
{
	$sql_data = "SELECT Name,Service FROM sub_service where Service ='$value' limit 4";
 	$result = mysqli_query($connect, $sql_data);
 	$data='';

 	while ( $gg_data = mysqli_fetch_assoc($result)) {
 		$data .=" ".$gg_data['Name'].",";
 	}
 	return $data;
}
function check($value)
{
	if (isset($_SESSION['id'])) {
		$data= "sub-service.php?service=".$value;
	}else{
		$data= "signup.php";
	}
	return $data;
}
function make_services($connect)
{
 $output = '';
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_assoc($result))
 {
 	$ddata=strtoupper(substr($row["Name"],0,1));
 	$mid_data = sub_service($row["Name"],$connect);
 	$mid_data = substr($mid_data,0,(strlen($mid_data)-1));
 	$main_data= check($row["Name"]);
 	$output .= '
  
      <div class="xl:w-1/3 md:w-1/2 p-4">
      <a href="'.$main_data.'">
        <div class="border border-gray-200 p-6 rounded-lg">
          <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 mb-4">
               <h1>'.$ddata.'</h1>
          </div>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">'.$row["Name"].'</h2>
          <p class="leading-relaxed text-base">Sub-Service Like '.$mid_data.', Et.</p>
        </div>
        </a>
      </div>
 
  ';
}
 return $output;

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Service | Home Service Provider</title>
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body style="padding: 0px 100px 0px 100px; ">
<?php
include 'header.php';
?>
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Services</h1>
      <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">What customers are saying about our safety standards.</p>
    </div>
      <div class="flex flex-wrap -m-4" style="margin-bottom: 30px;">
    <?php echo make_services($conn); ?>
          </div>
      <div >

<?php
include 'bottom.php';
?>
</div>
</body>
</html>