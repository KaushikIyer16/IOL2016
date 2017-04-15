<!DOCTYPE html>
<html>
<?php $title = '14th International Linguistics Olympiad';?>
<?php include 'links.php' ?>
<?php include 'hello.php' ?>
<!-- This file contains css specific to index -->
<link rel="stylesheet" type="text/css" href="css/index.css">
<body >

	<!-- NAVIGATION -->
	<?php include 'header.php' ?>

	<head>

	</head>
	<div>
		<div class="welcome-container">
			<div class="country-map" style="background: url('<?php echo $country_details[$rand]['map']; ?>')"></div>
			<div class="text">
				<h4><?php echo $country_details[$rand]['hello']; ?></h4>
				<p>Say hello in <?php echo $country_details[$rand]['country_lang']; ?>  <span class="glyphicon glyphicon-volume-up" id="sound-icon"></span>
					<audio id="play-hello">
						<source src="<?php echo $country_details[$rand]['sound']; ?>" type="audio/mp3">
							Your browser does not support the audio element.
						</audio>
					</p>
				</div>
			</div>

			<!-- Birds	 -->
			<div class="move-bird-1">
				<div class="bird static"></div>
			</div>
			<div class="move-bird-2">
				<div class="bird static bird-2"></div>
			</div>
			<div class="move-bird-3">

				<div class="bird static bird-3"></div>
			</div>
			<div class="move-bird-4">
				<div class="bird static bird-2"></div>
			</div>

			<!-- Squirrel running away to glory -->
			<!-- <img src="images/squirrel.gif" id="squirrel"> -->


			<img src="images/logo_new_cmp.png" alt="IOL 2016 Logo" id="iol-logo" />
			<img src="images/palace.png" alt="Mysore Palace" id="mysore-palace"/>
			<img src="images/mahishasura_o.png"  alt="Statue of Mahishasura" id="mahishasura">

			<h1>14th International Linguistics Olympiad</h1>
			<h2>July 25th &ndash; July 29th, 2016, Mysore, India</h2>


		</div>
		<footer>
			<div class="container-fluid row">


				<div class="col-md-12 col-sm-12 sponsors">
					<div class="row">

						<h3 style="text-align:center">Our co-organizers<br><br></h3>
						<div class="col-md-1"></div>
						<a href="http://www.jnu.ac.in/" target="_blank">
							<div class="col-md-2 col-sm-2 sponsor-img" title="Jawaharlal Nehru University" alt="Jawaharlal Nehru University Logo" style="background-image: url(images/sponsors/jnu.png)">
							</div>
						</a>

						<a href="http://research.microsoft.com/en-us/labs/india" target="_blank">
							<div class="col-md-2 col-sm-2 microsoft-img" title="Microsoft Research" alt="Microsoft Logo" style="background-image: url(images/sponsors/ms.png);">
							</div>
						</a>

						<a href="http://mu.ac.in/portal/" target="_blank">
							<div class="col-md-2 col-sm-2 sponsor-img" title="University of Mumbai" alt="University of Mumbai Logo"
							style="background-image: url(images/sponsors/mu.png)">
							</div>
						</a>

						<a href="http://www.bmsce.in/" target="_blank">
							<div class="col-md-2 col-sm-2 sponsor-img" title="BMS College of Engineering" alt="BMS College of Engineering Logo" style="background-image: url(images/sponsors/bmsce.png)">
							</div>
						</a>

						<a href="http://www.iiit.ac.in/" target="_blank">
							<div class="col-md-2 col-sm-2 sponsor-img" title="Indian Institute of Information Technology, Hyderabad" alt="Indian Institute of Information Technology Hyderabad Logo" style="background-image: url(images/sponsors/iith.png)">
							</div>
						</a>

						<div class="col-md-1"></div>
					</div>


				</div>
				<div class="col-md-12 col-sm-12 sponsors">
					<div class="row">
						<h3 style="text-align:center">Sponsors and Partners<br><br></h3>

						

						<a href="https://www.infosys.com/" target="_blank">
							<div class="col-md-2 col-sm-2 microsoft-img" title="Infosys" alt="Infosys Logo" style="background-image: url(images/sponsors/infosys.png);">

							</div>
						</a>
						<a href="http://research.microsoft.com/en-us/labs/india" target="_blank">
							<div class="col-md-2 col-sm-2 microsoft-img" title="Microsoft Research" alt="Microsoft Logo" style="background-image: url(images/sponsors/ms.png);">

							</div>
						</a>

						<a href="https://www.xerox.com/" target="_blank">
							<div class="col-md-2 col-sm-2 sponsor-img" title="Xerox" alt="Xerox Logo" style="background-image: url(images/sponsors/xerox.png);">

							</div>
						</a>

						<a href="http://www.qatarairways.com/" target="_blank">
							<div class="col-md-2 col-sm-2 sponsor-img" title="Qatar Airways" alt="Qatar Airways Logo" style="background-image: url(images/sponsors/qatar.png);">

							</div>
						</a>

						<a href="http://india.acm.org/" target="_blank">
							<div class="col-md-2 col-sm-2 sponsor-img" title="ACM India" alt="ACM India Logo" style="background-image: url(images/sponsors/acm.png);">

							</div>
						</a>

						<a href="http://www.tcs.com/research" target="_blank">
							<div class="col-md-2 col-sm-2 sponsor-img" title="TCS" alt="TCS Logo" style="background-image: url(images/sponsors/tcs.png);">

							</div>
						</a>

						

					</div>
				</div>




			</div>

			<div class="row subscribe-container">
				<div class="col-md-6 col-sm-12 twitter-container">
					<a class="twitter-timeline"  href="https://twitter.com/iol2016" data-widget-id="651058298267930625" data-chrome="nofooter noborders transparent " data-tweet-limit="3">Tweets by @iol2016</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
			<div class="col-md-6 col-sm-12">
				<form class="form-inline" id="send_mail" method="post">
					<div class="caption"> <br><br><br>Want to catch up on latest updates about this event?  Subscribe now. <br><br> </div>
					<input type="email" style="margin-left:-7%" class="form-control" id="e_id" placeholder="Your email" name="email" required>
					<button type="submit"  class="btn btn-primary">Subscribe</button>
				</form>
			</div>
