<?php
/*
 * Template Name: Contacts
 */

;?>

<?php get_header();?>
<div class="contacts-main">

    <div class="contacts-responsive">
    <!-- <h1>Contacts</h1> -->
    <div class="arrow">
                    <p class="long"></p>
                    <p class="short"></p>
                    <p class="long"></p>
                    <p class="triangle"></p>
                </div>
    </div>

    <?php echo do_shortcode('[contact-form-7 id="28" title="Modulo di contatto 1"]')  ;?>


</div>
<script src="<?php echo WTD_INCLUDES ?>script/arrows.js"></script> 
<?php get_footer();?>

</body>
</html>

