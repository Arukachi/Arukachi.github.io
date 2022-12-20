const button = document.querySelector("#btn");
const icon = document.querySelector("#btn > i");
const audio = document.querySelector("audio");

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


button.addEventListener("click", () => {
  if (audio.paused) {
    audio.volume = 0.2;
    audio.play();
    document.getElementById("music").src="../img/on.png";
    
  } else {
    audio.pause();
    document.getElementById("music").src="../img/mute.png";
  }
  button.classList.add("fade");
});

$("p") 
.click(function(event) {
  event.preventDefault(); 
    $('html,body').animate({
        scrollTop: $(".tab").offset().top},
        'slow');
});