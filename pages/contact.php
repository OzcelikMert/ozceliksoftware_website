<section class="bgclass">
	<div class="container-contact100">

		<button class="contact100-btn-show" style="border:none !important;">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
		</button>

		<div class="wrap-contact100">
			<button class="contact100-btn-hide">
				<i class="fa fa-close" aria-hidden="true"></i>
			</button>

			<form class="contact100-form validate-form" name="contactForm" id="contactForm" method="POST" action="" novalidate="novalidate"> 
				<span class="contact100-form-title">
					İletişim
				</span>

				<div class="wrap-input100 rs1-wrap-input100 validate-input form-field" data-validate="Adınızı Yazın">
					<span class="label-input100">Adınız</span>
					<input class="input100 full-width" type="text" name="contactName" id="contactName" placeholder="Adınızı Girin" value="" required="" aria-required="true">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input form-field" data-validate = "Email Adresini Doğru Girin: ornek@abc.xyz">
					<span class="label-input100">Email Adresiniz</span>
					<input class="input100 full-width" type="text" name="contactEmail" id="contactEmail" placeholder="Email Adresinizi Girin" value="" required="" aria-required="true">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input form-field" data-validate = "Mesaj Yazın">
					<span class="label-input100">Mesajınız</span>
					<textarea class="input100 full-width" name="contactMessage" id="contactMessage" placeholder="Mesajınızı Buraya Yazın..." required="" aria-required="true"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn form-field">
					<button class="contact100-form-btn full-width" style="border: none !important;">
						<span>
							Gönder
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
					<div class="submit-loader">
                            <div class="text-loader">Gönderiliyor...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
				</div>
			</form>

			<div class="message-warning">
                    Hata Oluştu Lütfen Tekrar Deneyin.
                </div> 
            
                <!-- contact-success -->
                <div class="message-success">
                    Mesajınız Başarılı bir şekilde gönderildi, Teşekkür Ederiz!<br>
				</div>
				
			<span class="contact100-more">
				Destek Ekibimiz sizler için 7/24 <font color="lime">aktif</font>. <br/>Telefon Numarası : <span class="contact100-more-highlight">0123 123 1231</span>
			</span>
		</div>
	</div>
</section>