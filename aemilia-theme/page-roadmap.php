<?php
/*
 * Template Name: Roadmap
 */

;?>
<?php get_header();?>
<div class="c-map">

    <div class="infoBtn"><img src="<?php echo WTD_INCLUDES ?>css/svg/question.svg" alt=""></div>

    <div id="tutorialModal" class="tutorialModal puff">
        <div class="closeBtn"><img src="<?php echo WTD_INCLUDES ?>css/svg/close.svg" alt=""></div>
        <h1>Tutorial</h1> <br>
        <p>Scorri il mouse lungo la linea per scoprire i luoghi protagonisti del viaggio</p> <br>
    </div>

    <div class="show_title"></div>

    <?php  $args = array(
            'post_type'         => 'post',
        );
        $the_query = new WP_Query( $args );
        
        // The Loop
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post(); }
            } 
            ?>

    <div class="map" style="grid-template-columns:repeat(<?php echo $the_query->post_count?>, 1fr);">

    <?php  wp_reset_postdata(); ?>

            <?php 
        $args = array(
            'post_type'         => 'post',
        );
        $the_query = new WP_Query( $args );
        
        // The Loop
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                $index_check = $the_query->current_post;
                if ($index_check%2 === 0) {
                    ?>
                    <a href="<?php the_permalink()?>">
                        <div data-stages="<?php echo get_field('name', get_the_ID())?>" class="line-container">
                        <div data-stages="<?php echo get_field('name', get_the_ID())?>" class="t"></div>
                        <p class="stages"><?php echo get_field('name', get_the_ID())?></p>
                        </div>
                    </a>    
                 <?php
                } else {
                    ?>
                    <a href="<?php the_permalink()?>">
                        <div data-stages="<?php echo get_field('name', get_the_ID())?>" class="line-container">
                        <div data-stages="<?php echo get_field('name', get_the_ID())?>" class="t-reverse"></div>
                        <p class="stages stages_even"><?php echo get_field('name', get_the_ID())?></p>
                        </div>
                    </a>    
                <?php } 
            }
        }
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>
    </div>

</div>

<script src="<?php echo WTD_INCLUDES ?>script/roadmap.js"></script>
<?php get_footer();?>
</body>
</html>