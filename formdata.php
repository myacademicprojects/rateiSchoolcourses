<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("review", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$difficulty = $_POST['difficulty'];
$othercourse = $_POST['othercourse'];
// $contact = $_POST['contact'];
// $address = $_POST['address']; 
if($difficulty !=''||$othercourse !=''){
//Insert Query of SQL
$query = mysql_query("insert into reviewist565(difficulty, othercourse) values ('$difficulty', '$othercourse')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>