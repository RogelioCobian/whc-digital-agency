<?php
/**
 * The main template file
 *
 * 
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * Template Name: Services
 *
 * @package whc-digital-agency
 */

get_header();
?>

    <section>
        <div class="row">

            <?php 
                $args = array(
                    'posts_per_page' => 3,
                    'post_type' => '_services',
                    'order' => 'ASC'
                );

                $services = new WP_Query($args);
            ?>

            <?php if($services -> have_posts()): while($services-> have_posts()): $services -> the_post() ?>

            <div class="col-md-4">

                <h2>
                    <?php the_title(); ?>
                </h2>

                <div class="img-box">
                    <?php the_post_thumbnail(); ?>
                </div>

                <p>
                    <?php the_content(); ?>
                </p>
                
            </div>
            <?php endwhile; endif; ?>

        </div>
    </section>

    <div class="row">
            <div class="col-12">
            <?php dynamic_sidebar( 'sidebar-2' ); ?>
            
            </div>
    
    </div>

<?php

get_footer();
