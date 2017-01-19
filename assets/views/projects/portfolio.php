<div class="row_tile">
	<div class="row no_space">
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<img src="assets/images/projects/portfolio.jpg" alt="portfolio" class="img-responsive img_projects">
			<img src="assets/images/projects/portfolio_2.jpg" alt="portfolio" class="img-responsive img_projects">
		</div>
		<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
			<h3 class="title_about text-center">Portfolio</h3>
			<div class="space50"></div>
			<p>
				Strona stworzona aby przedstawić moją osobę a także moje CV czy też projekty. <br>
				Została stworzona w oparciu m.in. o: <br>
				- Codeigniter PHP Framework <br>
				- Twitter Bootstrap 3 <br>
				- AngularJS <br>
				- Less.js <br>
				oraz inne niezbędne przy tworzeniu stron narzędzia. <br>
				Jest w pełni responsywna oraz stworzona jako aplikacja SPA (Single Page Aplication), gdzięki czemu wszystko odbywa się bez przeładowania przy pomocy wydarzeń asynchronicznych.
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