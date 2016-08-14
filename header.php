<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title('|', true, 'right');bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="global-wrap">
      <header id="header" class="header">
        <div class="container">
          <div class="header-in">
            <div class="header-logo">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <h1><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?><span>BETA</span></h1>
              </a>
            </div>
          </div>
        </div>
      </header>