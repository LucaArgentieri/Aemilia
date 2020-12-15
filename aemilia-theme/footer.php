<?php
/**
 * The footer template file usually contains your site’s scripts, and other data.
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 * @see  https://developer.wordpress.org/reference/functions/wp_footer/
 */
?>
<!-- END WEBSITE BODY -->

<!-- START FOOTER -->

<footer></footer>

<!-- END FOOTER -->

<!-- WP FOOTER SCRIPTS -->
<script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>  

<script>
    const swup = new Swup();
</script>

<script>

document.addEventListener('DOMContentLoaded', () => {

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
        console.log(line.style.width);
        //console.log('width: ' + wind_width);
        //console.log('height: ' + wind_height);
        angle_deg = Math.atan(wind_height/wind_width)*(180/Math.PI);
        line.style.transform = `rotate(${angle_deg - 5}deg)`;
        
    }

    set_line();  

    window.addEventListener('resize', set_line);

})


document.addEventListener('swup:contentReplaced', () => {

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
    console.log(line.style.width);
    //console.log('width: ' + wind_width);
    //console.log('height: ' + wind_height);
    angle_deg = Math.atan(wind_height/wind_width)*(180/Math.PI);
    line.style.transform = `rotate(${angle_deg - 5}deg)`;
    
}

set_line();  

window.addEventListener('resize', set_line);

})

</script>

<?php
/**
 * the wp_footer() function lets WordPress execute all the post-body operations including the injection of important scripts that don't need to be called in the head of the website.
 * This function call should always be at the very end of your <body> tag
 * 
 * @see  https://developer.wordpress.org/reference/functions/wp_footer/
 */
wp_footer();
?>

<!-- END WP FOOTER SCRIPTS -->

</body>
</html>