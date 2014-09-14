<?php 
/**
 * 	Template Name: Home Page
 *
 *	This page template has a sidebar built into it, 
 * 	and can be used as a home page, in which case the title will not show up.
 *
*/
get_header(); // This fxn gets the header.php file and renders it ?>
	
		
			<?php if ( have_posts() ) : 
			// Do we have any posts/pages in the databse that match our query?
			?>

				<?php while ( have_posts() ) : the_post(); 
				// If we have a page to show, start a loop that will display it
				?>

					
<!--Custom Slideshow Here, Edit Images in /img directory of theme folder, 5 recommended, but the slider will support any number, simply copy and paste a <div> line and call a new image within "swipe-wrap" to add more. -->
				
				
				<section id="hero" class="clearfix swipe">
					<div class="swipe-wrap">	
						<div><img src="<?php echo get_template_directory_uri(); ?>/img/home/featured/corner.jpg"> </div>
						<div><img src="<?php echo get_template_directory_uri(); ?>/img/home/featured/stage.jpg"> </div>
						<div><img src="<?php echo get_template_directory_uri(); ?>/img/home/featured/aisle.jpg"> </div>
						<div><img src="<?php echo get_template_directory_uri(); ?>/img/home/featured/garden.jpg"> </div>
						<div><img src="<?php echo get_template_directory_uri(); ?>/img/home/featured/balcony.jpg"> </div>
					</div>	
					
					<div class="swipecontrol left" onclick='swipe.prev()'> <span class="icon-handleft"> </span> </div> 
					<div class="swipecontrol right" onclick='swipe.next()'> <span class="icon-handright"> </span> </div>
					
				</section>
			
				<hr>
				
<!--End Custom Slideshow -->
															
						
							<?php the_content(); 
							// This call the main content of the page, the stuff in the main text box while composing.
							// This will wrap everything in paragraph tags
							?>
							
					

				<?php endwhile; // OK, let's stop the page loop once we've displayed it ?>

			<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; // OK, I think that takes care of both scenarios (having a page or not having a page to show) ?>
	

	<hr>
	
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>