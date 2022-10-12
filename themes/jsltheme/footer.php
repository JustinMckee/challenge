<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JSLTheme
 */

	$fine_print = get_option('the_fine_print');
?>

	<footer id="colophon" class="site-footer">
		<div class="content">
			<div class="row">
				<div class="col-12">
					<div class="site-info">
						<span>
						<?php if($fine_print): ?>
						<?php echo $fine_print ?>
						<?php else: ?>
						All right reserved &copy; <?php echo date('Y'); ?>
						<?php endif; ?>
						</span>
					</div><!-- .site-info -->
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
