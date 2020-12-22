<?php if( have_posts() ): while( have_posts() ): the_post();?>
   
   <div class="laygridder-header">
         <img src=<?php echo wp_get_attachment_url(82);?> alt="">
         <p><?php the_field('number');?> <?php the_field('name');?></p>
         <p><?php the_field('km'); ?></p>
   </div>
      
   
   <?php echo get_laygrid($id, $type); ?>
   
<?php endwhile; else: endif;?>