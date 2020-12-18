<?php if( have_posts() ): while( have_posts() ): the_post();?>
   <?php echo get_laygrid($id, $type); ?>
   
<?php endwhile; else: endif;?>