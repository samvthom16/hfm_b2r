<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title('');?></title>
		<?php wp_head();?>
	</head>
	<body <?php body_class(); ?>>
		<div id="bg-cover"></div>
		<header>
      <div class="container">
        <a href="<?php bloginfo('url');?>">
          <img src="<?php _e( get_stylesheet_directory_uri() );?>/assets/images/logo.png" />
        </a>
        <?php _e( do_shortcode( '[b2r_icons]' ) );?>
      </div>
    </header>
