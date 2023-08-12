<?php get_header(); ?>

<div class="main-content">
        <div class="container">
          <div class="error-block">
            <div class="error-block-content" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/404-bg.jpg);">
              <div class="error-block-content-text">
                <img src="<?php echo get_template_directory_uri() ?>/images/404.png" alt="404 error">
                <p>
                  Oops, The page you are looking for cannot be found. It may have been removed, had its name changed, or is temporarily unavailable. 
                  Casino Team is really sorry we couldn't provide you with what you were searching for, but we promise to try our best to help you.
                </p>
                <a href="/" class="error-btn-home">Home</a>
              </div>
            </div>
          </div>

<?php get_footer(); ?>
