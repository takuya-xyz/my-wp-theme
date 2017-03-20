
<nav class="navbar navbar-default" id="menu-wrap">
<div class="container">
<div class="navbar-header">
<button class="navbar-toggle" data-toggle="collapse" data-target="#mainNav">
<span class="sr-only">ナビゲーション</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="<?php echo esc_url( home_url() ); ?>" class="navbar-brand" style="color:#fff;">
WEBサイト制作<br />
アウトオブチャイルド
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