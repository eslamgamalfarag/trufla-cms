<?php
/**
 * The main template file
**/

get_header(); ?>

<div class="page-wrapper">

<section class="intro" id="zen-intro">
	<header role="banner">
		<?php 
		if(  class_exists('ACF') )  {
		if( have_rows('intro') ):

			while( have_rows('intro') ): the_row();
		  
			$subtitle = get_sub_field('subtitle');
			$summary = get_sub_field('summary');
			$preamble = get_sub_field('preamble');
			endwhile; 
		endif;
		if( have_rows('main_supporting') ):

			while( have_rows('main_supporting') ): the_row();
		  
			$explanation = get_sub_field('explanation');
			$participation = get_sub_field('participation');
			$benefits = get_sub_field('benefits');
			$requirements = get_sub_field('requirements');
			endwhile; 
		endif;
		?>
		
		
		<h1><?php echo get_the_title(); ?></h1>
		<h2><?php echo $subtitle?></h2>

	</header>

	<div class="summary" id="zen-summary" role="article">
		<?php echo $summary?>
	</div>

	<div class="preamble" id="zen-preamble" role="article">
	<?php echo $preamble?>
	</div>
</section>

<div class="main supporting" id="zen-supporting" role="main">
	<div class="explanation" id="zen-explanation" role="article">
	<?php echo $explanation?>
	</div>

	<div class="participation" id="zen-participation" role="article">
	<?php echo $participation?>
	</div>

	<div class="benefits" id="zen-benefits" role="article">
	<?php echo $benefits?>
	</div>

	<div class="requirements" id="zen-requirements" role="article">
	<?php echo $requirements?>
	</div>
	<?php }?>

<?php
get_footer();
