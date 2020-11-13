<footer>
  <div class="site-info">
    <div class="site-info">
        <!-- It’s there for you to use if you want to add credit text/links via your child theme -->
    			<?php do_action( 'didactique_credits' ); ?>
    			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'Une plate-forme sémantique de publication personnelle', 'Opal' ); ?>" rel="generator"><?php printf( __( 'Propulsé par %s', 'Opal' ), 'WordPress' ); ?></a>
    			<span class="sep"> | </span>
    			<?php printf( __( 'Thème : %1$s par %2$s.', 'didactique' ), 'Opal', 'Gabriel DA COSTA, Camille GENET, Mathis EXERTIER, Konogan BERGER' ); ?>
    		</div><!-- .site-info -->
<?php wp_footer(); ?>
</footer>
</body>
</html>
