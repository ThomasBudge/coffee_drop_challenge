<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CoffeeDrop
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


            <div id="landing-container" style='background-image:url("<?php echo get_field('banner_background_image') ?>")'>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div id="landing-text">
                                <?php echo get_field('banner_title') ?>
                                <div class="d-none d-md-block"><?php echo get_field('banner_text') ?>
                                </div>
                                <div id="app-store-logos">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/app-store.png" alt="Apple App Store">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/google-play.png" alt="Google Play Store">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                        </div>
                    </div>
                    <img id="app-mockup" src="<?php echo get_field('app_screenshot_image') ?>" alt="coffee drop app screenshot">
                </div>
            </div>

            <div id="how-it-works-container">
                <div class="container">
                    <h2 class="brown">How it works</h2>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <div class="how-it-works-inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-1.svg" alt="">
                                <p><?php echo get_field('step_1_text') ?></p>
                            </div>
                            <img class="right-arrow d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="right arrow">
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="how-it-works-inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-2.svg" alt="">
                                <p><?php echo get_field('step_2_text') ?></p>
                            </div>
                            <img class="right-arrow d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="right arrow">
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="how-it-works-inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-3.svg" alt="">
                                <p><?php echo get_field('step_3_text') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="prices-container" class="bg-brown">
                <div class="container">
                    <h2>Prices</h2>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <div class="prices-inner">
                                <h3 class="green"><?php echo get_field('left_price_box_title'); ?></h3>
                                <div class="table">
                                    <ul>
                                        <li><p>Ristretto = <?php echo get_field('left_ristretto_price'); ?>p</p></li>
                                        <li><p>Espresso = <?php echo get_field('left_espresso_price'); ?>p</p></li>
                                        <li><p>Lungo = <?php echo get_field('left_lungo_price'); ?>p</p></li>
                                    </ul>
                                </div>
                                <img class="coffee-bean-icon" src="<?php echo get_template_directory_uri(); ?>/img/coffee-beans.svg" alt="coffee bean icon">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="prices-inner">
                                <h3 class="green"><?php echo get_field('middle_price_box_title'); ?></h3>
                                <div class="table">
                                    <ul>
                                        <li><p>Ristretto = <?php echo get_field('middle_ristretto_price'); ?>p</p></li>
                                        <li><p>Espresso = <?php echo get_field('middle_espresso_price'); ?>p</p></li>
                                        <li><p>Lungo = <?php echo get_field('middle_lungo_price'); ?>p</p></li>
                                    </ul>
                                </div>
                                <img class="coffee-bean-icon" src="<?php echo get_template_directory_uri(); ?>/img/coffee-beans.svg" alt="coffee bean icon">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="prices-inner">
                                <h3 class="green"><?php echo get_field('right_price_box_title'); ?></h3>
                                <div class="table">
                                    <ul>
                                        <li><p>Ristretto = <?php echo get_field('right_ristretto_price'); ?>p</p></li>
                                        <li><p>Espresso = <?php echo get_field('right_espresso_price'); ?>p</p></li>
                                        <li><p>Lungo = <?php echo get_field('right_lungo_price'); ?>p</p></li>
                                    </ul>
                                </div>
                                <img class="coffee-bean-icon" src="<?php echo get_template_directory_uri(); ?>/img/coffee-beans.svg" alt="coffee bean icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="map-container">
                <div id="map"></div>
            </div>
            
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
