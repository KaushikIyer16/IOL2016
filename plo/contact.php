<!DOCTYPE html>
<html>
<head>

<!-- /.website title -->
<title>Contact us</title>
<?php include 'links.php' ?>
<style>        
      .btn-success{
      	background-color:#BF5B15;
      }
     
</style>

</head>


  
<body data-spy="scroll" data-target="#navbar-scroll">

 <!-- NAVIGATION -->
 <?php include 'header.php' ?>



		<!--Contact us-->
			<div class="well" style="margin-top: 5%;">

			<div class="row" id="contact">
				<div class="col-lg-1"></div>
				<div class="col-lg-10">
				
						<h1>
						Contact Us
						</h1>
						<h2>Facebook</h2>
						<p>Join our <a target="_blank" href="https://www.facebook.com/login.php?next=https%3A%2F%2Fwww.facebook.com%2Fgroups%2F120139748054660%2F">Facebook Group,</a> meant exclusively for STUDENTS interested in Linguistics in India.<br>Like our <a target="_blank" href="https://www.facebook.com/PaniniLinguisticsOlympiad">Facebook page.</a>
						Send us an email - we're here to help !<br />
						Please enter your query below and allow us at least 5 business days to respond to it.
						</p>
						

						<form class="form-header" onSubmit="" action="" role="form" method="POST" id="contact_plo">

							<div class="form-group">
								<label for="name" style="color: #BF5B15;">Name </label>
								<input class="form-control input-lg" name="name" id="name" type="text" placeholder="Name" required>
							</div>

							<div class="form-group">
								<label for="email" style="color: #BF5B15;">Email ID</label>
								<input class="form-control input-lg" name="email" id="email" type="text" placeholder="Email ID" required>
							</div>

							<div class="form-group">
								<label for="phone" style="color: #BF5B15;">City</label>
								<input class="form-control input-lg" name="city" id="city" type="text" placeholder="City" required>
							</div>
							
							<div class="form-group">
							  <label for="message" style="color: #BF5B15;">Message</label><br>
							  <textarea id="message" name = "message"cols="100" rows="4" placeholder="Enter Message" style="border: none;" required></textarea>
							</div>

							<div class="form-group last">								
								<input type="submit" class="btn btn-warning btn-block btn-lg" id="submit" value="SUBMIT">							
							</div>

						</form>						
				</div> 
				<div class="col-lg-2"></div>

			</div>
		</div>
	   
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
			$("#contact_plo").submit(function(event){
				event.preventDefault();
			var name = $("#name").val();
			var email = $("#email").val();
			var city = $("#city").val();
			var message = $("#message").val();
			
			$("#name").val("");
			 $("#email").val("");
			$("#message").val("");
			$("#city").val("");
			$.ajax({
			type: "POST",
			url: "./mailer",
			data: {
				name:name,
				message:message,
				email:email,
				city:city
				
			}
		}).done(function(data){
			alert(data+"mail sent");
			//write mail sent confirmation code here
			 
		});
			

			});

		</script>



			 <script type="text/javascript">


					 function change(id) 

					{
					    var elem = document.getElementById(id);
					    if (elem.value=="learn more") elem.value = "hide";
					    else elem.value = "learn more";
					}

			</script>  
	
	<!-- /.javascript files -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  
  </body>
</html>