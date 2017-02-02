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
                  <ul>
                    <li class="active"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">home <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">services</a></li>
                    <li><a href="#">book now</a></li>
                    <li><a href="#">airport info</a></li>
                    <li><a href="#">faqs</a></li>
                    <li><a href="#">contact us</a></li>
                  </ul>
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

    <!-- HEADER CONTENT -->
    
    <div class="page-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1 class="animated fadeIn"><i class="fa fa-car car-yello-icon" aria-hidden="true"></i>  CANCEL BOOKING </h1>
          </div>
        </div>
      </div>
    </div>

    <!-- HEADER CONTENT END -->


    <!-- PAGE CONTENT -->
    
    <div class="page-content" id="price-blk-scanner">
      <div class="container-fluid">
        <div class="row table-row">

   			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>



        </div>
      </div>
    </div>

    <!-- PAGE CONTENT END-->

	
 