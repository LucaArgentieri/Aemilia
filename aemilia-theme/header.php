<?php
/**
 * The header template file usually contains your site’s document type, meta information, links to stylesheets and scripts, and other data.
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 * @see  https://developer.wordpress.org/reference/functions/wp_head/
 * @see  https://developer.wordpress.org/reference/functions/body_class/
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet">

	<!-- WP HEAD SCRIPTS -->

	<?php
	/**
	 * the wp_head() function lets WordPress execute all the pre-body operations including the injection of important styles and scripts.
	 * This function call should always be inside your <head> tag
	 * 
	 * @see  https://developer.wordpress.org/reference/functions/wp_head/
	 */
	wp_head();
	?>

	<!-- END WP HEAD SCRIPTS -->

</head>
<body style="<?php 
	if ( is_front_page() ) {
		echo 'background: url('.get_field('background_front_page', 'option').') no-repeat center center';
	};
?>" <?php body_class(); ?>>
<nav>
<a href="<?php echo get_home_url(); ?>" class="home <?php
				if ( is_front_page() ) {
					echo 'active';
				}?>">AemiliaSS9</a>
<?php 
        $pages = get_pages();
        foreach( $pages as $page ) {
                ?>
				<a href="<?php echo get_permalink($page->ID) ?>" class="<?php  echo get_the_title($page) ?> <?php
				if (get_the_title() === get_the_title($page)) {
					echo 'active';
				}
				?>"> <?php
                    echo get_the_title($page);
                ?> 
                </a>
                <?php
            }
        ?>
</nav>
<?php
/**
 * the wp_footer() function lets WordPress execute all the post-body operations including the injection of important scripts that don't need to be called in the head of the website.
 * This function call should always be at the very end of your <body> tag
 * 
 * @see  https://developer.wordpress.org/reference/functions/wp_footer/
 */
wp_footer();
?>		
<!-- END MENU -->

<!-- START WEBSITE BODY -->