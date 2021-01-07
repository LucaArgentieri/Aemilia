let line = document.querySelector('.map');
let lineContainer = document.querySelectorAll('.line-container')

window.addEventListener('resize', e => {
    e.preventDefault()
    location.reload()
})


function set_line() {
    let angle_deg;
    let wind_width = window.innerWidth;
    let wind_height = window.innerHeight;


    if (wind_width >= wind_height) {
        line.style.minWidth = `95vw`;
    } else if (wind_width < wind_height) {
        line.style.minWidth = `95vh`;
    }
    angle_deg = Math.atan(wind_height / wind_width) * (180 / Math.PI);
    line.style.transform = `rotate(${angle_deg - 5}deg)`;


    if (wind_width <= 900) {
        lineContainer.forEach(e => {
            e.classList.add('line-container-grey')
        })
        angle_deg = 90
        line.style.minWidth = `70vh`;
        line.style.transform = `rotate(${angle_deg}deg)`;
    }
}


//Tutorial mappa
const tutorialModal = document.querySelector('#tutorialModal')
const infoBtn = document.querySelector('.infoBtn')

infoBtn.addEventListener('click', evt => {
    tutorialModal.classList.remove('puff')
})

tutorialModal.addEventListener('click', evt => {
    tutorialModal.classList.add('puff')
})


window.addEventListener('DOMContentLoaded' || 'resize', set_line());
