<?php wp_footer();?>

<!-- =======------- Footer Start -------======= -->
    <footer>
      <div class="container">        
        <div class="row">
          <div class="col-md-5 col-sm-12 text-sm-center text-md-left">
            <div class="footer-detail">
				<a href="<?php echo site_url();?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-fluid" /></a>
              <a href="tel:(239) 244-5871"><h6>(239) 244-5871</h6></a>
              <p>5664 Strand Ct Suite 107 A<br/>Naples, FL 34110</p>
              <div class="footer-social">
                <a href="#"><<?php echo get_stylesheet_directory_uri(); ?>/img src="images/footer-fb.png" alt="fb"></a>
                <a href="#"><<?php echo get_stylesheet_directory_uri(); ?>/img src="images/footer-youtube.png" alt="youtube"></a>
                <a href="#"><<?php echo get_stylesheet_directory_uri(); ?>/img src="images/footer-linkedin.png" alt="linkedin"></a>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-4">
            <div class="process">
              <h6 class="mb-3">QUICK LINKS</h6>
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
<!--               <a href="#"><p>Discovery</p></a>
              <a href="#"><p>Strategy</p></a>
              <a href="#"><p>Execution</p></a>
              <a href="#"><p>Wealth</p></a>
              <a href="#"><p>Maximization</p></a> -->
            </div>
          </div>
          <div class="col-md-2 col-sm-4">
            <div class="resources">
              <h6 class="mb-3">RESOURCES</h6>
              <a href="https://neohomeloans.com/mortgage-advice/" target="_blank"><p>Mortgage Advice</p></a>
              <a href="https://neohomeloans.com/mortgage-calculators/" target="_blank"><p>Calculators</p></a>
            </div>
          </div>
          <div class="col-md-2 col-sm-4">
            <div class="about-neo">
              <h6 class="mb-3">ABOUT NEO</h6>
              <a href="https://neohomeloans.com/search/" target="_blank"><p>Find an Expert</p></a>
              <a href="https://neohomeloans.com/why-neo/" target="_blank"><p>Why NEO?</p></a>
              <a href="https://neohomeloans.com/careers/" target="_blank"><p>Join Our Team</p></a>
            </div>
          </div>
        </div>

        <div class="footer-bottom">
          <div class="row">
            <div class="col">
              <p>Copyright © 2022 Neo Home Loans is a division of Celebrity Home Loans, LLC | NMLS #227765 |For licensing information, go to: www.nmlsconsumeraccess.org | www.celebrityhomeloans.com | Please review our Disclosures & Licensing information. | Celebrity Home Loans, LLC has no affiliation with the US Department of Housing and Urban Development, the US Department of Veterans Affairs, the US Department of Agriculture or any other government agency. Equal Housing Lender. For further information about Celebrity Home Loans, LLC, please visit our website at www.celebrityhomeloans.com. Receipt of application does not represent an approval for financing or interest rate guarantee. Applicant subject to credit, acceptable appraisal, title, and underwriting approval. Not all applicants will be approved. Other terms and conditions apply. Contact Celebrity Home Loans, LLC for more information and up-to-date rates. <span>Do Not Sell My Personal Information</span>.</p>
              <div class="bottom-img mt-5">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lender-img.png" class="pr-4" />
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nmls.png" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- =======------- Footer End -------======= -->


<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.js"></script>

  <script>
  jQuery(document).ready(function($){
     $('.home-testimonial').owlCarousel({
          loop: true,
          center: true,
          items: 1,
          margin: 0,
          autoplay: true,
          nav:true,
          dots:true,
          autoplayTimeout: 8500,
          navText: ["<img src='<?php echo get_stylesheet_directory_uri(); ?>/images/previmg.png'>","<img src='<?php echo get_stylesheet_directory_uri(); ?>/images/nextimg.png'>"],
          smartSpeed: 450,
          responsive: {
            0: {
              nav:false,
              items: 1
            },
            768: {
              nav:false,
              items: 1
            },
            1170: {
              items: 1
            }
          }
      });      
    });
  </script>

  <script>
  jQuery(document).ready(function($){
     $('.mortage-slider').owlCarousel({
          loop: true,
          center: true,
          items: 1,
          margin: 0,
          stagePadding: -2,
          autoplay: true,
          nav:false,
          dots:true,
          autoHeight: true,
          autoplayTimeout: 8500,          
          smartSpeed: 450,
          // responsive: {
          //   0: {
          //     items: 1
          //   },
          //   768: {
          //     items: 2
          //   },
          //   1170: {
          //     items: 3
          //   }
          // }
      });
    });
  </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  </body>
  </html>