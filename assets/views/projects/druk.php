<div class="row_tile">
	<div class="row no_space">
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<img src="assets/images/projects/druk.jpg" alt="portfolio" class="img-responsive img_projects">
			<img src="assets/images/projects/druk_2.jpg" alt="portfolio" class="img-responsive img_projects">
		</div>
		<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
			<h3 class="title_about text-center">Druk 3D</h3>
			<div class="space50"></div>
			<p>
				Strona stworzona na powiatowy konkurs informatyczny szkół ponadgimnazjalnych w Skarżysku Kamiennej. <br>
				Została nagrodzona I miejscem. <br>
				Przedstawiona jest w niej tematyka drukowania 3D. <br>
				Jest w pełni responsywna oraz wykorzystuje ładowanie podstron bez przeładowania. <br> <br>
				

				<a href="http://www.wipeck.cuccfree.org" target="_blank">
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