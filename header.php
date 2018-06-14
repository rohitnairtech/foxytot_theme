<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/head.png" type="image/x-icon">
    <meta name="description" content="Kiddos fashion haven">
    <meta name="author" content="https://rohitnair.tech">
    <title><?php bloginfo( 'name' ); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom/mobirise-icons/mobirise-icons.css">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
<?php wp_head(); ?>
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom/style_dropdown.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom/style_theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom/style_gallery.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans|Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
                        

<script>
$('.navbar-lower').affix({
  offset: {top: 50}
});
</script>
<style type="text/css">

</style>
</head>

<body>

<section class="menu cid-qSG03FRd1P" once="menu" id="menu1-h">



         <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="#">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/head-image.png" alt="TheFoxyTot" title="" style="height: 5rem;">
                    </a>
                </span>

            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">

                <li class="nav-item" style="font-family: 'Oswald', sans-serif; font-size: 16px;, sans-serif; color: #ff6600; margin-left:30px; margin-right: 20px;">
                    <a href="#">SALE</a>
                </li>

                <li class="nav-item" style="font-family: 'Oswald', sans-serif; font-size: 16px;, sans-serif; color: #ff6600; margin-left:30px; margin-right: 20px;">
                    <a href="#">FEATURED</a>
                </li>

                                <li>
                    <form role="search" method="get" action="http://localhost/foxytot/">
                      <div class="input-group input-group-sm">
                        <input class="form-control input-sm" placeholder="Search" id="find" name="s" type="search">
                        <div class="search-icon"><span>
                            <i class="fas fa-search fa-2x"></i>
                        </span></div>
                        <input name="post_type" value="product" type="hidden">
                      </div>
                    </form>
                       </li>

<li class="nav-item">
    <a href="http://localhost/foxytot/my-account/" class="iconLink">
        <i class="fas fa-user fa-2x" style="color: #939393;"></i>
     </a>
 </li>
<li class="nav-item"> 
    <a href="http://localhost/foxytot/cart/" class="iconLink">
        
        <i class="fas fa-shopping-cart fa-2x" style="color: #939393;"></i>
        <span class="dot">
            <span class="fa-layers-counter" id="bag-total"><?php global $woocommerce; echo $woocommerce->cart->get_cart_contents_count(); ?></span>
        </span>     
        
    </a>
</li>

            </ul>


        </div>


    </nav>





    </section>
<nav class="navbar navbar-lower navbar-light" role="navigation">
	<?php
	wp_nav_menu(array(
		'theme_location' => 'primary',
		'container' => 'none',
		'menu_class' => 'navbar-nav headerDownMenu'
	));
	?>
</nav>


	<div id="content" class="site-content" tabindex="-1">
		<div class="container">
<br>
