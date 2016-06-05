<?php
require("user_class.php");
@$user=new user;
$pre_email=$_POST['preemail'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$birthdate = $_POST['date'];
$nationality =$_POST['nationality'];
$education = $_POST['education'];
$mobile=$_POST['mobile'];
$mode=$_POST['mode'];
$file="contacts.csv";
echo $pre_email;
$list=array($name,$email,$address,$gender,$birthdate,$mobile,$nationality,$education,$mode);
print_r($list);
$user->update_user_info($pre_email,$list,$file);
	
?>