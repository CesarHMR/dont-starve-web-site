//Set Variables
const shakeSound = document.querySelector('.logo-shakeSound')
const closeSound = document.querySelector('.logo-closeSound')
const musicSound = document.querySelector('.music')
const logo = document.querySelector('.logo-container')
const img = document.querySelector('.logo img')
let isPlaying = false
//Set Sound Volume
shakeSound.volume = .5
closeSound.volume = .4
musicSound.volume = .3
//functions
function Play(){
    if(isPlaying){
        musicSound.pause()
        isPlaying = false

        closeSound.load()
        closeSound.play()
    }else{
        musicSound.load()
        musicSound.play()
        isPlaying = true

        shakeSound.load()
        shakeSound.play()
    }

    setCrockPotAnimation()
}

function setCrockPotAnimation(){
    logo.removeChild(img);
    logo.appendChild(img);
    img.style.animation = "shake 300ms ease-in-out";
}