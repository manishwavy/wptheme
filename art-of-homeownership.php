<?php
/**
* Template Name: Art of Homeownership
*/
?>
<?php get_header();?>

<!-- =======------- Mastering the Art Sec Start -------======= -->
    <section class="mastering-sec position-relative sec-bg">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line.png" id="mastering-line">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="mastering-left pt-lg-5 pt-md-0 pt-4">
              <h3><?php echo get_field('section_1_title'); ?></h3>
              <p><?php echo get_field('section_1_subtitle'); ?></p>
            </div>
          </div>
          <div class="col-md-6 px-0">
            <div class="mastering-right text-right">              			
				<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/06/art-homeownership-img.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- =======------- Mastering the Art Sec End -------======= -->


    <!-- =======------- Homeownership Sec Start -------======= -->
    <section class="home-investment-sec position-relative sec-bg px-sm-5 px-2">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line-lg.png" id="home-line">
      <div class="container-fluid">
        <div class="sec-top">
          <div class="row">
            <div class="col-md-6">
              <div class="sec-left text-center">
				  <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/06/home-round-img1.png" alt="" class="img-fluid">
              </div>
            </div>
            <div class="col-md-6">
              <div class="sec-right">
                <h4><?php echo get_field('section_2_title'); ?></h4>
                <p><?php echo get_field('section_2_subtitle'); ?></p>
                <a href="<?php echo get_field('section_2_button_link'); ?>" class="btn btn-primary" target="_blank">Learn More</a>
              </div>
            </div>
          </div>
        </div>

        <div class="sec-bottom pl-0">
          <div class="row">
            <div class="col-md-6">
              <div class="sec-left">
                <h4><?php echo get_field('section_3_title'); ?></h4>
                <p><?php echo get_field('section_3_subtitle'); ?></p>
                <a href="<?php echo get_field('section_3_button_link'); ?>" class="btn btn-primary" target="_blank">Learn More</a>              
              </div>
            </div>
            <div class="col-md-6">
              <div class="sec-right text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-img-1.png" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line-lg.png" id="home-line-2">
    </section>
    <!-- =======------- Homeownership Sec End -------======= -->


    <!-- =======------- Review Sec Start -------======= -->
    <div class="review-sec">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="review-content text-center text-white">
              <h5><?php echo get_field('section_4_title'); ?></h5>
              <p><?php echo get_field('section_4_subtitle'); ?></p>
              <a href="<?php echo get_field('section_4_button_link'); ?>" class="btn btn-primary" target="_blank">Schedule a financial review</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =======------- Review Sec End -------======= -->


    <!-- =======------- Perfect Mortage Sec Start -------======= -->
    <div class="perfect-mortage-sec sec-bg">
      <div class="container-fluid pl-md-0">
        <div class="sec-heading text-center">
          <h2><?php echo get_field('section_5_title'); ?></h2>
        </div>

        <div class="owl-carousel mortage-slider owl-theme">
        <?php echo do_shortcode('[Perfect_Mortage_Promise]'); ?>            
        </div>                    

        <div class="real-estate-sec position-relative">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line-lg.png" id="estate-line">
          <div class="row">
            <div class="col-md-6">
              <div class="sec-left text-center">
				  <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/06/home-round-img2.png" class="img-fluid">
              </div>
            </div>
            <div class="col-md-6">
              <div class="sec-right pr-md-5">
                <h4><?php echo get_field('section_6_title'); ?></h4>
                <p><?php echo get_field('section_6_subtitle'); ?></p>
                <a href="<?php echo get_field('section_6_button_link'); ?>" class="btn btn-primary" target="_blank">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =======------- Perfect Mortage Sec End -------======= -->


    <!-- =======------- Home Service Sec Start -------======= -->
    <section class="home-service-sec position-relative sec-bg">
      <div class="container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line-lg.png" id="service-line">
        <div class="sec-heading text-center">
          <h2><?php echo get_field('section_7_title'); ?></h2>
          <p><?php echo get_field('section_7_subtitle'); ?></p>
        </div>
        <div class="service-content">
          <div class="row">
            <div class="col-md-4">
              <div class="service text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-circle.png" />
                <h6><?php echo get_field('section_7_block_1'); ?></h6>
              </div>              
            </div>
            <div class="col-md-4">
              <div class="service text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-heart.png" />
                <h6><?php echo get_field('section_7_block_2'); ?></h6>
              </div>              
            </div>
            <div class="col-md-4">
              <div class="service text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-smile.png" />
                <h6><?php echo get_field('section_7_block_3'); ?></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- =======------- Home Service Sec End -------======= -->


    <!-- =======------- Service Bottom Sec Start -------======= -->
    <section class="service-bottom-sec position-relative sec-bg">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line-lg.png" id="service-btm-line">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-5 px-0">
            <div class="sec-left">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service-img.png" class="img-fluid">
            </div>
          </div>
          <div class="col-sm-7 d-flex justify-content-center align-items-center">
            <div class="sec-right">
              <div class="service-content">
                <h6><?php echo get_field('section-8_para_1'); ?></h6>
                <h5><?php echo get_field('section-8_para_2'); ?></h5>
                <p><?php echo get_field('section-8_para_3'); ?></p>
              </div>
              <div class="service-content pt-5">
                <h6><?php echo get_field('section-8_para_4'); ?></h6>
                <h5><?php echo get_field('section-8_para_5'); ?></h5>
                <p><?php echo get_field('section-8_para_6'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line-lg.png" id="service-btmright-line">
    </section>
    <!-- =======------- Service Bottom Sec End -------======= -->


    <!-- =======------- Contact Form Sec Start -------======= -->
    <div class="contact-form sec-bg">
      <div class="container">
        <div class="sec-heading text-center">
          <h2><?php echo get_field('section-9__title'); ?></h2>
        </div>
		  <?php echo do_shortcode('[gravityform id="1" name="" action="" property=""] [/gravityform]'); ?>
<!--           <form class="row g-3">
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="First name" aria-label="First name">
            </div>
            <div class="col-md-6 mt-md-0 mt-4">
              <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
            <div class="col-md-6 mt-4">
              <input type="text" class="form-control" placeholder="Phone" aria-label="Phone">
            </div>
            <div class="col-md-6 mt-4">
              <input type="email" class="form-control" placeholder="Email" aria-label="Email">
            </div>
            <div class="col-12 my-4">
              <input type="text" class="form-control" id="inputAddress" placeholder="Address">
            </div>
            <div class="col-md-4">          
              <input type="text" class="form-control" id="inputCity" placeholder="City">
            </div>
            <div class="col-md-4">          
              <input type="text" class="form-control" id="inputState" placeholder="State">
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control" id="inputZip" placeholder="Zip Code">
            </div>
             <div class="col-12 mt-4">              
                <select id="inputState" class="form-select w-100">
                  <option selected>Are you a renter or a homeowner?</option>
                  <option>...</option>
                </select>
              </div>
            <div class="col-12 mt-4 text-center">
              <button type="submit" class="btn btn-primary">LET’S TALK</button>
            </div>
          </form> -->
      </div>  
    </div>
    <!-- =======------- Contact Form Sec End -------======= -->

<?php get_footer();?>

