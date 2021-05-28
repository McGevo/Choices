const li_1a = document.getElementById("1a");
const li_1b = document.getElementById("1b");

const li_2a = document.getElementById("2a");
const li_2b = document.getElementById("2b");

const q1 = document.querySelector(".question1");
const q2 = document.querySelector(".question2");
const q3 = document.querySelector(".question3");
const q4 = document.querySelector(".question4");
const q5 = document.querySelector(".question5");

const survey = document.querySelector(".survey");

li_1a.addEventListener("click", function() {
    q1.style.display = "none";
    q2.style.display = "block";
})

li_1b.addEventListener("click", function() {
    q1.style.display = "none";
    q3.style.display = "block";
})

li_2a.addEventListener("click", function() {
    q3.style.display = "none";
    q4.style.display = "block";
})

li_2b.addEventListener("click", function() {
    q3.style.display = "none";
    q5.style.display = "block";
})