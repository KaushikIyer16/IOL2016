<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Results</title>
    <style media="screen">

    </style>
    <!-- CSS Files -->
    <?php include 'links.php'

    ?>
    <style type="text/css">
    #all-center td 
{
    text-align:center; 
    vertical-align:middle;
}
    </style>
  </head>
  <body>
    <!-- NAVIGATION -->
    <?php include 'header.php' ?>


    <div class="container">
      <h1 style="margin-top:5%;">Results</h1>



      <div class="well" style="margin-top:5%;">
        <h2 class="gold" style="text-align:center;">Gold Medals in the Individual Contest</h2><br><br>
        <?php
         /*bottom consists of a div which represents the gold medalist
              just simply update the two arrays $gold_medalist_countries and $gold_medalist
              other events are similar.

              there are three arrays:

              1. *_medalist_countries for the country Name.
              2. *_medalist for the name of the contestant.
              3. respective_flags for the image of flag that has to be shown alongside the name.

              so just by changing theese arrays the page would get altered automatically.
              */

            $base_url='./images/flags/';

            $gold_medalist_countries=array('Republic of Korea','USA','United Kingdom','Australia',
            'Czech Republic','Russia','Russia','Bulgaria','United Kingdom','Russia');
            $gold_medalist=array('Jaeyeong Yang','James Wedgwood','Liam Robert McKnight',
            'Max Zhang','Jan Petr','Katya Voloshinova','Ivan Samodelkin','Kristian Georgiev','Samuel Kumar Ahmed','Polina Nasledskova');
            $respective_flags=array('kr.png','us.png','uk.png','au.png','cz.png','ru.png','ru.png','bg.png','uk.png','ru.png');
            $respective_marks=array('92','90','84','71','70','69','68','67','66','66');

            echo "<table class='table table-bordered table-responsive centered' >";
              echo "<thead >";
                echo "<tr >";
                  echo "<th>Country</th>";
                  echo "<th>Name</th>";
                  echo "<th>Marks Obtained</th>";
                echo "</tr>";
              echo "</thead>";
              echo "<tbody>";

                for($i=0;$i<count($gold_medalist);$i++) {
                  $final_url=$base_url.$respective_flags[$i];
                  echo "<tr>";
                  echo "<th><img src='$final_url' width='40' height='40' style='float:left;margin-left:10%;'/><p>$gold_medalist_countries[$i]</p></th>";
                  echo "<th><p>$gold_medalist[$i]</p></th>";
                  echo "<th><p>$respective_marks[$i]</p></th>";
                  echo "</tr>";
                }

              echo "</tbody>";
            echo "</table>";
         ?>
      </div>










      <div class="well" style="margin-top:5%;">
        <h2 class="silver" style="text-align:center;">Silver Medals in the Individual Contest</h2><br><br>
        <?php

            $silver_medalist_countries=array('USA','Romania','USA','Estonia','Poland','Bulgaria','Slovenia',
            'China','Poland','USA','Russia','Bulgaria','Russia','Taiwan','Australia','Russia','Poland');
            $silver_medalist=array('Margarita Misirpashayeva','Ioana Bouroș','Shuheng Niu',
            'Joonas Jürgen Kisel','Zofia Bronisława Kaczmarek','Tina Vladimirova',
            'Matija Lovšin','Luo Yiming','Krzysztof Choszczyk','Erik Metz','Anna Tatarenko',
            'Mihail Paskov','Julia Panchenko','Shen-Chang Huang','Henry Wu','Maria Aristova','Maciej Antoni Paliga');
            $respective_flags=array('us.png','ro.png','us.png','ee.png','pl.png','bg.png','si.png','cn.png',
            'pl.png','us.png','ru.png','bg.png','ru.png','tw.png','au.png','ru.png','pl.png');
            $respective_marks=array('64','64','61','60','59','59','59','58','58','58','57','56','56','55','55','54','54');
            $base_url='./images/flags/';
            echo "<table class='table table-bordered table-responsive centered' >";
              echo "<thead >";
                echo "<tr >";
                  echo "<th>Country</th>";
                  echo "<th>Name</th>";
                  echo "<th>Marks Obtained</th>";
                echo "</tr>";
              echo "</thead>";
              echo "<tbody>";

                for($i=0;$i<count($silver_medalist);$i++) {
                  $final_url=$base_url.$respective_flags[$i];
                  echo "<tr>";
                  echo "<th><img src='$final_url' width='40' height='40' style='float:left;margin-left:10%;'/><p>$silver_medalist_countries[$i]</p></th>";
                  echo "<th><p>$silver_medalist[$i]</p></th>";
                  echo "<th><p>$respective_marks[$i]</p></th>";
                  echo "</tr>";
                }

              echo "</tbody>";
            echo "</table>";
         ?>
      </div>









      <div class="well" style="margin-top:5%;">
        <h2 class="bronze" style="text-align:center;">Bronze Medals in the Individual Contest</h2><br><br>
        <?php

            $bronze_medalist_countries=array('Japan','Russia','Russia','India',
            'USA','China','Sweden','Brazil','Sweden','Poland','Sweden','China',
            'Czech Republic','China','Ireland','Bulgaria','Romania','China','Bulgaria',
            'Hungary','Poland','USA','Ukraine','Ukraine','United Kingdom','Republic of Korea');

            $bronze_medalist=array('Tsuyoshi Kobayashi','Elena Shukshina','Daniel Vedeneev',
            'Aalok Sathe','Wyatt R. Reeves','Wang Runze','David Axel Evert Avellan-Hultman',
            'Bruno Kenzo Ozaki','Amanda Elon Kann','Agnieszka Dudek','Johan Emil Raaholt Ingelsten',
            'Bai Ruiheng','Zuzana Gruberová','Yu Shuyue',"Claire O'Connor",'Tsvetelina Stefanova',
            'Theodor Cucu','Li Huihan','Nadezhda Dimitrova','Mazzag Bálint','Wojciech Andrzej Piątek',
            'Siye Zhu','Mariia Stepaniuk','Roman Skurikhin','Isobel Alice Voysey','Yejoo Han');

            $base_url='./images/flags/';
            $respective_flags=array('jp.png','ru.png','ru.png','in.png',
            'us.png','cn.png','se.png','bz.png','se.png','pl.png','se.png','cn.png',
            'cz.png','cn.png','ie.png','bg.png','ro.png','cn.png','bg.png',
            'hu.png','pl.png','us.png','ua.png','ua.png','uk.png','kr.png');

            $respective_marks = array(52,52,52,51,49,49,49,49,49,49,48,48,47,47,47,44,44,44,43,43,42,42,42,41,41,40);

            echo "<table class='table table-bordered table-responsive centered' >";
              echo "<thead >";
                echo "<tr >";
                  echo "<th>Country</th>";
                  echo "<th>Name</th>";
                  echo "<th>Marks Obtained</th>";
                echo "</tr>";
              echo "</thead>";
              echo "<tbody>";

                for($i=0;$i<count($bronze_medalist);$i++) {
                  $final_url=$base_url.$respective_flags[$i];
                  echo "<tr>";
                  echo "<th><img src='$final_url' width='40' height='40' style='float:left;margin-left:10%;'/><p>$bronze_medalist_countries[$i]</p></th>";
                  echo "<th><p>$bronze_medalist[$i]</p></th>";
                  echo "<th><p>$respective_marks[$i]</p></th>";
                  echo "</tr>";
                }

              echo "</tbody>";
            echo "</table>";
         ?>
      </div>









      <div class="well" style="margin-top:5%;">
        <h2 style="text-align:center;">Honourable Mentions in the Individual Contest</h2><br><br>
        <?php

            $special_mention_countries=array('Ireland','Canada','Poland','USA','China','Japan',
            'USA','Canada','Taiwan','Poland','Hungary','Ukraine','Spain','Canada','Czech Republic',
            'Estonia','Taiwan','Latvia','Ireland','Japan','China','Hungary','Australia','Bulgaria');

            $special_mentions=array('Dónal Farren','Kevin Sun','Rafał Krzysztof Pragacz',
            'Laurestine Irene Bradford','Shi Yuanjun','Yuto Yagi','Jack LaFleur','Minh-Tam Nguyen',
            'Robin Alexander Young','Dawid Rafał Bucki','Diviki-Nagy Botond','Ivan Oleksiyuk',
            'Ferrán López Guitart','James Hogan','Haštal Hapka','Robert Nõmmann','Willie Jeng',
            'Irina Česnokova','Pádraig Sheehy','Hirotaka Sato','Liu Yuyang','Souly Alexandra','Tom Ryan','Zdravko Ivanov');

            $respective_flags=array('ie.png','ca.png','pl.png','us.png','cn.png','jp.png',
            'us.png','ca.png','tw.png','pl.png','hu.png','ua.png','es.png','ca.png','cz.png',
            'ee.png','tw.png','lv.png','ie.png','jp.png','cn.png','hu.png','au.png','bg.png');

            $respective_marks=array(39,39,39,38,38,38,37,37,37,36,36,36,35,35,34,34,34,33,33,32,32,32,32,32);

            $base_url='./images/flags/';


            echo "<table class='table table-bordered table-responsive centered' >";
              echo "<thead >";
                echo "<tr >";
                  echo "<th>Country</th>";
                  echo "<th>Name</th>";
                  echo "<th>Marks Obtained</th>";
                echo "</tr>";
              echo "</thead>";
              echo "<tbody>";

                for($i=0;$i<count($special_mentions);$i++) {
                  $final_url=$base_url.$respective_flags[$i];
                  echo "<tr>";
                  echo "<th><img src='$final_url' width='40' height='40' style='float:left;margin-left:10%;'/><p>$special_mention_countries[$i]</p></th>";
                  echo "<th><p>$special_mentions[$i]</p></th>";
                  echo "<th><p>$respective_marks[$i]</p></th>";
                  echo "</tr>";
                }

              echo "</tbody>";
            echo "</table>";
         ?>
      </div>

