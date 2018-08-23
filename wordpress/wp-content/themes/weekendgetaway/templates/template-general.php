<?php
/*
Template Name: General Page
*/
get_header(); ?>
<div class="container-fluid hero" style="background-image: url(<?php echo get_template_directory_uri();?>/dist/img/hero_img.png);">
          <div class="page-title"><p><?php the_title();?></p></div>
</div>
 <?php if (have_posts()): ?>
          <article class="post">   
            <?php // TO SHOW THE PAGE CONTENTS?>
            <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
              <?php the_content(); ?> <!-- Page Content (WYSIWYG Field) -->
            <?php endwhile; //resetting the page loop?>
            <?php wp_reset_query(); //resetting the page query?>
          </article>
        <?php else: ?>
          <h2>Sorry, No Post Found</h2>
        <?php endif; ?>
    
<?php get_footer(); ?>

