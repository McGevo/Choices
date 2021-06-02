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

  //Create a query to select the correct staff members assigned to the subject based on the subjectlecturer table IDs (this method means once again, the subjectID is the only id required to generate the necessary information)
  $query = "SELECT givenName, surname, email FROM staff WHERE staffID IN (SELECT Staff_staffID FROM subjectlecturer WHERE Subjects_subjectCode = 1);";
  $result = mysqli_query($link, $query);

  //Display products
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
  {
    //Using the while loop populate all product in a table
    $fullName = $row['givenName']." ".$row['surname'];
    $email = $row['email'];
    
    echo "<h3>The topic Coordinator for this topic is $fullName</h3>";
    echo "<br><br>";
    echo "<p>If you would like to contact the lecturer with any questions about your recommended course, please fill in the form below.</p>";
    echo "<form action='mailto:$email' method='POST'  enctype='multipart/form-data' name='EmailForm'>";//This method of sending an email won't work as we don't have the resources - but then again, we don't want to actually email anyone in the prototype!
    echo "Name:<br> <input type='text' size='19' name='ContactName'><br><br>";
    echo "Message:<br> <textarea name='ContactCommentt' rows='6' cols='20'>";
    echo "</textarea><br><br> <input type='submit' value='Submit'>";
    echo "</form>";

  }
  mysqli_close($link);
?>   

  </body>
</html>
