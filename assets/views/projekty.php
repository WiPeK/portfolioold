<div class="row_tile">

	<div class="row no_space animatedParent">

		<h3 class="title_about">Projekty</h3>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 animated growIn slower go">
            <div class="project_bar">
                <a href="projekty/portfolio" class="pr_bar">
                    <img src="assets/images/projects/portfolio.jpg" alt="portfolio" class="img-responsive img_project">
                    <div class="pr_bar_hover text-center">
                        <p class="proj_title">Portfolio</p>
                        <a href="http://www.wipek.pl" target="_blank">
                            <button class="btn btn-primary demo_btn no_border_radius">Demo</button>
                        </a>
                        <a href="projekty/portfolio">
                            <button class="btn btn-primary opis_btn no_border_radius">Opis</button>
                        </a>
                    </div>     
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 animated growIn slower go">
            <div class="project_bar">
                <a href="projekty/metin2-cms" class="pr_bar">
                    <img src="assets/images/projects/metin.jpg" alt="portfolio" class="img-responsive img_project">
                    <div class="pr_bar_hover text-center">
                        <p class="proj_title">Metin2 CMS</p>
                        <a href="http://www.metin2cms.wipek.pl" target="_blank">
                            <button class="btn btn-primary demo_btn no_border_radius">Demo</button>
                        </a>
                        <a href="projekty/metin2-cms">
                            <button class="btn btn-primary opis_btn no_border_radius">Opis</button>
                        </a>
                    </div>     
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 animated growIn slower go">
            <div class="project_bar">
                <a href="projekty/wipek-cms" class="pr_bar">
                    <img src="assets/images/projects/cms.jpg" alt="portfolio" class="img-responsive img_project">
                    <div class="pr_bar_hover text-center">
                        <p class="proj_title">WiPeK CMS</p>
                        <a href="http://www.cms.wipek.pl" target="_blank">
                            <button class="btn btn-primary demo_btn no_border_radius">Demo</button>
                        </a>
                        <a href="projekty/wipek-cms">
                            <button class="btn btn-primary opis_btn no_border_radius">Opis</button>
                        </a>
                    </div>     
                </a>
            </div>
        </div>
        <div class="clearfix visible-lg visible-md"></div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 animated growIn slower go">
            <div class="project_bar">
                <a href="projekty/tesla" class="pr_bar">
                    <img src="assets/images/projects/tesla.jpg" alt="portfolio" class="img-responsive img_project">
                    <div class="pr_bar_hover text-center">
                        <p class="proj_title">Biografia CMS</p>
                        <a href="http://www.tesla.wipek.pl" target="_blank">
                            <button class="btn btn-primary demo_btn no_border_radius">Demo</button>
                        </a>
                        <a href="projekty/tesla">
                            <button class="btn btn-primary opis_btn no_border_radius">Opis</button>
                        </a>
                    </div>     
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 animated growIn slower go">
            <div class="project_bar">
                <a href="projekty/druk-3d" class="pr_bar">
                    <img src="assets/images/projects/druk.jpg" alt="portfolio" class="img-responsive img_project">
                    <div class="pr_bar_hover text-center">
                        <p class="proj_title">Druk 3D</p>
                        <a href="http://www.wipeck.cuccfree.org" target="_blank">
                            <button class="btn btn-primary demo_btn no_border_radius">Demo</button>
                        </a>
                        <a href="projekty/druk-3d">
                            <button class="btn btn-primary opis_btn no_border_radius">Opis</button>
                        </a>
                    </div>     
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 animated growIn slower go">
            <div class="project_bar">
                <a href="projekty/mapy" class="pr_bar">
                    <img src="assets/images/projects/mapy.jpg" alt="portfolio" class="img-responsive img_project">
                    <div class="pr_bar_hover text-center">
                        <p class="proj_title">Mapy</p>
                        <a href="http://www.mapy.wipek.pl" target="_blank">
                            <button class="btn btn-primary demo_btn no_border_radius">Demo</button>
                        </a>
                        <a href="projekty/mapy">
                            <button class="btn btn-primary opis_btn no_border_radius">Opis</button>
                        </a>
                    </div>     
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 animated growIn slower go">
            <div class="project_bar">
                <a href="projekty/kamienie" class="pr_bar">
                    <img src="assets/images/projects/kamienie.jpg" alt="portfolio" class="img-responsive img_project">
                    <div class="pr_bar_hover text-center">
                        <p class="proj_title">Kamienny Ogród</p>
                        <a href="http://www.mapy.kamienie-ogrod.pl" target="_blank">
                            <button class="btn btn-primary demo_btn no_border_radius">Demo</button>
                        </a>
                        <a href="projekty/kamienie">
                            <button class="btn btn-primary opis_btn no_border_radius">Opis</button>
                        </a>
                    </div>     
                </a>
            </div>
        </div>

	</div>

</div>
<script>

    $(document).ready(function(){

        resizeDiv();
        project_bar();
    });



    window.onresize = function(event) {

        resizeDiv();
        project_bar()
    }



    function resizeDiv() {

        vpw = $(window).width();

        vph = $(window).height();

        vns = $('.nav_shadow').height();

        $('.row_tile').css({'min-height': vph-vns + 'px'});

    }

    function project_bar(){
        img_w = $('.img_project').width();    
        img_h = $('.img_project').height();
        $('.pr_bar_hover').css({'width': img_w + 'px'});    
        $('.pr_bar_hover').css({'height': img_h + 'px'});    
    }

</script>