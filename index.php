<?php
    require_once 'condb.php';

    $sql ="SELECT * FROM test";
    $sqlQ ="SELECT * FROM login";


    $query = mysqli_query($conn,$sql);
    $query1 = mysqli_query($conn,$sqlQ);

    $num = mysqli_num_rows($query);

    $strKeyword = null;
    
    if(isset($_POST["txtKeyword"]))
        {
            $strKeyword = $_POST["txtKeyword"];
        }

    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email']; 
        $password = $_POST['password'];

        $sql2 = 'SELECT * FROM `login` WHERE `email` = "'.$email.'" AND `password` = "'.$password.'"';
         
        $query2 = mysqli_query($conn,$sql2);

        if (!mysqli_num_rows($query2) > 0 ) {
            header( "location: login.php" );
        }
        else {
            header( "location: index.php" );
        }
        $sql ="SELECT * FROM login";
        $user = $_POST['user'];

    }
 
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<style>



    #myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 99; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 100%;
    max-width: 50%
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 100%;
    max-width: 400px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 60px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 400px){
    .modal-content {
        width: 50%;
    }
}
//PPP
.input-group-btn{display: none;}
#search-tablaDatos{width: 100%;}
</style>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <div class="simple-text">
                    <div class="row"> 
                         <!--  <?php
                      
                     //   $wa = mysqli_fetch_assoc($query1)
                       
                       //  echo $wa['user'];
                       
                        ?> -->
                            
                            </div>
               </div>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="index.php">
                        <i class="ti-shopping-cart-full"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.php">
                        <i class="ti-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.php">
                        <i class="ti-view-list-alt"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="typography.php">
                        <i class="ti-text"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.php">
                        <i class="ti-pencil-alt2"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.php">
                        <i class="ti-map"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.php">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.php">
                        <i class="ti-export"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="content">
        <!-- Your Page Content Here -->
       <div class="card-content">
            <div class="box-header">
                <h3 class="box-title">ตารางข้อมูล</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-6">
                            <a class="btn btn-success" href="add_product_insert.php" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มข้อมูล</a>
                            <a class="btn btn-default" href="index.php" role="button"><i class="fa fa-fw fa-refresh"></i> Refresh Data</a>
                        </div>
                        <div class="col-sm-6">
                            <div id="" class="dataTables_filter">
                            <form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
    
        
                
                 
        
                
            
 
      </table>
    </form>
    
         </div>
          </div>
         <?php    
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "dropsheppee";
            
            $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
            // $limit = 5;
            // $page = isset($_GET['page']) || $_GET['page'] > 1 ? ((int)$_GET['page'])*$limit: 0;
            // $sql = "SELECT * FROM test WHERE code_pd LIKE '%".$strKeyword."%' OR name_pd LIKE '%".$strKeyword."%' OR price_pd LIKE '%".$strKeyword."%' LIMIT ".$page.",".$limit."";
             $sql = "SELECT * FROM test WHERE code_pd LIKE '%".$strKeyword."%' OR name_pd LIKE '%".$strKeyword."%' OR price_pd LIKE '%".$strKeyword."%'";
            $query = mysqli_query($conn,$sql);
             
           
        ?>
                  
                    <div class="col-sm-12">   
                            <table class="table table-striped" id="myTable">
                                <thead>
                                   <tr role="row">
                                    <div class="col-sm-3"> 
                                        <th class="sorting" >ภาพ</th>
                                    </div>
                                     <div class="col-sm-5"> 
                                        <th class="sorting"  >รหัสสินค้า</th>
                                    </div>
                                         <div class="col-sm-3"> 
                                        <th class="sorting" >ชื่อสินค้า</th> 
                                    </div>
                                         <div class="col-sm-3"> 
                                        <th class="sorting" >รายละเอียด</th>
                                    </div>
                                         <div class="col-sm-3"> 
                                        <th class="sorting" >ราคา (บาท)</th>
                                   
                                    </div>
                                         <div class="col-sm-3"> 
                                        <th class="sorting">Tool</th>
                                         </div>
                 
                                
                        </tr></div> 
                    </thead>
               </div></div>
                        <?php
                        $i=0;
                        while ($row= mysqli_fetch_assoc($query)){ 
                        $i++;
                        ?>
                     <div class="row">
                     <div class="col-sm-12">
                        <tr>
                            
                                <div class="row">  
                                    <td>
                                    <img src="image/<?=$row['img_pd']?>" width="70" height="70" id="<?=$i?>" img.onclick = function();></td>
                <!-- The Modal -->
                <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img">
                <div id="caption"></div>
                </div>

        <script>    
                // Get the modal
                var modal = document.getElementById('myModal');

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById('<?=$i?>');
                var modalImg = document.getElementById("img");
                var captionText = document.getElementById("caption");
                img.onclick = function(){
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() { 
            modal.style.display = "none";
            }
        </script>

                                
                            </div>
                                 <div class="row"> 
                                     <td><?php echo $row['code_pd']?></td>
                            </div>
                                 <div class="row"> 
                                <td id="eio"><?php echo $row['name_pd']?></td>
                            </div>
                                <div class="row"> 
                                    <td><?php echo $row['detail_pd']?></td>
                            </div>
                                 <div class="row"> 
                                    <td><?php echo $row['price_pd']?></td>
                            </div>
                                <td>
                                      <div class="form-group">
                                        <div class="col-sm-12">
                                        <a class="btn btn-info btn-sm" href="add_product_edit.php?id_pd=<?=$row['id_pd']?>" role="button"><i class="fa fa-pencil" aria-hidden="true"></i></i> แก้ไขข้อมูล</a>
                                    
                                   
                                       
                                   <a class="btn btn-danger btn-sm" href="delete.php?id_pd=<?=$row['id_pd']?>" role="button"><i class="fa fa-fw fa-trash"></i> ลบข้อมูล</a>
                               </div></div>
                                
                                </td>
                            </tr>
                        </div>
                    </div>
                                
                                </div>
                  <?php    
                         }
                        ?>
                </table>
        
                                       
                                    
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>     
                </div>
            </div>
        </nav>


 </div>
</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	/*$.notify({
            	icon: 'ti-gift',
            	message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."

            },{
                type: 'success',
                timer: 4000
            });*/

    	});
	</script>


     <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="./searchAng/pbtable.js"></script>
    <script>
        $(document).ready(function(e) {
            $('#myTable').pbTable({
                selectable: true,
                sortable:true,
                //highlight: true,
                msgSinDatos:'Inline defaults options',
                
            });
        });
    </script>

</html>
