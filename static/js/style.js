const body = document.getElementById("body-container");
const modelight = document.getElementById("mode-light");
const modedark = document.getElementById("mode-dark");
const loginBtn = document.getElementById("login-button");
const cardHover = document.getElementsByClassName("destination-container-add");
const cardClick = document.getElementsByClassName("card-destination");

// set mode to light.
const setDarkMode = () => {
  console.log("check dark");
  body.setAttribute("class", "body-container-dark");
  modedark.style.display = "none";
  modelight.style.display = "block";
  loginBtn.style.border = "1.2px solid #E0E0E0";
};

// set mode to dark.
const setLightMode = () => {
  console.log("check light");
  body.setAttribute("class", "body-container-light");
  modedark.style.display = "block";
  modelight.style.display = "none";
  loginBtn.style.border = "1.2px solid black";
};

// saving dark/light mode setting on localstorage.
// Light Mode On.
modelight.addEventListener("click", () => {
  localStorage.setItem("mode", "body-container-light");
  setLightMode();
});

// Dark Mode On.
modedark.addEventListener("click", () => {
  localStorage.setItem("mode", "body-container-dark");
  setDarkMode();
});

// check the mode <dark, light> on every page render.
const checkMode = () => {
  console.log("running");
  let mode = localStorage.getItem("mode");
  if (mode) {
    if (mode === "body-container-light") {
      setLightMode();
    }
    if (mode === "body-container-dark") {
      setDarkMode();
    }
  } else {
    localStorage.setItem("mode", "body-container-dark");
    setDarkMode();
  }
};

checkMode();
