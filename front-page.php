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

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" />

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style_front.css" />

</head>
<body>
<div id="wrap">

<?php //get_template_part('navbar'); ?>

<nav class="navbar navbar-default" id="menu-wrap">
<div class="container">
<div class="navbar-header">
<button class="navbar-toggle" data-toggle="collapse" data-target="#mainNav">
<span class="sr-only">ナビゲーション</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="<?php echo home_url( '/' ); ?>" class="navbar-brand" style="color:#fff;">
WEBサイト制作<br />
アウトドアチャイルド
</a>
</div>
<div class="collapse navbar-collapse" id="mainNav">
<!--ここからWordPressのナビ作成のタグ-->
<ul class="nav navbar-nav">
<li id="menu-item-18" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-8 current_page_item menu-item-18">
<a href="<?php echo home_url( '/' ); ?>">HOME</a>
</li>
<li id="menu-item-19" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19">
<a href="<?php echo home_url( '/' ); ?>inquiry/">お問い合わせ</a>
</li>
</ul><!--WordPressのナビ作成のタグここまで-->
</div>
</div>
</nav>



<div class="container" style="margin-top:50px;margin-bottom:45px;"><!-- 全体を囲むコンテナ -->

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

使用可能な言語やツールなどは以下になります。

言語：PHP、JavaScript、jQuery、(X)HTML、CSS、HTML5、CSS3
CMS：WordPress、Movable Type、EC-CUBE
フレームワーク：FuelPHP、CakePHP、Zend Framework、symfony、Codeigniter
データベース：MySQL、PostgreSQL
バージョン管理ツール：svn、git
OS：Windows全般、Linux全般

連絡の手段はご都合に合わせて柔軟に対応致します。

・メール
・電話
・ご指定の場所で面談
・スカイプ
・チャットワーク
など

ご依頼・ご相談など、なんでもお気軽にご連絡ください。
どうぞよろしくお願い致します。

【経歴】

某店舗システムの開発、改修
店舗フロントページ、スタッフ勤怠管理、報酬管理、店舗売上管理、予約管理
PHP
Smarty
AWS
MySQL
2012年04月〜現在

某求人サイトの開発、改修
PHP
FuelPHP
MySQL
2017年03月〜現在

【趣味】

登山。
料理。
飲み会。
マンガ。
映画。
ドラマ。
お笑いライブ。
読書。

EOT;
echo nl2br($html);
?>
</div>



<div class="hidden-xs">
<div id="side_fix_test_3">
後半は変動。
</div>
</div>



</div>

<div id="front_right_box">
</div>

<br class="clear" />

</div>

<div class="hidden-xs col-sm-4" id="front-side_area">

<a href="<?php echo home_url( '/' ); ?>inquiry/" id="otoiawase" class="otoiawase animated rubberBand">お問い合わせ</a>

<div id="side_fix_test_1" style="text-align:center;margin-bottom:20px;margin-top:40px;">

<img src="<?php echo get_template_directory_uri(); ?>/images/tools/php.png" width="150" /><br />
<img src="<?php echo get_template_directory_uri(); ?>/images/tools/jquery.png" width="150" /><br />
<img src="<?php echo get_template_directory_uri(); ?>/images/tools/html5.png" width="150" /><br />
<img src="<?php echo get_template_directory_uri(); ?>/images/tools/css3.png" width="120" /><br />

<img src="<?php echo get_template_directory_uri(); ?>/images/tools/mysql.png" width="150" /><br />
<img src="<?php echo get_template_directory_uri(); ?>/images/tools/postgresql.png" width="150" /><br />

<img src="<?php echo get_template_directory_uri(); ?>/images/tools/wordpress.jpg" width="150" /><br />
<img src="<?php echo get_template_directory_uri(); ?>/images/tools/mt.png" width="200" /><br />
<img src="<?php echo get_template_directory_uri(); ?>/images/tools/eccube.png" width="150" /><br />

<img src="<?php echo get_template_directory_uri(); ?>/images/tools/fuelphp.png" width="300" /><br />
<img src="<?php echo get_template_directory_uri(); ?>/images/tools/cakephp.png" width="300" /><br />
<img src="<?php echo get_template_directory_uri(); ?>/images/tools/zendframework.png" width="150" /><br />
<img src="<?php echo get_template_directory_uri(); ?>/images/tools/codeigniter.png" width="150" /><br />
<img src="<?php echo get_template_directory_uri(); ?>/images/tools/symfony.png" width="150" /><br />

<img src="<?php echo get_template_directory_uri(); ?>/images/tools/github.png" width="150" /><br />
<img src="<?php echo get_template_directory_uri(); ?>/images/tools/centos.png" width="150" />

</div>

<div id="side_fix_test_2">

<div style="margin-bottom:20px;">
<div style="float:left;">
<img src="<?php echo home_url( '/' ); ?>wp-content/uploads/2017/03/creator.jpg" width="80" />
</div>
<div style="float:left;width:200px;margin-left:10px;">
WEBサイト制作に関することなら何でもお気軽にご相談ください。
</div>
<br class="clear" />
</div>

<a href="<?php echo home_url( '/' ); ?>inquiry/" id="otoiawase" class="otoiawase animated rubberBand">お問い合わせ</a>

</div>

</div>

</div>

<div class="row">
<div id="footer">
&copy; <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> All Rights Reserved.
</div>
</div>

</div><!-- 全体を囲むコンテナ -->

<div id="footer_menu">
<div class="container">

<div class="visible-xs">

<div id="footer_menu_list">
<a href="<?php echo home_url( '/' ); ?>">HOME</a>
<a href="<?php echo home_url( '/' ); ?>inquiry/">お問い合わせ</a>
</div>

<div style="float:left;font-size:10px;padding:5px;color:#fff;">
WEBサイト制作<br />
アウトドアチャイルド
</div>

<div style="float:right;padding-top:10px;">
<input type="button" value="MENU" id="footer_menu_list_btn" />
</div>

<br class="clear" />

</div>

<div class="hidden-xs">

<ul>
<li style="font-size:10px;color:#fff;">
WEBサイト制作<br />
アウトドアチャイルド
</li>
<li class="menu_1"><a href="<?php echo home_url( '/' ); ?>">HOME</a></li>
<li class="menu_2"><a href="<?php echo home_url( '/' ); ?>inquiry/">お問い合わせ</a></li>
</ul>

</div>

</div>
</div>

<p id="page-top">
<a href="#wrap">
PAGE<br />
TOP
</a>
</p>

<?php wp_footer(); ?>

<div id="particles-js"></div>

<script src="<?php echo get_template_directory_uri(); ?>/particles.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/set.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>

</div>
</body>
</html>