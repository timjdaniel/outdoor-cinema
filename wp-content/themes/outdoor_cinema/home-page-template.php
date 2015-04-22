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
/*
Template Name: Homepage
*/
get_header(); 

?>
    <div id="section_1" class="page section">

        <div class="container servicesContainer">

            <div class="ten columns">
            	<h1><?php the_field('section_1_title'); ?></h1>
            </div>                 

            <div class="ten columns marginTop" style="width: 100%">
                <?php the_field('section_1_content'); ?>
            </div>

        </div>
        
        <div id="parallax-3" class="parallax fixed" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/parallax-2.jpg);"> </div>

    </div>

    <div id="section_2" class="page section">

        <div class="container servicesContainer">

            <div class="ten columns">
                <h1><?php the_field('section_2_title'); ?></h1>
            </div>     

            <div class="ten columns marginTop" style="width: 100%">
                <?php the_field('section_2_content'); ?>
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

               <button type="button" class="submit-button" disabled="" onclick="openLink(document.forms['select-city']), '_top'">
                Select
            </button>
        </form>

        <?php wp_reset_query(); ?>         
    </div>
</div>

<div id="parallax-3" class="parallax fixed" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/parallax-2.jpg);"> </div>

</div>

<div id="section_3" class="page section">

    <div class="container featuresContainer">

        <div class="ten columns">
            <h1><?php the_field('section_3_title'); ?></h1>
        </div>     

        <div class="ten columns marginTop" style="width: 100%">
            <?php the_field('section_3_content'); ?>
        </div>
    </div>

    <div id="parallax-4" class="parallax fixed" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/parallax-2.jpg);"> </div>

</div>

<div id="section_4" class="page section">

    <div class="container">  
        <div class="ten columns">
            <h1><?php the_field('section_4_title'); ?></h1>

        </div>

        <div class="ten columns marginTop" style="width: 100%">
            <?php the_field('section_4_content'); ?>
        </div>
    </div>

    <div id="parallax-4" class="parallax fixed" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/parallax-2.jpg);"> </div>

</div>

<div id="section_5" class="page section">

    <div class="container contactContainer">

        <div class="ten columns">
            <h1><?php the_field('section_5_title'); ?></h1>
        </div> 

        <div class="ten columns marginTop" style="width: 100%">
           <?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>
       </div>
   </div>

</div>
<script type="text/javascript">
    function openLink(myForm) {         
            var selectedIndex = myForm.elements["links"].selectedIndex;
            var url = myForm.elements["links"].options[selectedIndex].value;
            window.open(url, '_blank');
        }

        jQuery(function() {
        jQuery(".city-selector").change(function() {
          var activeOption = false;
          jQuery(this).each(function() {
            if(jQuery(this).val() == "#") {
              activeOption = true;
            }
          });
          if(activeOption) {
            jQuery(this).next(".submit-button").attr('disabled', 'disabled'); //disables
          }
          else {
            jQuery(this).next(".submit-button").removeAttr('disabled'); //enables
          }
        });
    });
</script>

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
