<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">

	<title><?php bloginfo('name'); ?>|<?php bloginfo('description'); ?></title>
	<meta name="description" content="">

	<meta property="og:title" content="デイトラ最終課題" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://tomo10mo8.wp.xdomain.jp/" />
	<meta property="og:image" content="http://tomo10mo8.wp.xdomain.jp/wp-content/themes/mb/img/profile.png" />
	<meta property="og:site_name" content="デイトラ最終課題" />
	<meta property="og:description" content="デイトラ最終課題で作成したサイトです。" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@10mo8since2020" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
	<!-- 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css?ver=5.8.2">
	<link rel="stylesheet" href="./css/style.css">
 -->
	<?php wp_head(); ?>
	<link rel="icon" href="./img/icon-home.png">
</head>

<body>

	<!-- header -->
	<header id="header">
		<!-- <nav class="header-nav">
			<ul>
				<li><a class="header-item" href="/mb" data-eimoji="TOP">トップ</a></li>
				<li><a class="header-item" href="/mb/news" data-eimoji="NEWS">ニュース</a></li>
				<li><a class="header-item" href="/mb/story" data-eimoji="STORY">ストーリー</a></li>
				<li><a class="header-item" href="/mb/comic" data-eimoji="COMIC">マンガ</a></li>
				<li><a class="header-item" href="/mb/comments" data-eimoji="COMMENTS">著名人コメント</a></li>
				<li><a class="header-item" href="/mb/cast" data-eimoji="CAST">キャスト</a></li>
				<li><a class="header-item" href="/mb/inquiry" data-eimoji="INQUIRY">問い合わせ</a></li>
				<li><a class="header-item" href="/mb/reserve" data-eimoji="RESERVE">ご予約</a></li>
			</ul>
		</nav> -->
		<?php wp_nav_menu(array(
			'theme_location' => 'globalheader',
			'container' => '',
			'menu_class' => 'nav',
			'link_before' => '<div>',
			'link_after' => '</div>',
			'items_wrap' => '<ul>%3$s</ul>',
		)); ?>
	</header><!-- /header -->