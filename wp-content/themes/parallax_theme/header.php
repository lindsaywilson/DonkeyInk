<!doctype html>
<html <?php echo themify_get_html_schema(); ?> <?php language_attributes(); ?>>
<head>
<title>Donkey Ink Design - Vancouver, Canada based Interactive, Brand, Graphic Design &amp; Web Development</title>
<?php
/** Themify Default Variables
 *  @var object */
	global $themify; ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">



<?php
/**
 *  Stylesheets and Javascript files are enqueued in theme-functions.php
 */
?>

<!-- wp_header -->
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5019044-1', 'auto');
  ga('send', 'pageview');

</script>

<?php themify_body_start(); // hook ?>
<div id="pagewrap" class="hfeed site">

	<div id="headerwrap" class="fullcover  scrolling-bg-image" >
    
		<?php themify_header_before(); // hook ?>
		<header id="header" class="pagewidth">
        <span class="icon-van"></span>
			<?php themify_header_start(); // hook ?>
			<hgroup>
				<h1 id="site-logo"><span class="icon-logo"> Donkey Ink Design</span></h1>
				<div class="intro-text">
                <p>Donkey Ink Design is mostly one guy<span class="hide-mobile">*</span> and that one guy is me, Jamie Purches. Hello.</p>
                <p>I'm a Vancouver-based Art and Interactive Design Director with a solid understanding of brand, graphic, and interactive UI/UX design for web and mobile.</p>
                <p class="welcome UniSansSemiBold">Welcome to my portfolio.</p>
                <p class="UniSansSemiBold micetype hide-mobile">*See the <a href="/#about">About</a> section to learn more about Donkey Ink Design contributors</p>
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