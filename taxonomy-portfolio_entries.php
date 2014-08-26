<?php 

/*
* This template controlls the portfolio overview pages: 
* 4,3 2 and 1 Column Portfolios are generated by this file in conjunction with includes/loop-portfolio.php
*
* This file is called by the includes/helper_template.php file if the users applied a portfolio page to this page
* All logic checks are located in includes/helper_template.php function avia_get_template()
*/

global $avia_config;


	/*
	 * get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
	 */	
	 get_header();
	 
	 
 	 $avia_config['portfolio']['portfolio_columns'] = 3;
 	 $avia_config['portfolio']['portfolio_ajax_class'] = false;
 	 $avia_config['portfolio']['portfolio_text'] = "yes";

 	 $description = is_tag() ? tag_description() : category_description();
	 //echo avia_title(array('title' => avia_which_archive(), 'subtitle' => $description));
     echo avia_title(array('title' => avia_which_archive(), 'subtitle' => ''));
	?>
		
		
		<div class='container_wrap main_color <?php avia_layout_class( 'main' ); ?>'>
			
			<div class='container container-portfolio-size-<?php echo $avia_config['portfolio']['portfolio_columns']; ?>'>
				
				<div class='content <?php avia_layout_class( 'content' ); ?> units template-portfolio-overview content portfolio-size-<?php echo $avia_config['portfolio']['portfolio_columns']; ?>'>
				
				<?php
				echo $description;
				/* Run the loop to output the posts.
				* If you want to overload this in a child theme then include a file
				* called loop-portfolio.php and that will be used instead.
				*/
				
				get_template_part( 'includes/loop', 'portfolio' );
				
				?>
				
				
				<!--end content-->
				</div>
				
				<?php 
				
				wp_reset_query();
				
				//get the sidebar
				$avia_config['currently_viewing'] = 'portfolio';
				get_sidebar();
				
				?>
				
				
				
				
			</div><!--end container-->

	


<?php get_footer(); ?>