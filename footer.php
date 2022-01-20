<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */


?>

<div  class="footer">
<div class="wrapper" id="wrapper-footer">

<div class="container">

    <div class="row">
		<div class="col-sm-4">

		<?php
		if(is_active_sidebar('Footer widget 1')){
		dynamic_sidebar('Footer widget 1');
}
?>
		</div>
		<div class="col-sm-2">
		<?php
		if(is_active_sidebar('Footer widget 2')){
		dynamic_sidebar('Footer widget 2');
}
?>

		</div>
		<div class="col-sm-2">

		<?php
		if(is_active_sidebar('Footer widget 3')){
		dynamic_sidebar('Footer widget 3');
}
?>
		</div>
		<div class="col-sm-2">

		<?php
		if(is_active_sidebar('Footer widget 4')){
		dynamic_sidebar('Footer widget 4');
}
?>

		</div>
		<div class="col-sm-2">

		<?php
		if(is_active_sidebar('Footer widget 5')){
		dynamic_sidebar('Footer widget 5');
}
?>
		  
		</div>
	</div>
</div>

</div>


<div class="container"  id="footer_bottom">
	<div class="contain">
		<div class="row">
			<div class="col-xl-12">
				<p>
				<?php
		if(is_active_sidebar('Footer widget 6')){
		dynamic_sidebar('Footer widget 6');
}
?>
				</p>
			</div>
		</div>
	</div>
</div>
</div>

<!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

