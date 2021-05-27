const ul_1 = document.querySelector(".answer1");
const ul_2 = document.querySelector(".answer2");

const q1 = document.querySelector(".question1");
const q2 = document.querySelector(".question2");

const survey = document.querySelector(".survey");

ul_1.addEventListener("click", function() {
    console.log("Clicked");
    q1.style.display = "none";
    q2.style.display = "block";
})