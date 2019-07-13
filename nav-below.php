<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) { ?>
<nav class="nav__below" role="navigation">
<div class="nav__below--previous"><?php next_posts_link(sprintf( __( '%s older', 'blankslate' ), '<span class="meta-nav">&larr;</span>' ) ) ?></div>
<div class="nav__below--next"><?php previous_posts_link(sprintf( __( 'newer %s', 'blankslate' ), '<span class="meta-nav">&rarr;</span>' ) ) ?></div>
</nav>
<?php } ?>
