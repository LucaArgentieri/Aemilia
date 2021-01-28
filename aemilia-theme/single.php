<?php get_header();?>

<div class="single_page">    
  
   <?php get_template_part('template-parts/single/gallery-content');?>

</div>
<?php get_footer();?>

<script src="<?php echo WTD_INCLUDES ?>script/google_map.js"></script>
<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true,
      'disableScrolling': true,
      'alwaysShowNavOnTouchDevices': true
    });
    AOS.init();
</script>

</body>
</html>
