<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

    <!-- Start Homepage -->
    <div id="homepage" class="homepage section">
        
        <div class="container">
            <div class="ten columns">
                <img alt="" class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" />
            </div> 
     
		<!-- THIS WILL REPLACE HEAD IMAGE WITH VIDEO        
			<a id="bgndVideo" href="http://www.youtube.com/watch?v=n614-d2i6ok" class="movie { isBgndMovie:{width:'window',mute:false}, optimizeDisplay:true, showControls:true, ratio:'12/9',startAt:3,quality:'hd720',addRaster:true,lightCrop:true}"></a>
		 -->            
        </div>
    </div>   
    
<!--End homepage ----------------------------------------->

<!-- Start Navigation -->
    <nav>
    
        <div class="container">
            
            <div class="ten columns">
                
                <!-- Start Nav Menu -->
                <ul class="menu" id="nav">
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#cities">Cities</a></li>
                    <li><a href="#sign-up">Sign Up</a></li>
                    <li><a href="#faq">FAQ'S</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <!-- End Nav Menu -->

                <!-- Start Dropmenu for mobile -->      
                <select class="dropmenu" name="dropmenu" onChange="moveTo(this.value)">
                    <option value="" selected="selected">Menu</option>
                    <option value="#about">About Us</option>
                    <option value="#cities">Cities</option>
                    <option value="#sign-up">Sign Up</option>
                    <option value="#faq">FAQ'S</option>
                    <option value="#contact">Contact</option>
                </select>
                <!-- End Dropmenu for mobile -->
                
            </div>
    
        </div>
    
    </nav>
<<!-- End Navigation --> 
    <br />
<!--start about -->
     <div id="about" class="page section">
     
        <div class="container servicesContainer">
        
            <div class="ten columns">
            	<h1>About Us</h1>
            </div>                 

            <div class="ten columns marginTop" style="width: 100%">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>

        </div>
        
        <div id="parallax-3" class="parallax fixed" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/parallax-2.jpg);"></div>

    </div>

<!--end about-->  
    
    
 <!--start cities -->
     <div id="cities" class="page section">
     
        <div class="container servicesContainer">
        
            <div class="ten columns">
                <h1>Cities</h1>
            </div>     
                          
            <div class="ten columns marginTop" style="width: 100%">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <?php
				  $args = array(
					  'post_type' => 'page',
					  'orderby' => 'title',
						'order' => 'ASC',
						'post_status' => 'publish',
						'posts_per_page' => -1,
						'caller_get_posts'=> 1,
					  'meta_query' => array(
					    array(
					      'key' => '_wp_page_template',
					      'value' => 'city-page-template.php',
					    )
				  	)
					);

					$city_page = null;
					$city_page = new WP_Query($args);

					if( $city_page->have_posts() ) { ?>
			
						<form name="select-city" method="post" class="inner">
							<select id="links" name='links' class="city-selector">
								<option value="#" disabled selected="selected">Choose your city</option>
								<?php while ($city_page->have_posts()) : $city_page->the_post(); ?>
									<option value="<?php the_permalink() ?>"><?php the_title(); ?></option>
								<?php endwhile;	}	?>	
							</select>

							<button type="button" class="submit-button" disabled onclick="openLink(document.forms['select-city']), '_top'">
								Select
							</button>
						</form>
				
				<?php wp_reset_query(); ?>         
            </div>
        </div>
        
         <div id="parallax-3" class="parallax fixed" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/parallax-2.jpg);"> </div>
    </div>

        
     </div>
