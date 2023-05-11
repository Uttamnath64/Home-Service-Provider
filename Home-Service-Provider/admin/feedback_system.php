
<?php
	session_start();
require "conn.php";
function make_query($connect)
{
 $query = "SELECT * FROM feedback_system order by id DESC";
 $result = mysqli_query($connect, $query);
 return $result;
}
function user_data($connect,$data)
{
 $query = "SELECT Name FROM user_data WHERE id = '$data'";
 $result = mysqli_query($connect, $query);
 return $result;
}
function provider_data($connect,$data)
{
 $query = "SELECT Name FROM provider_data WHERE id = '$data'";
 $result = mysqli_query($connect, $query);
 return $result;
}
function make_services($connect)
{
 $output = '';
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_assoc($result))
 {
  if ($row["User_id"]==0) {
    $user_name = mysqli_fetch_assoc(provider_data($connect,$row["Provider_id"]));
    $my_name='Provider';
  }
  else{
 	$user_name = mysqli_fetch_assoc(user_data($connect,$row["User_id"]));
  $my_name='User';
 }
 	$output .= '
 	<tr>
    <td><p class="id-ui">'.$row["id"].'</p></td>
    <td>'.$user_name["Name"].' [ '.$my_name.' ] </td>
    <td>'.$row["Description"].'</td>
  </tr>
  ';
}
 return $output;

}
?>
<script type="text/javascript">
	function select() {
		
	}
</script>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback | Admin</title>
	<link rel="stylesheet" type="text/css" href="css//feedback.css">
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
  padding: 15px;
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
.btn{
  padding: 6px 12px 6px 12px;
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
</style>
<body>
  <?php
  $nav=1;
include 'header.php';
?>
	<table>
  <tr>
    <th>Id</th>
    <th>User Name</th>
    <th>Description</th>

  </tr>
  <?php
  	echo make_services($conn) ;
  ?>
  
  
</table>
<?php
include 'bottom.php';
?>
</body>
</html>