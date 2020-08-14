<div class="news">
    <div class="news__container wow fadeIn">
        <div class="news__header">
        <?php
            global $template;
            $template_name = basename($template);
        ?>
            <?php if ($template_name === 'single.php') { ?>
                <h2>LATEST NEWS</h2>
            <?php } else { ?>
                <h2>NEWS</h2>
            <?php } ?>
        </div>
        <div class="news__link">
            <a class="btn__yoyaku" href="/mb/news">NEWS一覧へ</a>
        </div>
        <?php
        $posts = get_posts(
            array(
                'post_type' => 'post',
                'numberposts' => 5,
                'order' => 'ASC',
            )
        );
        ?>
        <?php if ($posts) : ?>
            <div class="news__list">
                <?php foreach ($posts as $post) : ?>
                    <?php setup_postdata($post) ?>
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
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>
    </div>
</div>