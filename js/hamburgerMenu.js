const button = document.getElementById("hamburger-button");

function toggleHamburgerMenu() {
  const links = document.getElementById("links");
  if (links.style.display == "unset") {
    links.style.display = "none";
  } else {
    links.style.display = "unset";
  }
  console.log(links.style.display)
}

button.addEventListener("click", () => {
  toggleHamburgerMenu();
})

function alerttest() {
  alert("test");
}