<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="pt-br" > <![endif]-->
<html class="no-js" lang="pt-br" >

<head>
  <meta charset="utf-8">
  <!-- If you delete this meta tag World War Z will become a reality -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(''); ?></title>
  
  <!-- If you are using the CSS version, only link these 2 files, you may add app.css to use for your overrides if you like -->
  <link rel="stylesheet" href="wp-content/themes/mytheme/style.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- If you are using the gem version, you need this only -->
  <link rel="stylesheet" href="css/app.css">
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
  <script src="js/vendor/modernizr.js"></script>
  <?php wp_head(); ?>
</head>
<body>
<div class="row menubar">
	<div class="top-bar-container fixed contain-to-grid">
            <nav class="top-bar">
                <ul class="title-area">
                    <li>
                        <h1>
						<a href="<?php echo home_url(); ?>"><img class="logobranco hide-for-small-only" src="wp-content/themes/mytheme/img/logo_branco.png"><img class="logocor show-for-small-only" src="wp-content/themes/mytheme/img/logo_cor.png"></a>
						</h1>
                    </li>	
                    <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
                </ul>
                <section class="top-bar-section hide-for-small-only">
                    <?php foundation_top_bar_l(); ?>
 
                    <?php foundation_top_bar_r(); ?>
                </section>
            </nav>
			
			<div class="small-12 columns blue"></div>
			<div class="small-12 columns green"></div>
			<div class="small-12 columns purple"></div>
        </div>
</div>