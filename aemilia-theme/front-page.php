
<?php

    // ARRAY FROM AEMILIA SETTINGS

    $images = get_field('background_front_page', 'option');   


    if(is_home()){

?>

<?php get_header() ;?>

<script>

    // TRASFORM PHP ARRAY INTO JAVASCRiPT ARRAY

    let splittedImgs = [<?php echo '"'.implode('","', $images).'"' ?>];

    // console.log(splittedImgs);

    let i = 0;

    let frontPageBg = document.querySelector('body');
    frontPageBg.classList.add('front-page-bg');
    frontPageBg.style.backgroundImage = `url(${splittedImgs[i]})`;

    const increment = () => {

        frontPageBg.style.backgroundImage = `url(${splittedImgs[i++]})`;

        if (i >= splittedImgs.length || i === undefined) {
            i=0;   
        }
    }

    setInterval(increment, 8000);
</script>

<?php get_footer() ; ?>
</body>
</html>

<?php } ;?> 