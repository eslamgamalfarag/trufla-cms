<?php
/**
 * The template for displaying the footer
 **/

?>

<?php 	if(  class_exists('ACF') )  {?>

<footer>

			<?php if( get_field('footer_link') ): 
				 the_field('footer_link' ,false, false); 
			endif; ?>
            </footer>

        </div>


        <aside class="sidebar" role="complementary">
            <div class="wrapper">

                <div class="design-selection" id="design-selection">
					<h3 class="select">Select a Design:</h3>
					<nav role="navigation">
<?php

$lastposts = get_posts( array(
	'numberposts' => 8,
	'orderby'          => 'id',
    'order'            => 'ASC',
) );
 
if ( $lastposts ) {
	?>
	<ul>
		<?php
    foreach ( $lastposts as $post ) :
		setup_postdata( $post ); 
		if( get_field('designer_name') ): 
		$designer_name	=	get_field('designer_name'); 
	   endif; 
	   if( get_field('designer_url') ): 
		$designer_url	=	get_field('designer_url'); 
	   endif; 
		?>
		
        <li><a  class="design-name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>by <a href="<?php echo $designer_url; ?>" class="designer-name"><?php echo $designer_name;?></a></li>
		
  <?php
	endforeach; ?>
	</ul>
	<?php
    wp_reset_postdata();

}?>
                 
                    </nav>
                </div>
<?php

if( have_rows('view_designs_button') ):

	while( have_rows('view_designs_button') ): the_row();
  
	$text = get_sub_field('text');
	$url = get_sub_field('url');
	$title = get_sub_field('title');
	endwhile; 
endif;
?>
                <div class="design-archives" id="design-archives">
					<h3 class="archives">Archives:</h3>
                    <nav role="navigation">
                        <ul><?php
						$next_post = get_next_post();?>
                            <li class="next">
                                <a href="<?php echo $next_post->guid?>">
								Next Designs <span class="indicator">&rsaquo;</span>
							</a>
                            </li>
                            <li class="viewall">
                                <a href="<?php echo $url?>" title="<?php echo $title?>">
								<?php echo $text?>							</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="zen-resources" id="zen-resources">
					<h3 class="resources">Resources:</h3>
					<?php 	echo wp_nav_menu(
				array(
					'theme_location' => 'resources_menu',
					'menu_id'        => 'Resources Menu',
					'container'       => false
				)
			);
			?>
                  
                </div>
            </div>
        </aside>


    </div>

		<?php }?>


<?php wp_footer(); ?>

</body>
</html>
