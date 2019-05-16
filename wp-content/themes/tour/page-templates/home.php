<?php
/*
 * Template Name: Home
 */

get_header();

$sliders = get_posts([
    'post_type' => 'slider',
    'suppress_filters'  => 0
]);
if (!empty($sliders)): ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php foreach ($sliders as $key => $slider): ?>
            <li data-target="#carouselExampleIndicators" class="<?php if ($key == 0) echo 'active'; ?>" data-slide-to="<?= $key; ?>"></li>
            <?php endforeach; ?>
        </ol>
        <div class="carousel-inner">
            <?php foreach ($sliders as $key => $slider):
                ?>
                <div class="carousel-item <?php if ($key == 0) echo 'active'; ?>">
                    <img class="d-block w-100" src="<?= get_the_post_thumbnail_url($slider->ID); ?>">
                    <div class="carousel-caption d-none d-md-block text-left">
                        <?= $slider->post_content; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<?php endif; ?>
<?php
 the_content();
?>
<?php
get_footer();