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
    <div class="news">
        <div class="news__container wow fadeIn">
            <div class="news__header">
                <h2>NEWS</h2>
            </div>
            <?php if (have_posts()) : ?>
                <div class="news__list-flex">
                    <?php while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink() ?>" class="news__item">
                            <div class="news__thumbnail">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('large');
                                } else {
                                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                                }
                                ?>
                            </div>
                            <div class="news__title">
                                <time datetime="" <?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                                <h2><?php the_title() ?></h2>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php wp_pagenavi(); ?>
    <?php get_template_part('parts/schedule-parts'); ?>

</div><!-- /content -->

<?php get_template_part('parts/footer-parts'); ?>

<?php get_footer(); ?>