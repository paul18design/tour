<?php
get_header();
?>
    <div class="next-tour bg-gray pt-40 pb-40">
        <div class="container bg-white">
            <div class="row position-relative">
                <hr class="line-vertical2 position-absolute">
                <div class="col-md-12 gray-color fs_40 agane-bold line-height_40 text-center pt-60">
                    <?= the_title(); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-justify agane-light fs_18 pt-20 pl-40 pr-40 pb-20 graycolor">
                    <?php
                    the_content();
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();