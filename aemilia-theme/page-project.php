<?php
/*
 * Template Name: Project
 */

;?>

<?php get_header();?>

<div class="page_project_container">
    <h1 class="project_title"><?php the_title(); ?></h1>
    <img  class="img" src=<?php echo wp_get_attachment_url(31);?> alt="">
    
    <p class="project_content"><?php the_content(); ?></p>

    <img  class="img rotate" src=<?php echo wp_get_attachment_url(31);?> alt="">

</div>

</body>
</html>
