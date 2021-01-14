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
	<!-- WP HEAD SCRIPTS -->

	<?php
	wp_head();
	?>

	<!-- END WP HEAD SCRIPTS -->

</head>
<body class="<?php if(is_single()) {
	echo 'single';
} else {
	echo 'pages';
}?>">
<?php
if (!is_single()) {?>
    <!-- ADD THE MENU FOR THE PAGES -->
	<nav class="pages_menu">
<a href="<?php echo get_home_url(); ?>" class="<?php 

    if ( is_home() ){
     echo 'active';
    }?>" >AemiliaSS9</a>
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
<!-- ADD THE MENU FOR THE POSTS (GALLERIES) -->
<?php } else { ?>
    <?php
        wp_nav_menu([
            'theme_location' => 'main_menu',
            'container' => 'nav',
            'container_id' => '',
            'container_class' => 'single_menu',
            'menu_id' => '',
            'menu_class' => 'list',
        ]);
        ?>
<?php }
?>
<!-- END MENU -->

<!-- START WEBSITE BODY -->