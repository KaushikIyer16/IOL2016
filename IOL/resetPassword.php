    <?php
  
session_start();
if(!isset($_SESSION['loggedin']))
{
  //header('Location: logout.php');   
   
  echo "<script type='text/javascript'>window.location.href = 'forteamleaders.php';</script>";
 exit();
      
  
}
 
 include 'links.php';
    ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reset Password</title>
    <!-- CSS Files -->


  </head>
  <body>
    <!-- NAVIGATION -->
    <?php include 'header.php' ?>

    <div class="container">
      <h1 style="margin-top:5%;">Reset Team Login Password</h1>
       <a href='logout.php' style="float:right">LOGOUT<span class='glyphicon glyphicon-chevron-right'></span></a> 
  
      <div class="well" style="margin-top:5%; padding-bottom: 5rem;">
         

  
        <div class="row">
          <div class="col-lg-1">

          </div>
          <div class="col-lg-10">

            <form class="" action="" method="post">
              <div class="form-group">
    						<label style="color: #BF5B15;">Enter Your Username: </label><br/>
    						<input class="form-control input-lg" name="username" id="username" type="text" placeholder="Username" required>
    					</div>

              <div class="form-group">
    						<label style="color: #BF5B15;">Enter Your Current Password: </label><br/>
    						<input class="form-control input-lg" name="cpassword" id="cpassword" type="password" placeholder="Password" required>
    					</div>

              <div class="form-group">
    						<label style="color: #BF5B15;">Enter Your New Password: </label><br/>
    						<input class="form-control input-lg" name="npassword" id="npassword" type="password" placeholder="Password" required>
    					</div>

              <div class="form-group">
    						<label style="color: #BF5B15;">Re Enter Your New Password: </label><br/>
    						<input class="form-control input-lg" name="rpassword" id="rpassword" type="password" placeholder="Password" required>
    					</div>
              <div class="form-group last">
    						<input type="submit" class="btn btn-warning btn-block btn-lg" name="submit" id="submit" value="SUBMIT">
    					</div>
              <br>
            </form>

          </div>

        </div>
        <div class="row">
          <div class="col-lg-5">

          </div>
          <div class="col-lg-7">
            <?php

              if (isset($_POST["submit"])) {

                $username = $_POST["username"];
                $cpassword = $_POST["cpassword"];
                $npassword = $_POST["npassword"];
                $rpassword = $_POST["rpassword"];

                if($npassword != $rpassword)
                {
                  echo '<p style="color:red">Password re entered improperely</p>';
                }
                else{
                  try {

                       $conn = new PDO("mysql:host=localhost;dbname=IOL2016","iol2016","ploMysorein14");
                      $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                      $stmt=$conn->prepare('SELECT * FROM login WHERE username=:username');
                      $stmt->execute(
                      array(
                        'username'=>$username
                      ));

                    $row = $stmt->fetch();
                    if($row['username'] == ''){
                      echo '<p style="color:red">Invalid Username.</p>';
                    }
                    else if($row['password'] != $cpassword){
                      echo '<p style="color:red">Incorrect Password Entered</p>';
                    }
                    else{
                      #insert the new password into the old location.
                      $stmt = $conn->prepare('UPDATE login SET password=:password WHERE username=:username');
                      $stmt->execute(
                      array(
                        'password' => $npassword,
                        'username' => $username
                      ));
                      echo '<p style="color:green">Password Successfully Changed</p>';
                    }
                    } catch (Exception $e) {
                      echo $e->getMessage();

                    }

              }
            }
             ?>
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
