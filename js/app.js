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
const form = document.getElementById("form")

form.addEventListener("submit", function (e) {
    const modal = document.getElementById("modal");
    modal.classList.add("showmodal")
    modal.classList.remove("hidemodal")
})
