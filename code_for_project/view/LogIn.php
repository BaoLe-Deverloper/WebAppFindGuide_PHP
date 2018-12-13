
<!DOCTYPE html>
<html lang="en">
<head>
	<title>LogIn FindGuide</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link href="css/login.css" rel="stylesheet" />
</head>
<body>

	<?php 

	session_start();
	require_once("connectMysql.php");
	if(isset($_POST['submit']))
	{
		$email = $_POST["email"];
		$pass = $_POST["pass"];
		$users = array();
		$sql = "SELECT * FROM account as acc WHERE acc.Account_Pass = '".md5($pass)."' and acc.Account_Email = '".$email."' ";
		$query = mysqli_query($conn,$sql);
		if(mysqli_num_rows($query)>0)
		{
			$user = mysqli_fetch_assoc($query);

			$_SESSION['name'] = $user["Account_Name"];
			$_SESSION['avata'] = $user["Account_Avarta"];

			if(isset($_POST["remember"]))
			{
				setcookie("user",$user["Account_Name"].'||'.$user["Account_Avarta"],time() + (86400 * 100));

			}

			header('location: /WebAppFindGuide/index.php');
		}
	}
	?>

	<div class="limiter">
		<div class="container-login100" style="background-image:url(img/backgroudLogin.jpg); background-size:cover; ">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="Login.php" method="post">
					
					<span class="login100-form-title p-b-26">
						LogIn Find Guide
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="fas fa-eye-slash"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<input class="mycheckbox" type="checkbox" name="remember" /> Remember
					<div class="container-login100-form-btn p-b-26">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit" type="submit">
								Login
							</button>
						</div>
					</div>
					<div class="text-center p-b-26">

						<a class="btn btn-block loginBtn-facebook">
							<span class="fab fa-facebook-f"></span>
							Login with Facebook
						</a>
						<a class="btn btn-block loginBtn-google">
							<i class="fab fa-google-plus-g"></i>
							Login with Google
						</a>
						<a class="btn btn-block btn-vk ">
							<span class="fab fa-vk"></span> Sign in with Vk
							<a class="btn btn-block btn-wechat">
								<span class="fab fa-weixin"></span> Sign in with Wechat
							</a>
						</div>
						<div class="text-center">
							<span class="txt1">
								Don’t have an account?
							</span>

							<a class="txt2" href="#">
								Sign Up
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>

		
		<script src="js/login.js"></script>
		<!--===============================================================================================-->
		

	</body>
	</html>