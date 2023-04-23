// const track = document.getElementById("image-track");

// window.onmousedown = e => {
//     track.dataset.mouseDownAt = e.clientx;
// }

// window.onmousemove = () => {
//     track.dataset.onmouseDownAt = "0";
//     track.dataset.prevPecentage = track.dataset.precentage;
// }

// window.onmousemove = e => {
//     if (track.dataset.mouseDownAt === "0") return;

//     const mouseDelta = parseFloat(track.dataset.mouseDownAt) - e.clientx,
//           maxDelta = window.innerWidth / 2;

//     const precentage = (mouseDelta / maxDelta) * -100,
//           nextPercectage = parseFloat(track.dataset.prevPecentage) + precentage;

//     track.dataset.precentage = nextPercectage;

//     // track.style.transform = `translate(0% , ${nextPercentage}%)`;

//     document.getElementById("image-search").style.objectPosition = `50% ${nextPercectage}`;

// }

// for dark mode

const btn1 = document.getElementById("ch");
const btn2 = document.getElementById("re");



btn1.addEventListener('click', () => {
  document.body.classList.remove("man");
  document.getElementById("why").classList.remove("man");
  document.getElementById("oo").classList.remove("man");
  document.getElementById("wh").classList.remove("man");
  document.getElementsByClassName("food-menu-box").classList.remove("man");
});

btn2.addEventListener('click', () => {
    document.body.classList.add("man");
    document.getElementById("why").classList.add("man");
    document.getElementById("oo").classList.add("man");
    document.getElementById("wh").classList.add("man");
    document.getElementsByClassName("food-menu-box").classList.add("man");
});


// Validatioin

function validateForm() {
  // Get the values of the form fields
  var name = document.forms["contactForm"]["name"].value;
  var email = document.forms["contactForm"]["email"].value;
  var message = document.forms["contactForm"]["message"].value;

  // Check if the name field is empty
  if (name == "") {
      alert("Please enter your name");
      return false;
  }

  // Check if the email field is empty or doesn't contain an @ symbol
  if (email == "" || email.indexOf("@") == -1) {
      alert("Please enter a valid email address");
      return false;
  }

  // Check if the message field is empty
  if (message == "") {
      alert("Please enter a message");
      return false;
  }
}