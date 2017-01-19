<div class="row_tile">
	<div class="row no_space">
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<img src="assets/images/projects/mapy.jpg" alt="mapy" class="img-responsive img_projects">
			<img src="assets/images/projects/mapy2.jpg" alt="mapy" class="img-responsive img_projects">
		</div>
		<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
			<h3 class="title_about text-center">Mapy</h3>
			<div class="space50"></div>
			<p>
				System dodawania swoich miejsc na mapach google zawierających zdjęcie miejsca link do stronu oraz opis miejsca. <br>
				Strona posiada posiada panel zarządzanie miejscami oraz ustawień strony. <br>

				Demo: <br>
				Login: wipek <br>
				Hasło: 12345 <br><br>

				<a href="http://www.mapy.wipek.pl" target="_blank">
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