<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Roboto.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Robotomedium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Robotobold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Rubikmedium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
</head>
<body>
    <section class="main">
        <header class="header">
            <div class="header-top">
                <a href="/" aria-label="Woocasino Logo">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" width="120" height="27" alt="Woocasino Logo">
                </a>
            </div>
            <div class="header-content">
                <div class="header-content-logo">
                    <div class="header-content-logo-img">
                        <img src="<?php echo get_template_directory_uri() ?>/images/anon.svg" width="46" height="62" alt="Anon">
                    </div>
                    <div class="header-content-logo-btn">
                        <a href="#" class="header-content-logo-link">Registration</a>
                    </div>
                </div>
                <div class="header-content-menu">
                    <div class="header-content-live">
                        <a href="#" class="header-content-live-link">
                            <div class="header-content-live-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/blackjack.svg)"></div>
                            <span>Blackjack</span>
                        </a>
                        <a href="#" class="header-content-live-link">
                            <div class="header-content-live-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/roulette.svg)"></div>
                            <span>Roulette</span>
                        </a>
                        </div>
                        <div class="header-content-list">
                        <div class="header-content-list-item">
                            <a href="#" class="header-content-list-link">
                                <div class="header-content-list-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/dice.svg)"></div>
                                <span class="header-content-list-text">All Games</span>
                            </a>
                        </div>
                        <div class="header-content-list-item">
                            <a href="#" class="header-content-list-link">
                                <div class="header-content-list-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/woman.svg)"></div>
                                <span class="header-content-list-text">Live Casino</span>
                            </a>
                        </div>
                        <div class="header-content-list-item">
                            <a href="#" class="header-content-list-link">
                                <div class="header-content-list-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/action.svg)"></div>
                                <span class="header-content-list-text">Promotions</span>
                            </a>
                        </div>
                        <div class="header-content-list-item">
                            <a href="#" class="header-content-list-link">
                                <div class="header-content-list-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/wallet.svg)"></div>
                                <span class="header-content-list-text">Payments</span>
                            </a>
                        </div>
                        <div class="header-content-list-item">
                            <a href="#" class="header-content-list-link">
                                <div class="header-content-list-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/crown.svg)"></div>
                                <span class="header-content-list-text">VIP</span>
                            </a>
                        </div>
                        <div class="header-content-list-item">
                            <a href="#" class="header-content-list-link">
                                <div class="header-content-list-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/cup.svg)"></div>
                                <span class="header-content-list-text">Tournaments</span>
                            </a>
                        </div>
                        <div class="header-content-list-item">
                            <a href="#" class="header-content-list-link">
                                <div class="header-content-list-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/app.svg)"></div>
                                <span class="header-content-list-text">WooCasino App</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="head-block">
            <div class="search-block">
                <input placeholder="Find your game" type="text" class="search-block-input">
                <div class="search-block-btn">
                    <div class="search-block-btn-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/search.svg)"></div>
                </div>
            </div>
            <a href="/" class="mobile" aria-label="Woocasino Logo">
                <img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" width="79" height="18" alt="Woocasino Logo">
            </a>
            <div class="head-buttons">
                <div class="head-buttons-block">
                    <a href="#" class="head-button reg">Registration</a>
                    <a href="#" class="head-button log">Log in</a>
                </div>
                <div class="menu-mobile-button">
                    <span class="menu-mobile-button-icon"></span>
                    <span class="menu-mobile-button-icon"></span>
                    <span class="menu-mobile-button-icon"></span>
                </div>
                <div class="head-languages">
                    <div class="language-block">
                        <a class="language-link" href="#languages" aria-label="Languages">
                            <div class="language-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/en.svg)"></div>
                        </a>
                    </div>
                    <div id="languages">
                        <div class="lang-content">
                            <div class="lang-content-item">
                                <a href="/pl/" class="lang-content-item-link">
                                    <div class="language-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/pl.svg)"></div>
                                    <span class="lang-content-item-text">POL</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

