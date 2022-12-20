var mond = 0;
var category = 0;
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
  



function formond(elem) {
    category++
    if (category % 2 == 1) {
        $(elem).animate({ height: '26vw' }, 200)
        $(elem).css('z-index', 3)
        //  $(elem).css('z-index', 6)
        $(".post").not(elem).animate({ opacity: 0 }, 200)
        $(".post").not(elem).css('z-index',0)
        setTimeout(() => {
            $(elem).children('.hidden').animate({ opacity: 1 },200)
        }, 200);
    }
    else {
        sver(elem)
        $(elem).children('.hidden').animate({ opacity: 0 },200)
    }

}
function sver(elem) {
    $(elem).animate({ height: '6vw' }, 200)
    $(".post").css('z-index', 3)
    // $(".mond").css('z-index', 0)
    setTimeout(() => {
        $(".post").not(elem).animate({ opacity: 1 }, 200)
    }, 400);
}