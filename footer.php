<?php
/**
 * The Footer for our theme.
 *
 * ...
 *
 * @package scratch
 *
 */
?>

      <footer class="footer bg-dark text-white pt-5 pb-3">
        <div class="container">
          <div class="row">
          <div class="navbar-brand mr-auto"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img
                        src="<?= get_stylesheet_directory_uri() ?>/images/logo2.svg"
                        alt="<?php bloginfo( 'name' ); ?>"></a></div>
            <?php dynamic_sidebar('sidebar-footer') ?>
          </div>
          REALHOME 2019 - Politique de confidentialité
        </div>
      </footer>

    </div><!-- #page -->

</body>
</html>