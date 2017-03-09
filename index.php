<!DOCTYPE html>
<html lang="ja">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo( 'name' ); ?></title>

<!-- BootstrapのCSS読み込み -->
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" media="all" />

<!-- jQuery読み込み -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- BootstrapのJS読み込み -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

<?php wp_head();?>

</head>
<body>



<div class="container"><!-- 全体を囲むコンテナ -->

<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button class="navbar-toggle" data-toggle="collapse" data-target="#mainNav">
<span class="sr-only">ナビゲーション</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="<?php echo esc_url( home_url() ); ?>" class="navbar-brand">
<img src="<?php echo esc_url( home_url() ); ?>/wp-content/uploads/2017/03/logo3.png" style="height:50px;" />
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

<div class="page_top_space">
</div>

<div>
<?php if( !is_front_page() ){ ?>
<ul class="breadcrumb">
<li>
<a href="<?php echo esc_url( home_url() ); ?>">
HOME
</a>
</li>
<li class="active"><?php the_title(); ?></li>
</ul>
<?php } ?>
</div>

<div class="row">
<div class="col-xs-12 col-sm-6">

<div>
<?php if ( have_posts() ) : /** WordPress ループ */
while ( have_posts() ) : the_post(); /** 繰り返し処理開始 */ ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php if( !is_front_page() ){ ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php } ?>

<?php the_content(); ?>
</div>
<?php endwhile; /** 繰り返し処理終了 */
else: /** ここから記事が見つからなかった場合の処理 */ ?>
<div class="post page">
<h2>ページがありません</h2>
<p>お探しのページは見つかりませんでした。</p>
</div>
<?php endif; /** WordPress ループここまで */ ?>
</div>

</div>
<div class="col-xs-12 col-sm-6">
<div class="visible-xs" style="height:20px;"></div>
<div>
<?php dynamic_sidebar('sidebar-1'); ?>
</div>
</div>
</div>

<div id="footer">
&copy; <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> All Rights Reserved.
</div>

</div><!-- 全体を囲むコンテナ -->



<?php wp_footer(); ?>
</body>
</html>