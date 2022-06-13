<?php

?>
<?php get_header();?>

    <section class="blog-details sec-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="detail-left">
                        <div class="blog-heading">
                            <p class="mb-0"><?php echo get_the_date(); ?></p>
                            <h2><?php echo get_the_title(); ?></h2>
                        </div>
                        <div class="blog-img">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                        </div>
                       <p><?php echo get_the_content(); ?></p>

                    </div>                    
                </div>
				
				
				<!----------------------sidebar----------------------->
                <div class="col-md-4">
                    <div class="detail-right">
                        <div class="row">
							<?php
			$currentPostId = get_the_ID();
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'orderby'   => 'rand',
				'post__not_in' => array($currentPostId),
                'paged' => $paged,
            );

            $loop = new WP_Query($args);
            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post();
                    $post_id = get_the_ID();

            ?>
                            <div class="col-md-12 col-4">
                                <div class="side-blog">                                    
                                    <div class="blog-reverse">
                                        <p><?php echo get_the_date(); ?></p>
                                        <h4><?php the_title(); ?></h4>
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                                    </div>
                                    <div class="read-more text-md-right text-sm-start">
                                        <a href="<?php the_permalink(); ?>">READ MORE ></a>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile;  ?>
            <?php endif;
				$total_pages = $loop->max_num_pages;
            wp_reset_postdata(); ?>
                            

<!--                             <div class="col-12 d-lg-flex justify-content-lg-center pegition mt-5">
                                <div class="d-lg-flex justify-content-lg-evenly ">
                                    <nav aria-label="Page navigation example pegination-blog ">
                                        <ul class="pagination ">
                                            <li class="page-item">
                                                <a class="page-link " href="#" aria-label="Previous">
                                                <span aria-hidden="true">   &#60;</span></a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item">
                                            <a class="page-link " href="#" aria-label="Next ">
                                                <span aria-hidden="true">&#x3e;</span>
                                            </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
				<!------------------->
            </div>
        </div>
    </section>

<?php get_footer();?>
