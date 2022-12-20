function pr(){
    document.location.href = "http://localhost/final%20INF231/php/profile.php"
}
function news(){
    document.location.href = "http://localhost/final%20INF231/php/news.php"
}
function blog(){
    document.location.href = "http://localhost/final%20INF231/php/blog.php"
}
function ab(){
    document.location.href = "http://localhost/final%20INF231/php/about.php"
}
function home(){
    document.location.href = "http://localhost/final%20INF231/php/welcome.php"
  }
  
function out(){
    document.location.href = "http://localhost/final%20INF231/html/index.html"
  }
  
function openNav() {
    document.getElementById("nav").style.width = "25vw";
    document.getElementById("cover").style.display = "block";
    document.getElementById("time").style.color = "gray"

}

function closeNav() {
    document.getElementById("nav").style.width = "0";
    document.getElementById("cover").style.display = "none";
    document.getElementById("time").style.color = "whitesmoke"
}

var mond = 0;
var category = 0;
function toggleText(elem) {
    category++
    if (category % 2 == 1) {
        $(elem).text("less..").siblings(".complete").show();
    }
    else {
        sver(elem)
        $('.complete').animate({ display: none },200)
    }
}
function sver(elem) {
    $(elem).text("more..").siblings(".complete").hide();
}

