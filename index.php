<?php 
include 'connection.php';

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&family=Satisfy&display=swap" rel="stylesheet">
	
	
	<style type="text/css">
		*
		{
			font-family: 'Merienda', cursive;
		}
		body
		{
			background: black;
			
		}
		.con
		{
			position: relative;
			height: 300px;
			width: 300px;
			align-items: center;
			justify-content: center;
			display: inline-flex;
			margin-top: 120px;
			
		}
		.d1
		{
			/*background: linear-gradient(to bottom, #ffccff 0%, #cc0099 100%);*/
			background-color: #000000;
			background-image: linear-gradient(315deg, #000000 0%, #414141 74%);

			height:250px;
			width: 140px;
			/*transform: skewY(40deg);
			transform: translate3d(250px);*/
			animation: left 3s ease-out;
			box-shadow: 0 0 20px magenta;
			left: 0;
			transform: translate(2px);
			transform: scaleY(1.8);
			transition: 0.6s;
			float: left;

		}
		.d2
		{
			height: 250px;
			width: 140px;
			background-color: #000000;
			background-image: linear-gradient(315deg, #000000 0%, #414141 74%);
			/*transform: skewY(-40deg);
			transform: translate3d(-250px);*/
			animation: right 3s ease-out;
			box-shadow: 0 0 20px magenta;
			left: 0;
			transform: scaleY(1.8);
			transition: 0.6s;
			float: left;
		}
		.d3
		{
			width: 200px;
			height: 80px;
			background-color: #000000;
			background-image: linear-gradient(315deg, #000000 0%, #414141 74%);
			box-shadow: 0 0 20px magenta;
			transition-delay: 2.4s;
			animation: middle 3s ease-in;
			transition: 0.6s;
		}
		@keyframes right
		{
			0%
			{
				transform: translateY(-300px);
				
				
			}
			50%
			{
				transform: translateX(-200px);
				transform:perspective(100px) rotateX(30deg);
				
				
			}
			90%
			{
				box-shadow: 0 0 70px magenta;
			}
			100%
			{
				box-shadow: 0 0 100px magenta;
			}
		}
		@keyframes left
		{
			
			0%
			{
				transform: translateY(300px);

				
			}
			50%
			{
				transform: translateX(200px);
				transform:perspective(100px) rotateX(30deg);
				
			}
			90%
			{
				box-shadow: 0 0 70px magenta;
			}
			100%
			{
				box-shadow: 0 0 100px magenta;
			}
		}
		@keyframes middle
		{
			0%
			{
				transform: translateY(-300px);

			}
			100%
			{
				box-shadow: 0 0 100px magenta;
				transform:perspective(500px) rotateX(30deg);
			}
		}
		.dd
		{
			float:left;
			color:yellow;
		}
		.dd1
		{
			height:300px;
			width:300px;
			background:violet;
			float:left;
		}
		.dd2
		{
			height:300px;
			width:300px;
			background:violet;
			float:left;

		}
		
		.s1
		{
			color: white;
			display: inline-flex;
			top: 600px;
			padding-top: 50px;
			transition-delay: 3s;
			font-size: 30px;
			text-decoration: none;
		}
		.s2
		{
			color: white;
			display: inline-flex;
			top: 600px;
			padding-top: 120px;
			transition-delay: 3s;
			font-size: 30px;
			text-decoration: none;

		}
		a
		{
			text-decoration: none;
			color: white;
		}
		i
		{
			transform: scaleX(1.8);
			padding:17px;
			

		}
		.hid
		{
			display: none;
			padding-top: 50px;

		}
		.hidd
		{
			display: none;
			padding-top: 50px;
		}
	</style>
</head>
<body>

<center>
<span class="s1">
	<a href="login.php">
	<?php  
	if(isset($_SESSION['uid']))
	{
		echo "Welcome ".$_SESSION['uid']." ";
	}
	else
	{
		echo "LOGIN";
	}
	?>
	</a></span><br>
<div class="con">
		
		<div class="d1" id="d1" onclick="anim();">

			<div class="hid" id="hid">
			<a href="postblog.php"><i class='fa fa-image' style='font-size:30px;color:magenta;box-shadow: 0 0 10px white;text-shadow: 0 0 10px black'></i></a><br>
			<a href="myprofile.php"><i class='fa fa-user-o' style='font-size:37px;color:magenta;box-shadow: 0 0 10px white;text-shadow: 0 0 10px black;'></i></a><br>
			<a href="people.php"><i class='fa fa-users' style='font-size:30px;color:magenta;box-shadow: 0 0 10px white;text-shadow: 0 0 10px black'></i></a><br>
			
			</div>
		</div>
		<div class="d3" id="d3" onclick="an();">
			
		</div>
		<div class="d2" id="d2" onclick="ani();">
			<div class="hidd" id="hidd">
			<a href="postupload.php"><i class='fa fa-upload' style='font-size:30px;color:magenta;box-shadow: 0 0 10px white;text-shadow: 0 0 10px black'></i></a><br>
			<a href="postblog.php"><i class='fa fa-star' style='font-size:30px;color:magenta;box-shadow: 0 0 10px white;text-shadow: 0 0 10px black'></i></a><br>
			<a href="logout.php"><i class='fa fa-sign-out' style='font-size:30px;color:magenta;box-shadow: 0 0 10px white;text-shadow: 0 0 10px black'></i></a><br>
			</div>
		</div>
</div>
   <br>
<span class="s2">
	<a href="register.php">
		<?php  
	if(isset($_SESSION['uid']))
	{
		echo "";
	}
	else
	{
		echo "REGISTER";
	}
	?>
	</a></span>

</center>


<script type="text/javascript">
	//alert("Description:Click on the vertical plane to open options and horizontal plane to close the options!!");
	function anim()
	{
		document.getElementById("d1").style.height="100%";
		document.getElementById("d1").style.width="100%";
		document.getElementById("d2").style.height="250px";
		document.getElementById("d2").style.width="140px";
		document.getElementById("hid").style.display='block';
		document.getElementById("hidd").style.display='none';
		
	}
	function ani()
	{
		document.getElementById("d2").style.height="100%";
		document.getElementById("d2").style.width="100%";
		document.getElementById("d1").style.height="250px";
		document.getElementById("d1").style.width="140px";
		document.getElementById("hidd").style.display='block';
		document.getElementById("hid").style.display='none';
		
	}
	function an()
	{
		document.getElementById("d1").style.height="250px";
		document.getElementById("d1").style.width="140px";
		document.getElementById("d2").style.height="250px";
		document.getElementById("d2").style.width="140px";
		document.getElementById("hid").style.display='none';
		document.getElementById("hidd").style.display='none';

	}
</script>
</body>
</html>