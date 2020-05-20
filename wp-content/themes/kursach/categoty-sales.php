<?php
/*
Template Name: Sales
*/
?>
<?php get_header(); ?>
<?php include('content-part.php'); ?>		
<section id="discounts_block">
    <div class="container">
        <div class="row">
            <div class="col-12 discount_list">
				<?php 
				$args = ['posts_per_page'=>4,
						 'category_name' => 'sales', 
						 'paged' => get_query_var('paged') ? get_query_var('paged') : 1];
				$posts = new WP_Query($args);
				?>
				<?php if ( $posts -> have_posts() ) : while ( $posts -> have_posts() ) : $posts -> the_post(); ?>
                <div class="row discount_item">
                    <div class="col-lg-6 discount_img">
                        <img src="<?= the_post_thumbnail(); ?>">
                    </div>
                    <div class="col-lg-6 discount_description">
                        <h2><?php the_title(); ?></h2>
                        <p class = "date"><time class = "date" datetime="<?= the_modified_time('j.m.Y'); ?>"><?= the_modified_time('j.m.Y'); ?></time></p>
                        <p><?php the_excerpt(); ?></p>
                        <div class="link">
                            <a href = '<?= the_permalink();?>'><img src = "<?= THEME_URI; ?>/images/arrow.png">ДІЗНАТИСЯ БІЛЬШЕ</a>
                        </div>
                    </div>
                </div>
				<?php endwhile;?>
				<?php endif;?>
                
            </div>
            <div class="col-12">
                <ul class="pagination my_pag">
                    <?php 
						$total_pages = $posts->max_num_pages;
						if ($total_pages > 1){
							$current_page = max(1, get_query_var('paged'));

							echo paginate_links(array(
								'base' => get_pagenum_link(1) . '%_%',
								'format' => '/page/%#%',
								'current' => $current_page,
								'total' => $total_pages,
								'prev_text'    => __('<img src="'. THEME_URI. '/images/arrow_left.svg">'),
								'next_text'    => __('<img src="'. THEME_URI. '/images/arrow_right.svg">'),
							));
						}
					?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php include('delivery.php'); ?>		
<?php get_footer(); ?>		