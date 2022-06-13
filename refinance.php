<?php
/*
   Template Name: Refinance
*/
?>
<?php get_header();?>


    <!-- =======------- Why Refinance Sec Start -------======= -->
    <section class="mastering-sec why-refinance-sec position-relative sec-bg">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line.png" id="mastering-line">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="mastering-left pt-lg-5">
              <h3><?php echo get_field("main_title"); ?></h3>
              <p><?php echo get_field("main_subtitile"); ?></p>
              <div class="loan-types mt-5">
                <h6>Types of Loans: </h6>
                  <ul>
                   <?php  echo get_field("type_loan"); ?>
                  </ul>
                </div>
            </div>
          </div>
          <div class="col-md-6 px-0 d-lg-flex justify-content-lg-end align-items-lg-center">
            <div class="mastering-right text-right">
<!--               <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mastering-img.png" class="img-fluid" /> -->
				<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/06/refinance-img.png" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- =======------- Why Refinance Sec End -------======= -->


    <!-- =======------- Home Refinance Loans Sec Start -------======= -->
    <div class="review-sec home-refinance-loans">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="review-content text-center text-white">
              <h5>    <?php  echo get_field("title_section_1"); ?></h5>
              <?php  echo get_field("subtitle_section_2"); ?>
              <!-- <a href="#" class="btn btn-primary">Schedule a financial review</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =======------- Home Refinance Loans Sec End -------======= -->


    <!-- =======------- Loan Options Sec Start -------======= -->
    <div class="loan-option-sec position-relative sec-bg py-5">
      <div class="container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line-lg.png" id="loan-img1" />
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line-lg.png" id="loan-img2" />
        <div class="sec-heading text-center py-sm-5">
          <h2> <?php  echo get_field("title_section_2"); ?></h2>
        </div>
        <div class="row">
        <?php echo do_shortcode('[loan_option]'); ?>
        </div>
      </div>
    </div>

    <!-- =======------- Loan Options Sec End -------======= -->


    <!-- =======------- Contact Form Sec Start -------======= -->
    <div class="contact-form sec-bg">
      <div class="container">
        <div class="sec-heading text-center">
          <h2>
          <?php  echo get_field("title_section_3"); ?>
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
