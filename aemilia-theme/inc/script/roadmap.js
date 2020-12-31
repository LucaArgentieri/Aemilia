let line = document.querySelector('.map');

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
