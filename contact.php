<!DOCTYPE html>
<html lang="en-Us">
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="resources/css/bootstrap.css" type="text/css">
	
	<title>contactus</title>
	<script src="resources/js/bootstrap.min.js"></script>
	<script src="resources/js/bootstrap.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/poststyle.css">
	<style>
		#content{
			border-radius: 10px;
			border:1px solid #ddd;
			padding:20px;
			min-height: 500px;
			margin-top: 10px;
		}
		.postnewsForm input[type="submit"]{
			height: 40px;
			text-align: center;
			margin: 40px 90px;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<header>
		<img src="resources/pic/logo.jpg" alt="logo">
		<h2>Contact The CRTV NORTH WEST BEAUREUX</h2>
	</header>
	<div id="content">
		<form action="#" method="post" class= "postnewsForm">
				<label>Name:</label>
				<input type="text" name="name" placeholder="Name">
				<label>Telephone</label>
				<input type="number" name="number" placeholder="Phone Number" >
				<label>Email:</label>
				<input type="text" name="email" placeholder="Email address" >
				
			
				<label>Message:</label>
				<textarea name="message" cols="50" rows="6"></textarea>
				<br>
				<input type="submit" class="btn-primary btn-lg" name="submit" valu="Submit Request">
		</form>
	</div>
	<footer>
		  <a href="#setting">Setting</a>
        <a href="#setting">Cookies</a>
        <a href="#setting">Help</a>
        
        <h4>CRTV NORTHWEST CAMEROUN Copyright&copy 2018-2019</h4>
		
	</footer>

</body>
</html>
<?php 
	require_once ("connect.php");
	if(isset($_POST['submit'])){
		if($_POST['name'] == '' or $_POST['number'] == '' or $_POST['email'] == '' or $_POST['message'] == ''){
			echo '<script>alert("Field Cannot be empty")</script>';
			exit();
		}
		$name = htmlentities($_POST['name'], ENT_QUOTES);
	   	$number = htmlentities($_POST['number'], ENT_QUOTES);
	   	$email = htmlentities($_POST['email'], ENT_QUOTES);
		$message = htmlentities($_POST['message'], ENT_QUOTES);
		  
		  
		  if(mysql_query("INSERT INTO contact (name,number,email,message) VALUES ('{$name}','{$number}', '{$email}' ,'{$message}')")){

			echo '<script>alert("News was successfully posted!!!")</script>';
		   }
		   else{
			   echo '<script>alert("News was Unsuccessfully!!! ")</script>';
		   }

	}


?>