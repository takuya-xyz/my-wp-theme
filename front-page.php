<!DOCTYPE html>
<html lang="ja">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo( 'name' ); ?></title>

<!-- BootstrapのCSS読み込み -->
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery読み込み -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- BootstrapのJS読み込み -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

<?php wp_head();?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style_particles.css" />

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style_front.css" />

</head>
<body>

<div class="container"><!-- 全体を囲むコンテナ -->

<nav class="navbar navbar-default">
<div class="container">
<div class="navbar-header">
<button class="navbar-toggle" data-toggle="collapse" data-target="#mainNav">
<span class="sr-only">ナビゲーション</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="<?php echo esc_url( home_url() ); ?>" class="navbar-brand">
<img src="<?php echo esc_url( home_url() ); ?>/wp-content/uploads/2017/03/logo3.png" class="logo_image" />
</a>
</div>
<div class="collapse navbar-collapse" id="mainNav">
<!--ここからWordPressのナビ作成のタグ-->
<?php
$defaults = array(
'menu_class' => 'nav navbar-nav',
'container'  => false,
'fallback_cb' => 'wp_page_menu',
'theme_location' => 'header-navi',
'items_wrap' => '<ul class="%2$s">%3$s</ul>',
);
wp_nav_menu( $defaults );
?>
<!--WordPressのナビ作成のタグここまで-->
</div>
</div>
</nav>

<div class="row bg_write" style="height:30px;">
</div>

<div class="row">

<div class="col-xs-12 col-sm-8" style="margin:0px;padding:0px;">

<div id="front_left_box">
</div>

<div id="front_center_box">

<h2>WEBサイト制作に関することならなんでもお気軽にご相談ください</h2>

<div id="self-introduction">
<?php
$html=<<<EOT
はじめまして。

東京都在住のWEBエンジニアです。
サイト制作に関することでしたら、コーディングからプログラム、サーバ管理まで、なんでも対応可能です。
エンジニア歴は10年以上になります。

使用可能言語、ツール：PHP、JavaScript、jQuery、(X)HTML、CSS、HTML5、CSS3、svn、git
使用可能なデータベース：MySQL、PostgreSQL
使用可能OS：Windows全般、Linux全般

連絡の手段はご都合に合わせて柔軟に対応致します。

・メール
・電話
・ご指定の場所で面談
・スカイプ
・チャットワーク
など

ご依頼・ご相談など、なんでもお気軽にご連絡ください。
どうぞよろしくお願い致します。
EOT;
echo nl2br($html);
?>
</div>

</div>

<div id="front_right_box">
</div>

<br class="clear" />

</div>

<div class="hidden-xs col-sm-4" id="front-side_area">
side
</div>

</div>

<div class="row">
<div class="visible-xs" id="bottom_area_xs">
visible-xs
</div>
</div>

<div class="row">
<div id="footer">
&copy; <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> All Rights Reserved.
</div>
</div>

</div><!-- 全体を囲むコンテナ -->

<?php wp_footer(); ?>

<div id="particles-js"></div>

<script src="<?php echo get_template_directory_uri(); ?>/particles.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/set.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>

</body>
</html>