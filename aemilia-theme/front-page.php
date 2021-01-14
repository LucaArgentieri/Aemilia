
    <?php

$images = get_field('background_front_page', 'option');   


    if(is_home()){


?>



<?php get_header() ;?>

<script>
    const imagesList = [];
    let images = '<?php 
        foreach($images as $image){
        $imgs_separated = implode(",", $images);
        echo $imgs_separated;
        } 
    ;?>'


    let splittedImgs = images.split(",", 5)



    let i = 0;
    let frontPageBg = document.querySelector('body')
    frontPageBg.classList.add('front-page-bg')

    frontPageBg.style.backgroundImage = `url(${splittedImgs[0]})`


    const increment = () => {

            frontPageBg.style.backgroundImage = `url(${splittedImgs[i++]})`




        if(i >= 5 || i === undefined){
            i = 0
        }
        


    }

    setInterval(increment, 8000);
</script>




<?php get_footer() ; ?>
</body>
</html>


<?php } ;?> 