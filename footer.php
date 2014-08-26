<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 *
 * @package _s
 */
?>
    <?php tha_content_bottom(); ?>
	</div><!-- #main -->
    <?php tha_content_after(); ?>
    <?php tha_footer_before(); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
        <?php tha_footer_top(); ?>
		<div class="site-info">
			<?php do_action( '_s_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', '_s' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', '_s' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', '_s' ), '_s', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
		</div><!-- .site-info -->
        <?php tha_footer_bottom(); ?>
	</footer><!-- #colophon -->
    <?php tha_footer_after(); ?>
</div><!-- #page -->
<?php tha_body_bottom(); ?>
<?php wp_footer(); ?>

</body>
</html>