</div>
		</footer><!--
		<div id="footer" bgcolor="#634A38"  width="100%">
			<div class="container-fluid">
				<div class="panel panel-default">
					<div class="panel-footer" id="f1">
						<div class="row">

							<div class="col-sm-1">
								<b>SPONSERS:</b>
							</div>
							<div class="col-sm-4" id=images>
							</div>
							<div class="col-sm-1">

							</div>
							<div class="col-sm-6">


								<br><button type="button" id="email" class="btn btn-info" data-toggle="collapse" data-target="#demo">Subscribe</button>
								<div id="demo" class="collapse">
									<form method="post" action="" id="send_mail">
										<label>Email:</label>
										<input type="email" name="email" id="e_id" required>
										<input type="submit" name="send" value="Send Message" id="">

									</form>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div> -->


		<!-- /.javascript files -->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>

		<!-- play hello on button click -->
		<script type="text/javascript">

			$('#sound-icon').on('click', function(){
				document.getElementById('play-hello').play();
				$(this).addClass('playing');
			});

			$('#play-hello').on('ended', function(){
				$('#sound-icon').removeClass('playing');
			});

			$(function() {

				$("#logo").hide();

			}());


		</script>
		<script>
			$("#send_mail").submit(function(event){
				event.preventDefault();
				var email = $("#e_id").val();



				$("#e_id").val("");

				$.ajax({
					type: "POST",
					url: "./insert",
					data: {

						email:email

					}
				}).done(function(data){
					alert(data+"mail sent");
			//write mail sent confirmation code here

		});


			});

		</script>	</body>


		</html>
