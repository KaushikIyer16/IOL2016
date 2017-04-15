<?php
session_start();

if(!isset($_SESSION["username"]))
{
  header('Location: forteamleaders.php');  
  exit; 
}
$_SESSION['loggedin'] = 'true';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- /.website title -->
    <?php $title= 'Team Details'; ?>
    <!-- CSS Files -->
    <?php include 'links.php' ?>
    <style media="screen">
      table,tr,th{
        text-align: center;
      }
    </style>
  </head>

  <body>
    <!-- NAVIGATION -->
    <?php include 'header.php' ?>
    <!--p> to be filled wiith the atual content of the page<p-->

    <?php

    /*
    */
      $conn = new PDO("mysql:host=localhost;dbname=IOL2016;charset=utf8","iol2016","ploMysorein14");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $stmt=$conn->prepare('SELECT * FROM `new table` WHERE country=:country');
    $stmt->execute(array(
      'country' => strtolower($_SESSION['username'])
    ));
    $team_name = $_SESSION['username'];
    echo "<h1>Welcome Team $team_name!</h1>";

    $category = array('Personal Information','Flight Details','Accomadation and Food','Contact');
    $fields=array('Part Id', 'Full Name', 'Role', 'Country', 'Team', 'Photo ID', 'Citizenship',
    'Date Of Birth', 'Sex', 'ID Number', 'Visa Remarks', 'Working Language', 'Special Needs', 'Arrival Date',
    'Arrival Time', 'Flight From', 'Flight Number', 'Departure Date', 'Departure Time', 'Flight To',
    'Departure Flight Number', 'Pickup from Bangalore Airport:Shuttle Number', 'Pickup from Airport: Shuttle Departure Time',
     'Date of Arrival at Infosys','Date of Departure from Infosys', 'Room Preference', 'Food Preference', 'Allergy or Requests', 'Room Number',
    'email id', 'Volunteer Name', 'Volunteer email', 'Volunteer Contact Number', 'Alternate Conatct Number');
     //print_r($fields);

     $row = $stmt->fetchAll();
     echo "<div class=\"container\">";

     echo "<div class='row'>";
      echo "<div class='col-lg-10'>";
      echo "</div>";
      echo "<div class='col-lg-2'>";

        echo "<a href='resetPassword.php'>RESET PASSWORD</a><br/>";
        echo "<a href='logout.php'>LOGOUT<span class='glyphicon glyphicon-chevron-right'></span></a>";
      echo "</div>";
     echo "</div>";

       echo "<div class=\"well\" style='margin-top:5%;'>";
            echo "<div class=\"row\">";



            /*This table will show the initial basic information of the team with username*/

            echo "<table class='table table-bordered table-responsive'>";
             echo "<thead>";
               echo "<tr>";
                 echo "<th>Full Name</th>";
                 echo "<th>Team</th>";
                 echo "<th>Role</th>";
                 echo "<th>Working Language</th>";
               echo "</tr>";
             echo "</thead>";
             echo "<tbody>";

             foreach ($row as $val) {

               echo "<tr>";
               echo '<th>'.$val['full_name'].'</th>';
               echo '<th>'.$val['team'].'</th>';
               echo '<th>'.$val['role'].'</th>';
               echo '<th>'.$val['working_language'].'</th>';
               echo "</tr>";
             }

             echo "</tbody>";
            echo "</table>";
            /*the initial table ends here*/

            echo  "</div>";
         echo "</div>";

         /*This is the beginning of he second well for the personal details*/
         echo "<div class=\"well\" style='margin-top:5%;'>";
              echo "<a role='button' class='collapsed' data-toggle='collapse' href='#personal_info'>Personal Information</a>";
              echo "<div class=\"row\">";



              /*This table will show the personal information of the participants*/
              echo "<div id='personal_info' class='collapse'>";
              echo "<table class='table table-bordered table-responsive'>";
               echo "<thead>";
                 echo "<tr>";
                   echo "<th>Full Name</th>";
                   echo "<th>Date Of Birth</th>";
                   echo "<th>Sex</th>";
                   echo "<th>ID Number(eg:Passport Number)</th>";
                   echo "<th>VISA (Special Remarks)</th>";
                   echo "<th>Special Needs</th>";
                   echo "<th>E-mail ID</th>";
                 echo "</tr>";
               echo "</thead>";
               echo "<tbody>";


               foreach ($row as $val) {

                 echo "<tr>";
                 echo '<th>'.$val['full_name'].'</th>';
                 echo '<th>'.$val['dob'].'</th>';
                 echo '<th>'.$val['sex'].'</th>';
                 echo '<th>'.$val['id_no'].'</th>';
                 echo '<th>'.$val['visa_remarks'].'</th>';
                 echo '<th>'.$val['special_needs'].'</th>';
                 echo '<th>'.$val['email_id'].'</th>';
                 echo "</tr>";
               }

               echo "</tbody>";
              echo "</table>";
              echo "</div>";
              /*The personal inofrmation table ends here*/

              echo  "</div>";
           echo "</div>";

           /*This will be the beginning of the third well for the Travel Information*/
           echo "<div class=\"well\" style='margin-top:5%;' id=''>";
                echo "<a role='button' class='collapsed' data-toggle='collapse' href='#travel_info'>Travel Information</a>";
                echo "<div class=\"row\">";


                  /*this table will show all the travel information of the students*/
                  echo "<div id='travel_info' class='collapse'>";
                  echo "<table class='table table-bordered table-responsive'>";
                   echo "<thead>";
                     echo "<tr>";
                       echo "<th>Full Name</th>";
                       echo "<th>Arrival Date</th>";
                       echo "<th>Arrival Time</th>";
                       echo "<th>Flight From</th>";
                       echo "<th>Flight Number</th>";
                       echo "<th>Departure Date</th>";
                       echo "<th>Departure Time</th>";
                       echo "<th>Flight To</th>";
                       echo "<th>Flight Number</th>";
                       echo "<th>Pickup from Bangalore Airport:Shuttle Number</th>";
                       echo "<th>Pickup from Airport: Shuttle Departure Time</th>";
                     echo "</tr>";
                   echo "</thead>";
                   echo "<tbody>";

                   foreach ($row as $val) {

                     echo "<tr>";
                     echo '<th>'.$val['full_name'].'</th>';
                     echo '<th>'.$val['arrival_date'].'</th>';
                     echo '<th>'.$val['arrival_time'].'</th>';
                     echo '<th>'.$val['flight_from'].'</th>';
                     echo '<th>'.$val['flight_number'].'</th>';
                     echo '<th>'.$val['departure_date'].'</th>';
                     echo '<th>'.$val['departure_time'].'</th>';
                     echo '<th>'.$val['flight_to'].'</th>';
                     echo '<th>'.$val['departure_flight_no'].'</th>';
                     echo '<th>'.$val['pickup_airport_shuttle_no'].'</th>';
                     echo '<th>'.$val['pickup_airport_departure_time'].'</th>';
                     echo "</tr>";
                   }


                   echo "</tbody>";
                  echo "</table>";
                  echo "</div>";
                  /*The Travel table ends here*/

                echo  "</div>";
             echo "</div>";

             /*This is the beginning of the fourth well for the Accomadation and food information*/
             echo "<div class=\"well\" style='margin-top:5%;'>";
                  echo "<a role='button' class='collapsed' data-toggle='collapse' href='#accom_info' style='text-align:center;'>Accomadation and Food Information</a>";
                  echo "<div class=\"row\">";



                  /*This table will show all the accomadation and food information*/
                  echo "<div id='accom_info' class='collapse'>";
                  echo "<table class='table table-bordered table-responsive'>";
                   echo "<thead>";
                     echo "<tr>";
                       echo "<th>Full Name</th>";
                       echo "<th>Date of Arrival at Infosys</th>";
                       echo "<th>Date of Departure from Infosys</th>";
                       echo "<th>Room Preference</th>";
                       echo "<th>Food Preferences</th>";
                       echo "<th>Any Allergies or other requests</th>";
                       echo "<th>Room Number</th>";
                     echo "</tr>";
                   echo "</thead>";
                     echo "<tbody>";
                     foreach ($row as $val) {

                       echo "<tr>";
                       echo '<th>'.$val['full_name'].'</th>';
                       echo '<th>'.$val['date_arrival_infosys'].'</th>';
                       echo '<th>'.$val['date_departure_infosys'].'</th>';
                       echo '<th>'.$val['room_preference'].'</th>';
                       echo '<th>'.$val['food_preference'].'</th>';
                       echo '<th>'.$val['allergy_or_request'].'</th>';
                       echo '<th>'.$val['room_no'].'</th>';

                       echo "</tr>";
                     }
                     echo "</tbody>";
                  echo "</table>";
                  echo "</div>";
                  /*The accomadation and food table ends here*/

                  echo  "</div>";
               echo "</div>";


               /*This is the beginning of the fifth well which will store data on the volunteer*/
               $val = $row[0];
               echo "<div class=\"well\" style='margin-top:5%;'>";
                    echo "<h2 style='text-align:center;'>Volunteer for your team:</h2>";
                    echo "<div class=\"row\">";
                      echo "<div class='col-lg-6'>";
                        echo "Primary Volunteer Name<br/>";
                        echo " Primary Volunteer Email<br/><br/>";
                         echo "Secondary Volunteer Name<br/>";
                        echo " Secondary Volunteer Email<br/>";
                       // echo "  Primary Contact Number<br/>";
                       // echo "  Alternate Contact Number<br/>";
                      echo "</div>";
                      echo "<div class='col-lg-6'>";
                       echo ':   '.$val['volunteer_name'].'<br/>';
                        echo ':   '.$val['volunteer_email'].'<br/><br/>';
                        echo ':   '.$val['sec_vol_name'].'<br/>';
                        echo ':   '.$val['sec_vol_email'].'<br/>';
                        //echo ':   '.$val['volunteer_contact_no'].'<br/>';
                        //echo ':   '.$val['alternate_conatct_no'].'<br/>';
                      echo "</div>";
                    echo  "</div>";
                 echo "</div>";

                 echo "<p style='text-align:center;'>If there is any discrepancy in the above information, or if you have questions or requests, please contact your volunteer(if volunteer has not been alloted yet, please contact iol16@plo-in.org)</p>";

       echo "</div>";

     //print_r($row);

     /*$offsets = array(0,11,19,28,30);

     while ($row=$stmt->fetch()) {



     }*/

     ?>



  </body>
  <script type="text/javascript">

  </script>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
