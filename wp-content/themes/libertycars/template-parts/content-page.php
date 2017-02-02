<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package libertyCars
 */

?>

<!-- COVER WRAPPER -->
    <div class="cover-wraper pages-header">
      
      <!-- HEADER SECTION -->
      <div class="header-section">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-3">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt=""></a>
            </div>
            <div class="col-md-8 col-sm-9">

              <div class="top-login">
                <div class="authenti"><a href="#">Login</a> / <a href="#">Register</a></div>
                <div class="tele">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <a href="tel:02084275555">020 8427 5555</a>
                </div>
              </div>
              <div class="menu fixed">
                <!-- Navigation -->

                <nav class="nav-collapse">
                  <?php /* Primary navigation */
                  wp_nav_menu( array(
                      'menu' => 'top_menu',
                      'depth' => 2,
                      'container' => false,
                      'menu_class' => 'nav navbar-nav',
                      //Process nav menu using our custom nav walker
                      'walker' => new wp_bootstrap_navwalker())
                  );
                  ?>
                </nav>

                <!-- Navigation End -->                
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- HEADER SECTION END -->      

    </div>
    <!-- COVER WRAPPER END-->


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- HEADER CONTENT -->
    
    <div class="page-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <?php the_title( '<h1 class="animated fadeIn"><i class="fa fa-car car-yello-icon" aria-hidden="true"></i>', '</h1>' ); ?>
          </div>
        </div>
      </div>
    </div>

    <!-- HEADER CONTENT END -->

<!-- PAGE CONTENT -->
<div class="page-content" id="price-blk-scanner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">				

					<div class="entry-content">
						<?php
							the_content();

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'libertycars' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->

					<?php if ( get_edit_post_link() ) : ?>
						<footer class="entry-footer">
							<?php
								edit_post_link(
									sprintf(
										/* translators: %s: Name of current post */
										esc_html__( 'Edit %s', 'libertycars' ),
										the_title( '<span class="screen-reader-text">"', '"</span>', false )
									),
									'<span class="edit-link">',
									'</span>'
								);
							?>
						</footer><!-- .entry-footer -->
					<?php endif; ?>
				


			</div>
		</div>
	</div>
</div>

</article><!-- #post-## -->
