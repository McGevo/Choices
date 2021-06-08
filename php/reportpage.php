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

  $query = "SELECT subjectTitle, subjectDescription, infoURL FROM subjects WHERE subjectCode = $subject";
  $result = mysqli_query($link, $query);

  //Display products
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
  {
    //Using the while loop populate all product in a table
    $subject_title = $row['subjectTitle'];
	$subject_desc = $row['subjectDescription'];
    $subject_info = $row['infoURL'];
    
	echo "<div class='grey'>";
    echo "<h3>Your recommended Course Enrolment is : <br>";
	echo "<strong class='underline'>$subject_title</strong></h3>"; //Name field from the SQL table is missing
    echo "<p>Subject Description : $subject_desc</p>";
    echo "<p>You can find out more about this subject by following this link : <a class='link' href='$subject_info'>More Infomation</a></p>";
    echo "<p>Ready to Enrol in this course? <a class='link' href='https://www.tafesa.edu.au/apply-enrol/how-to-apply/award-satac-entry'>Click here</a></p>";
    echo "<p>Alternatively, if you would like to contact the course coordinator for this course, you can send them a message by following the link below.</p><br/>";
    echo "<div class='container2'>";
	echo "<p><form action='contact.php' method='POST'><input name='subject' type='hidden' id=$subject value=$subject><input class='button' name='submit' type='submit' id='submitcoordinator' value='Contact this subject&#39;s TAFESA Coordinator'></form></p>";
	echo "</div>";
  }
  
  $query = "SELECT subjectTitle, subjectDescription, infoURL FROM subjects WHERE studyArea IN (SELECT studyArea FROM subjects WHERE subjectCode = $subject) AND NOT subjectCode = $subject";
  $result = mysqli_query($link, $query);
  
  echo "<h4>Alternative Choices</h4>"; //Name field from the SQL table is missing
  echo "<p>Your responses indicate you would also be suited to these similar courses :</p>";

  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
  {
    //Using the while loop populate all product in a table
    $subject_title = $row['subjectTitle'];
	$subject_desc = $row['subjectDescription'];
    $subject_info = $row['infoURL'];
    
    echo "<h4>Course : <strong class='underline'>$subject_title</strong></h4>";
    echo "<p>Subject Description : $subject_desc</p>";
    echo "<p>You can find out more about this subject by following this link : <a class='link' href='$subject_info'>More Infomation</a></p>";
	echo "</div>";
  }

  mysqli_close($link);
?> 
	
  <br/>
	<p>Not sure these results are for you? Click "Retake Questionnaire" below to see if you get a different recommendation.</p>
  <br/>

	<!--<a href="">Next</a><br/><br/>-->
	<div class="container1">
	<a href="../html/disclaimer.html" class="button">Retake Questionnaire</a></div>
	  <br/>
	<div class="container2">
<a href="../index.html" class="button2">Home</a></div>  
  <script src="../js/main.js"></script>
	</div>
  </body>
</html>