<?php
/**
 * The footer template file usually contains your site’s scripts, and other data.
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 * @see  https://developer.wordpress.org/reference/functions/wp_footer/
 */
?>
<!-- END WEBSITE BODY -->

<!-- START FOOTER (ONLY GALLERIES) -->

<?php 
if (is_single()) {
    ?>
    <footer class="footer-gallery"> 
            <p>A project by <a href="https://www.pietrobaroni.com/">Pietro Baroni</a> and <a href="https://www.davidebernardi.it/">Davide Bernardi</a></p>
            <p><span class="triangle"></span><span class="triangle"></span><span class="triangle"></span></p>
            <p>Development and Design by  <a href="https://github.com/LucaArgentieri">Luca Argentieri</a>,  <a href="https://github.com/peppeconti/">Giuseppe Conti</a>,  <a href="https://github.com/honey-2020">Lavinia Garau</a></p>
    </footer>
<?php } ?>

<!-- END FOOTER -->

<!-- WP FOOTER SCRIPTS -->

<?php
/**
 * the wp_footer() function lets WordPress execute all the post-body operations including the injection of important scripts that don't need to be called in the head of the website.
 * This function call should always be at the very end of your <body> tag
 * 
 * @see  https://developer.wordpress.org/reference/functions/wp_footer/
 */
wp_footer();
?>
<!-- END WP FOOTER SCRIPTS -->
</body>
</html>