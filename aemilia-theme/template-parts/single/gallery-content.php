<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
        the_post(); ?>
        <div class="laygridder-header">
        <p class="decorative_line">
                <span></span>
        </p>        
        <p class="name"><?php echo get_field('name')?></p>
        <p class="number"><?php echo 'tappa' . ' ' . get_field('number')?></p>
        <p class="km"><span style="color: #f26645;"><?php echo get_field('km')?></span>km</p>
        </div>
        <main class="griglia_immagini"><?php echo get_laygrid($id); ?></main>        
	<?php } 
}
?>
   
 