<?php
require('user_class.php');
if ( (isset($_POST['name'])) and (!empty($_POST['name'])) and (isset($_POST['email'])) and (!empty($_POST['email'])) and(isset($_POST['address'])) 
	and (!empty($_POST['address'])) and (isset($_POST['gender'])) and (!empty($_POST['gender'])) and (isset($_POST['date'])) and (!empty($_POST['date'])) 
	and (isset($_POST['nationality'])) and (!empty($_POST['nationality'])) and (isset($_POST['education'])) and (!empty($_POST['education'])) and 
	(isset($_POST['mobile'])) and (!empty($_POST['mobile'])) )
{

     $name = $_POST['name'];
     $email = $_POST['email'];
     $address = $_POST['address'];
     $gender = $_POST['gender'];
	 $date = $_POST['date'];
     $nationality =$_POST['nationality'];
     $education = $_POST['education'];
	 $mobile=$_POST['mobile'];
	 $mode=$_POST['mode'];
	 
	 $file="contacts.csv";  //set the file name here
	
	 $user=new user($name,$email,$address,$gender,$date,$nationality,$education,$mobile,$mode,$file);
	 
	 //$user->assign_fields($name,$email,$address,$gender,$date,$nationality,$education,$mobile,$mode,$file);
	 
	 $user->make_array();
	 
	 if($user->entry_in_file()){
		 echo "registered successfully";
	 }
	 else{
		 echo "your email is is already registered";
	 }
   

}
else{
	echo "data incomplete please fill all the fields in the form";
}


?>
