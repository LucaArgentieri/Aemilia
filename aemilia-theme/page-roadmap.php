<?php
/*
 * Template Name: Roadmap
 */

;?>
<?php get_header();?>
<div id="swup" class="c-map transition-fade">

<div class="infoBtn"><img src="/wp-content/themes/aemilia-theme/inc/css/svg/question.svg" alt=""></div>

<div id="tutorialModal" class="tutorialModal puff">
        <h1>Tutorial</h1> <br>
        <p>Scorri il mouse lungo la linea per scoprire i luoghi protagonisti del viaggio</p> <br>
        <p>Clicca ovunque per scoprire la mappa</p>
</div>

    <div class="map">

            <div class="line-container">
                <div class="line">
                    <span class="t"></span>
                </div>
            </div>
            <div class="line-container">
                <div class="line-reverse">
                    <span class="t-reverse"></span>
                </div>
            </div>
            <div class="line-container">
                <div class="line">
                    <span class="t"></span>
                </div>
            </div>
            <div class="line-container">
                <div class="line-reverse">
                    <span class="t-reverse"></span>
                </div>
            </div>
            <div class="line-container">
                <div class="line">
                    <span class="t"></span>
                </div>
            </div>
            <div class="line-container">
                <div class="line-reverse">
                    <span class="t-reverse"></span>
                </div>
            </div>
            <div class="line-container">
                <div class="line">
                    <span class="t"></span>
                </div>
            </div>
            <div class="line-container">
                <div class="line-reverse">
                    <span class="t-reverse"></span>
                </div>
            </div>
            <div class="line-container">
                <div class="line">
                    <span class="t"></span>
                </div>
            </div>
            <div class="line-container">
                <div class="line-reverse">
                    <span class="t-reverse"></span>
                </div>
            </div>

    </div>


</div>

<script>    
document.addEventListener("DOMContentLoaded", () => {

let line = document.querySelector('.map');
function set_line()  {
    let angle_deg;
    let wind_width = window.innerWidth;
    let wind_height = window.innerHeight;
    if (wind_width >= wind_height) {
        line.style.minWidth = `95vw`;
    } else if (wind_width < wind_height) {
        line.style.minWidth = `95vh`;
    }
    angle_deg = Math.atan(wind_height/wind_width)*(180/Math.PI);
    line.style.transform = `rotate(${angle_deg - 5}deg)`;

    set_line();  

window.addEventListener('resize', set_line);

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




});
</script>
<?php get_footer();?>
</body>
</html>





