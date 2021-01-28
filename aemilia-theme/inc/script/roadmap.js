document.addEventListener('DOMContentLoaded', () => {

    let line = document.querySelector('.map');

    function set_line() {

        let angle_deg;
        let wind_width = window.innerWidth;
        let wind_height = window.innerHeight;
        angle_deg = Math.atan(wind_height / wind_width) * (180 / Math.PI);
        if (wind_width >= wind_height && wind_width > 768) {
            line.style.minWidth = `95vw`;
            line.style.transform = `rotate(${angle_deg - 5}deg)`;
            line.style.height = `4px`;
            line.style.backgroundColor = `white`;
        } else if (wind_width < wind_height && wind_width > 768) {
            line.style.minWidth = `95vh`;
            line.style.transform = `rotate(${angle_deg}deg)`;
            line.style.height = `4px`;
            line.style.backgroundColor = `white`;
        }
        if (wind_width <= 1024) {
            line.style.minWidth = `80vh`;
            line.style.transform = `rotate(90deg)`;
        }
    }

    set_line();

    window.addEventListener('resize', set_line);

    //Tutorial mappa
    const tutorialModal = document.querySelector('#tutorialModal')
    const infoBtn = document.querySelector('.infoBtn')
    const closeBtn = document.querySelector('.closeBtn')

    infoBtn.addEventListener('click', evt => {
        tutorialModal.classList.remove('puff')
    })

    closeBtn.addEventListener('click', evt => {
        tutorialModal.classList.add('puff')
    });

    const show_tappa = document.querySelector('.show_title');
    const tappe = Array.from(document.querySelectorAll('.line-container'));

    tappe.forEach(e => e.addEventListener('mouseover', evt => {
        console.log(evt.target.dataset.stages);
        show_tappa.innerHTML = evt.target.dataset.stages;
    })
    
    );
    
    tappe.forEach(e => e.addEventListener('mouseleave', evt => {
        console.log(evt.target.dataset.stages);
        show_tappa.innerHTML = '';
    })
    );
})