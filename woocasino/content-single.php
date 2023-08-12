<?php 

 /* Template Post Type: post */

get_header(); ?>

<div class="main-content">
        <div class="container">
          <section class="main-text">
            <div class="games-block-title">
              <h1 class="games-title"><?php the_title(); ?></h1>
            </div>
            <div class="main-text-block-content">
              <?php
                echo the_content(); 
              ?>
            </div>
          </section>

<?php get_footer(); ?>
