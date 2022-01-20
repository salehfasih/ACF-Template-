
<?php
/**
 * Template Name: Flexible
 */
get_header(); ?>
	
	<main class="flexible-main">
		<?php if ( have_rows( 'flexible content' ) ): ?>
            <?php while ( have_rows( 'flexible content' ) ): the_row();
      
                  get_template_part( 'template-part/temp', get_row_layout()); 
         
         
         ?>
                
            <?php endwhile; ?>
		<?php endif; ?>
	</main>

<?php get_footer(); ?>