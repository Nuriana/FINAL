<?php  
session_start();
require('../class/class.php');
require('../class/config.php');
$db = new db_config;
$obj = new eshopper($db);
$ip_address = $_SERVER['REMOTE_ADDR'];
$uid = md5($ip_address);
$_SESSION['ip_addressCart'] = $ip_address;
$_SESSION['uidCart'] = $uid;
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PANON BANDUNG</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/price-range.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-offset-4 col-sm-4">
					<div style="margin-top: 206px;" class="features_items text-center"><!--features_items-->
						<img style="margin-bottom:20px" class="img img-responsive" src="../images/home/title.png" alt="">
						<h2 class=" title text-center">Login Administrator</h2>
						<form action="" method="post">
							<div class="form-group">
								<input type="text" name="username" placeholder="Username" class="form-control">
							</div>
							<div class="form-group">
								<input type="password" name="password" placeholder="Password" class="form-control">
							</div>
							<div class="form-group text-center">
								<button type="submit" name="login" class="btn btn-default add-to-cart">Login</button>
							</div>
						</form>
					</div><!--features_items-->					
				</div>
			</div>
		</div>
	</section>

    <script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.scrollUp.min.js"></script>
	<script src="../js/price-range.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>
<?php  
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	{
		$obj->login($username,$password);
	}
}
?>
