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
    <div class="pageinquiry">
        <h2>INQUIRY</h2>
        <div class="inquiry__container">
            <div class="inquiry__content">
                <div class="inquiry__text">
                    <p>小池博史ブリッジプロジェクトにご興味を持っていただきまして、ありがとうございます。</p>
                    <br>
                    <p>公演に関するお問い合わせ、公演・ワークショップのご依頼など、</br>
                        <p>お電話（03-3385-2066）か、下記フォームよりお気軽にお問い合わせください。</p>
                </div>
                <?php if ($posts) : ?>
                    <?php while (have_posts()) :
                        the_post(); ?>
                        <?php the_content() ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php get_template_part('parts/footer-parts'); ?>

    <?php get_footer(); ?>