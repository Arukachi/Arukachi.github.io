const button = document.querySelector("#btn");
const icon = document.querySelector("#btn > i");
const audio = document.querySelector("audio");

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

