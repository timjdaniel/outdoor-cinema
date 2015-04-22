<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>

	<!-- CSS Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/custom/skeleton.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/custom/layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/custom/prettyPhoto.css">

    <!-- JavaScripts -->
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/prefixfree.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/modernizr-2.6.2.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/iOS-timer.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.isotope.run.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.mobile-touch-swipe-1.0.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.lazyload.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/supersized.3.2.7.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/supersized.shutter.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/custom.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/contact_form.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/tooltip.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.sticky.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    <script type="text/javascript">
	    var isMobile = false;

	    if( navigator.userAgent.match(/Android/i) || 
	        navigator.userAgent.match(/webOS/i) ||
	        navigator.userAgent.match(/iPhone/i) || 
	        navigator.userAgent.match(/iPad/i)|| 
	        navigator.userAgent.match(/iPod/i) || 
	        navigator.userAgent.match(/BlackBerry/i)){
	                        
	        isMobile = true;
	                    
	    }
	    
	    /*iOS5 fixed-menu fix*/
	    var iOS5 = false;
	    
	    if (navigator.userAgent.match(/OS 5(_\d)+ like Mac OS X/i)){
	    
	        iOS5 = true;
	    
	    } 
    </script>
    
	<!-- Google Maps Code -->
    <script type="text/javascript"
        src="http://maps.google.com/maps/api/js?sensor=true">
    </script>

    <script>
        $(document).ready(function(){
            $("nav").sticky({topSpacing:0});
        });
    </script>
    
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.mb.YTPlayer.js"></script>
    <script type="text/javascript">

        jQuery(function(){

            jQuery("button").not(".command").click(function(){
                jQuery("button").not(".command").removeClass("sel");
                jQuery(this).addClass("sel");
            });

            //debug functions
            jQuery("#bgndVideo").on("YTPStart", function(){ jQuery("#eventListener").html("YTPStart")});
            jQuery("#bgndVideo").on("YTPEnd", function(){ jQuery("#eventListener").html("YTPEnd")});
            jQuery("#bgndVideo").on("YTPPause", function(){ jQuery("#eventListener").html("YTPPause")});
            jQuery("#bgndVideo").on("YTPBuffering", function(){ jQuery("#eventListener").html("YTPBuffering")});

            jQuery("#bgndVideo").mb_YTPlayer();

        });
    </script>

</head>

<body <?php body_class(); ?>>

<?php if(is_front_page() ) { ?>

	<!-- Start Homepage -->
	<div id="homepage" class="homepage section">
	    <div class="container">
	        <div class="ten columns">
	            <img alt="Outdoor Cinema" class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" />
	        </div> 

			<!-- THIS WILL REPLACE HEAD IMAGE WITH VIDEO        
				<a id="bgndVideo" href="http://www.youtube.com/watch?v=n614-d2i6ok" class="movie { isBgndMovie:{width:'window',mute:false}, optimizeDisplay:true, showControls:true, ratio:'12/9',startAt:3,quality:'hd720',addRaster:true,lightCrop:true}"></a>
	     -->            
	 	</div>
	</div>
	<!-- Start Navigation -->
	<nav>

	    <div class="container">

	        <div class="ten columns">

	            <!-- Start Nav Menu -->
	            <ul class="menu" id="nav">
	                <li><a href="#section_1"><?php the_field('section_1_title'); ?></a></li>
	                <li><a href="#section_2"><?php the_field('section_2_title'); ?></a></li>
	                <li><a href="#section_3"><?php the_field('section_3_title'); ?></a></li>
	                <li><a href="#section_4"><?php the_field('section_4_title'); ?></a></li>
	                <li><a href="#section_5"><?php the_field('section_5_title'); ?></a></li>
	            </ul>
	            <!-- End Nav Menu -->

	            <!-- Start Dropmenu for mobile -->      
	            <select class="dropmenu" name="dropmenu" onChange="moveTo(this.value)">
	                <option value="" selected="selected">Menu</option>
	                <option value="#section_1"><?php the_field('section_1_title'); ?></option>
	                <option value="#section_2"><?php the_field('section_2_title'); ?></option>
	                <option value="#section_3"><?php the_field('section_3_title'); ?></option>
	                <option value="#section_4"><?php the_field('section_4_title'); ?></option>
	                <option value="#section_5"><?php the_field('section_5_title'); ?></option>
	                </select>
	                <!-- End Dropmenu for mobile -->
	                
	            </div>

	        </div>

	    </nav>
	    <!-- End Navigation -->  

<!--End homepage -->

<?php } else { ?>
	<div id="homepage" class="homepage section inner-head" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/parallax-2.jpg);">
	    <div class="container">
	        <div class="ten columns">
	            <a href="<?php echo esc_url( get_home_url() ); ?>"><img alt="Outdoor Cinema" class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" /></a>
	        </div> 
			<!-- THIS WILL REPLACE HEAD IMAGE WITH VIDEO        
				<a id="bgndVideo" href="http://www.youtube.com/watch?v=n614-d2i6ok" class="movie { isBgndMovie:{width:'window',mute:false}, optimizeDisplay:true, showControls:true, ratio:'12/9',startAt:3,quality:'hd720',addRaster:true,lightCrop:true}"></a>
	     -->            
	 	</div>
	</div>

	<nav class="inner-nav">

    <div class="container">

        <div class="ten columns">

            <!-- Start Nav Menu -->
            <ul class="menu" id="nav">
                <li><a href="<?php echo esc_url( get_home_url() ); ?>/#section_1">About Us</a></li>
                <li><a href="<?php echo esc_url( get_home_url() ); ?>/#section_2">Cities</a></li>
                <li><a href="<?php echo esc_url( get_home_url() ); ?>/#section_3">Sign Up</a></li>
                <li><a href="<?php echo esc_url( get_home_url() ); ?>/#section_4">FAQ's</a></li>
                <li><a href="<?php echo esc_url( get_home_url() ); ?>/#section_5">Contact</a></li>
            </ul>
            <!-- End Nav Menu -->

            <!-- Start Dropmenu for mobile -->      
            <select class="dropmenu" name="dropmenu" onchange="moveTo(this.value)">
                <option value="" selected="selected">Menu</option>
                <option value="<?php echo esc_url( get_home_url() ); ?>/#section_1">About Us</option>
                <option value="<?php echo esc_url( get_home_url() ); ?>/#section_2">Cities</option>
				<option value="<?php echo esc_url( get_home_url() ); ?>/#section_3">Sign Up</option>
                <option value="<?php echo esc_url( get_home_url() ); ?>/#section_4">FAQ's</option>
                <option value="<?php echo esc_url( get_home_url() ); ?>/#section_5">Contact</option>
                </select>
                <!-- End Dropmenu for mobile -->
                
            </div>

        </div>

    </nav>

<?php } ?>

<br />

