const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

//récupère lèid du boutton
mybutton = document.getElementById("myBtn");

// Qand l'utilisateurs click sur ça le renvoie au top
function topFunction() {
  document.documentElement.scrollTop = 0; 
}
