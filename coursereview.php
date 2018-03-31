<!DOCTYPE html>
<html>
   <head>
      <title>Course Reviews</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/stylesheet.css" />
      <script src="https://use.fontawesome.com/d1a96cf798.js"></script>
   </head>
   <body>
      <div class="top">
         <img src="images/ischool-logo.jpg" alt="iSchool logo" style="width: 100px; height: 100px; float: left"> 
         <br>
         <h2>rate iSchool courses</h2>
      </div>
      <?php
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "review";
         if(isset($_GET['data']))
             {
                 $data = $_GET['data'];
             }
         //echo "<p>". $data. "<p>";
             $url = 'reviewform.php?data='.$data ;
         //echo "<p>". $url. "<p>";
         // Create connection
         $conn = new mysqli($servername, $username, $password, $dbname);
         // Check connection
         if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
         }
         
         $sql = "SELECT coursecode FROM courses WHERE coursecode = '". $data. "'";            
         $result = $conn->query($sql);
                 while($row = $result->fetch_assoc())
                {
                 echo "<h3> Course Code: </h3><p>". $row["coursecode"]. "</p><br>";
                } 
         
         $sql = "SELECT courseName, courseDescription FROM courses WHERE coursecode = '". $data. "'";
         $result = $conn->query($sql);
                while($row = $result->fetch_assoc())
                {
                 echo "<h3> Course Name: </h3><p>". $row["courseName"]. "</p><br>";
                 echo "<h3> Course Description:</h3><p>". $row["courseDescription"]. "</p><br>";
                }
           ?>  
      <!--<button type="button" class="btn-primary"><a href="reviewform.html" target="_blank"   >Submit Review</a></button><br><br>
         <!--now genearte a dynamic link
         //echo '<a href="'. $url.'">Click me</a>'; -->
      <?php
         echo "<button type=\"button\" class=\"btn-primary\"><a href='" . $url. "' target=\"_blank\">Submit Review</a></button><br><br>";
         ?>
      <table class="" id="" align="center" style="">
      <tbody >
          <tr>
         <td>
            <?php 
               $sql = "SELECT  ROUND(AVG(difficultyLevel),1) FROM coursereview WHERE coursecode = '". $data. "'";
                 $result = $conn->query($sql);
                   //echo $result ;
                      while($row = $result->fetch_assoc())
                      {
                       if($row["ROUND(AVG(difficultyLevel),1)"] >= 4)   
                           echo "<h3 style=\"margin-left: 100px\"> Difficulty Level:</h3><p class=\"hard\" style=\"margin-left: 100px\">". $row["ROUND(AVG(difficultyLevel),1)"]. "</p>" ; 
               
                        if($row["ROUND(AVG(difficultyLevel),1)"] < 4 && $row["ROUND(AVG(difficultyLevel),1)"] > 2)
                            echo "<h3 style=\"margin-left: 100px \"> Difficulty Level:</h3><p class=\"ok\" style=\"margin-left: 100px\">". $row["ROUND(AVG(difficultyLevel),1)"]. "</p>" ;   
                          
                          if($row["ROUND(AVG(difficultyLevel),1)"] <=2 && $row["ROUND(AVG(difficultyLevel),1)"] >= 1)
                             echo "<h3 style=\"margin-left: 100px\"> Difficulty Level:</h3><p class=\"easy\" style=\"margin-left: 100px\">". $row["ROUND(AVG(difficultyLevel),1)"]. "</p>" ;
                      }
                   
                   ?>
         </td>
         <td>
            <?php 
               $sql = "SELECT  ROUND(AVG(profUsability),1) FROM coursereview WHERE coursecode = '". $data. "'";
                 $result = $conn->query($sql);
                   //echo $result ;
                      while($row = $result->fetch_assoc())
                      {
                       if($row["ROUND(AVG(profUsability),1)"] <= 1)   
                           echo "<h3> Professional Usability: </h3><p class=\"hard\">". $row["ROUND(AVG(profUsability),1)"]. "</p>" ; 
               
                        if($row["ROUND(AVG(profUsability),1)"] >1 && $row["ROUND(AVG(profUsability),1)"] <=3)
                           echo "<h3> Professional Usability: </h3><p class=\"ok\">". $row["ROUND(AVG(profUsability),1)"]. "</p>" ;   
                          
                         if($row["ROUND(AVG(profUsability),1)"] >3 && $row["ROUND(AVG(profUsability),1)"] <= 5)
                           echo "<h3> Professional Usability: </h3><p class=\"easy\">". $row["ROUND(AVG(profUsability),1)"]. "</p>" ;
                      }
                   ?>
         </td>
      </tr>
      <!-- <tr>
         <td>
           <!-- <div style="float:left; margin-left:100px"><span class="green">EASY</span>&nbsp;<span class="yellow">MEDIUM</span>&nbsp;<span class="red">HARD</span></div> 
            <br>
         </td>
         <td>
           <!-- <div style="float:left; margin-left:375px"><span class="green">USEFUL</span>&nbsp;<span class="yellow">MEH...</span>&nbsp;<span class="red">NOT USEFUL</span></div> 
            <br>
         </td>
      </tr> -->
          </tbody>
       </table>
      <?php
         $yes = 'Yes';
         $no = 'No';
         
         $sql = "SELECT  COUNT(recoCourse) FROM coursereview WHERE coursecode = '". $data. "' AND recoCourse = '". $yes. "'";
         $result = $conn->query($sql);
         //echo .$result.
            while($row = $result->fetch_assoc())
            {
              echo "<br><h3> Course Recommendation:</h3><i class=\"fa fa-thumbs-o-up fa-2x\" aria-hidden=\"true\">&nbsp;&nbsp;". $row['COUNT(recoCourse)']. "</i>";
            }
         $sql = "SELECT  COUNT(recoCourse) FROM coursereview WHERE coursecode = '". $data. "' AND recoCourse = '". $no. "'";
         $result = $conn->query($sql);
         //echo .$result.
            while($row = $result->fetch_assoc())
            {
              echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-thumbs-o-down fa-2x\" aria-hidden=\"true\">&nbsp;&nbsp;". $row['COUNT(recoCourse)']. "</i><br>" ; 
            }  
         $sql = "SELECT  name, jobTitle, company, courseComment FROM coursereview WHERE coursecode = '". $data. "'";
         $result = $conn->query($sql);
         //echo .$result.
         ?>
      <br>
      <table class="table-striped" id="retable" align="center">
         <thead>
            <tr>
               <th>NAME</th>
               <th>JOB TITLE</th>
               <th>COMPANY</th>
               <th>COMMENT</th>
            </tr>
         </thead>
         <tbody>
            <?php
               $sql = "SELECT  name, jobTitle, company, courseComment FROM coursereview WHERE coursecode = '". $data. "'";
                 $result = $conn->query($sql);
                      while($row = $result->fetch_assoc())
                      {
                       
                       echo "<tr>";
                       echo "<td>". $row['name']. "</td>";
                       echo "<td>". $row['jobTitle']. "</td>";
                       echo "<td>". $row['company']. "</td>";
                       echo "<td class=\"retable\">". $row['courseComment']. "</td>";
                       echo "</tr>";
                      }  
                           $conn->close();
               ?>
         </tbody>
      </table>
   </body>
</html>