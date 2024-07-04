<?php
session_start();
if(isset($_SESSION["user_name"])) {
	header("location:../../index.php");
}else{
?>

	<!DOCTYPE html>
	<html lang="en" >
	<head>
	<meta charset="UTF-8">
	<title>CodePen - A Pen by Mohithpoojary</title>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
	<link rel="stylesheet" href="../../vendor/css/login.css">
	<link rel="stylesheet" href="../../vendor/package/node_modules/sweetalert2/dist/sweetalert2.min.css">
	<link rel="stylesheet" href="../../vendor/template-main/css/style.css">
	</head>
	<body>

	<?php
	include("../../pages/data-service/connect_database.php");
	?>
	<div class="container-fluid">
			<div class="row bg-secondary py-2 px-xl-5">
				<div class="col-lg-6 d-none d-lg-block">
					<div class="d-inline-flex align-items-center">
						<a class="text-dark" href="">FAQs</a>
						<span class="text-muted px-2">|</span>
						<a class="text-dark" href="">Help</a>
						<span class="text-muted px-2">|</span>
						<a class="text-dark" href="">Support</a>
					</div>
				</div>
				<div class="col-lg-6 text-center text-lg-right">
					<div class="d-inline-flex align-items-center">
						<a class="text-dark px-2" href="">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a class="text-dark px-2" href="">
							<i class="fab fa-twitter"></i>
						</a>
						<a class="text-dark px-2" href="">
							<i class="fab fa-linkedin-in"></i>
						</a>
						<a class="text-dark px-2" href="">
							<i class="fab fa-instagram"></i>
						</a>
						<a class="text-dark pl-2" href="">
							<i class="fab fa-youtube"></i>
						</a>
					</div>
				</div>
			</div>
	</div>
	<div class="container-fluid mb-5" id="head-navbar-login" >
			<div class="row border-top " style="">
				<div class="col-lg-12" style="padding-left:0px;padding-right:0px;">
					<nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
						<a href="" class="text-decoration-none d-block d-lg-none">
							<h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
						</a>
						<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
							<div class="navbar-nav mr-auto py-0">
								<a href="index.html" class="nav-item nav-link active">Home</a>
								<a href="shop.html" class="nav-item nav-link">Shop</a>
								<a href="detail.html" class="nav-item nav-link">Shop Detail</a>
								<div class="nav-item dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
									<div class="dropdown-menu rounded-0 m-0">
										<a href="cart.html" class="dropdown-item">Shopping Cart</a>
										<a href="checkout.html" class="dropdown-item">Checkout</a>
									</div>
								</div>
								<a href="contact.html" class="nav-item nav-link">Contact</a>
							</div>
							<div class="navbar-nav ml-auto py-0">
								<a href="pages/login/login.php" class="nav-item nav-link">Login</a>
								<a href="" class="nav-item nav-link">Register</a>
							</div>
						</div>
					</nav>
				
				</div>
			</div>
	</div>
	<div class="container">
		<div class="screen">
			<div class="screen__content">
				<div class="login">
					<div class="login__field">
						<i class="login__icon fas fa-user"></i>
						<input type="text" id="user" class="login__input" placeholder="User name / Email">
					</div>
					<div class="login__field">
						<i class="login__icon fas fa-lock"></i>
						<input type="password" id="password" class="login__input" placeholder="Password">
					</div>
					
					<button class="button login__submit" id="login">
						<span class="button__text">Log In Now</span>
						<i class="button__icon fas fa-chevron-right"></i>
					</button>				
				</div>
				<div class="social-login">
					<h3>log in via</h3>
					<div class="social-icons">
						<a href="#" class="social-login__icon fab fa-instagram"></a>
						<a href="#" class="social-login__icon fab fa-facebook"></a>
						<a href="#" class="social-login__icon fab fa-twitter"></a>
					</div>
				</div>
			</div>
			<div class="screen__background">
				<span class="screen__background__shape screen__background__shape4"></span>
				<span class="screen__background__shape screen__background__shape3"></span>		
				<span class="screen__background__shape screen__background__shape2"></span>
				<span class="screen__background__shape screen__background__shape1"></span>
			</div>		
		</div>
	</div>

		<script src="../../vendor/js/jquery-3.7.1.min.js"></script>
		<script src="../../vendor/package/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
		<script >
			$(document).ready(function() {
				
			});

			
			$( "#login" ).on( "click", function(event) {
				event.preventDefault();
				if($( "#user" ).val()!="" && $( "#password" ).val()!="")
				{
					
					var formData = new FormData();
					formData.append('user', $( "#user" ).val());
					formData.append('password', $( "#password" ).val());
					
					$.ajax({
							url: '../../pages/data-service/check_login.php', // URL ของไฟล์ PHP ที่จะจัดการข้อมูล
							type: 'POST', // วิธีการส่งข้อมูล
							data: formData, // ข้อมูลที่ต้องการส่ง
							contentType: false, // ไม่กำหนด content type
							processData: false, // ไม่ประมวลผลข้อมูล
							dataType: 'json', // คาดหวัง response เป็น JSON
							success: function(response) {
								if(response.answer=="y"){
									Swal.fire({
										icon: "success",
										title: "สามารถเข้าระบบได้",
										text: "ยินดีต้อนรับ",
										confirmButtonColor: "#7C78B8",
									}).then((result) => {
										window.location="../../index.php";
									});
								}
								else if(response.answer=="n"){
									Swal.fire({
										icon: "error",
										title: "ไม่สามารถเข้าสู่ระบบ",
										text: "ไม่พบ user นี้",
										confirmButtonColor: "#7C78B8",
									}).then((result) => {
										console.log("ไม่สามารถเข้าสู่ระบบ");
									});
								}else if(response.answer=="null"){
									Swal.fire({
										icon: "error",
										title: "ไม่สามารถเข้าสู่ระบบ",
										text: "การเชื่อมต่อฐานข้อมูลมีปัญหา",
										confirmButtonColor: "#7C78B8",
									}).then((result) => {
										console.log("การเชื่อมต่อฐานข้อมูลมีปัญหา");
									});
								}
								console.log(response.answer);
								console.log(response.user);
							},
							error: function(xhr, status, error) {
								console.log(xhr);
								console.log(error);
								Swal.fire({
										icon: "error",
										title: "ไม่สามารถเข้าสู่ระบบs",
										text: "การเชื่อมต่อฐานข้อมูลมีปัญหาs",
										confirmButtonColor: "#7C78B8",
									}).then((result) => {
										console.log("การเชื่อมต่อฐานข้อมูลมีปัญหา");
									});
							}
					});
				}else{
					
				}
			} );
		</script>
	</body>
	</html>
<?php
}
?>
