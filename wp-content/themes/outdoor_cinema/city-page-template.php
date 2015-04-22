<?php

/*
Template Name: City Page
*/

get_header(); ?>

<div class="city-page">
	<h1><?php the_title(); ?></h1>

	<?php the_field('form_code'); ?>
	
</div>

<?php get_footer(); ?>
