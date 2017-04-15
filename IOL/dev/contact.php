<!DOCTYPE html>
<html>

<head>
	<?php $title = 'Contact | IOL 2016';?>
	<?php include 'links.php' ?>
</head>



<body>

	<!-- NAVIGATION -->
	<?php include 'header.php' ?>

	
	<div class="container" style="margin-top:20px">
		 
		<div class="well">
 			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-8">
					<h1>
						Contact Us
					</h1>
					<form class="form-header"  action=""  onSubmit="" role="form" method="POST" id="contact">

						<div class="form-group">
							<label for="name" style="color: #A24F47">Enter Your Name *</label>
							<input class="form-control input-lg" name="name" id="name" type="text" placeholder="Name" required>
						</div>

						<div class="form-group">
							<label for="email" style="color: #A24F47">Enter Your Email ID *</label>
							<input class="form-control input-lg" name="email" id="email" type="email" placeholder="Email ID" required>
						</div>

						<div class="form-group">
							<label for="subject" style="color: #A24F47">I'm Interested In *</label>
							<br />
							<textarea name="message" id = "message" class="form-control input-lg" cols="100" rows="4" placeholder="Enter message" required></textarea>
						</div>

						<div class="form-group last">
							<input type="submit" class="btn btn-warning btn-block btn-lg" id="submit" value="SUBMIT">							
						</div>

					</form>
				</div>
				<div class="col-lg-2"></div>
			</div>
		</div>

	</div>



	<!-- /.javascript files -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
			$("#contact").submit(function(event){
				event.preventDefault();
			var name = $("#name").val();
			var email = $("#email").val();
			var message = $("#message").val();
			
			$("#name").val("");
			 $("#email").val("");
			$("#message").val("");
			$.ajax({
			type: "POST",
			url: "./swift",
			data: {
				name:name,
				message:message,
				email:email
				
			}
		}).done(function(data){
			alert(data+" mail sent");
			//write mail sent confirmation code here
			 
		});
			

			});

		</script>

	</body>


	</html>