<div class="well" style="margin-top:5%;">
        <h2  style="text-align:center;"> Best performing teams in the individual contest</h2><br><br>
        <?php

            $team_medalist_countries=array('USA Red','Russia Belka','Russia Strelka');
            $position=array('61.75','61.25','57.25');

            $base_url='./images/flags/';
            $respective_flags=array('us.png','ru.png','ru.png');

            echo "<table class='table table-bordered table-responsive centered' >";
              echo "<thead >";
                echo "<tr >";
                  echo "<th>Team Name</th>";
                  echo "<th>Score</th>";
                echo "</tr>";
              echo "</thead>";
              echo "<tbody>";

                for($i=0;$i<count($team_medalist_countries);$i++) {
                  $final_url=$base_url.$respective_flags[$i];
                  $class = strtolower($position[$i]);
                  echo "<tr>";
                  echo "<th><img src='$final_url' width='40' height='40' style='float:left;margin-left:10%;'/><p>$team_medalist_countries[$i]</p></th>";
                  echo "<th><p class='$class'>$position[$i]</p></th>";
                  echo "</tr>";
                }

              echo "</tbody>";
            echo "</table>";
         ?>
      </div>




      <div class="well" style="margin-top:5%;">
        <h2  style="text-align:center;">Best Solutions</h2><br><br>
        <table class="table table-bordered table-responsive centered">
          <thead>
            <tr>
              <th>
                Problem Number
              </th>
              <th>
                Student Name
              </th>
              <th>
                Country
              </th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <th rowspan="2">
                Problem 1
              </th>
              <th>
                Liam Robert McKnight
              </th>
              <th>
                <img src="images/flags/uk.png" alt="aus" width="36" height="36" style="float:left;margin-left:10%"/>United Kingdom
              </th>
            </tr>

            <tr>

              <th>
                Kevin Sun
              </th>
              <th>
                <img src="images/flags/ca.png" alt="aus" width="36" height="36" style="float:left;margin-left:10%"/>Canada
              </th>
            </tr>

            <tr>
              <th rowspan="2">
                Problem 2
              </th>
              <th>
                Max Zhang
              </th>
              <th>
                <img src="images/flags/au.png" alt="aus" width="36" height="36" style="float:left;margin-left:10%"/>Australia
              </th>
            </tr>

            <tr>
              <th>
                Bai Ruiheng
              </th>
              <th>
                <img src="images/flags/cn.png" alt="aus" width="36" height="36" style="float:left;margin-left:10%"/>China
              </th>
            </tr>

            <tr>
              <th>
                Problem 3
              </th>
              <th>
                David Axel Evert Avellan-Hultman
              </th>
              <th>
                <img src="images/flags/se.png" alt="aus" width="36" height="36" style="float:left;margin-left:10%"/>Sweden
              </th>
            </tr>

            <tr>
              <th rowspan="2">
                Problem 4
              </th>
              <th>
                Jaeyeong Yang
              </th>
              <th>
                <img src="images/flags/kr.png" alt="aus" width="36" height="36" style="float:left;margin-left:10%"/>Republic of Korea
              </th>
            </tr>

            <tr>
              <th>
                Ivan Samodelkin
              </th>
              <th>
                <img src="images/flags/ru.png" alt="aus" width="36" height="36" style="float:left;margin-left:10%"/>Russia
              </th>
            </tr>

            <tr>
              <th>
                Problem 5
              </th>
              <th>
                Hirotaka Sato
              </th>
              <th>
                <img src="images/flags/jp.png" alt="aus" width="36" height="36" style="float:left;margin-left:10%"/>Japan
              </th>
            </tr>


          </tbody>
        </table>
      </div>

