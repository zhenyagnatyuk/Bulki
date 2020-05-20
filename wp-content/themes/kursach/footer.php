<footer>
			<div class = "container">
				<div class = "row">
					<div class = "col-12 col-md-3 logo">
						<a href = "#"><img src = "<?= THEME_URI; ?>/images/big_logo.png" alt = "Между булок"></a>
					</div>
					<div class = "col-12 col-md-3 menu">
						<ul class="footer_menu">
							<li><a href="#">Головна</a></li>
							<li><a href="#">Про нас</a></li>
							<li><a href="#">Акції</a></li>
							<li><a href="#">Меню</a></li>
							<li><a href="#">Контакти</a></li>
						</ul>
					</div>
					<div class = "col-12 col-md-3 logos">
						<a href = "raketaapp.com"><img src = "<?= THEME_URI; ?>/images/footer_raketa.png"></a>
						<a href = "glovoapp.com"><img src = "<?= THEME_URI; ?>/images/footer_glovo.png"></a>
						<a href = "misteram.com.ua"><img src = "<?= THEME_URI; ?>/images/footer_misteram.png"></a>
					</div>
					<div class = "col-12 col-md-3 info">
						<?php if( is_active_sidebar( 'sidebar-1' ) ) : ?>
							<?php dynamic_sidebar( 'sidebar-1' ); ?>
						<?php endif; ?>
						<div class = "social">
							<a href = "#"><img src="<?= THEME_URI; ?>/images/instagram.svg"></a>
							<a href = "#"><img src="<?= THEME_URI; ?>/images/facebook.svg"></a>
						</div>
					</div>
				</div>
			</div>
			<div class = "copyright">
				<div class = "container">
					<div class = "row">
						<div class = "col-12">
							<p> © 2020 - bulki.vn.ua</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script type='text/javascript'>
			document.getElementById('btn_menu').onclick = function(){
		    
				styles = getComputedStyle(document.getElementById('menu-header-menu'));
				console.log();
				if (styles['display'] == "none"){
					document.getElementById('menu-header-menu').style.display = "flex"; 
				}
				else
					document.getElementById('menu-header-menu').style.display="none";
				
				element = document.getElementById("menu-header-menu");
			    name = "container";
			    arr = element.className.split(" ");
			    if (arr.indexOf(name) == -1) {
					element.className += " " + name;
			    }
		
			}
		</script>
		<?php wp_footer(); ?>
	</body>
</html>