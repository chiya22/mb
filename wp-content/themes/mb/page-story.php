<?php get_header(); ?>

<!-- content -->
<div id="content">
    <div class="story__top">
        <div class="story__content">
            <div class="story__titleimg">
                <?php echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/title.png">' ?>
            </div>
            <div class="story__subtitleimg">
                <?php echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/schedule.png">' ?>
            </div>
        </div>
        <div class="top__btnarea">
            <a class="btn__yoyaku top_-1_5" href="<?php echo $reserve ?>">チケット予約サイトへ</a>
        </div>
        <?php get_template_part('parts/breadcrumbs'); ?>
        <div class="story__header">
            <h2>STORY</h2>
            <p>天界と人間界の境界線が定かではなく、神と人が交じり合っていた時代。</p>
            <p>天女を祖母にもつバラタ王を始祖とするバラタ族。</p>
            <p>「マハー＝偉大なる」バラタ族の物語がマハーバーラタである。</p>
            </p>
        </div>
    </div>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) :
            the_post(); ?>
            <?php the_content() ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_template_part('parts/schedule-parts'); ?>

</div><!-- /content -->

<?php get_template_part('parts/footer-parts'); ?>

<?php get_footer(); ?>