<?php
/**
 * Template Name: Landing Page
 */

get_header( 'home' );
?>

    <!-- :: Section Slider :: -->
<?php get_template_part( './template-parts/sections/section', 'banner' ); ?>

    <!-- :: Section Discover :: -->
<?php get_template_part( './template-parts/sections/section', 'discovery' ); ?>

    <!-- :: Section About Us :: -->
<?php get_template_part( './template-parts/sections/section', 'about' ); ?>

    <!-- :: Section Counter :: -->
<?php get_template_part( './template-parts/sections/section', 'counter' ); ?>

    <!-- :: Section Courses :: -->
<?php get_template_part( './template-parts/sections/section', 'courses' ); ?>

    <!-- :: Section Why Us :: -->
<?php get_template_part( './template-parts/sections/section', 'why-us' ); ?>

    <!-- :: Section CTA :: -->
<?php get_template_part( './template-parts/sections/section', 'cta' ); ?>

    <!-- :: Section Feedback :: -->
<?php get_template_part( './template-parts/sections/section', 'feedback' ); ?>

    <!-- :: Section Free Demo :: -->
<?php get_template_part( './template-parts/sections/section', 'free-demo' ); ?>

    <!-- :: Section Blog :: -->
<?php get_template_part( './template-parts/sections/section', 'blog' ); ?>

<?php get_footer(); ?>