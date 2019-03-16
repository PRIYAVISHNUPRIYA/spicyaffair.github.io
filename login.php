<?php
$con= mysqli_connect("localhost","root","","of");/*username pass*/

$uname=$_POST['name'];
$umail=$_POST['email'];
$uadd=$_POST['address'];
$uorder=$_POST['order'];



$sql="insert into list values('$uname','$umail','$uadd','$uorder')";


/*name ='$uname' && email ='$umail' && address ='$uadd' && order ='$uorder';*/
if (mysqli_query($con,$sql) ) {
	
	echo "ORDER SUCCESS!!! WELCOME";
	 /*"ORDER SUCCESS!!! WELCOME";*/
} else{
	echo "ORDER FAILED";
}

?>



