<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
        the_post(); 
        $next_link = get_next_post_link('%link', 'Next &rarr;', TRUE);
        $previous_link = get_previous_post_link('%link', 'Previous &rarr;', TRUE);
        ?>
        <div class="laygridder-header">
        <p class="decorative_line">
                <span></span>
        </p>        
        <p class="name"><?php echo get_field('name')?></p>
        <p class="number"><?php echo 'tappa' . ' ' . get_field('number')?></p>
        </div>
        <main class="griglia_immagini"><?php echo get_laygrid($id); ?></main>   
        <div class="links_wordpress" style="justify-content:<?php if ($previous_link && $next_link) {
                echo 'space-around';
        } else if ($previous_link && !$next_link) {
                echo 'flex-start';
        } else if (!$previous_link && $next_link) {
                echo 'flex-end';
        }?>">
                <?php  
                if ($previous_link) {?>     
                        <a class="left" href="<?php echo get_permalink( get_adjacent_post(false,'',true)->ID )?>"><span class="triangle left"></span></a>                   
                <?php } 
                if ($next_link) { ?>
                        <a class="right" href="<?php echo get_permalink( get_adjacent_post(false,'',false)->ID )?>"><span class="triangle right"></span></a>   
                <?php };?>
        </div>     
	<?php }
}
?>
   
 