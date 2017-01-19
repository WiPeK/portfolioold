<div class="row_tile">
	<div class="row no_space">
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<img src="assets/images/projects/tesla.jpg" alt="portfolio" class="img-responsive img_projects">
			<img src="assets/images/projects/tesla_2.jpg" alt="portfolio" class="img-responsive img_projects">
		</div>
		<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
			<h3 class="title_about text-center">Biografia CMS</h3>
			<div class="space50"></div>
			<p>
				Strona stworzona na potrzeby konkursu. <br>
				Posiada system administracji, gdzie możemy dodawać wydarzenia z życia lub cytaty osoby o której ma być strona. <br><br>
				Login: wipek <br>
				Hasło: 123456 <br><br>
				<a href="http://www.tesla.wipek.pl/login" target="_blank">
					<button class="btn btn-primary btn-block no_border_radius">Demo panelu</button>
				</a> <br>

				Wydarzenia dodane w panelu są wyświetlane na chronologicznej osi czasu. <br>

				*w wersji demo niektóre funkcjonalności mogą być wyłączone <br><br>

				<a href="http://www.tesla.wipek.pl" target="_blank">
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