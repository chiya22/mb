<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <? $youtube = get_field('youtube-url'); ?></div>
    <? $reserve = get_field('reserve-url'); ?></div>
    <?php endwhile; ?>
<?php endif; ?>
<!-- content -->
<div id="content">
    <div class="top">
        <div class="top__container">
            <div class="top__titleimg">
                <?php echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/title.png">' ?>
            </div>
            <div class="top__main">
                <div class="top__mainimg">
                    <?php echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/schedule.png">' ?>
                </div>
                <div class="top__text">
                    小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である完全版マハーバーラタの公演が決定！！<br>アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！
                </div>
            </div>
        </div>
    </div>
    <div class="top__btnarea">
        <a class="btn__yoyaku top_-1_5" href="<?php echo $reserve ?>">チケット予約サイトへ</a>
    </div>
    <div class="intro">
        <div class="intro__container">
            <!-- <div class="intro-bg-img">
                <?php echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/intro.png">' ?>
            </div> -->
            <div class="intro__header wow fadeIn">
                <h2>INTRODUCTION</h2>
                <p>なぜ今マハーバーラタなのか？</p>
            </div>
            <div class="intro__main wow fadeIn">
                <p>「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？</p>
                <p>それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。</p>
                <p>平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。<br>現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。</p>
                <p>神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。<br>非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。</p>
            </div>
        </div>
        <div class="intro__youtube wow fadeIn">
            <iframe src="<?php echo $youtube ?>" frameborder="0" allowfullscreen=""></iframe>
        </div>
    </div>
    <?php get_template_part('parts/newslist-parts'); ?>
    <div class="story">
        <div class="story__container">
            <h2>STORY</h2>
            <div class="story__main">
                <div class="story__text">
                    <p>マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。</p>
                    <p>世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。</p>
                    <p>インドだけでなくアジア全般で広く知られた作品であり、TVドラマや映画の原案として使われることも多い。全編舞台化の難しさ日本では、イギリスの演出家ピーター・ブルックがワールドツアーの一環として1988年6月に銀座セゾン劇場で上演。三部作であったが、上演時間は9時間にも及んだ。 日本人の作品としては演出家・宮城聰が『マハーバーラタ～ナラ王の冒険』や歌舞伎作品『極付印度伝マハーバーラタ戦記』として、「マハーバーラタ」の長大なストーリーの一部分を舞台化した。全編上映はブルック以外にめぼしい作品は世界的にも存在しない</p>
                </div>
            </div>
            <div class="story__link"><a class="btn__yoyaku" href="/mb/story">もっと詳しく</a></div>
        </div>
    </div>
    <div class="comments">
        <div class="comments__container wow fadeIn">
            <h2>COMMENTS</h2>
            <p>舞台関係者のみならず各界著名人からコメントが届いています！</p>
            <div class="wow fadeIn comments__main">
                <div class="comments__content">
                    <p class="comments__name">京都佛立ミュージアム館長<br>京都・長松寺/横浜・妙深寺 住職 <span>長松清潤</span></p>
                    <p class="commnets__text">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。<br>仏教の奥義と小池作品が通底して見えるのは何故か。<br>40年に及ぶ創作活動で到達した究極の舞台が普遍の題材により現出されようとしている。</p>
                </div>
                <div class="comments__link"><a class="btn__yoyaku" href="/mb/comments">もっと見る</a></div>
            </div>
        </div>
    </div>
    <div class="cast">
        <div class="cast__container wow fadeIn">
            <h2>CAST</h2>
            <?php echo get_cast_list(array("num"=>"3", "cate"=>"CAST_MAIN")); ?>
        </div>
        <div class="cast__link"><a href="mb/cast">もっと見る</a></div>
    </div>

    <?php get_template_part('parts/schedule-parts'); ?>

</div><!-- /content -->

<?php get_template_part('parts/footer-parts'); ?>

<?php get_footer(); ?>

