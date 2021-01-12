<?php
/*
 * Template Name: Project
 */
;?>
<?php get_header();?>
<div class="page_project_container">
    <h1 class="project_title"><?php the_title(); ?></h1>
    <div class="arrow">
                    <p class="long"></p>
                    <p class="short"></p>
                    <p class="long"></p>
                    <p class="triangle"></p>
                </div>
    <p class="project_content"><?php the_content(); ?></p>
    <div class="arrow reverse">
                    <p class="long"></p>
                    <p class="short"></p>
                    <p class="long"></p>
                    <p class="triangle"></p>
                </div>
</div>
<script src="<?php echo WTD_INCLUDES ?>script/arrows.js"></script>
<?php get_footer();?>
</body>
</html>