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
    <div class="pagecomments">
        <div class="comments__container wow fadeIn">
            <div class="comments__header">
                <h2>COMMENTS</h2>
                <h3>舞台関係者のみならず各界著名人からコメントが届いています！</h3>
            </div>
            <div class="wow fadeIn comments__main">
                <div class="comments__content">
                    <p class="comments__name">京都佛立ミュージアム館長<br>京都・長松寺/横浜・妙深寺 住職 <span>長松清潤</span></p>
                    <p class="commnets__text">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。<br>仏教の奥義と小池作品が通底して見えるのは何故か。<br>40年に及ぶ創作活動で到達した究極の舞台が普遍の題材により現出されようとしている。</p>
                </div>
            </div>
            <?php
            $posts = get_posts(
                array(
                    'post_type' => 'comment',
                    'numberposts' => 100,
                    'order' => 'ASC',
                )
            );
            ?>
            <?php if ($posts) : ?>
                <div class="comments__list-flex">
                    <?php foreach ($posts as $post) : ?>
                        <?php setup_postdata($post) ?>
                        <div class="comments__item wow fadeIn">
                            <h2 class="comments__title"><?php the_title() ?></h2>
                            <p class="comments__subtitle"><?php the_field('subtitle') ?></p>
                            <p class="comments__comment"><?php the_field('comment') ?></p>
                        </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php get_template_part('parts/schedule-parts'); ?>

</div><!-- /content -->

<?php get_template_part('parts/footer-parts'); ?>

<?php get_footer(); ?>