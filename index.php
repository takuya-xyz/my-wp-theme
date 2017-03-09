<!DOCTYPE html>
<html lang="ja">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Sample</title>

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

<h1><?php bloginfo( 'name' ); ?></h1>

<div class="row">
<div class="col-xs-12 col-sm-6">

<div>
<?php if ( have_posts() ) : /** WordPress ループ */
while ( have_posts() ) : the_post(); /** 繰り返し処理開始 */ ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
<h3 style="margin-top:0">XXX</h3>
<p>YYY</p>
</div>
</div>

</div><!-- 全体を囲むコンテナ -->



</body>
</html>