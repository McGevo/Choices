<!--
    Author: Lachlan Hunt
    Date Written: 18/05/2021
    Notes: TAFESA Pathways Report Page
    Styling to occur later
-->

<!--

The objective of this page is to display the user's recommended course to enroll in.

It must also include 
1) a link to the website course info, 
2) the option to save the page as a pdf, 
3) the option to enroll in that topic and 
4) contact the course coordinator.

-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>TAFESA Pathways Personality Test</title>
  <meta name="author" content="ITWORKS - Lachlan Hunt">
  <meta name="description" content="Report Page for TAFESA Pathways Career Questionnaire">
  <meta name="keywords" content="TAFESA Pathways, Career Questionnaire, Report Page">
  <link rel="stylesheet" href="../css/Questionnaire.css" type="text/css">
  </head>
  <body>
	  <div class="container"> 
  <!-- Navigation -->
  <header> <a href="https://www.tafesa.edu.au">
    <h4 class="logo">TafeSA Choices</h4>
    </a>
    <nav>
      <ul>
		<li><a href="../index.html">HOME</a></li>
        <li><a href="../html/disclaimer.html">ABOUT</a></li>
        <li> <a href="https://www.tafesa.edu.au/about-tafesa/contact-us">CONTACT</a></li>
      </ul>
    </nav>
  </header>
	  
	  
	<h2>Course Selection</h2>
	
	   <?php

  //Connect to the database server and select the database
  require_once ("conn_tafesapathwaysdb.php");

  $subject = $_POST['subject'];

  //Create a query to select the correct staff members assigned to the subject based on the subjectlecturer table IDs (this method means once again, the subjectID is the only id required to generate the necessary information)
  $query = "SELECT givenName, surname, email FROM staff WHERE staffID IN (SELECT Staff_staffID FROM subjectlecturer WHERE Subjects_subjectCode = $subject);";
  $result = mysqli_query($link, $query);

  //Display products
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
  {
    //Using the while loop populate all product in a table
    $fullName = $row['givenName']." ".$row['surname'];
    $email = $row['email'];
    
	echo "<div class='grey'>";
    echo "<h3>The topic Coordinator for this topic is $fullName</h3>";
    echo "<br><br>";
    echo "<p>If you would like to contact the lecturer with any questions about your recommended course, please fill in the form below.</p>";
	echo "<div class='container1'>";
    echo "<form action='mailto:$email' method='POST'  enctype='multipart/form-data' name='EmailForm'>";//This method of sending an email won't work as we don't have the resources - but then again, we don't want to actually email anyone in the prototype!
    echo "<label>Your Name:</label><br><br> <input type='text' size='19' name='ContactName'><br><br>";
    echo "<label>Message:</label><br><br> <textarea name='ContactCommentt' rows='6' cols='100'></textarea>";
	echo "<br><br>";
	echo "<input class='button' type='submit' value='Send'>";
	echo "</div>";
    echo "</form>";
	echo "<br><br>";
	echo "</div>";

  }
  mysqli_close($link);
?> 
	
  <br/>

  <br/>

	<!--<a href="">Next</a><br/><br/>-->
	<div class="container1">
	<a href="../html/itsurvey.html" class="button">Back</a></div>
	  <br/>
	<div class="container2">
<a href="../index.html" class="button2">Home</a></div>  
  <script src="../js/main.js"></script>
	</div>
  </body>
</html>