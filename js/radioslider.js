const solutions = document.getElementById('slider');
let flag = false;

solutions.addEventListener("click", () => {
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

const langbutton = document.getElementById("dropbtn");
let dutch = false;

solutions.addEventListener("click", () => {
  if (dutch == false) {
      document.getElementById("Language").innerHTML = "<?php index_dutch(); ?>";
      dutch = true;
  } else {
      document.getElementById("language").innerHTML = "<?php index_english() ?>";
      dutch = false;
  }  
})




