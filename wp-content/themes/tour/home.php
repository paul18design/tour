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

    <div class="description-bg">
        <div class="container">
            <div class="row">
                <div class="text-center agane-bold gray-color fs_80 col-lg line-height_35 pt-60 pb-5">
                    <em class="fs_26 agane-light">¿Qué nos hace</em> <br>
                    diferentes?
                </div>
                <div class="text-center agane-light gray-color fs_20 pb-5">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                    ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                    dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                    facilisis at vero eros et accumsan et iusto odio dignissim qui blanditte feugait nulla facilisi.
                </div>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/4KnfmkIXmv8"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="container pt-50 pb-50">
            <div class="row pl-30">
                <div class="col-sm position-relative">
                    <div class="lateral-text position-absolute">TOUR DE FRANCIA</div>
                    <div class="france-img"></div>
                </div>
                <div class="col-sm">
                    <div class="white-color fs_60 agane-extra p-title line-height_50">NUESTROS DESTINOS</div>
                    <hr class="line-red text-lef">
                    <div class="white-color fs_18 agane-light pt-2">Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    </div>
                    <span>
                        <a href="#" target="_blank"><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="0.625in" height="0.139in">
                           <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                 d="M41.114,-0.004 L40.331,0.634 L43.317,4.462 L0.003,4.462 L0.003,5.485 L43.317,5.485 L40.331,9.313 L41.114,9.950 L44.999,4.973 L41.114,-0.004 Z"/>
                           </svg></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();