<!-- TAFESA Choices Project
Page : PHP Script to request data from database and present correct data to user
Author : Lachlan Hunt
Date : 1/6/21
-->

<!--check line 13 for correct database name-->

<!DOCTYPE html>
<html lang="en">
  <head>
		<title></title>
	</head>
	<body>

  <!--Assumptions : javascript from previous page has directed the user here and also set a variable called "subjectID" which should be the correct Subject_ID for the subject table in the database. (eg: user selects cyber security, subject_id variable should be set to 1 (if that is what cyber security is in the database))-->
  <!--subjectTitle has been added to the database-->
  <!--row 25 select query matches SQL database structure-->

  <?php

  //Connect to the database server and select the database
  require_once ("conn_tafesapathwaysdb.php");

  //Still working on javascript pass the subjectCode from the previous page and assign it to php variable $subjectID

  //Create a query to select the correct subject from the table --The subjectID must be supplied either by JS or PHP from the previous page
  $query = "SELECT subjectDescription, infoURL FROM subjects WHERE subjectCode = 1";
  $result = mysqli_query($link, $query);

  //Display products
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
  {
    //Using the while loop populate all product in a table
    $subject_desc = $row['subjectDescription'];
    $subject_info = $row['infoURL'];
    
    echo "<h3>Your recommended Course Enrolment is </h3>"; //Name field from the SQL table is missing
    echo "<br><br>";
    echo "<p>Subject Description : $subject_desc</p>";
    echo "<p>You can find out more about this subject by following this link : <a href='$subject_info'>More Infomation</a></p>";
    echo "<p>Ready to Enroll in this course? <a href='https://www.tafesa.edu.au/apply-enrol/how-to-apply/award-satac-entry'>Click here</a></p>";
    echo "<p>Alternatively, if you would like to contact the course coordinator for this course, you can send them a message by following the link below.</p><br/>";
    echo "<a href='contact.php'>Contact TAFESA Coordinator</a>";

  }

  echo "<br><br>";
  $query = "SELECT subjectDescription, infoURL FROM subjects WHERE studyArea IN (SELECT studyArea FROM subjects WHERE subjectCode = 1) AND NOT subjectCode = 1";
  $result = mysqli_query($link, $query);

  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
  {
    //Using the while loop populate all product in a table
    $subject_desc = $row['subjectDescription'];
    $subject_info = $row['infoURL'];
    
    echo "<h4>Alternative Choices</h4>"; //Name field from the SQL table is missing
    echo "<p>You could also Enrol in</p>";
    echo "<p>Subject Description : $subject_desc</p>";
    echo "<p>You can find out more about this subject by following this link : <a href='$subject_info'>More Infomation</a></p>";

  }

  mysqli_close($link);
?>   

  </body>
</html>