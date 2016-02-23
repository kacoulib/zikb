<!DOCTYPE html>
<html>
<head>
	<meta charset='utf8'>
	<title><?php bloginfo('title'); ?>zikb</title>
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen" />
</head>
<body>
	<header>
		<div class='center'>
			<span id='burger'>pp</span>
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			<nav id="nav"><?php wp_nav_menu( array( 'container' => false ) );?></nav>
		</div>
	</header>
