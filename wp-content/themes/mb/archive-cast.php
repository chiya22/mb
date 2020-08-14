<?php get_header(); ?>

<!-- content -->
<div id="content">
    <div class="top">
        <div class="top__container-flex">
            <div class="top__titleimg">
                <?php echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/title.png">' ?>
            </div>
            <div class="top__mainimg">
                <?php echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/schedule.png">' ?>
            </div>
        </div>
    </div>
    <div class="top__btnarea">
        <a class="btn__yoyaku top_-1_5" href="<?php echo $reserve ?>">チケット予約サイトへ</a>
    </div>
    <?php get_template_part('parts/breadcrumbs'); ?>
    <div class="pagecast">
        <div class="castmain__bg">
            <div class="castmain__container wow fadeIn">
                <h2>CAST</h2>
                <?php echo get_cast_list(array("num" => "100", "cate" => "CAST_MAIN")); ?>
            </div>
        </div>
        <div class="cast__container wow fadeIn">
            <?php echo get_cast_list(array("num" => "100", "cate" => "CAST")); ?>
        </div>
        <div class="musician__bg">
            <div class="musician__container wow fadeIn">
                <h2>MUSICIAN</h2>
                <?php echo get_cast_list(array("num" => "100", "cate" => "MUSICIAN")); ?>
            </div>
        </div>
        <div class="staff__container wow fadeIn">
            <h2>STAFF</h2>
            <?php echo get_cast_list(array("num" => "100", "cate" => "STAFF")); ?>
        </div>

    </div>

    <?php get_template_part('parts/schedule-parts'); ?>

</div><!-- /content -->

<?php get_template_part('parts/footer-parts'); ?>

<?php get_footer(); ?>