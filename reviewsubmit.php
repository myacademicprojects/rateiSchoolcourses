<?php
   $connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
   $db = mysql_select_db("review", $connection); // Selecting Database from Server
   if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
   $coursecode = $_POST['cid'];
   $cname = $_POST['cname'];    
   $difficultyLevel = $_POST['difficultyLevel'];
   $recoCourse = $_POST['rcoption'];
   $courseComment = $_POST['ccom'];
   $name = $_POST['rname'];
   $jobTitle = $_POST['rjobtitle'];
   $company = $_POST['rcompany'];
   $profUsability = $_POST['rprofusability'];
   
        if (isset($_POST['rcoption'])){
           $recoCourse = $_POST['rcoption'];
           
       }
   //Insert Query of SQL
   $query = mysql_query("insert into coursereview(coursecode, difficultyLevel, recoCourse, courseComment, name, jobTitle, company, profUsability) values ('$coursecode','$difficultyLevel', '$recoCourse',  '$courseComment', '$name','$jobTitle','$company','$profUsability')");
  // echo "<br/><br/><span><style=text-align: "center">Review Inserted successfully...!!</span>" .$recoCourse. "<br>";
      /*Courses for ADS */
      echo "<script> alertFunction(); </script>";
       ?>

<?php
       
       if($coursecode== "IST565")
       {
          header('Location: http://localhost/rateiSchool/coursereview.php?data=IST565');
    
       }
       if($coursecode == "IST659")
       {
           header('Location: http://localhost/rateiSchool/coursereview.php?data=IST659');
       }
       if($coursecode == "IST687")
       {
           header('Location: http://localhost/rateiSchool/coursereview.php?data=IST687');
       }
       if($coursecode == "IST718")
       {
           header('Location: http://localhost/rateiSchool/coursereview.php?data=IST718');
       }
       if($coursecode == "MBC638")
       {
           header('Location: http://localhost/rateiSchool/coursereview.php?data=MBC638');
       }
       if($coursecode == "SCM651")
       {
           header('Location: http://localhost/rateiSchool/coursereview.php?data=SCM651');
       }
       
       /*Courses for IMT*/
       if($coursecode == "IST233")
       {
           header('Location: http://localhost/rateiSchool/coursereview.php?data=IST233');
       }
       if($coursecode== "IST346")
       {
          header('Location: http://localhost/rateiSchool/coursereview.php?data=IST346');
    
       }
       if($coursecode == "IST359")
       {
           header('Location: http://localhost/rateiSchool/coursereview.php?data=IST359');
       }
       if($coursecode == "IST335")
       {
           header('Location: http://localhost/rateiSchool/coursereview.php?data=IST335');
       }
       if($coursecode == "IST445")
       {
           header('Location: http://localhost/rateiSchool/coursereview.php?data=IST445');
       }
       if($coursecode == "IST522")
       {
           header('Location: http://localhost/rateiSchool/coursereview.php?data=IST522');
       }

       //echo file_get_contents("coursereview.php?data=IST659");
   }
   mysql_close($connection); // Closing Connection with Server
   ?>