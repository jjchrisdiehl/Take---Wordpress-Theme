<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package One Page Theme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://chrisdiehldemos.com/', 'one-page-theme' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'one-page-theme' ), 'Chris Diehl Design' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'one-page-theme' ), 'One Page Theme', '<a href="http://underscores.me/" rel="designer">Chrisdiehdemos.com</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- W3TC-include-js-head -->
<script>
var WebFontConfig = {
  google: {
    families: ['Open Sans:300,300i,400,400i,700'],
  },
  timeout: 2000
};
(function(){
	var wf = document.createElement("script");
	wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	wf.async = 'true';
	document.head.appendChild(wf);
})();
</script>
</body>
</html>
