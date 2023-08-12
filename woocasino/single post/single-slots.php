<?php
/* Template Name: Post slots */
 /* Template Post Type: Slots */
?>


<?php get_header()?>

<div class="main-content">
        <div class="container">
            <section class="single-slots-back">
                <img src="<?php echo get_field('img-back'); ?>" alt="<?php echo get_field('alt-back'); ?>">
            </section>
            <div class="single-slots-demo-back play">
                <div class="single-slots-demo-back-cont">
                    <div class="single-slots-demo-back-image">
                        <div class="single-slots-demo-back-title">
                            <h1 class="single-slots-title"><?php the_title(); ?></h1>
                            <a href="/" class="single-slots-demo-back-title-icon" aria-label="Close">
                                <div class="close-demo-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/close.svg);"></div>
                            </a>
                        </div>
                        <img src="<?php echo get_field('img-frame'); ?>" alt="<?php echo get_field('alt-back'); ?>">
                    </div>
                </div>
                <div class="single-slots-demo-back-play" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/play.svg);"></div>
            </div>
            <div class="single-slots-demo-block">
                <div class="single-slots-demo-back-cont">
                    <div class="single-slots-demo-back-title">
                        <h1 class="single-slots-title"><?php the_title(); ?></h1>
                        <a href="/" class="single-slots-demo-back-title-icon" aria-label="Close">
                            <div class="close-demo-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/close.svg);"></div>
                        </a>
                        <div class="full-btn">
                            <div class="full-btn-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/full-screen.svg);"></div>
                        </div>
                    </div>
                    <?php echo get_field('iframe');?>
                </div>
            </div>
            <section class="main-text slot">
                <div class="main-text-block-content slot">
                <?php
                    echo the_content(); 
                ?>
                </div>
            </section>

<?php get_footer('slots')?>

