const solutions = document.getElementById('slider');
let flag = false;

solutions.addEventListener("click", () => {
    alert("hallo");
    if (flag == false) {
        document.getElementById("mainPriceRight").innerHTML = "799<i class='fa-solid fa-euro-sign EuroSign'></i>";
        document.getElementById("mainPriceLeft").innerHTML = "760<i class='fa-solid fa-euro-sign EuroSign'></i>";
        flag = true;
    } else {
        document.getElementById("mainPriceRight").innerHTML = "180<i class='fa-solid fa-euro-sign EuroSign'></i>";
        document.getElementById("mainPriceLeft").innerHTML = "140<i class='fa-solid fa-euro-sign EuroSign'></i>";
        flag = false;
    }  
})

const dropdown = document.getElementById('drpDwnPrice');
let dropactive = false;

dropdown.addEventListener("click", () => {
    alert("hallo");
    if (dropactive == false) {
        document.getElementById("drop1text").innerHTML = "lorem ipsum";
        dropactive = true;
    } else {
        document.getElementById("drop1text").innerHTML = "";
        dropactive = false;
    }
})





