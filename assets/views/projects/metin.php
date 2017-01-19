<div class="row_tile">
	<div class="row no_space">
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<img src="assets/images/projects/metin.jpg" alt="portfolio" class="img-responsive img_projects">
			<img src="assets/images/projects/metin_2.jpg" alt="portfolio" class="img-responsive img_projects">
		</div>
		<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
			<h3 class="title_about text-center">Metin2 CMS</h3>
			<div class="space50"></div>
			<p>
				System zarządzania treścią serwerów Metin2 <br>
				Autorski panel administratora oraz wszystkie funkcjonalności dostępne po zalogowaniu. <br><br>
				Login: Ethoard <br>
				Hasło: 123456 <br><br>
				Strona posiada sklep w mikropłatnościami (IS - widoczny po zalogowaniu). Płatności zostają przystosowane pod api usługodawcy obsługującego system płatności. <br>
				Strona graficzna jest kodowana z dostarczonego, pociętego layoutu konkretnego klienta. <br>
				Dodatkowe funkcjonalności mogą zostać dodane na indywidualne życzenie. <br><br>

				Wszystkie możliwe metody włamania tj. xss, sql injection czy też csrf są zabezpieczone dzięki wykorzystaniu frameworka Codeigniter oraz odpowiednich walidacji. <br><br>

				*w wersji demo niektóre funkcjonalności mogą być wyłączone <br><br>

				<a href="http://www.metin2cms.wipek.pl" target="_blank">
					<button class="btn btn-primary btn-block no_border_radius">Demo</button>
				</a>
			</p>
			<div class="space50"></div>
		</div>
	</div>
</div>
<script>

    $(document).ready(function(){

        resizeDiv();

    });



    window.onresize = function(event) {

        resizeDiv();

    }



    function resizeDiv() {

        vpw = $(window).width();

        vph = $(window).height();

        vns = $('.nav_shadow').height();

        $('.row_tile').css({'min-height': vph-vns + 'px'});

    }

</script>