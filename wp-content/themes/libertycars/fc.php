<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package libertyCars
 */

?>

<!-- FOOTER -->

    <footer>
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <ul class="footer-link-list">              
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                <li><a href="#">Airport Taxi</a></li>
                <li><a href="#">Seaport Transfer</a></li>
                <li><a href="#">University Transfer</a></li>
                <li><a href="#">London Minicab</a></li>
                <li><a href="#">Heathrow Airport Transfer</a></li>
                <li><a href="#">Gatwick to Heathrow</a></li>
                <li><a href="#">Heathrow Airport</a></li>
                <li><a href="#">Gatwick Airport</a></li>
                <li><a href="#">Stansted Airport</a></li>
                <li><a href="#">Luton Airport</a></li>
                <li><a href="#">London City Airport</a></li>
                <li><a href="#">Minicab Blog</a></li>
                <li><a href="#">Sitemap</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Cookie Policy</a></li>
              </ul>
            </div>
            <div class="col-md-4 text-center middle-phone col-sm-6">
              <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/images/footer-phone.png">
              <a href="#"><img class="img-responsive app-store" src="<?php bloginfo('stylesheet_directory'); ?>/images/appstore.png"></a>
              <a href="#"><img class="img-responsive gplay" src="<?php bloginfo('stylesheet_directory'); ?>/images/gplay.png"></a>
              <h4><a href="#">Download the App</a></h4>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="footer-right-col">
                  <h4>contact info</h4>
                  <p>214 / 216 Preston Road, London, HA9 8PB</p>
                  <p><a href="tel:02084275555">020 8427 5555</a></p>
                  <p><a href="mailto:info@minicabsinlondon.com">info@minicabsinlondon.com</a></p>
                <div class="footer-blk">
                  <div class="footer-lft">
                    <h4>PCO<br>
                        Licence<br>
                        no 08116/01/01</h4>
                  </div>
                  <div class="footer-rgt">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/privateHire.png">
                  </div>
                </div>
                <div class="footer-blk">
                  <h4>Secure Payment By</h4>
                  <img class="img-responsive paypal" src="<?php bloginfo('stylesheet_directory'); ?>/images/paypal.png">
                  <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/images/paymentway.png">
                </div>              
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <ul class="footer-socail">
                <li><a href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus fa-lg" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a></li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="col-md-7 col-sm-8 col-xs-12">
              <p>Copyright &copy; <?php echo date('Y'); ?> Minicabsinlondon. All rights reserved. Optimized by <a href="https://www.clickdo.co.uk">ClickDo</a></p>
            </div>
            <div class="col-md-1 hidden-sm hidden-xs"></div>
          </div>
        </div>
      </div>

    </footer>    

    <!-- FOOTER END -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/responsive-nav.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.datetimepicker.full.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
