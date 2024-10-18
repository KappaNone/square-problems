const button = document.getElementById("hamburger-button");

function toggleHamburgerMenu() {
  const links = document.getElementById("links");
  if (links.style.display == "none") {
    links.style.display = "unset";
  } else {
    links.style.display = "none";
  }
}

button.addEventListener("click", () => {
  toggleHamburgerMenu();
})