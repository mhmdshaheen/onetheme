<?php
/**
 * The header for the OnePress theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OnePress
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta property="og:image" content="https://careertuners.com/wp-content/uploads/2018/08/site_logo2.png" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-84549627-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-84549627-1');
</script>
</head>
<style type="text/css">

/* loader css */
.careertuners_loader_outer {position: fixed;left: 0;right: 0;top: 0;bottom: 0;background: #fff;z-index: 9999;height: 100vh;overflow: hidden;}

.careertuners_loader {color: transparent;font-size: 0;text-indent: -9999em;overflow: hidden;width: 90px;height: 90px;border-radius: 50%;margin: 0 auto;position: relative;-webkit-transform: translateZ('-50%');-ms-transform: translateZ('-50%');transform: translateZ('-50%');left: 0;right: 0;z-index: 9;bottom: auto;top: 50%;background-image: url("<?php echo get_template_directory_uri() ?>/assets/images/loader_img1.svg");background-size: 100% 100%;background-position: center center;}

body.body_overflow #page{height: 100vh;width: 100%;overflow: hidden;visibility: hidden;}

</style>
<body <?php body_class('body_overflow'); ?> >
<?php do_action( 'onepress_before_site_start' ); ?>
<div class="careertuners_loader_outer"><div class="careertuners_loader">Loading...</div></div>
<div id="page" class="hfeed site page_overflow">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'onepress' ); ?></a>
    <?php
    /**
     * @since 2.0.0
     */
    onepress_header();
    ?>