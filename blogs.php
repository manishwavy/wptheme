<?php
/**
* Template Name: Blogs
*/
?>
<?php get_header();?>

    <section class="blogs py-5 position-relative sec-bg ">
        <div class="container ">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line-lg.png" id="blog-line1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side-line.png" id="blog-line2">

            <div class="blog_main-listing">
                <div class="row">
					
					<?php
						$paged = get_query_var('paged') ? get_query_var('paged') : 1;
						$args = array(
							'post_type' => 'post',
							'post_status' => 'publish',
							'posts_per_page' => 3,
							'orderby' => 'Date',
							'order' => 'DSC',
							'paged' => $paged,
						);

						$loop = new WP_Query($args);
						if ($loop->have_posts()) :
						while ($loop->have_posts()) : $loop->the_post();
						$post_id = get_the_ID();
           			 ?>
					
                    <div class="col-lg-6">                    
                        <div class="blogs-img">
							<a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid"></a>
                        </div>                    
                    </div>
                    <div class="col-lg-6">
                        <div class="blog-main-content">
                            <div class="blog-content">
                                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                                <p><?php the_excerpt(); ?></p>
                                <h5><?php echo get_the_date(); ?></h5>
                            </div>
                            <div class="blog-btn text-lg-right text-md-left text-center">
                                <a href="<?php the_permalink(); ?>">READ MORE ></a>
                            </div>                        
                        </div>
                    </div>
					
					<?php endwhile;  ?>
            <?php endif;
				$total_pages = $loop->max_num_pages;
            	wp_reset_postdata(); 
			?>
                </div>
            </div>            
			
			

            <div class="col-12 d-flex justify-content-center pegination mt-5">
                <nav aria-label="Page navigation example pegination-blog ">
                    <ul class="pagination ">
						<?php								
							$big = 999999999; // need an unlikely integer
						 	echo paginate_links( array(
							'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
							'format' => '?paged=%#%',
							'current' => max( 1, get_query_var('paged') ),
							'total' => $total_pages,
							 'prev_text'    => __('<'),
            				'next_text'    => __('>'),
						) ); ?>
						
<!--                         <span aria-current="page" class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="page-numbers" href="#">3</a>
                        <a class="next page-numbers" href="#">&gt;</a> -->
                    </ul>
                </nav>
            </div>
        </div>
       
    </section>

<?php get_footer();?>