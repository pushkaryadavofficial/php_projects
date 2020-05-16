<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<?php include'links.php' ?>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<style>
		*{
			
			font-family: muli;
			font-size: 15px;
		
		}
		.nb{
			background: -webkit-linear-gradient(left,#74B9FF,#53E0BC);
		}
		body{
			background: -webkit-linear-gradient(left,#53E0BC,#25CCF7,#3C40C6);
		}
		.typewriter {
	     
	      overflow: hidden; /* Ensures the content is not revealed until the animation */
	      border-right: .17em solid #455695; /* The typewriter cursor */
	      white-space: nowrap; /* Keeps the content on a single line */
	      margin: 0 auto; /* Gives that scrolling effect as the typing happens */
	      letter-spacing: .17em; /* Adjust as needed */
	      animation: 
	      typing 5s steps(30, end),
	      blinking-cursor .5s step-end infinite;
	      }
	      /* The typing effect */
	      @keyframes typing {
	      from { width: 0 }
	      to { width: 100% }
	      }
	      /* The typewriter cursor effect */
	      @keyframes blinking-cursor {
	      from, to { border-color: transparent }
	      50% { border-color: #455695; }
	      }
		

	</style>
</head>
<body>
	<!-- navbar section -->
	<section>
			<nav class="navbar nb">
			    <a class="navbar-brand" style="color: #2C3335;" href="#">SCHOOL MANAGEMENT SYSTEM</a>
			 </nav>			
	</section>
	<!-- navbar setion end	 -->
	<div class="container">
	<div class="text-center text-capitalize">
		<div class="typewriter">
		hey,welcome to our school management system
		</div>
		<hr>
	</div>
	
	</div>
	<!-- buttons -->
	<div class="container justify-content-center text-center text-capitalize mt-2">
		<a href=""><button type="button" class="btn btn-primary"><i class="fa fa-home"></i>home</button></a>
		<a href=""><button type="button" class="btn btn-secondary">schools</button></a>
		<a href=""><button type="button" class="btn btn-success">school login</button></a>
		<a href=""><button type="button" class="btn btn-danger">school signup</button></a>
		<a href=""><button type="button" class="btn btn-warning">about us</button></a>
		<a href=""><button type="button" class="btn btn-info">developer</button></a>
	</div>
	<!-- buttons end -->

	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12 "><img src="asms.png" width="400px;" height="400px;" class="img-fluid" alt="..image could not fetch,slow internet error or image may be not available at server"></div>
			<div class="col-lg-6 col-md-6 col-12" style="font-size: 20px;">
			hey if you are starting a new school or you are having a school & you want to save your all data related to students,academics,teachers,fees and any other management data then you are at right place <B>here at few clicks you can manage your school</B> we have made everything of your use .you just simply type data we will auto save it to database.you can create reciepts.....
			<br>
			<a href=""><button class="btn bg-primary text-white">Want to know more</button></a>
		</div>
		</div>
	</div>
</body>
</html>