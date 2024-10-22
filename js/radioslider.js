function PriceFunction() {
    var T = document.getElementById("HighDiv"),
        displayValue = "";
    if (T.style.display == "")
        displayValue = "none";

    T.style.display = displayValue;
}
