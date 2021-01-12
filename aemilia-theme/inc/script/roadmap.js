document.addEventListener('DOMContentLoaded', () => {

    let line = document.querySelector('.map');

    function set_line()  {

        let angle_deg;
        let wind_width = window.innerWidth;
        let wind_height = window.innerHeight;
        angle_deg = Math.atan(wind_height/wind_width)*(180/Math.PI);
        if (wind_width >= wind_height && wind_width > 768) {
            line.style.minWidth = `95vw`;
            line.style.transform = `rotate(${angle_deg - 5}deg)`;
        } else if (wind_width < wind_height && wind_width > 768) {
            line.style.minWidth = `95vh`;
            line.style.transform = `rotate(${angle_deg}deg)`;
        }
        if (wind_width <= 768) {
            line.style.minWidth = `80vh`;
            line.style.transform = `rotate(90deg)`;
        }
    }

    set_line();  

    window.addEventListener('resize', set_line);

    //Tutorial mappa
    const tutorialModal = document.querySelector('#tutorialModal')
    const infoBtn = document.querySelector('.infoBtn')

    infoBtn.addEventListener('click', evt => {
        tutorialModal.classList.remove('puff')
    })

    tutorialModal.addEventListener('click', evt => {
        tutorialModal.classList.add('puff')
    });

})