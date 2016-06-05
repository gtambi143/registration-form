<?php 
require ("user_class.php");
@ $user=new user;
$file="contacts.csv";
$info=array();
$email=$_POST['email'];
$info=$user->get_info($email,$file);
//print_r($info);
if(!$info)
{
	echo "user not exists";
}
else{
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Custom CSS -->
    <link href="css/blog-post.css" rel="stylesheet">
	<!-- datepicker links -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" media="screen" href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">

	


	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Techvolo Labs</a>
            </div>
            
            <!-- /.navbar-collapse -->
        </div>
		        <!-- /.container -->
    </nav>
	<div class="container">
			<div class="col-md-8 col-md-offset-2">
			<form class="form col-md-12 center-block" method="POST" action="updatedetails.php" enctype="multipart/form-data">
	            <div class="form-group">
					<label>
					   Full Name
					   <span class="asteriskField">
						*
					   </span>
					  </label>
	              <input type="text" class="form-control input" placeholder="Name" name="name" value="<?php echo $info[0]; ?>" required>
	            </div>
	            <div class="form-group">
				<label>
					   Email
					   <span class="asteriskField">
						*
					   </span>
					  </label>
	              
				<input type="email" class="form-control" placeholder="E-mail" name="email" value="<?php echo $info[1]; ?>" required>
	            </div>
	            <div class="form-group">
				<label>
					   Address
					   <span class="asteriskField">
						*
					   </span>
					  </label>
	              <input type="text" class="form-control input" placeholder="Address" name="address" value="<?php echo $info[3]; ?>" required>
	            </div>
	           <div class="form-group">
					<div><b>Gender * </b>&nbsp; &nbsp;  
	               	Male&nbsp;<input type="radio" name="gender" value="Male" checked='true'>&nbsp;&nbsp;&nbsp;
	               Female&nbsp;<input type="radio" name="gender" value="Female" checked='false'>  &nbsp;&nbsp;&nbsp;
	           </div>
			   </div>
	            
				
				
				<div class="form-group" id="datePicker">
					<label >
					   Date
					   <span class="asteriskField">
						*
					   </span>
					  </label>
					<div class="input-group input-append date" >
						<input type="text" class="form-control" name="date" placeholder="Birth Date dd/mm/yy" value="<?php echo $info[5]; ?>"/>
						<span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
					
				</div>
				</div>
				
				
	            <div class="form-group">
				<label>
					   Mobile
					   <span class="asteriskField">
						*
					   </span>
					  </label>
	               <input type="text" class="form-control input" placeholder="Mobile Number" name="mobile" value="<?php echo $info[2]; ?>" required>
	            </div>
	            <div class="form-group">
				<label>
					   Nationality
					   <span class="asteriskField">
						*
					   </span>
					  </label>
	              <input type="text" class="form-control input" placeholder="Nationality" name="nationality" value="<?php echo $info[6]; ?>" required>
	            </div>
				
	            <div class="form-group">
				<label>
					   Educational Background
					   <span class="asteriskField">
						*
					   </span>
					  </label>
	            	<input type="text" class="form-control input" placeholder="Educational Background" value="<?php echo $info[7]; ?>" name="education" required>
	            </div>
				<div class="form-group">
					<div><b>Mode of Communication * </b>&nbsp; &nbsp;  
	               	mobile&nbsp;<input type="radio" name="mode" value="mobile" checked='false'>&nbsp;&nbsp;&nbsp;
	               email&nbsp;<input type="radio" name="mode" value="email" checked='false'>  &nbsp;&nbsp;&nbsp;
				   none&nbsp;<input type="radio" name="mode" value="none" checked='false'>  &nbsp;&nbsp;&nbsp;
	           </div>
			   </div>
	            <div class="form-group">
					<input name="preemail" value="<?php echo $email;?>" type="text" hidden="true"/>
				</div>
	            <div class="form-group">
	              <!-- <button class="btn btn-primary btn-lg btn-block">Sign In</button> -->
				  <input type="submit" class="btn btn-danger btn btn-block" value="Update"></input>
	              
	            </div>
	          </form>
		</div>
	</div>

	          
	     

<script type="text/javascript"
     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 
    <script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript">
      $('#datePicker').datetimepicker({
        format: 'dd/MM/yyyy',
		autoclose: true
      });
    </script>


				
</body>

</html>
<?php
}
?>