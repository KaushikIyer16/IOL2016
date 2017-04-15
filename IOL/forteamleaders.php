<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', TRUE);

function validate()
{
  try {
    $conn = new PDO("mysql:host=localhost;dbname=IOL2016","iol2016","ploMysorein14");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare('SELECT * FROM login WHERE username=:username');
    $stmt->execute(array(
      'username' => $_POST['username']
    ));
    $row = $stmt->fetch();
    if($row['username'] == '')
    {
      echo '<script type="text/javascript">alert("Username does not exist")</script>';
      return false;
    }
    else if($row['password'] !== $_POST['password']){
      echo '<script type="text/javascript">alert("Incorrect Password")</script>';
      return false;
    }
    else{
      return true;
    }
  } catch (Exception $e) {
    $e->getMessage();
  }

}


if(isset($_SESSION['username'])){
  header('Location: logedin.php');
}
if(isset($_POST['submit']))
{
  if(validate())
  {

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    header("Location:logedin.php");
    exit();
  }
}
?>
<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <!-- /.website title -->
    <?php $title= 'Team Leaders Login'; ?>
    <!-- CSS Files -->
    <?php include 'links.php' ?>
  </head>
  <body>
    <!-- NAVIGATION -->
    <?php include 'header.php' ?>

    <div class="container">
      <h1 style="margin-top:5%">Team Leaders Login</h1><br>
      <div class="well" style="margin-top:5%; padding-bottom: 5rem;">
        <div class="row">

          <div class="col-lg-1">

          </div>

          <div class="col-lg-10">

            <form class=""  method="POST">

              <div class="form-group">
    						<label style="color: #BF5B15;">Enter Your Username: </label><br/>
    						<input class="form-control input-lg" name="username" id="username" type="text" placeholder="Username" required>
    					</div>

              <div class="form-group">
    						<label style="color: #BF5B15;">Enter Your Password: </label><br/>
    						<input class="form-control input-lg" name="password" id="password" type="password" placeholder="Password" required>
    					</div>

              <div class="form-group last">
    						<input type="submit" class="btn btn-warning btn-block btn-lg" name="submit" id="submit" value="SUBMIT">
    					</div>
              <br>
             <!--  <a href="resetPassword.php">Change Password?</a> -->
            </form>
          </div>
          <div id="error-msg">

          </div>
        </div>

      </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
