<?php
/*
   Template Name: Client Experience
*/
?>
<?php get_header();?>

    <!-- =======------- Client Content Start-------======= -->
    <section class="client-content position-relative overflow-hidden sec-bg">
        <div class="container">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line-lg.png" id="client-line1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line-lg.png" id="client-line2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line.png" id="client-line3">
            <div class="row">
                <div class="cols">
                    <div class="client-heading text-center">
                        <h2><?php echo get_field('title_section_1'); ?></h2>
                    </div>
                  <?php
                  $args = array( 'post_type' => 'testimonial','order'=>'ASC');
                  $loop = new WP_Query( $args );
                  while ( $loop->have_posts() ) : $loop->the_post();
                  ?>
                  <div class="client py-sm-4 py-2">
                    <p><?php echo get_the_content(); ?></p>
                    <h6><?php echo get_the_title(); ?></h6>
                    </div>
                  <?php
                  endwhile;
                  wp_reset_postdata();
                  
                  ?>
                </div>
            </div>
        </div>
    </section>
    <!-- =======------- Client Content End-------======= -->


    <!-- =======------- Contact Form Sec Start -------======= -->
    <div class="contact-form sec-bg">
      <div class="container">
        <div class="sec-heading text-center">
        <h2><?php echo get_field('title_section_2'); ?></h2>
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