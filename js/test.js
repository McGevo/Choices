var subjectID;

function test(){

  //document.body.innerHTML += '<form id="newSubject" action="../php/reportpage.php" method="GET"><input type="hidden" name="subjectID" value="1"></form>';
  //document.getElementById("newSubject").submit();
  var subjectID;
  subjectID = "1";

  //var subjectCode = 1;
}

function get(){
  var subjectIDd = $_GET['product_id'];
}

function value(){
  var subjectID = document.getElementById("1");
  document.getElementById("text").innerHTML = subjectID;
}

function go(){
  // (A) VARIABLES TO PASS
  var first = "Foo Bar",
      second = ["Hello", "World"];
  // (B) OPEN NEW WINDOW
  // Just pass variables over to new window
  var newwin = window.open("../php/reporttest.php");
  newwin.onload = function(){
    // "this" refers to newwin
    this.first = first;
    this.second = second;
  };
}

function get(){
  console.log(first); // Foo Bar
  console.log(second); // ["Hello", "World"]
}