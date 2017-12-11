
<!-- Get information from browser

$product_name = $_GET["product_name"];
echo"Tôi đã nhận thông tin của bạn, nhưng không thích xử lý"; -->

<?php
include "data_access_helper.php";
header('Content-Type: text/html; charset=UTF-8');
// header "Content-Type: text/html; charset=UTF-8";
$name = "";
$phone = "";
$email = "";
$city = "";
$district = "";
$commune = "";
$address = "";
$note = "";

if(isset($_GET["name"])) {
	$name = $_GET["name"];
}
if(isset($_GET["phone"])) {
	$phone = $_GET["phone"];
}
if(isset($_GET["email"])) {
	$email = $_GET["email"];
}
if(isset($_GET["city"])) {
	$city = $_GET["city"];
}
if(isset($_GET["district"])) {
	$district = $_GET["district"];
}
if(isset($_GET["commune"])) {
	$commune = $_GET["commune"];
}
if(isset($_GET["address"])) {
	$address = $_GET["address"];
}
if(isset($_GET["note"])) {
	$note = $_GET["note"];
}
echo"<h1>Thông tin của quý khách đang chờ xử lý</h1>";


// Insert to DB
$db = new DataAccessHelper;
$db->connect();
$db->executeNonQuery("INSERT INTO Customer(Name,Phone,Email,City,District,Commune,Address,Note) VALUES ('$name',$phone,'$email','$city','$district','$commune','$address','$note');");
$db->close();
echo "<h4>Inserted database sucessfully</h4>";

?>