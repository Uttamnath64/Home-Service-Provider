<?php
session_start();
$nav=2;
	require "conn.php";
	#$mobile_check = "SELECT * FROM user_data WHERE Mobile_Number = '$mobile'";
	#$res = mysqli_query($conn, $mobile_check);
	function get_provider($conn)
	{
		$output = '';
		$service = $_GET['service'];
		$city = $_GET['city'];
		$sql = "SELECT * FROM provider_data WHERE Technician = '$service' and City = '$city' ";
		$res = mysqli_query($conn, $sql);
		$data = '';
		if (mysqli_num_rows($res) >= 1) {
		while ( $row = mysqli_fetch_assoc($res) ) {
			$data = strtoupper(substr($row['Name'],0,1));
			if (isset($_GET['sub_service']))
				{ 
					$sub_service = $_GET['sub_service']; 
				}
			if (isset($_GET['service']))
				{ 
					$service =  $_GET['service']; 
				}			
			$output .='<div>
				<div class="row2">
					<div class="clo2">
						<div class="user-image">
							<h1 class="img">'.$data.'</h1>
						</div>
					</div>
					<div class="clo2">
						<b><label class="data-name">'.$row['id'].'</label></b>
					</div>
					<div class="clo2">
						<b><label class="data-name">'.$row['Name'].'</label></b>
					</div>
					<div class="clo2">
						<b><label class="data-name">'.$row['Status'].'</label></b>
					</div>
					<div class="clo2">
						<form action="booking.php" method="get">
						<input style="display: none;" type="text" name="provider_id" value ="'.$row['id'].'">
						<input style="display: none;" type="text" name="user_id" value ="'.$_SESSION["id"].'">
						<input style="display: none;" type="text" name="sub_service" value ="'.$sub_service.'">
						<input style="display: none;" type="text" name="service" value ="'.$service.'">
						<input style="display: none;" type="text" name="city" value ="'.$_GET["city"].'">

							<input type="submit" class="search text-white bg-yellow-500 border-0 py-1 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg " name="book" value="Book">
						</form>
					</div>
				</div>
			</div>';
		}
	}else{

		$output = '<div><h1 class="main-name name-data">Service Provider Not Available In Your City</h1></div>';
	}
	return $output;
	}
	function get_citys($conn)
	{
		$sql = "SELECT Name FROM city ";
		$res = mysqli_query($conn, $sql);
		return $res;
	}
	function get_sub_service($conn)
	{
		$sub = $_GET['service'];
		$sql = "SELECT Name FROM sub_service WHERE Service = '$sub' ";
		$res = mysqli_query($conn, $sql);
		return $res;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sub-Service | Home Service Provider</title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=5.0, user-scalable=0">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<style type="text/css">
	body{
	margin-top: 50px;
	text-align: center;
}
.data-name{
	font-size: 20px;
}
.img{
	color: #fff;
    font-size: 22px;
    border-radius: 100px;
}
.user-image{
	background-color: #ff9900;
    border-radius: 100px;
    width: 50px;
    height: 50px;
    padding-left: 18px;
    padding-top: 9px;
}
.row{
	display: inline-flex;
	border-top: 1px solid #efefef;
	border-bottom: 1px solid #efefef ;
	padding: 20px;
}
.row1{
	display: inline-flex;
	margin-top: 5px;
	border-bottom: 1px solid #efefef ;
	padding: 10px;
}
.row2{
	display: inline-flex;
	margin-top: 5px;
	border-bottom: 1px solid #efefef ;
	padding: 10px;
}
.clo{
	margin-right: 30px;
	text-align: left;
}
.clo1{
	width: 170px;
	margin-right: 30px;
	text-align: left;
}
.clo2{
	width: 170px;
	margin-right: 30px;
	text-align: left;
}
.clo1 label{
	font-size: 17px;
}
.form-control{
	margin-top: 4px;
	color: #000;
	background-color: #fff;
	padding: 8px;
	width: 300px !important ;
}
.search{
	margin-top: 4px;
	color: #fff;
	background-color: #ff9900;
	border: none;
	padding: 8px;
	width: 200px;
}
.book{
	margin-top: 4px;
	color: #fff;
	background-color: #ff9900;
	border: none;
	padding: 8px;
	width: 150px;
}
hr{
	color: #efefef;
	margin-top: 20px;
}
.img{
	width: 70px;
	height: 70px;
}
</style>
<body style="height: 100%; margin-left: 100px; margin-right: 100px;">
	<?php
include 'header.php';
?>
	<?php if (isset($_GET['service'])) {
?>
	
		<div style="margin:  50px 100px 0px 100px;">
			<h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900" style="margin-bottom: 50px;">Home Service Provider</h1>
			<div class="row">
				<div class="clo">
					<form action="#" method="get" name="search_data" onsubmit="return validateform();">
					<label  class="lab" >Sub-Service</label><br>
					<select  class="form-control w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="sub_service"  id="sub_service"  >
						
                			<option value=""  >-- Select Sub-Service --</option>
                			<?php $sub = get_sub_service($conn); 
                			 while($row = mysqli_fetch_assoc($sub)) { ?>
                			<option  <?php if (isset($_GET['sub_service'])) { if($_GET['sub_service']== $row['Name']) { ?>selected='selected'<?php } } ?> value="<?= $row['Name'] ?>"> <?= $row['Name'] ?>
                			</option>
                			<?php } ?>
            		</select>
				</div>
				<div class="clo">
					<label class="lab">City</label><br>
					<select class="form-control w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="city" id="city">
                			<option value="">-- Select City --</option>
                				<?php $citys = get_citys($conn); 
                			 while($row = mysqli_fetch_assoc($citys)) { ?>
                			<option <?php if (isset($_GET['city'])) { if($_GET['city']== $row['Name']) { ?>selected='selected'<?php } } ?> value="<?= $row['Name'] ?>"> <?= $row['Name'] ?>
                			</option>
                			<?php } ?>
            		</select>
				</div>
				<div class="clo">
					<label class="lab">Action</label><br>
					<input style="display: none;" type="text" name="service" value ="<?php echo $_GET['service'];?>">
					<input type="submit" name="search" id="search" class="search text-white bg-yellow-500 border-0 py-1 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg  " value="Search">
					</form>
				</div>
			</div>
		</div>
		<div class="row1">
				<div class="clo1">
					<label>Photo</label>
				</div>
				<div class="clo1">
					<label>Id</label>
				</div>
				<div class="clo1">
					<label>Name</label>
				</div>
				<div class="clo1">
					<label>Status</label>
				</div>
				<div class="clo1">
					<label>Action</label>
				</div>
			</div>
			<div style="height: 259px;">
			<?php if (isset($_GET['search'])) {
				echo get_provider($conn);
			}else{
				?><h1  class="main-name name-data"  >Search Now</h1><?php
			} 
			?></div>
			<?php }else{
	header('location: home.php');
} ?>
<?php
include 'bottom.php';
?>
</body>
</html>
<script type="text/javascript">
	function validateform()
{
	if(document.search_data.sub_service.value == "")
	{
		alert("Sub-Service field should not be empty..");
		document.search_data.sub_service.focus();
		return false;
	}
	else if(document.search_data.city.value == "")
	{
		alert("City field should not be empty..");
		document.search_data.city.focus();
		return false;
	}
	else
	{
		return true;
	}
	
}
</script>
