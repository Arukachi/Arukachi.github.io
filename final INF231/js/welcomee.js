document.getElementById("nav1").onclick = function(){
    document.location.href = "http://localhost/final%20INF231/php/profile.php"
}
document.getElementById("nav2").onclick = function(){
    document.location.href = "http://localhost/final%20INF231/php/news.php"
}
document.getElementById("nav3").onclick = function(){
    document.location.href = "http://localhost/final%20INF231/php/blog.php"
}
document.getElementById("nav4").onclick = function(){
    document.location.href = "http://localhost/final%20INF231/php/about.php"
}
document.getElementById("nav5").onclick = function(){
    document.location.href = "http://localhost/final%20INF231/html/index.html"
}


document.getElementById("more").onclick = function(){
    document.location.href = "http://localhost/final%20INF231/php/profile.php"
}

document.getElementById("more2").onclick = function(){
    document.location.href = "http://localhost/final%20INF231/php/blog.php"
}

document.getElementById("more3").onclick = function(){
    document.location.href = "http://localhost/final%20INF231/php/news.php"
}







function openNav() {
    document.getElementById("nav").style.width = "25vw";
    document.getElementById("cover").style.display = "block";
    document.getElementById("time").style.color = "gray"
    document.getElementById("wave1").style.opacity = 0.11;
    document.getElementById("wave2").style.opacity = 0.11;
    document.getElementById("wave3").style.opacity = 0.11;
    document.getElementById("wave4").style.opacity = 0.11;

}

function closeNav() {
    document.getElementById("nav").style.width = "0";
    document.getElementById("cover").style.display = "none";
    document.getElementById("time").style.color = "whitesmoke"
    document.getElementById("wave1").style.opacity = 1;
    document.getElementById("wave2").style.opacity = 1;
    document.getElementById("wave3").style.opacity = 1;
    document.getElementById("wave4").style.opacity = 1;

}

var deadline = new Date("Apr 23, 2023 00:00:00").getTime();
var x = setInterval(function () {
    var now = new Date().getTime();
    var t = deadline - now;
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((t % (1000 * 60)) / 1000);
    document.getElementById("time").innerHTML = days + "d "
        + hours + "h " + minutes + "m " + seconds + "s " + "until Birthday!";
    if (t < 0) {
        clearInterval(x);
        document.getElementById("time").innerHTML = "HAPPY BIRTHDAY";
    }
}, 1000);

const btn = document.getElementById('time');

btn.addEventListener('click', () => {
    const particles = [];
    const color = randomColor();

    const particle = document.createElement('span');
    particle.classList.add('particle', 'move');

    const { x, y } = randomLocation();
    particle.style.setProperty('--x', x);
    particle.style.setProperty('--y', y);
    particle.style.background = color;
    btn.style.background = color;
    btn.style.color = "black";
    btn.style.borderRadius = "22%";

    btn.appendChild(particle);

    particles.push(particle);

    setTimeout(() => {

        for (let i = 0; i < 100; i++) { const innerP = document.createElement('span'); innerP.classList.add('particle', 'move'); innerP.style.transform = `translate(${x}, ${y})`; const xs = Math.random() * 200 - 100 + 'px'; const ys = Math.random() * 200 - 100 + 'px'; innerP.style.setProperty('--x', `calc(${x} + ${xs})`); innerP.style.setProperty('--y', `calc(${y} + ${ys})`); innerP.style.animationDuration = Math.random() * 300 + 200 + 'ms'; innerP.style.background = color; btn.appendChild(innerP); particles.push(innerP); } setTimeout(() => {
            particles.forEach(particle => {
                particle.remove();
            });
        }, 1000);
    }, 1000);
});

function randomLocation() {
    return {
        x: Math.random() * window.innerWidth - window.innerWidth / 2 + 'px',
        y: Math.random() * window.innerHeight - window.innerHeight / 2 + 'px'
    };

}

function randomColor() {
    return `hsl(${Math.floor(Math.random() * 255)}, 100%, 50%)`;
}

let game = document.getElementById("game");
let Mura = document.getElementById("character");
let box = document.getElementById("block");
let gameOver = document.getElementById("gameOver");

window.addEventListener("keydown", (start) => {
    if (start.code == "Enter") {
        gameOver.style.display = "none";
        box.classList.add("blockMove");
        Mura.classList.add("run");
    }
});

window.addEventListener("keydown", (e) => {

    if (e.key == "Enter")
        if (!Mura.classList.contains("jump")) {
            Mura.classList.add("jump");

            setTimeout(() => {
                Mura.classList.remove("jump");
            }, 300);
        }
});

let result = setInterval(() => {
    let MuraTop = parseInt(getComputedStyle(Mura).getPropertyValue("top"));
    let boxLeft = parseInt(getComputedStyle(box).getPropertyValue("left"));

    if (boxLeft < 50 && boxLeft > 0 && MuraTop >= 180) {
        gameOver.style.display = "block";
        box.classList.remove("blockMove");
        Mura.classList.remove("run");
    }
}, 10);
