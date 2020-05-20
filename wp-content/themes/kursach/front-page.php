<?php get_header(); ?>
<section id = "underheader">
			<div class = 'container'>
				<div class = "row">
					<div class="logo col-xl-4 col-lg-5 col-12">
						<img src = "<?= THEME_URI; ?>/images/big_logo.png" alt = "Между булок">
						<h1>Между Булок - Улюблені <span>бургери</span> твого міста</h1>
					</div>
					<div class = "burger_main col-lg-1 col-12" >
						<img src = "<?= THEME_URI; ?>/images/bugrer_main.png">
					</div>
				</div>
				<div class = "row">
					<div class="logo col-xl-4 col-lg-5 col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-12 offset-lg-0">
						<a href = "glovoapp.com">Замовити доставку</a>
					</div>
				</div>
				<div class="row justify-content-between info">
					<div class = "col-md-8 col-12">
						<p>
							<img src="<?= THEME_URI; ?>/images/pin.svg">
							<span>вул. Грушевського, 28, Вінниця</span>
						<p>
					</div>
					<div class = 'col-md-4 col-12'>
						<a href = "#"><img src="<?= THEME_URI; ?>/images/instagram.svg"></a>
						<a href = "#"><img src="<?= THEME_URI; ?>/images/facebook.svg"></a>
					</div>
				</div>
			</div>
		</section>
		<section id = "about_us">
			<div class = 'container'>
				<div class = "row">
					<div class="col-md-6 col-12 photo">
						<h2 class = "mobile">ПРО НАС</h2>
						<img class = "we" src = "<?= THEME_URI; ?>/images/about_us.png">
						<p><img class = "inst" src="<?= THEME_URI; ?>/images/instagram.svg"> ми в instagram @m_b.ua</p>
					</div>
					<div class="col-md-6 col-12 text">
						<h2 class = "infull">ПРО НАС</h2>
						<p>"Между Булок" - це дуже стильне і сучасне кафе в Вінниці. </p>
						<p>Більше двох років ми готуємо найсмачніші бургери твого улюбленого міста</p>
						<a href = 'https://bulki.apeps.pp.ua/about/'><img src = "<?= THEME_URI; ?>/images/arrow.png">ДІЗНАТИСЬ БІЛЬШЕ</a>
					</div>
				</div>
			</div>
		</section>
		<section id = "menu">
			<div class = "container-fluid">
				<div class = "row">
					<div class = "burger_menu col-12"> 
						<img  src = "<?= THEME_URI; ?>/images/burger_menu.png">
					</div>
				</div>
			</div>
			<div class = 'container'>
				<div class = "row">
					<div class="col-md-5 col-12 text">
						<h2>МЕНЮ</h2>
						<p>В нашому меню більше 20 видів суперсмачних бургерів.</p>
						<p>Чорні бургери, бургер з вишнею або ананасом, куркою або яловичиною, різними видами сирів і ти навіть можеш зібрати свій власний бургер.</p>
						<a href = 'https://bulki.apeps.pp.ua/menu/'><img src = "<?= THEME_URI; ?>/images/arrow.png">ПЕРЕЙТИ ДО МЕНЮ</a>
					</div>

				</div>
			</div>
		</section>
		<section id = "sales">
			<div class = 'container'>
				<div class = "row">
					<div class="col-md-12 col-12 ">
						<h2>АКЦІЇ</h2>
					</div>
				</div>
				<div class = "row">
					<?php 
						$args=array('post_per_page'=> 2, 'category_name' => 'sales');
						$query = new WP_Query($args);
					?>
					<?php while ( $query->have_posts() ) : $query->the_post();?>
						<a href ="<?= the_permalink(); ?>" class="col-md-6 col-sm-8 offset-sm-2 offset-md-0 col-12 tile">
							<?= the_post_thumbnail(); ?>
							<time class = "date" datetime="<?= the_modified_time('j.m.Y'); ?>"><?= the_modified_time('j.m.Y'); ?></time>
							<p class = "text"><?= the_excerpt();?></p>
						</a>
					<?php endwhile; ?>
				</div>
				<div class = "row">
					<div class="col-md-12 col-12 link">
						<a href = 'http://bulki.apeps.pp.ua/sales/'><img src = "<?= THEME_URI; ?>/images/arrow.png">БІЛЬШЕ ЗНИЖОК</a>
					</div>
				</div>
			</div>
		</section>
<?php include('delivery.php'); ?>		
<?php get_footer(); ?>		