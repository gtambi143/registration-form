<?php
require('user_class.php');
if ( (isset($_POST['email'])) and (!empty($_POST['email'])))
{

     
     $email = $_POST['email'];
    
	 
	 $file="contacts.csv";  //set the file name here
	 
	 @ $user=new user;
	 
	 if($user->delete_user($email,$file)){
		 echo "deleted successfully";
	 }
	 else{
		 echo "email not found";
	 }
   

}
else{
	echo "data incomplete please fill all the fields in the form";
}


?>
