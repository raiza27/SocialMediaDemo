
//Clear Login page

var logoutBtn = document.getElementById("logout");
logoutBtn.addEventListener("click", onLogoutClick);

function onLogoutClick(e) {
  localStorage.removeItem("email");
  localStorage.removeItem("password");
  window.location.href = "Index.php";
}
