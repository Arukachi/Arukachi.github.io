const click = document.getElementById("click");
const sign = document.getElementById("sign");
click.addEventListener("click", flipCard);

function flipCard() {
    sign.classList.toggle("flipCard");
}

const rev_click = document.getElementById("rev_click");
rev_click.addEventListener("click", flipCard);


