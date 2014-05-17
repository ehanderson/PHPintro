<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();


if(isset($_POST['fav_color'])) {
	echo "Color: ".($_POST['fav_color']);
}


?>

<div id="main-content" class="main-content">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<form method="post">
				<input type="radio" name="fav_color" value="Red">Red<br>
				<input type="radio" name="fav_color" value="Blue">Blue<br>
				<input type="radio" name="fav_color" value="Yellow">Yellow
				<input type="submit" value="submit" id="form-submit">
			</form>
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->
<script>
	$('#form-submit').hide();//.attr('disabled', 'disabled');
</script>

<?php
get_sidebar();
get_footer();