<!--
      <div class="well" style="margin-top:5%;">
        <h2  style="text-align:center;">Special Prizes</h2><br><br>
        <table class="table table-bordered table-responsive centered">
          <thead>
            <tr>
              <th>
                Country
              </th>
              <th>
                Name
              </th>
              <th>
                Obtained Score
              </th>
              <th>
                Prize
              </th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <th>
                <img src="images/flags/kr.png" alt="aus" width="36" height="36" style="float:left;margin-left:10%"/>Republic of Korea
              </th>
              <th>
                Jaeyeong Yang
              </th>
              <th>
                92
              </th>
              <th>
                1<sup>st</sup> highest score
              </th>
            </tr>

            <tr>
              <th>
                <img src="images/flags/us.png" alt="aus" width="36" height="36" style="float:left;margin-left:10%"/>USA
              </th>
              <th>
                James Wedgwood
              </th>
              <th>
                90
              </th>
              <th>
                2<sup>nd</sup> highest score
              </th>
            </tr>

            <tr>
              <th>
                <img src="images/flags/uk.png" alt="aus" width="36" height="36" style="float:left;margin-left:10%"/>United Kingdom
              </th>
              <th>
                Liam Robert McKnight
              </th>
              <th>
                84
              </th>
              <th>
                3<sup>rd</sup> highest score
              </th>
            </tr>


          </tbody>
        </table>
      </div>

