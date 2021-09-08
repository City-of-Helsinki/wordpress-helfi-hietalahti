<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php wp_head();?>
<script type="text/javascript" src="//use.typekit.net/jme7bhb.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
<?php wp_title ( '', true,'right' ); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
</head>
<body>
<div id="wrapper" class="clearfix">
<div id="header">
  <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'navi', 'theme_location' => 'primary-menu' ) ); ?>
  <a class="logoimage hide-text" href="<?php echo get_option('home'); ?>">
  <?php bloginfo('name'); ?>
  </a> 
  
  <!--end id=header --></div>
