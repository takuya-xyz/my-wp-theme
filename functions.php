<?php

/** ダイナミックサイドバーを定義するコード（CHAPTER 11）*/
register_sidebar( array(
	'name'			=> 'サイドバーウィジット-1',
	'id'			=> 'sidebar-1',
	'description'	=> 'サイドバーのウィジットエリアです。デフォルトのサイドバーと丸ごと入れ替えたいときに使ってください。',
    'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
    'after_widget'	=> '</div>',
) );

/** カスタムメニューの「場所」を設定するコード */
register_nav_menu( 'header-navi', 'ヘッダーのナビゲーション' );

?>