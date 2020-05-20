<?php
/*
Template Name: Menu
*/
?>
<?php get_header(); ?>
<section id = 'underheader_contacts'>
    <div class="container">
        <h2><?php single_term_title();?></h2>
		<a href = "glovoapp.com"><p>Замовляй доставку через Glovo</p></a>
		
    </div>
</section>
<section id="menu_block">
    <div class="container">
		<div class = "row">
			<div class = "col-12">
				<ul class="sort">
					<li><a href="https://bulki.apeps.pp.ua/menu/">Усе</a></li>
					<?php $taxonomies = get_object_taxonomies( 'menu' );
					$terms = get_terms(['taxonomy' => $taxonomies,
										'hide_empty' => false]);?>
					<?php foreach($terms as $term): ?>
					<li><a href="<?= get_term_link(get_term($term)->term_id); ?>"><?= get_term($term)->name; ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<div class="row menu_bar">
			
			<?php if (  have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-lg-4 col-sm-6">
				<div class="menu_item">
					<?= the_post_thumbnail(); ?>
					<div class="product_description">
						<h4><?php the_title(); ?></h4>
						<p><?php the_field('weight'); ?></p>
						<p class = "consist"><?php get_the_excerpt(); ?></p>
						<div class="row justify-content-center"><h4><?php the_field('price'); ?> грн</h4></div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php else: ?>
			<h1>В цій категорії ще не має товарів, зачекайте :)</h1>
			<?php endif; ?>
		</div>
		
        <div class="row justify-content-center">
			<div class = "col-12">
				<div class="pagination my_pag">
					<?php /*
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
						}*/
					?>
				</div>
			</div>
        </div>
    </div>
</section>
<?php wp_reset_postdata(); ?>
<?php include('delivery.php'); ?>		
<?php get_footer(); ?>