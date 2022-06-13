<?php
  function register_my_menus() {
  register_nav_menus(
    array(
      'footer-menu' => __( 'footer Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}

add_action( 'init', 'register_my_menus' );


add_theme_support( 'post-thumbnails' );

// function that runs when shortcode is called
function testimonial_shortcode() { 
  $args = array( 'post_type' => 'testimonial','order'=>'ASC','showposts' => 4);
  $post_query  = new WP_Query($args);
  if($post_query->have_posts() ) {
    while($post_query->have_posts()) {
      $post_query->the_post();
      $postId = get_the_ID();
          if($postId != '130' && $postId != '129')
          {
            ?>
            <div class="item text-center px-5">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
                  <h6>Awesome Lender </h6>
                <?php echo get_the_content(); ?>
                  <p class="author"><?php echo get_the_title(); ?></p>
            </div>
            <?php
          }
      }
      wp_reset_postdata();
      }
  }
  add_shortcode('testimonial', 'testimonial_shortcode');


  function loan_shortcode() { 
    $args = array( 'post_type' => 'loan_options','order'=>'ASC');
    $post_query  = new WP_Query($args);
    if($post_query->have_posts() ) {
      while($post_query->have_posts()) {
        $post_query->the_post();
              ?>
                <div class="col-md-6 mb-5">
                <div class="loan">
                  <h4><?php echo get_the_title(); ?></h4>
                  <p><?php echo get_the_content(); ?></p>
                </div>
                </div>
              <?php
        }
        wp_reset_postdata();
        }
    }
    add_shortcode('loan_option', 'loan_shortcode');

    function  perfect_mortgage_promise() { 
      $args = array( 'post_type' => 'perfect_mortgage_pro','order'=>'ASC');
      $post_query  = new WP_Query($args);
      if($post_query->have_posts() ) {
        $i = 1;
        while($post_query->have_posts()) {
          $post_query->the_post();
                ?>
                  <div class="item">
                    <div class="row">
                      <div class="col-md-5 slider-img">
                          <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid">
                      </div>
                      <div class="col-md-5 text-center">
                        <div class="slider-right">
                        <p><?php echo get_the_content(); ?></p>                  
                        </div>
                      </div>
                      <div class="col-md-2 slider-number">
                        <p>0<?php echo $i; ?></p>
                      </div>
                    </div>
                    </div>    
                <?php
                $i++;
          }
          wp_reset_postdata();
          }
      }
      add_shortcode('Perfect_Mortage_Promise', 'perfect_mortgage_promise');
?>