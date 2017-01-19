<div class="row_tile">

	<div class="row no_space">

		<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 no_space animatedParent">

			<div class="left_bar_foto" style="position: static;">

				<div class="space100"></div>

				<img src="assets/images/foto.png" alt="foto" class="center-block img-responsive img_foto animated tada slow">

			

				<ul class="social_icons animated growIn slower go">

					<li>

						<a href="https://www.facebook.com/krzysiek.adamczyk.5"  target="_blank">

							<i class="fa fa-facebook-official color_fb"></i>

						</a>

					</li>

					<li>

						<a href="https://instagram.com/_wipek_/"  target="_blank">

							<i class="fa fa-instagram color_inst"></i>

						</a>

					</li>

					<li>

						<a href="https://plus.google.com/101926306756321985062">

							<i class="fa fa-google-plus-square color_gplus"></i>

						</a>

					</li>

					<li>

						<a href="skype:kris9553">

							<i class="fa fa-skype color_skp"></i>

						</a>

					</li>

					<li>

						<a href="https://www.youtube.com/user/WiPeKXxX/videos"  target="_blank">

							<i class="fa fa-youtube-square color_yt"></i>

						</a>

					</li>

				</ul>

			</div>

		</div>

		<div class="col-lg-7 col-lg-offset-1 col-md-8 col-sm-7 col-xs-12 animatedParent">	

			<h3 class="title_about animated growIn slower go">O mnie</h3>

			<div class="space50"></div>

			<div class="about_me_content animated growIn slower go">

				<h4>Witam, nazywam się Krzysztof Adamczyk.</h4><br>

				Mam 20 lat. 

				W tym roku z wyróżnieniem skończyłem technikum o profilu technik informatyk

				i studiuje na Politechnice Świętokrzyskiej. <br>

				Swoją przygodę z tworzeniem stron intenetowych zacząłem 3 lata temu. <br>

				Na początku zaczynałem od edycji szablonów, potem przyszedł czas na własne proste szablony. <br>

				Jakiś czas potem odkryłem "Bootstrapa" i stał mi się on bardzo użyteczny. <br>

				Jednak frontend nie wystarczał do budowy bardziej zaawansowanych aplikacji. <br>

				I tak to musiałem trafić na PHP. W "czystym" PHP nigdy nie budowałem aplikacji 

				lecz odrazu "rzuciłem się" na framework - Codeigniter. <br>

				Codeigniter zaoferował mi pracę w rozwiązaniu MVC bez którego aktualnie nie wyobrażam sobie tworzenia aplikacji internetowych. <br>

				Ostatnio odkryłem framework JavaScript - AngularJS, gdyż chciałem tworzyć strony bardziej przyjazne użytkownikowi.

				Zawsze lubiłem strony na których możemy się przemieszczać bez przeładowania co oferuje mi Angular.

				Bardzo nie lubię tworzyć grafiki i layoutów, więc cały wygląd stron tworzę praktycznie w zupełności za pomocą CSS3. <br>

				Chciałbym także wkrótce zacząć naukę C# oraz frameworka PHP Symfony 2. <br>

				Czytanie dokumentacji czy też szukanie rozwiązania problemu w języku angielskim nie sprawia mi problemów. <br>





			</div>

		</div>

	</div>

	<div class="row no_space">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animatedParent">

			<ul class="skills_charts animated growIn slower go">

				<li>

					<span class="chart" easypiechart options="options" percent="percent.html">

						<span class="percent" count-to="{{percent.html}}" value="0" duration="1.3"></span>

					</span>

					<p>HTML5</p>

				</li>

				<li>

					<span class="chart" easypiechart options="options" percent="percent.css">

						<span class="percent" count-to="{{percent.css}}" value="0" duration="1.3"></span>

					</span>

					<p>CSS3 / LESS</p>	</li>

				<li>

					<span class="chart" easypiechart options="options" percent="percent.bootstrap">

						<span class="percent" count-to="{{percent.bootstrap}}" value="0" duration="1.3"></span>

					</span>

					<p>Twitter Bootstrap 3</p>	

				</li>

				<li>

					<span class="chart" easypiechart options="options" percent="percent.jsjq">

						<span class="percent" count-to="{{percent.jsjq}}" value="0" duration="1.3"></span>

					</span>	

					<p>Javascript / jQuery</p>

				</li>

				<li>

					<span class="chart" easypiechart options="options" percent="percent.angular">

						<span class="percent" count-to="{{percent.angular}}" value="0" duration="1.3"></span>

					</span>

					<p>AngularJS</p>	

				</li>

				<li>

					<span class="chart" easypiechart options="options" percent="percent.php">

						<span class="percent" count-to="{{percent.php}}" value="0" duration="1.3"></span>

					</span>

					<p>PHP</p>

				</li>

				<li>

					<span class="chart" easypiechart options="options" percent="percent.codeigniter">

						<span class="percent" count-to="{{percent.codeigniter}}" value="0" duration="1.3"></span>

					</span>

					<p>Codeigniter PHP Framework</p>

				</li>

				<li>

					<span class="chart" easypiechart options="options" percent="percent.sql">

						<span class="percent" count-to="{{percent.sql}}" value="0" duration="1.3"></span>

					</span>

					<p>Sql Query</p>	

				</li>

			</ul>

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