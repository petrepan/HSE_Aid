let countDownDate = new Date("April 5, 2021 15:00:00").getTime();

let countDown = setInterval(function () {
    //get current time
    let currentTime = new Date().getTime();
    
    //find the differnce between countdowndate and currenttime
    let distance = countDownDate - currentTime;

    //convert distance into days, hours, minutes and seconds
    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    //get the time doms
    const daysDom = document.getElementById('days');
    const hoursDom = document.getElementById("hours");
    const minsDom = document.getElementById("mins");
    const secondsDom = document.getElementById("seconds");

    //insert countdown into dom
    daysDom.innerHTML = zero(days);
    hoursDom.innerHTML = zero(hours);
    minsDom.innerHTML = zero(minutes);
    secondsDom.innerHTML = zero(seconds)

}, 1000)

//append zero
function zero(num) {
    return num < 10 ? `0${num}` : num;
}


//modal
// Get the modal
const modal = document.getElementById("myModal");
const waveImg = document.getElementsByClassName("wave-img");

console.log(waveImg)

for (let i = 0; i < waveImg.length; i++){
    waveImg[i].addEventListener("click", function () {
        let modalImg = document.getElementById("img01");
        let captionText = document.getElementById("caption")
        document.body.style.height = "100vh!important";
        document.body.style.overflow = "hidden";
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    })
}

const span = document.getElementsByClassName("close")[0];
span.addEventListener("click", function () {
    modal.style.display = "none";
    
        document.body.style.overflow = "auto";
 })
