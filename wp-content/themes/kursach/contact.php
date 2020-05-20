<?php
/*
Template Name: Contacts
*/
?>
<?php get_header(); ?>	
<section id="underheader_contacts">
    <div class="container">
        <div class="row justify-content-center">
			<div class = "col-12">
				<h2><?= the_title(); ?></h2>
			</div>
        </div>
    </div>
    <div class="map">
        <iframe width="100%" height="400px" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=49.235238, 28.469572&amp;q=Bulki%2C%20Hrushevs'koho%20St%2C%2028%2C%20Vinnytsia%2C%20Vinnytsia%20Oblast%2C%2021000+(Bulki)&amp;ie=UTF8&amp;t=&amp;z=18&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
    <div class="container">
		<hr>
		<div class="row contacts">
			<div class="col-lg-3 col-md-6 contact_item">
				<img src="<?= THEME_URI; ?>/images/adress.svg">
				<span>вул. Грушевського,28, Вінниця</span>
			</div>
			<div class="col-lg-3 col-md-6 contact_item">
				<img src="<?= THEME_URI; ?>/images/phone.svg">
				<span>Телефон:<br>+38 (097) 094-24-04</span>
			</div>
			<div class="col-lg-3 col-md-6 contact_item">
				<img src="<?= THEME_URI; ?>/images/hours.svg">
				<span>Працюємо:<br>Пн-Чт: 9:00 – 21:00<br>Пт-Нд: 9:00 – 22:00</span>
			</div>
			<div class="col-lg-3 col-md-6 contact_item">
				<img src="<?= THEME_URI; ?>/images/mail.svg" class="mail">
				<span>Email:<br>bulki_vn@gmail.com</span>
			</div>
		</div>
    </div>
</section>
<section id="feedback">
    <div class="container">
		<div class = "row">
			<div class="social_netw col-12">
				<h3>зворотній зв'язок</h3>
				<p>Підписуйся на соціальні мережі, щоб завжди бути в курсі подій</p>
				<div>
					<img src="<?= THEME_URI; ?>/images/instagram_black.svg">
					<a href="#">INSTAGRAM</a>
				</div>
				
				<div>
					<img src="<?= THEME_URI; ?>/images/facebook_black.svg">
					<a href="#">FACEBOOK</a>
				</div>
				<p>Залишились запитання? Напишіть нам, заповнивши форму</p>
			</div>
		</div>
	</div>
	<?php echo do_shortcode('[contact-form-7 id="14" title="Контактна форма 1"]');?>
        <?php /*<div class="row justify-content-center">
            <form class="col-lg-6 col-12 form">
                <input type="text" id="name"  placeholder="Ім'я">
                <input type="text" id="surname"  placeholder="Прізвище">
                <input type="text" id="phone"  placeholder="Номер телефону">
                <input type="text" id="mail"  placeholder="E-mail">
                <textarea id="subject" placeholder="Текст повідомлення"></textarea>
            </form>
			
        </div>
        <div class="row justify-content-center">
				<a href="#" class="submit">Надіслати</a>
		</div>*/?>
    </div>
</section>

<?php include('delivery.php'); ?>		
<?php get_footer(); ?>