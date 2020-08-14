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
    <div class="comic">
        <div class="comic__container">
            <div class="comic__header">
                <h2>COMIC</h2>
                <h3>マンガでわかるマハーバーラタ</h3>
                <p>日本ではあまり馴染みのないマハーバーラタ。ここではまだマハーバーラタについて詳しく知らない方向けに、マンガでわかりやすく解説していきます。</p>
            </div>
            <div class="comic__list">
                <div class="comic__item wow fadeIn">
                    <a class="comic__item-1" href="https://www.instagram.com/p/B9dWReonOZ_/">
                    </a>
                </div>
                <div class="comic__item wow fadeIn">
                    <a class="comic__item-2" href="https://www.instagram.com/p/B9dWReonOZ_/">
                    </a>
                </div>
                <div class="comic__item wow fadeIn">
                    <a class="comic__item-3" href="https://www.instagram.com/p/B9dWReonOZ_/">
                    </a>
                </div>
                <div class="comic__item wow fadeIn">
                    <a class="comic__item-4" href="https://www.instagram.com/p/B9dWReonOZ_/">
                    </a>
                </div>
                <div class="comic__item wow fadeIn">
                    <a class="comic__item-5" href="https://www.instagram.com/p/B9dWReonOZ_/">
                    </a>
                </div>
                <div class="comic__item wow fadeIn">
                    <a class="comic__item-6" href="https://www.instagram.com/p/B9dWReonOZ_/">
                    </a>
                </div>
                <div class="comic__item wow fadeIn">
                    <a class="comic__item-7" href="https://www.instagram.com/p/B9dWReonOZ_/">
                    </a>
                </div>
            </div>
            <a class="btn__instagram" href="https://www.instagram.com/kikh_mb">
                <i class="fab fa-instagram"></i>
                Follow on Instagram
            </a>
        </div>

        <?php get_template_part('parts/schedule-parts'); ?>

    </div><!-- /content -->

    <?php get_template_part('parts/footer-parts'); ?>

    <?php get_footer(); ?>