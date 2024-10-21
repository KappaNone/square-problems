const button = document.getElementById("hamburger-button");

function toggleHamburgerMenu() {
  const links = document.getElementById("links");
  if (links.style.display == "unset") {
    links.style.display = "none";
  } else {
    links.style.display = "none";
  }
}

button.addEventListener("click", () => {
  toggleHamburgerMenu();
})