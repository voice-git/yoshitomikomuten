<!DOCTYPE html>
<html lang="ja">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JW1W7T0L31"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JW1W7T0L31');
</script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php
if(is_single()) {
echo strip_tags(preg_replace('/n/i', '', get_the_excerpt()));
} elseif(is_category()) {
echo single_cat_title()."カテゴリーの記事一覧ページです。";
} elseif(is_tag()) {
echo single_tag_title()."タグの記事一覧ページです。";
} elseif(is_month()) {
echo the_time('Y年M月')."に投稿された記事一覧ページです。";
} else {
bloginfo('description');
}?>" />


<title><?php wp_title('',true); ?><?php if(wp_title('',false)) { ?> | <?php } ?><?php bloginfo('name'); ?></title>

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/vnd.microsoft.icon">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-precomposed.png">

<!--css-->
<link href="<?php echo get_template_directory_uri(); ?>/style.css?0714" rel="stylesheet">
<?php
	if(is_page('recruit')) {
?><link href="<?php echo get_template_directory_uri(); ?>/css/page/recruit.css?0714" rel="stylesheet">

	<?php } elseif (is_page()) {?>
		<link href="<?php echo get_template_directory_uri(); ?>/style.css?1124" rel="stylesheet">
	<?php } ?>
	
<link href="<?php echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet">


<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->


<?php wp_head(); ?>

</head>

<body <?php body_class('drawer drawer--top'); ?> >

<header class="header">
  <div class="container">
    <h1 class="header_logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="吉富工務店株式会社"></a></h1>

    <div class="gnav">
          <button type="button" class="drawer-toggle drawer-hamburger">
        <span class="sr-only">toggle navigation</span>
        <span class="drawer-hamburger-icon"></span>
      </button>
          <nav class="navbar drawer-nav">
              <div id="navbar" class="navbar-collapse collapse drawer-menu">
                  <div class="container">
                      <ul>
                          <li class="nav_home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
                          <li class="nav_message"><a href="<?php echo esc_url( home_url( '/' ) ); ?>message">ごあいさつ</a></li>
                          <li class="nav_owner"><a href="<?php echo esc_url( home_url( '/' ) ); ?>owner">施主のみなさまへ</a></li>
                          <li class="nav_architect"><a href="<?php echo esc_url( home_url( '/' ) ); ?>architect">建築家のみなさまへ</a></li>
                          <li class="nav_works"><a href="<?php echo esc_url( home_url( '/' ) ); ?>works">作品実績</a></li>
                          <li class="nav_about"><a href="<?php echo esc_url( home_url( '/' ) ); ?>about">会社概要</a></li>
                          <!-- <li class="nav_recruit"><a href="<?php echo esc_url( home_url( '/' ) ); ?>recruit">採用情報</a></li> -->
                      </ul>
                  </div>
                  <!-- container -->
              </div>
          </nav>
          <!-- navbar -->
      </div>
      <!-- gnav -->
  </div>
  <!-- container -->
</header>
<!-- header -->

<main>
