<?php
    if(isset($_SESSION["provider_id"])){
      header('location: signup.php');
    }
?>
<?php
	session_start();
	$nav=2;

require "conn.php";
function make_query($connect)
{
 $query = "SELECT * FROM sub_service WHERE Service = '$_GET[service]' ";
 $result = mysqli_query($connect, $query);
 return $result;
}
function Get_id($connect)
{
 $query = "SELECT id FROM services WHERE Name = '$_GET[service]' ";
 $result = mysqli_query($connect, $query);
 return $result;
}

function make_services($connect)
{
 $output = '';
 $count = 0;
 $result = make_query($connect);
 $jio=mysqli_fetch_assoc(Get_id($connect));
$output .= '
  <tr>
    <td><p class="id-ui">0</p></td>
    <td>'.$_GET["service"].'</td>
    <td>Add New Sub-Service</td>
    <td><a href="add_sub_service.php?id='.$jio['id'].'" class="btn-ff9900">Add</a> </td>
  </tr>
  ';
 while($row = mysqli_fetch_assoc($result))
 {
 	$output .= '
 	<tr>
    <td><p class="id-ui">'.$row["id"].'</p></td>
    <td>'.$row["Service"].'</td>
    <td>'.$row["Name"].'</td>
    <td><a href="edit.php?id='.$row["id"].'" class="btn">Edit</a> <a href="delete.php?id='.$row["id"].'&service='.$_GET['service'].'" class="btn-rej">Delete</a></td>
  </tr>
  ';
}
 return $output;

}
?>

</script>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback | Admin</title>
</head>
<style type="text/css">
  *{
  margin: 0;
  padding: 0;
}
body{
    color: #858585;
    font-family: "euclid_circular_a","Source Sans Pro","Helvetica Neue","Helvetica","Arial",sans-serif;
    text-rendering: optimizeLegibility;
    font-size: 16px;
    line-height: 24px;
}table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.main-span{
  width: 100%;
}
.main-head{
  width: 90%;
  display: inline-flex;
  margin: 40px 40px 10px 40px;
}
#mySelect{
  border-radius: 20px;
  padding: 2px 7px 2px 7px;
}
td, th {
  text-align: left;
  padding: 25px;
}

tr:nth-child(even) {
  background-color: #fafafa;
}
.id-ui{
  background-color: #efefef;
  padding-top: 5px;
  padding-bottom: 5px;
    font-size: 18px;
    text-align: center;
    border-radius: 20px;
}
.btn-rej{
  padding: 6px 12px 6px 12px;
    font-size: 15px;
    background-color: #f44336;
    border-radius: 20px;
    text-decoration: none;
    color: #fff;
}
.btn{
  padding: 6px 12px 6px 12px;
    font-size: 15px;
    background-color: #4caf50;
    border-radius: 20px;
    text-decoration: none;
    color: #fff;
}
.btn-ff9900{
  padding: 6px 46px 6px 46px;
    font-size: 15px;
    background-color: #ff9900;
    border-radius: 20px;
    text-decoration: none;
    color: #fff;
}

.card {
    z-index: 0;
    background-color: #ECEFF1;
    padding-bottom: 20px;
    margin-top: 90px;
    margin-bottom: 90px;
    border-radius: 10px
}

.top {
    padding-top: 40px;
    padding-left: 13% !important;
    padding-right: 13% !important
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: #455A64;
    padding-left: 0px;
    margin-top: 30px
}

#progressbar li {
    list-style-type: none;
    font-size: 13px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400
}

#progressbar .step0:before {
    font-family: FontAwesome;
    content: "\f10c";
    color: #fff
}

#progressbar li:before {
    width: 40px;
    height: 40px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    background: #C5CAE9;
    border-radius: 50%;
    margin: auto;
    padding: 0px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 12px;
    background: #C5CAE9;
    position: absolute;
    left: 0;
    top: 16px;
    z-index: -1
}

#progressbar li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    position: absolute;
    left: -50%
}

#progressbar li:nth-child(2):after,
#progressbar li:nth-child(3):after {
    left: -50%
}

#progressbar li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    position: absolute;
    left: 50%
}

#progressbar li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px
}

#progressbar li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #651FFF
}

#progressbar li.active:before {
    font-family: FontAwesome;
    content: "\f00c"
}

.icon {
    width: 60px;
    height: 60px;
    margin-right: 15px
}

.icon-content {
    padding-bottom: 20px
}

@media screen and (max-width: 992px) {
    .icon-content {
        width: 50%
    }
}
.main-row{
  width: 100%;
  display: flex;
  border: 1px solid #000;
  border-radius: 8px;
  padding: 8px;
}
.name{
  margin-right: 80%;
  margin-left: 3px;
  font-size: 22px;
  color: #000;
  text-transform: uppercase;
}
</style>
<body>
	<?php
	include 'header.php';
  $mydata = mysqli_fetch_assoc(Get_id($conn));
	?>
	<section style="margin-top: -60px; margin-bottom: -150px;" class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div  class="text-center mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">Sub-Services</h1>
    </div>
</div>
</section>
<div class="main-row"><h1 class="name "><?=$_GET['service']?></h1><a href="service_edit_delete.php?file=edit&id=<?=$mydata['id']?>" class="btn">Edit</a> <a href="service_edit_delete.php?file=delete&id=<?=$mydata['id']?>" class="btn-rej">Delete</a></div>
<div >	<table>
  <tr>
    <th>Id</th>
    <th>Service</th>
    <th>Name</th>
    <th>Button</th>

  </tr>
    <div>
  	<?php
  	echo make_services($conn) ;
   ?>
 </div>
</table>
  </div>
  
  
<?php
include 'bottom.php';
?>
</body>
</html>