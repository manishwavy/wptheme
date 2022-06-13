<?php
/*
 Template Name: HomePage
 */
?>

<?php get_header();?>


<!-- =======------- Banner Start -------======= -->
    <section class="banner-sec hero-section position-relative" style="background-image:url(<?php echo get_field("banner_image"); ?>);">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="banner-content text-center d-flex justify-content-center align-items-center flex-column text-white">
              <h1><?php echo get_field("banner_title"); ?></h1>
              <div class="banner-btn mt-5">
                <a href="<?php echo get_field("banner_button_1_link"); ?>" class="btn btn-primary" id="btn-1" target="_blank">Apply for a Home Purchase</a>
                <a href="<?php echo get_field("banner_button_2_link"); ?>" class="btn btn-primary" id="btn-2" target="_blank">Apply for a Refinance</a>
                <a href="#dream-scroll"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-bottom.png" id="arrow"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
		<video loop autoplay playsinline id="vid">
		 	<source src="https://bpi.rfw.mybluehost.me/edgardo/wp-content/uploads/2022/06/banner-video.mp4" type="video/mp4">
		</video>
		<script>
    document.getElementById('vid').play();
	</script>
    </section>
    <!-- =======------- Banner End -------======= -->


    <!-- =======------- Your Dream Sec Start -------======= -->
    <section class="dream-sec overflow-hidden sec-bg" id="dream-scroll">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 px-0">
            <div class="dream-left">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line.png" id="dream-line">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dream-img.png" class="img-fluid" id="dream-img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line-lg.png" id="dream-line-lg">
            </div>
          </div>
          <div class="col-md-7">
            <div class="dream-right">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line-lg.png" id="dream-line2-lg">
              <h2 class="mb-4"><?php echo get_field("title_section_2"); ?></h2>
              <p><?php echo get_field("subtitle_section_2");?></p>
              <div class="dream-content py-3">
                <div class="row">
                  <div class="col-sm-2 d-flex justify-content-center align-items-center">
                    <div class="dream-img">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dream-img-1.png">                      
                    </div>
                  </div>
                  <div class="col-sm-10">
                    <h6><?php echo get_field("title_block_1_section_2"); ?></h6>
                    <p><?php echo get_field("subtitle_block_1_section_2"); ?></p>
                  </div>
                </div>
              </div>
              <div class="dream-content py-3">
                <div class="row">
                  <div class="col-sm-2 d-flex justify-content-center align-items-center">
                    <div class="dream-img">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dream-img-2.png">
                    </div>
                  </div>
                  <div class="col-sm-10">
                  <h6><?php echo get_field("title_block_2_section_2"); ?></h6>
                    <p><?php echo get_field("subtitle_block_2_section_2"); ?></p>
                  </div>
                </div>
              </div>
              <div class="dream-content py-3">
                <div class="row">
                  <div class="col-sm-2 d-flex justify-content-center align-items-center">
                    <div class="dream-img">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dream-img-3.png">
                    </div>
                  </div>
                  <div class="col-sm-10">
                    <h6><?php echo get_field("title_block_3_section_2"); ?></h6>
                    <p><?php echo get_field("subtitle_block_3_section_2"); ?></p>
                  </div>
                </div>
              </div>
              <div class="dream-content py-3">
                <div class="row">
                  <div class="col-sm-2 d-flex justify-content-center align-items-center">
                    <div class="dream-img">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dream-img-1.png">
                    </div>
                  </div>
                  <div class="col-sm-10">
                  <h6><?php echo get_field("title_block_4_section_2"); ?></h6>
                    <p><?php echo get_field("subtitle_block_4_section_2"); ?></p>
                  </div>
                </div>
              </div>
              <div class="sec-btn mt-sm-5 mt-3">
                <a href="<?php echo get_field("apply_button_section-2"); ?>" class="btn btn-primary" target="_blank">APPLY</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- =======------- Your Dream Sec End -------======= -->


    <!-- =======------- Testimonial Sec Start -------======= -->
    <section class="testimonial-sec position-relative sec-bg">
      <div class="container">
        <div class="sec-heading text-center">
          <h2><?php echo get_field("title_section-3"); ?></h2>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line-lg.png" id="slider-line">
        </div>
        <div class="slider">
          <div class="row">
            <div class="col">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/left-arrow.png" id="left-arrow" />
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow.png" id="right-arrow" />
              <div class="owl-carousel home-testimonial owl-theme">
              <?php echo do_shortcode('[testimonial]'); ?>

            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- =======------- Testimonial Sec End -------======= -->


    <!-- =======------- Art of Homeownership Sec Start -------======= -->
    <section class="art-sec sec-bg position-relative">
      <div class="container">
        <div class="sec-heading text-center">
          <h2 class="testings"><?php echo get_field("title_section_4"); ?></h2>      
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line-lg.png" id="art-line">    
        </div>
        <div class="art-content">
          <div class="row align-items-lg-baseline">
            <div class="col-lg-3 col-md-6">
              <div class="content text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dream-img-1.png" />
                <p><?php echo get_field("title_block_1_section_4"); ?></p>                
              </div>              
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="content text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dream-img-2.png" />
                <p><?php echo get_field("title_block_2_section_4"); ?></p>
              </div>              
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="content text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dream-img-3.png" />
                <p><?php echo get_field("title_block_3_section_4"); ?></p>
              </div>              
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="content text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dream-img-4.png" />
                <p><?php echo get_field("title_block_4_section_4"); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- =======------- Art of Homeownership Sec End -------======= -->


    <!-- =======------- Mortage Sec Start -------======= -->
    <section class="mortage-sec position-relative sec-bg">
      <div class="container">
        <div class="sec-heading text-center">
          <h2><?php echo get_field("title_section_5"); ?></h2>          
        </div>
        <div class="mortage-content px-sm-5 px-3">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line.png" id="mortage-line">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
              <div class="mortage text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mortage-img-1.png" />
                <h6><?php echo get_field("title_block_1_section_5"); ?></h6>
                <p><?php echo get_field("subtitle_block_1_section_5"); ?></p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="mortage text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mortage-img-2.png" />
                <h6><?php echo get_field("title_block_2_section_5"); ?></h6>
                <p><?php echo get_field("subtitle_block_2_section_5"); ?></p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="mortage text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mortage-img-3.png" />
                <h6><?php echo get_field("title_block_3_section_5"); ?></h6>
                <p><?php echo get_field("subtitle_block_3_section_5"); ?></p>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- =======------- Mortage Sec End -------======= -->






<?php get_footer();?>