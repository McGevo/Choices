/*

  Author: Lachlan Hunt
  Date Written: 18/05/2021
  Notes: TAFESA Pathways Personality Test Prototype Code

*/

/*Declaire Variables

var creative = document.getElementsByClassName('creative').checked;

/*
var trade  = document.getElementsByClassName('trade');
var planning = document.getElementsByClassName('planning');
var people = document.getElementsByClassName('people');
*/

/*for (var i = 0; i < creative.length; i++) {
  creative = creative + 
}
*/
function addpoints() {
  
  window.location.href = "../html/department_choice.html";

  //console.log(creative);//
}

function departmentchoice(){

  window.location.href = "../html/ithome.html";

}

function web_vs_soft() {

  window.location.href = "../html/web_vs_soft.html";

}

function it_vs_net() {

  window.location.href = "../html/it_vs_net.html";

}

function itcIII_vs_itcIV() {

  window.location.href = "../html/itcIII_vs_itcIV.html";

}

function network_vs_cyber() {

  window.location.href = "../html/network_vs_cyber.html";

}



function subject_soft(){

  window.location.href = "../html/reportpage.html";

  var subject = document.getElementById("subject").innerHTML;
  var alt = document.getElementById("alt").innerHTML;
  //The alt refers to alternative courses the user could study
  var link;

  subject = "Certificate IV Program in Information Technology (Programming)";
  link = "https://www.tafesa.edu.au/xml/course/aw/aw_CP00263.aspx?S=AWD&Y=2021";
  alt = "Certificate IV Program in Information Technology (Web-Based Technologies)";

  /*document.write('<a href="' + link + '">More Information</a>');*/
}

function subject_web(){

  window.location.href = "../html/reportpage.html";

  var subject = document.getElementById("subject").innerHTML;
  var alt = document.getElementById("alt").innerHTML;
  var link;

  subject = "Certificate IV Program in Information Technology (Web-Based Technologies)";
  link = "https://www.tafesa.edu.au/xml/course/aw/aw_CP00264.aspx?S=AWD&Y=2021";
  alt = "Certificate IV Program in Information Technology (Programming)";

  /*document.write('<a href="' + link + '">More Information</a>');*/
}

function double(){

  window.location.href = "../html/reportpage.html";

  var subject = document.getElementById("subject").innerHTML;
  var alt = document.getElementById("alt").innerHTML;
  //var link;

  subject = "Double Diploma Program in Information Technology (Web-Based Technologies and Programming";
  //link = "https://www.tafesa.edu.au/xml/course/aw/aw_CP00264.aspx?S=AWD&Y=2021";
  //There is no link for this course online - maybe a string of text could say "More information coming soon!"
  alt = "Certificate IV Program in Information Technology (Programming)";

  /*document.write('<a href="' + link + '">More Information</a>');*/
}

function subject_network(){

  window.location.href = "../html/reportpage.html";

  var subject = document.getElementById("subject").innerHTML;
  var alt = document.getElementById("alt").innerHTML;
  var link;

  subject = "Certificate IV Program in Information Technology (Networking)";
  link = "https://www.tafesa.edu.au/xml/course/aw/aw_CP00262.aspx?S=AWD&Y=2021";
  alt = "Certificate IV in Cyber Security";

  /*document.write('<a href="' + link + '">More Information</a>');*/
}

function subject_cyber(){

  window.location.href = "../html/reportpage.html";

  var subject = document.getElementById("subject").innerHTML;
  var alt = document.getElementById("alt").innerHTML;
  var link;

  subject = "Certificate IV in Cyber Security";
  link = "https://www.tafesa.edu.au/xml/course/aw/aw_AC00088.aspx?S=AWD&Y=2021";
  alt = "Certificate IV Program in Information Technology (Networking)";

  /*document.write('<a href="' + link + '">More Information</a>');*/
}

function subject_itcIII(){

  window.location.href = "../html/reportpage.html";

  var subject = document.getElementById("subject").innerHTML;
  var alt = document.getElementById("alt").innerHTML;
  var link;

  subject = "Certificate III Program in Information Technology";
  link = "https://www.tafesa.edu.au/xml/course/aw/aw_TP01194.aspx?S=AWD&Y=2021";
  alt = "Certificate IV Program in Information Technology";

  /*document.write('<a href="' + link + '">More Information</a>');*/
}

function subject_itcIV(){

  window.location.href = "../html/reportpage.html";

  var subject = document.getElementById("subject").innerHTML;
  var alt = document.getElementById("alt").innerHTML;
  var link;

  subject = "Certificate IV Program in Information Technology";
  link = "https://www.tafesa.edu.au/xml/course/aw/aw_TP01120.aspx?S=AWD&Y=2021";
  alt = "Certificate III Program in Information Technology";

  /*document.write('<a href="' + link + '">More Information</a>');*/
}