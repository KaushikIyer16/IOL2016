  
 <?php
         $captcha;
       if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }

	$secretKey = "6Lf6pxgTAAAAAKG69x1nM3SBaIw6tXlFw_gd4gtN";

	$ip = $_SERVER['REMOTE_ADDR'];

        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);

	     $responseKeys = json_decode($response,true);
       
        if(intval($responseKeys["success"]) !== 1) {
          echo '<h2>You are spammer !</h2>';
          
        } else {


?>
<?php
		 $roll = $_POST['roll'];
		 $email = $_POST['email'];
		 $sqlHost = 'localhost';
		 $sqlUser = 'iol2016';
		 $sqlPass = 'ploMysorein14';
$roll = mysql_escape_string($roll);
$email = mysql_escape_string($email);
	$conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'IOL2016') ;

	if($conn->connect_errno)
		{
		    printf("Connect failed: %s\n", $conn->connect_error);
		    exit();
		}

	$result = $conn->query("SELECT * FROM marksheet_plo WHERE  Roll_no = ('$roll') AND Email =('$email') LIMIT 1")
    or trigger_error($conn->error);

	$row = $result->fetch_array(MYSQL_BOTH);
    

?>


<!DOCTYPE html>
<html>
<head>

<title>Results</title>
<?php include 'links.php' ?>
 
 
 <style type="text/css">

		 th{
		 	font-size: 20px;
		 	text-align: center;
		 	}

		table
		{	
		    background-color:  #f2f2f2;
		    table-layout: fixed;
			margin-left:3%;
			width: 30%;
			text-align: center;
			font-weight: normal;
		    border: 2px solid black;
			
		}

		th,td
		{
			padding: 5px 5px 5px 5px;
		     border: 1px solid black;
		     width: 200px;
		}

		td.pname{
		    text-align: left;
		}
		p{
			margin-left: 5%;
		}
p.last{
	font-weight: 900;
	font-size: 20px;
}
</style>
</head>   

<body data-spy="scroll" data-target="#navbar-scroll">
	 <?php include 'header.php' ?>
	<div class="container">
	 		
		<div class="well container" style="margin-top: 5%;">
 				<h1>PLO Round 1 Marks</h1>
				<?php if(isset($row)){ ?>

			<p> 
				Roll No: <?php echo $row['Roll_no']; ?> <br/>

				Name of the Student : <?php echo $row['Name']; ?> <br/>

				School: <?php echo $row['School']; ?> <br/>

				Email : <?php echo $row['Email']; ?> <br/>
 

			</p>

           <div class="table-responsive">

           <table class=" table-bordered">
                           <thead>
                              <tr>
                                 <th>
                                  Problem
                                 </th>
                                 <th>
                                   Objective Score<br/>(Max. marks)
                                 </th>
                                  <th>
                                   Explanation Score <?php if($row['Remark'] == 0) echo "*"; ?> 
                                   <br/>(Max. marks)
                                 </th>
                                   <th>
                                   Total Score<br/>(Max. marks)
                                 </th>
                             </tr>
                         </thead>
                          <tbody>

                          	<tr>
                          		<td class="pname">1. Sanskrit Months</td>
                          		<td><?php echo $row['Problem1_O']; ?>(7.5)</td>
                          		<td><?php echo $row['Problem1_E']; ?>(7.5)</td>
                          		<td><?php echo $row['Problem1_O']+ $row['Problem1_E']; ?>(15)</td>
                          	</tr>

							<tr>
								<td class="pname">2.Aksara Sunda Kuna</td>
								<td><?php echo $row['Problem2_O']; ?>(7.5)</td>
                          		<td><?php echo $row['Problem2_E']; ?>(7.5)</td>
                          		<td><?php echo $row['Problem2_O']+ $row['Problem2_E']; ?>(15)</td>

							</tr>
							<tr>
								<td class="pname">3.Lunganda</td>
								<td><?php echo $row['Problem3_O']; ?>(7.5)</td>
                          		<td><?php echo $row['Problem3_E']; ?>(7.5)</td>
                          		<td><?php echo $row['Problem3_O']+ $row['Problem3_E']; ?>(15)</td>

							</tr>
							<tr>
								<td class="pname">4.Divehi Numerals</td>
								<td><?php echo $row['Problem4_O']; ?>(7.5)</td>
                          		<td><?php echo $row['Problem4_E']; ?>(7.5)</td>
                          		<td><?php echo $row['Problem4_O']+ $row['Problem4_E']; ?>(15)</td>

							</tr>
								<tr >
								<td class="pname">5.Onge</td>
								<td><?php echo $row['Problem5_O']; ?>(10)</td>
                          		<td><?php echo $row['Problem5_E']; ?>(10)</td>
                          		<td><?php echo $row['Problem5_O']+ $row['Problem5_E']; ?>(20)</td>

							</tr>
									<tr>
								<td class="pname">6.Epic Greek Poetry</td>
								<td><?php echo $row['Problem6_O']; ?>(10)</td>
                          		<td><?php echo $row['Problem6_E']; ?>(10)</td>
                          		<td><?php  if($row['Problem6_E'] == 0){ echo "0(20)**";   } 
                          	 else{ echo $row['Problem6_O']+ $row['Problem6_E'];   ?> (20) <?php } ?></td>

							</tr>

							</tr>
								<tr>
								<td class="pname">Grand Total:</td>
								<td><?php echo $row['Total_O']; ?>(50)</td>
                          		<td><?php echo $row['Total_E']; ?>(50)</td>
                          		<td><?php echo $row['Total']; ?>(100)</td>

							</tr>
				</tbody>
				</table>
 
				<p><?php if($row['Remark'] == 0 ) {   ?>

					 *Due to low objective score, your script was not shortlisted for grading of 
					explanations. However, your projected explanation and total scores are shown
					 based on regression analysis.   <?php } ?></p>

					 <?php if($row['Problem6_E'] == 0){ ?>
					  <p>**The jury decided that those who received 0 in the explanation part of problem 6, 
					 received 0 in the total score for that problem.</p>
					 <?php }?>
				</div>

				<p class="last"><?php if($row['Status'] == 1 ){?>Congratulations! You have qualified for Round 2.
					<?php }else {?>Sorry, you did not qualify for round 2.<?php }?></p>

<?php }  else { ?>
<p>The email id and roll number do not match..!<br/>
 Check the email id, and make sure that it is the same email id that you had filled in the payment form.</p>
 <?php } ?>

 
</div>



		 <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
 

  </body>
</html>
<?php } ?>