//Java script  for Login 

var form = document.getElementById("loginform");

var sampleID1 = "sam@gmail.com";
var password1 = "123";

var sampleID2 = "zen@gmail.com";
var password2 = "456";

var sampleID3 = "tina@gmail.com";
var password2 = "789";

form.addEventListener("submit", clickSubmit);

var localEmail = localStorage.getItem("email");
var localPassword = localStorage.getItem("password");

function loginTry() {
  if (localEmail != null && localPassword != null) {

    if (localEmail == sampleID1 && localPassword == password1) {
      window.location.href = "Profile1.php";

    } else if (localEmail == sampleID2 && localPassword == password2) {
      window.location.href = "Profile2.php";

    } else if (localEmail == sampleID3 && localPassword == password3) {
      window.location.href = "Profile3.php";

    } else {
      localStorage.removeItem("email");
      localStorage.removeItem("password");
    }

  }
}
loginTry();
function clickSubmit(e) {

  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  if (email != "" && password != "") {

    localStorage.setItem("email", email);
    localStorage.setItem("password", password);

    if (email == sampleID1 && password == password1) {

      window.location.href = "Profile1.php";
    } else if (email == sampleID2 && password == password2) {
      window.location.href = "Profile2.php";

    } else if (email == sampleID3 && password == password3) {
      window.location.href = "Profile3.php";

    } else {
      localStorage.removeItem("email");
      localStorage.removeItem("password");
      showError("Enter correct email ID/Password");
    }
  } else {
    showError("Fields Cannot be empty");
  }
  e.preventDefault();
}

function showError(m) {
  var msg = document.getElementById("msg");
  msg.innerHTML = `<span id="msg-box" class='badge alert-danger'>${m}</span>`;
  setTimeout(function ()
   {
    document.getElementById("msg-box").remove();
   }, 3000);
}
