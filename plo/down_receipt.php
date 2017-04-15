<html>
<head>
	<style>
		p{
			margin:0px;
			padding:0px;
			color: red;
			text-align: center;
		}
		p.note{
			text-align: left;
			font-size: 15px;
		}
	</style>
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="well" style="margin-top:4%;">
		<div class="row">
			<div class="col-lg-1">

			</div>
			<div class="col-lg-10">
				<h1>Round 1 Registration Fee Receipt</h1>
				<form method="POST">
					<br/><p class="note"><strong>Note:</strong>Those who have not provided the email id during the registration, please keep the email field empty.</p>
					
					<div class="form-group">
						<label style="color: #BF5B15;">Enter Your Roll Number: </label><br/>
						<input class="form-control input-lg" name="rollno" id="rollno" type="text" placeholder="Roll number" required>
					</div>
						<br/>
					<div class="form-group">
						<label style="color: #BF5B15;">Enter Your Name: </label><br/>
						<label style="color: #BF5B15;"> (as filled in the PLO registration form) </label>
						<input class="form-control input-lg" name="name" id="name" type="text" placeholder="Name" required>
					</div>

					<br/>

					<div class="form-group">
						<label style="color: #BF5B15;">Enter Your E-mail id: </label><br/>
					    <label style="color: #BF5B15;"> (as filled in the PLO registration form) </label>
						<input class="form-control input-lg" name="email" id="email" type="text" placeholder="Email">
					</div>
					<br>
					<div class="form-group last">
						<input type="submit" class="btn btn-warning btn-block btn-lg" name="submit" id="submit" value="SUBMIT">
					</div>
				</form>

			</div>
			<div class="col-lg-12">
				<?php
				if(isset($_POST['submit']))
				{
					$name = trim(strtolower($_POST['name']));
					$rollno = trim(strtolower($_POST['rollno']));
					$email = trim(strtolower($_POST['email']));
					if($email == '')
					{
						$email="#n/a";
					}
					try{
							$conn = new PDO('mysql:host=localhost;dbname=IOL2016','iol2016','ploMysorein14');
							$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
							$stmt=$conn->prepare('SELECT * FROM details WHERE roll=:roll');
							$stmt->execute(
							array(
								'roll'=>strtoupper($rollno)
							));
							$row = $stmt->fetch();

							if($row['name'] == ''){
								echo '<p style="color:red">Invalid roll number.</p>';
							}
							else{
								if(strtolower($row['name']) != $name){
									echo '<p style="text-align:center;color:red;">The roll no does not match with the name.</p>';
								}
								else if(strtolower($row['email']) != $email){
									echo '<p style="text-align:center;color:red;">The roll no does not match with the email.</p>';
								}
								else{
									//echo $row['roll']." whose name is".$row['name']." in school".$row['school']." whoose email is ".$row['email'];
									echo "<a style=\"margin-left:40%;\" href=\"/FilesToPDF/".strtoupper($rollno).".pdf\" > Click here to download your receipt.</a>";
								}
							}

					}catch(PDOException $e)
					{
						echo '<p style="text-align:center;">Invalid roll number entered.</p>';
					}


					//echo 'the name is :'.$name.'<br/>the roll no is :'.$rollno.'<br/>the email is '.$email;
					//echo "<a href=\"angularjs_tutorial.pdf\" target=\"_blank\"> Click here to download</a>";
				}
			?>
			</div>
		</div>
	</div>


	<?php include 'links.php'; ?>

</body>

</html>
