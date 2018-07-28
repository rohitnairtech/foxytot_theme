<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <title><?php bloginfo( 'name' ); ?></title>
    <link rel="shortcut icon" href="<?php echo get_site_icon_url(); ?>" type="image/x-icon">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="https://rohitnair.tech">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom/style_dropdown.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom/style_theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom/style_gallery.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom/style.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans|Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">

<script>
$('.navbar-lower').affix({
  offset: {top: 50}
});
</script>

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
        <div class="top-nav">
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="<?php bloginfo( 'url' ); ?>">
                      <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        ?>
                         <img src="<?php echo (has_custom_logo()) ? esc_url( $logo[0] ) : get_template_directory_uri().'/assets/images/head-image.png' ?>" alt="<?php echo esc_attr( get_bloginfo('name', 'display') ); ?>" title="<?php echo esc_attr( get_bloginfo('name') ); ?>" style="height: 5rem;">
                    </a>
                </span>

            </div>


        </div>
        <span class="nav-item d-sm-none" style="position: relative; right: 55px;"> 
    <a href="<?php echo WC()->cart->get_cart_url(); ?>" class="iconLink">
        
        <i class="fas fa-shopping-cart fa-lg" style="color: #939393; padding-left: 0px;"></i>
        <span class="dot">
        	<span class="fa-layers-counter" id="bag-total" style="top: -1.5px; left: 5px;" ><?php echo WC()->cart->get_cart_contents_count(); ?></span>
		</span>    	
        
    </a>
</span>
</div>
        <div class="d-sm-none nav-mini">
        <div class="d-sm-none">
          <form role="search" method="get" action="<?php bloginfo( 'url' ); ?>">
                <div class="input-group input-group-sm">
                    <input class="form-control input-sm" placeholder="Search" id="find2" name="s" type="search">
                        <div class="search-icon"><span>
                            <i class="fas fa-search fa-lg"></i>
                        </span></div>
                    <input name="post_type" value="product" type="hidden">
                </div>
            </form>
        </div>

        
    </div>


		

       
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
            	

                <li class="nav-item" style="font-family: 'Oswald', sans-serif; font-size: 16px; color: #ff6600; margin-left:05px; margin-right: 10px;">
                    <a href="#">SALE</a>
                </li>

                <li class="nav-item" style="font-family: 'Oswald', sans-serif; font-size: 16px; color: #ff6600; margin-left:10px; margin-right: 20px;">
                    <a href="#">FEATURED</a>
                </li>
            

                                <li>
                                  <span class="d-none d-md-block" id="find">
                    <form role="search" method="get" action="<?php bloginfo( 'url' ); ?>">
                      <div class="input-group input-group-sm" id="find">
                        <input class="form-control input-sm" placeholder="Search"  name="s" type="search">
                        
                        <input name="post_type" value="product" type="hidden">
                      </div>
                    </form>
                </span>
                       </li>

<li class="nav-item nav-icon">
    <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" class="iconLink">
        <i class="fas fa-user fa-2x" style="color: #939393; padding-left: 25px;"></i>
     </a>
 </li>
<li class="nav-item nav-icon"> 
    <a href="<?php echo WC()->cart->get_cart_url(); ?>" class="iconLink">
        
        <i class="fas fa-shopping-cart fa-2x" style="color: #939393; padding-left: 0px;"></i>
        <span class="dot">
          <span class="fa-layers-counter" id="bag-total"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	</span>    	
        
    </a>
</li>


            </ul>


        </div>


    </nav>





    </section>

<nav class="d-block d-sm-none navbar nav-responsive navbar-collapse-lg" id="navResponsive">
  <div class="navbar-title" href="#"> 
  <a class="navbar-toggler secondary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #ff6600;">
  	Menu
    <span><i class="fas fa-sort-down fa-1x" id="upDown"></i></span>
  </a>

  </div>

 

  <div class="collapse navbar-collapse" id="navbarSupportedContent2">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => 'none',
        'menu_class' => 'navbar-nav mr-auto'
    ));
    ?>
  </div>
</nav>

<nav class="d-none d-sm-block navbar navbar-lower navbar-light" role="navigation">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => 'none',
        'menu_class' => 'navbar-nav headerDownMenu'
    ));
    ?>
</nav>
