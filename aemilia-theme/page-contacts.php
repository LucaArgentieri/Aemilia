<?php
/*
 * Template Name: Contacts
 */

;?>

<?php get_header();?>
<div class="contacts-main">

    <div class="contacts-responsive">
    <h1>Contacts</h1>
    <img src=<?php echo wp_get_attachment_url(29);?> alt="">
    </div>

    <?php echo do_shortcode('[contact-form-7 id="28" title="Modulo di contatto 1"]')  ;?>

    <div class="contacts-responsive">
    <h2>A project by Pietro Baroni and Davide Bernardi</h2>
    <h2>Development and Design by Luca Argentieri, Giuseppe Conti and Lavinia Garau</h2>
    </div>

</div>    
</body>
</html>

