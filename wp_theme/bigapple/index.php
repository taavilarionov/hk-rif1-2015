<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bigapple website</title>
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,minimum-scale=1.0,maximum-scale=1.0,width=device-width" />
	<link href='https://fonts.googleapis.com/css?family=League+Script' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript">
	  $(function() {
	      $('#menu-trigger').click(function(){
	       $('#menu').slideToggle("fast");
	       $('#menu-trigger').toggleClass("active");
	    });
    });
    </script>

</head>
<body>
	<div id="frame">
		<header class="clear">
			<a href="<?php site_url(); ?>" id="logo">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/logo.png" alt="BigApple logo" title="BigApple logo">
			</a>
			<div id="menu-trigger" class="mobile">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<?php wp_nav_menu( array('menu' => 'Main menu', 'menu_id' => 'menu', 'depth' => 1)); ?>
		</header>
		<article>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</article>
		<footer>
			T-R  10–18 telefon 644 0026 e-post  info@info.ee
		</footer>
	</div>
</body>
</html>