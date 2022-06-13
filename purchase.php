<?php
/*
   Template Name: Purchase
*/
?>
<?php get_header();?>


    <!-- =======------- Purchase Banner Start -------======= -->
<!--     <section class="purchase-banner sec-bg bg-black">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="purchase-banner-content text-center d-flex justify-content-center align-items-center flex-column text-white">
              <h1>Your Homeownership <br/>Journey Starts Here</h1>
              <div class="purchase-banner-btn mt-5">
                <a href="#" class="btn btn-primary" id="btn-1">Search For Homes</a>
                <a href="#" class="btn btn-primary" id="btn-2">Pre Approval</a>               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- =======------- Purchase Banner End -------======= -->


    <!-- =======------- Homeownership Journey Sec Start -------======= -->
    <section class="home-investment-sec homeownership-journey position-relative sec-bg">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line-lg.png" id="home-line">
      <div class="container-fluid">
        <div class="sec-top">
          <div class="row">
            <div class="col-md-6 px-0 d-lg-flex justify-content-lg-start mt-lg-5">
              <div class="sec-left text-center pt-xl-0 pt-md-5">
                <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/06/purchase-img.png" class="img-fluid">
              </div>
            </div>
            <div class="col-md-6">
              <div class="sec-right mt-xl-0 mt-4">
                <h4><?php echo get_field("main_title"); ?></h4>
                <p><?php echo get_field("main_subtitle"); ?></p>
                <div class="mortage-types">
                <h6>Types of Mortgages: </h6>
                  <ul>
                  <?php echo get_field("type_of_mortgages"); ?>
                  </ul>
                </div>
                <div class="sec-btn text-xl-right text-center">
                  <a href=" <?php echo get_field("get_prequalified_link"); ?>" class="btn btn-primary" target="_blank">Get Prequalified</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="sec-bottom">
          <div class="row">
            <div class="col-md-6">
              <div class="sec-left">
                <h4><?php echo get_field("title_section_1"); ?> </h4>
                <p><?php echo get_field("subtitle_section_1"); ?></p>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center">
              <div class="sec-right text-center">
				  <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/06/process-img.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line-lg.png" id="home-line-2">		
    </section>
    <!-- =======------- Homeownership Journey Sec End -------======= -->


     <!-- =======------- Our Process Sec Start -------======= -->
    <section class="mortage-sec our-process-sec position-relative sec-bg pb-sm-5 pb-0">
      <div class="container-fluid">
        <div class="sec-heading text-center">
          <h2><?php echo get_field("title_section_2"); ?> </h2>          
        </div>
        <div class="mortage-content">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line.png" id="mortage-line">
          <div class="row justify-content-center">
            <div class="col-xl-4 col-md-6">
              <div class="mortage text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mortage-img-1.png" />
                <h6><?php echo get_field("title_block_1_section_2"); ?> </h6>
                <p><?php echo get_field("subtitle_block_1_section_2"); ?></p>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="mortage text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mortage-img-2.png" />
                <h6><?php echo get_field("title_block_2_section_2"); ?></h6>
                <p><?php echo get_field("subtitle_block_2_section_2"); ?></p>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="mortage text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mortage-img-3.png" />
                <h6><?php echo get_field("title_block_3_section_2"); ?></h6>
                <p><?php echo get_field("subtitle_block_3_section_2"); ?></p>                
              </div>
            </div>            
          </div>
          <div class="sec-btn text-center my-sm-5">
              <a href="<?php echo get_field("button_link_section_3"); ?>" class="btn btn-primary" target="_blank">APPLY NOW</a>
            </div>
        </div>
      </div>
    </section>
    <!-- =======------- Our Process Sec End -------======= -->


    <!-- =======------- Contact Form Sec Start -------======= -->
    <div class="contact-form sec-bg">
      <div class="container">
        <div class="sec-heading text-center">
          <h2><?php echo get_field("title_section_4"); ?>
          </h2>
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