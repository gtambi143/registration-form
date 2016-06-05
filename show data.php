<?php
$file="contacts.csv";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
		<title>Techvolo Labs</title>
        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

    
		<!-- notification -->
		<script src="notification/ohsnap.js"></script>		
        <!-- bootstrap framework -->
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

        <!-- icon sets -->
            <!-- elegant icons -->
                <link href="assets/icons/elegant/style.css" rel="stylesheet" media="screen">
            <!-- elusive icons -->
                <link href="assets/icons/elusive/css/elusive-webfont.css" rel="stylesheet" media="screen">
            <!-- flags -->
                <link rel="stylesheet" href="assets/icons/flags/flags.css">
            <!-- scrollbar -->
                <link rel="stylesheet" href="assets/lib/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">


        <!-- google webfonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

        <!-- main stylesheet -->
		<link href="assets/css/main.min.css" rel="stylesheet" media="screen" id="mainCss">

        <!-- moment.js (date library) -->
        <script src="assets/js/moment-with-langs.min.js"></script>
		
		

    </head>
    <body class="side_menu_active side_menu_expanded">
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
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class ="navbar-nav nav navbar-right">
					 <li>
                        <a href="signup.html" class="glyphicon glyphicon-user" >&nbsp;Signup</a>
                     </li>
					 <li>
                        <a href="admin.html"  class="glyphicon glyphicon-list-alt" >&nbsp;Admin</a>
                     </li>
					 
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
		        <!-- /.container -->
    </nav>


  

 <div id="main_wrapper">
                <div class="container-fluid">
                   <div class="col-md-10" style="margin-left:70px;">
                            <table id="datatable_demo" class="table table-striped table-bordered" cellspacing="0" width="100%">
                               <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
										<th>Gender</th> 
                                        <th>Birth Date</th>
                                        <th>Mobile</th>
                                        <th>Nationality</th>
										<th>Education</th>
                                    </tr>
                                </thead>
								<tbody>
                                    <?php
										$handle=fopen($file,"r");
										$list=array();
										while(!feof($handle))
										{
											$list=fgetcsv($handle);
											echo "<tr>";
											echo "<td>";
											echo $list[0];
											echo "</td>";
											echo "<td>";
											echo $list[1];
											echo "</td>";
											echo "<td>";
											echo $list[3];
											echo "</td>";
											echo "<td>";
											echo $list[4];
											echo "</td>";
											echo "<td>";
											echo $list[5];
											echo "</td>";
											echo "<td>";
											echo $list[2];
											echo "</td>";
											echo "<td>";
											echo $list[6];
											echo "</td>";
											echo "<td>";
											echo $list[7];
											echo "</td>";
											
											echo "</tr>";
											
										}
									?>
                                </tbody>
                            </table>
                        </div>
 
 </div>
 </div>

			
               


 </div>


 <!-- jQuery -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- jQuery Cookie -->
        <script src="assets/js/jqueryCookie.min.js"></script>
        <!-- Bootstrap Framework -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- retina images -->
        <script src="assets/js/retina.min.js"></script>
        <!-- switchery -->
        <script src="assets/lib/switchery/dist/switchery.min.js"></script>
        <!-- typeahead -->
        <script src="assets/lib/typeahead/typeahead.bundle.min.js"></script>
        <!-- fastclick -->
        <script src="assets/js/fastclick.min.js"></script>
        <!-- match height -->
        <script src="assets/lib/jquery-match-height/jquery.matchHeight-min.js"></script>
        <!-- scrollbar -->
        <script src="assets/lib/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

        <!-- Yukon Admin functions -->
        <script src="assets/js/yukon_all.js"></script>

	    <!-- page specific plugins -->

            <!-- c3 charts -->
            <script src="assets/lib/d3/d3.min.js"></script>
            <script src="assets/lib/c3/c3.min.js"></script>
            <!-- vector maps -->
            <script src="assets/lib/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
            <script src="assets/lib/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
            <!-- countUp animation -->
            <script src="assets/js/countUp.min.js"></script>
            <!-- easePie chart -->
            <script src="assets/lib/easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
			
			  <script src="assets/lib/DataTables/media/js/jquery.dataTables.min.js"></script>
            <script src="assets/lib/DataTables/extensions/FixedHeader/js/dataTables.fixedHeader.min.js"></script>
            <script src="assets/lib/DataTables/media/js/dataTables.bootstrap.js"></script>

            <script>
                $(function() {
                    // c3 charts
                    yukon_charts.p_dashboard();
                    // countMeUp
                    yukon_count_up.init();
                    // easy pie chart
                    yukon_easyPie_chart.p_dashboard();
                    // vector maps
                    yukon_vector_maps.p_dashboard();
                    // match height
                    yukon_matchHeight.p_dashboard();
                })
				
				 
                $(function() {
                    // footable
                    yukon_datatables.p_plugins_tables_datatable();
                })
           
            </script>

			




       
 </body>

<!-- Mirrored from yukon-admin.tzdthemes.com/html/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 11:38:21 GMT -->
</html>