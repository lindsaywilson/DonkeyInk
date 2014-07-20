<!doctype html>
<html <?php echo themify_get_html_schema(); ?> <?php language_attributes(); ?>>
<head>
<?php
/** Themify Default Variables
 *  @var object */
	global $themify; ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">

<title itemprop="name"><?php wp_title( '' ); ?></title>

<?php
/**
 *  Stylesheets and Javascript files are enqueued in theme-functions.php
 */
?>

<!-- wp_header -->
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php themify_body_start(); // hook ?>
<div id="pagewrap" class="hfeed site">

	<div id="headerwrap" <?php $themify->theme->custom_header_background(); ?> >
    
		<?php themify_header_before(); // hook ?>
		<header id="header" class="pagewidth">
        <span class="icon-van"></span>
			<?php themify_header_start(); // hook ?>
			<hgroup>
				<h1 id="site-logo"><a class="icon-logo" title="Donkey Ink Design" href="http://local.donkeyink.com">Donkey Ink Design</a></h1>
				<div class="intro-text">
                <p>Donkey Ink Design is mostly one guy* and that one guy is me, Jamie Purches. Hello.</p>
                <p>I'm a Vancouver-based Art and Interactive Design Director with a solid understanding of brand, graphic, and interactive UI/UX design for web and mobile.</p>
                <p class="welcome UniSansSemiBold">Welcome to my portfolio.</p>
                <p class="UniSansSemiBold micetype">*See the <a href="#about">About</a> section to learn more about Donkey Ink Design contributors</p>
                </div>

                
				<?php if ( $site_desc = get_bloginfo('description') ) : ?><h2 id="site-description"><?php echo $site_desc; ?></h2><?php endif; ?>
			
				<div class="social-widget">
					<?php dynamic_sidebar('social-widget'); ?>

					<?php if(!themify_check('setting-exclude_rss')): ?>
						<div class="rss">
							<a href="<?php if(themify_get('setting-custom_feed_url') != ""){ echo themify_get('setting-custom_feed_url'); } else { bloginfo('rss2_url'); } ?>">RSS</a>
						</div>
					<?php endif; ?>
				</div>
				<!-- /.social-widget -->
					
				<?php if(!themify_check('setting-exclude_search_form')): ?>
					<?php get_search_form(); ?>
				<?php endif ?>

				<?php
					// If there's a header background slider, show it.
					global $themify_bg_gallery;
					$themify_bg_gallery->create_controller();
				?>
			</hgroup>
			
			<div id="nav-bar" class="clearfix">
            	<a class="logo" href="/">D<span class="hide-mobile">onkey </span><span class="reg">I<span class="hide-mobile">nk </span></span><span>D<span class="hide-mobile">esign</span></a>
            	<a class="icon-email" href="mailto:info@donkeyink.com"></a>
                <a class="icon-facebook" href="https://www.facebook.com/pages/Donkey-Ink-Design/125842197431168" rel="external"></a>
                <a class="icon-behance" href="https://www.behance.net/donkeyink/" rel="external"></a>
                <nav>
					<div id="menu-icon" class="mobile-button icon-menu"><span><?php _e('Menu', 'themify'); ?></span></div>
					<?php themify_theme_menu_nav(); ?>
					<!-- /#main-nav --> 
				</nav>
			</div>

			<?php themify_header_end(); // hook ?>
		</header>
		<!-- /#header -->
        <?php themify_header_after(); // hook ?>
				
	</div>
	<!-- /#headerwrap -->
	
	<div id="body" class="clearfix">
    <?php themify_layout_before(); //hook ?>