<!--end cities-->  
    
    
<!--start signup -->
     <div id="sign-up" class="page section">
     
        <div class="container featuresContainer">

            <div class="ten columns">
                <h1>Sign Up</h1>
            </div>     

            <div class="ten columns marginTop" style="width: 100%">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            	<form id="signup-form" method="post" action="http://ymlp.com/subscribe.php?id=ghwshbjgmgb">
					<table border="0" align="center" cellspacing="0" cellpadding="5">
					<tr><td valign="top"><input type="text" name="YMP1" size="20" placeholder="First Name"/></td></tr>
					<tr><td valign="top"><input type="text" name="YMP2" size="20" placeholder="Second Name"/></td></tr>
					<tr><td valign="top"><input type="text" name="YMP0" size="20" placeholder="Email Address"/></td></tr>
					<tr><td valign="top"><input type="text" name="YMP7" size="20" placeholder="Mobile Number"/></td></tr>
					<tr><td valign="top"><font size="2" face="verdana,geneva">Bring the Outdoor Cinema Club to my town <br /> (Enter your town below): <br /><br /></font></td></tr>
					<tr><td valign="top"><input type="text" name="YMP6" size="20" /></td></tr>
					<tr><td valign="top"><input type="text" name="YMP5" size="20" placeholder="Favourite Film"/></td></tr>
					<tr><td valign="top"><input type="text" name="YMP9" size="20" placeholder="DOB (DD/MM/YY)"/></td></tr>
					<tr><td colspan="2"><font size="2" face="verdana,geneva">Select your interest:<br /><br /></font></td></tr>
					<tr><td colspan="2"><select name="intrests"><option value="CAT51">* MY CITY NOT LISTED</option><option value="CAT3">Bath</option><option value="CAT2">Birmingham</option><option value="CAT5">Bournemouth</option><option value="CAT6">Bradford</option><option value="CAT8">Brighton</option><option value="CAT7">Bristol</option><option value="CAT9">Cambridge</option><option value="CAT10">Cardiff</option><option value="CAT11">Carlisle</option><option value="CAT12">Cheltenham</option><option value="CAT43">Cornwall</option><option value="CAT13">Coventry</option><option value="CAT14">Crawley</option><option value="CAT44">Croydon</option><option value="CAT15">Durham</option><option value="CAT16">Essex</option><option value="CAT17">Exeter</option><option value="CAT18">Guildford</option><option value="CAT45">Hatfield</option><option value="CAT46">Hull / Beverley</option><option value="CAT47">Ipswich</option><option value="CAT19">Kent</option><option value="CAT20">Kingston</option><option value="CAT21">Leeds</option><option value="CAT22">Leicester</option><option value="CAT23">Lincoln</option><option value="CAT24">Liverpool</option><option value="CAT25">London / Shoreditch</option><option value="CAT26">Manchester</option><option value="CAT27">Milton Keynes</option><option value="CAT28">Newcastle</option><option value="CAT29">Northampton</option><option value="CAT30">Norwich</option><option value="CAT31">Nottingham</option><option value="CAT32">Oxford</option><option value="CAT33">Peterborough</option><option value="CAT50">Plymouth</option><option value="CAT34">Portsmouth</option><option value="CAT35">Preston</option><option value="CAT36">Reading</option><option value="CAT48">Scotland</option><option value="CAT37">Sheffield</option><option value="CAT38">Southampton</option><option value="CAT39">St Andrews</option><option value="CAT40">Stoke</option><option value="CAT49">Swansea</option><option value="CAT41">Swindon</option><option value="CAT42">York</option></select></td></tr>
					<tr><td colspan="2"><input type="submit" value="Submit" class="submit-button"/>&nbsp;</td></tr>
					</table>
				</form>
            </div>
          </div>
        
         <div id="parallax-4" class="parallax fixed" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/parallax-2.jpg);"> </div>

    </div>

        
     </div>
<!--end signup-->

	<div id="faq" class="page section">
        
        <div class="container">  
            <div class="ten columns">
                <h1>FAQ's</h1>
               
            </div>

            <div class="ten columns marginTop" style="width: 100%">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            	<br/>
            </div>
        </div>
	        
         <div id="parallax-4" class="parallax fixed" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/parallax-2.jpg);"> </div>

    </div>

      
<!--start contact-->
     <div id="contact" class="page section">
     
        <div class="container contactContainer">
        
            <div class="ten columns">
                <h1>Contact</h1>
            </div> 

            <div class="ten columns marginTop" style="width: 100%">

            	<?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>
         	</div>

       </div>
<!--end contact--> 
    
<!--start footer-->

<!--end footer-->

<script type="text/javascript">
    function moveTo(contentArea){
        var goPosition = $(contentArea).offset().top;
        $('html,body').animate({ scrollTop: goPosition}, 'slow');
    }
</script>

<script type="text/javascript">
      $('#carouselSlider').flexslider({
        animation: "slide",
        animationLoop: true,
        itemWidth: 237,
        itemMargin: 2,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
</script>

<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        
        $("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',slideshow:6000});
        $(".contactDetails a[rel^='prettyPhoto']:first").prettyPhoto({
            custom_markup: '<div id="map_canvas" style="width:500px; height:500px"></div>',
            changepicturecallback: function(){ initialize(); }
        });
    });
</script>

<?php get_footer(); ?>
