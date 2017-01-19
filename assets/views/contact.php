<div class="row_tile">
	<div class="row no_space">
		<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 no_space animatedParent">
			<div class="left_bar_foto" style="position: static;">
				<div class="space50"></div>
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
		<div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-7 col-xs-12 animatedParent">	
			<div class="space100"></div>
	
			<div ng-show="valid_err" class="alert alert-danger no_border_radius animated growIn slower go" role="alert">{{val_err}}</div>
			<div ng-show="failedMessage" class="alert alert-danger no_border_radius animated growIn slower go" role="alert">{{failedMessages}}</div>
			<div ng-show="successMessage" class="alert alert-success no_border_radius animated growIn slower go" role="alert">{{successMessages}}</div>

			<form name="contactForm" ng-submit="submitContact(contactForm)" novalidate class="animated growIn slower go">
			
				<div class="form-group">
					<input type="email" name="email" class="form-control no_border_radius input_wp" placeholder="Wpisz email"  ng-model="contForm.email" required />
					<span ng-show="contactForm.email.$dirty && contactForm.email.$invalid">	
						<span ng-show="contactForm.email.$error.required">Email jest niezbędny do późniejszego kontaktu.</span>
						<span ng-show="contactForm.email.$error.email">Wprowadziłeś(aś) niepoprawny adres email.</span>
					</span>
				</div>
			
				<div class="form-group">
					<input type="text" name="csubject" class="form-control no_border_radius input_wp" placeholder="Wpisz temat wiadomości" ng-model="contForm.subject" required ng-trim="true" ng-minlength="5" ng-maxlength="255"/>
					<span ng-show="contactForm.csubject.$dirty && contactForm.csubject.$invalid">	
						<span ng-show="contactForm.csubject.$error.required">Temat wiadomości jest wymagany.</span>
						<span ng-show="contactForm.csubject.$error.minlength">Temat musi zawierać conajmniej 5 znaków długości.</span>
						<span ng-show="contactForm.csubject.$error.maxlength">Temat może mieć maksymalnie 255 znaków długości.</span>
					</span>
				</div>
			
				<div class="form-group">
					<textarea name="cmessage" id="" cols="30" rows="10" class="form-control no_border_radius input_wp" placeholder="Wpisz treść wiadomości" ng-model="contForm.message" required ng-minlength="5"></textarea>
					<span ng-show="contactForm.cmessage.$dirty && contactForm.cmessage.$invalid">	
						<span ng-show="contactForm.cmessage.$error.required">Treść wiadomości jest wymagana.</span>
						<span ng-show="contactForm.cmessage.$error.minlength">Treść musi zawierać conajmniej 5 znaków długości.</span>
					</span>
				</div>

				<button ng-click="contact()" 
				ng-disabled="contactForm.$invalid" 
  				type="submit" class="btn btn-default no_border_radius btn_ctc">Wyślij wiadomość</button>
			
			</form>
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
        ftan = $('#footerAnim').height();
        $('.row_tile').css({'min-height': vph-vns-ftan + 'px'});
    }
</script>