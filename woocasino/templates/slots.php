<?php
/*Template Name: Slots*/
?>

<?php get_header()?>

<div class="main-content">
        <div class="container">
          <section class="games-block">
            <div class="games-block-title">
              <h1 class="games-title"><?php the_title(); ?></h1>
            </div>
            <?php
              if ($items = get_posts(array('numberposts' => 50, 'post_type' => 'Slots'))) {
                echo '<div class="games-block-list">';
                  foreach($items as $item) {
                    $live = get_field('live', $item->ID);
                    $new = get_field('new', $item->ID);
                    $hot = get_field('hot', $item->ID);
                    $bitcoin = get_field('bitcoin', $item->ID);
                    $category = get_field('category', $item->ID);
                    $jackpot = get_field('jackpot', $item->ID);
                    echo '<div class="game-card">';
                      echo '<div class="game-card-block">';
                        echo get_the_post_thumbnail($item->ID);
                        if($jackpot) {
                          echo '<div class="game-card-jackpot">';
                            echo '<span>Jackpot</span>';
                            echo '<span>'.$jackpot.'</span>';
                          echo '</div>';
                        }
                      echo '</div>';
                      echo '<div class="game-card-back">';
                        echo '<div class="game-card-back-buttons">';
                          echo '<a href="#" class="game-card-play">Play now</a>';
                          echo '<a href="'.get_permalink($item->ID).'" class="game-card-demo">Demo</a>';
                        echo '</div>';
                      echo '</div>';
                        if($live) {
                          echo '<div class="game-card-live">';
                            echo '<span class="game-card-live-text">'.$live.'</span>';
                          echo '</div>';
                        } 
                      echo '<div class="game-card-labels">';
                        if($new) {
                          echo '<div class="game-card-label new">New</div>';
                        }
                        if($hot) {
                          echo '<div class="game-card-label hot">Hot</div>';
                        }
                        if($bitcoin) {
                          echo '<div class="game-card-label bitcoin" style="background-image: url('.$bitcoin.');"></div>';
                        }
                      echo '</div>'; 
                      echo '<div class="game-card-bottom">'; 
                        echo '<span class="game-card-bottom-title">'.$category.'</span>';
                        echo '<span class="game-card-bottom-text">'.$item->post_title.'</span>';
                      echo '</div>';
                    echo '</div>';
                  }
                echo '</div>';
              }
            ?>
          </section>
          <section class="main-text">
            <div class="main-text-block-content">
              <?php
                echo the_content(); 
              ?>
            </div>
          </section>

<?php get_footer()?>