-->

 

      <div class="well" style="margin-top:5%;">
        <h2  style="text-align:center;">Team Contest Results</h2><br><br>
        <?php

            $team_medalist_countries=array('Sweden','Australia-1','United Kingdom','USA Red','USA Blue','Russia Belka','Spain-1','Korea Woori','Bulgaria-2','China-1');
            $position=array('Gold','Silver','Bronze','','','','','','','');
            $team_scores = array('57','56','49','47.5','45','43','41','41','39','39');
            $base_url='./images/flags/';
            $respective_flags=array('se.png','au.png','uk.png','us.png','us.png','ru.png','es.png','kr.png','bg.png','cn.png');

            echo "<table class='table table-bordered table-responsive centered' id='all-center' >";
              echo "<thead >";
                echo "<tr >";
                  echo "<th>Team</th>";
                  echo "<th>Score</th>";
                  echo "<th>Medal</th>";
                echo "</tr>";
              echo "</thead>";
              echo "<tbody>";

                for($i=0;$i<count($team_medalist_countries);$i++) {
                  $final_url=$base_url.$respective_flags[$i];
                  $class = strtolower($position[$i]);
                  echo "<tr>";
                  echo "<th><img src='$final_url' width='40' height='40' style='float:left;margin-left:10%;'/><p>$team_medalist_countries[$i]</p></th>";
                  echo "<th><p class=''>$team_scores[$i]</p></th>";
                  echo "<th><p class='$class'>$position[$i]</p></th>";
                  echo "</tr>";
                }

              echo "</tbody>";
            echo "</table>";
         ?>
      </div>

    </div>




    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
