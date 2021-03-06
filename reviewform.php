<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Submit Review</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/stylesheet.css" />
   </head>
   <body>
      <?php
         if(isset($_GET['data']))
               {
                   $data = $_GET['data'];
               }
         ?>
      <div class="container">
         <h2>Submit Course Review</h2>
         <form class="form-horizontal" action="reviewsubmit.php" method="post">
            <div class="form-group">
               <label class="control-label col-sm-2">Course ID:</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Course ID e.g. IST111" name="cid" maxlength="6" value="<?php echo   ($data); ?>">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Difficulty Level:</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="(Easy) 1  2  3  4  5 (Most difficult)" name="difficultyLevel" maxlength="1">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Course Comment:</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Comment" name="ccom" maxlength="1000">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Recommend Course?</label><br>
               <div class="radio">
                  <label><input type="radio" name="rcoption" value="Yes">Yes</label>
               </div>
               <div class="radio">
                  <label><input type="radio" name="rcoption" value="No">No</label>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Name:</label>
               <div class="col-sm-10">          
                  <input type="text" class="form-control" placeholder="Enter Name" name="rname"><br>
               </div>
               <label class="control-label col-sm-2">Job Title:</label>
               <div class="col-sm-10">          
                  <input type="text" class="form-control" placeholder="Enter Job Title" name="rjobtitle"><br>
               </div>
               <label class="control-label col-sm-2">Company:</label>
               <div class="col-sm-10">          
                  <input type="text" class="form-control" placeholder="Enter Company" name="rcompany"><br>
               </div>
               <label class="control-label col-sm-2">Professional Usability:</label>
               <div class="col-sm-10">          
                  <input type="text" class="form-control" placeholder="(Least Useful) 1   2   3   4   5 (Most Useful)" name="rprofusability" maxlength="1">
               </div>
            </div>
            <div class="sobmit">
               <input class="submit" name="submit" type="submit" onclick="alertFunction()" value="Submit" style="font-family: 'Merriweather', serif;">
            </div>
         </form>
      </div>
      <!--Container-->
   </body>
    <script>
function alertFunction() {
    alert("Your review is submitted successfully");
}
</script>
</html>