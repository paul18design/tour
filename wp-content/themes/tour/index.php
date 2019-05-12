<?php

/*
 * Author: David Rodriguez
 *
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
?>
<?php if (have_posts()) : ?>

    <?php /* Start the Loop */ ?>

    <?php while (have_posts()) : the_post(); ?>

        <?php

        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
//        get_template_part('loop-templates/content', get_post_format());

    the_content();
        ?>

    <?php endwhile; ?>

<?php else : ?>

    <?php get_template_part('loop-templates/content', 'none'); ?>

<?php endif;

get_footer();