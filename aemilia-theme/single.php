<?php get_header();?>

<div class="single_page">    
  
   <?php get_template_part('template-parts/single', 'gallery');?>
   
   <div class="footer-gallery">
      <p>A project by Pietro Baroni and Davide Bernardi</p>
      <img src=<?php echo wp_get_attachment_url(84);?> alt="">
      <p>Development and Design by Luca Argentieri, Giuseppe Conti, Lavinia Garau</p>
   </div>

</div>
<?php get_footer();?>

</body>
</html>



