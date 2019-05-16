<?php

/*
 * Author: David Rodriguez
 *
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

$args = array(
    'post_type' => 'post',
    'nopaging' => false,
    'posts_per_page' => '4',
    'order' => 'DESC',
    'orderby' => 'ID',
    'offset' => 1
);

$query = new WP_Query($args);
$args = array(
    'post_type' => 'post',
    'nopaging' => false,
    'posts_per_page' => '1',
    'order' => 'DESC',
    'orderby' => 'ID',
);
$query2 = new WP_Query($args);
?>

<?php if ($query->have_posts()) : ?>
    <div class="blog-bg">
        <div class="container">
            <div class="row">
                <div class="gray-color col-md-12 fs_60 agane-bold text-center">BLOG</div>
                <div class="col-md-7 pt-40">
                    <div class="row">
                        <?php foreach ($query->get_posts() as $post): ?>
                            <div class="col-sm gray-color fs_18 agane-regular text-center blog-des mb-3">
                                <a href="<?= get_permalink($post->ID); ?>">
                                    <span class="sit-bike"
                                          style="background-image: url('<?= get_the_post_thumbnail_url($post->ID); ?>')"></span>
                                    <br>
                                    <?= $post->post_title; ?>
                                </a>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
                <div class="bg-2019 col-md-5 position-relative">
                    <hr class="line-vertical position-absolute">
                    <div class="align-middle white-color agane-bold fs_26 p-title2 p-50 line-height_30">
                        <?= $query2->post->post_title; ?>
                        <a href="<?= get_permalink($query2->post->ID); ?>"><span class="down-arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php else : ?>

    <?php get_template_part('loop-templates/content', 'none'); ?>

<?php endif;

get_footer();