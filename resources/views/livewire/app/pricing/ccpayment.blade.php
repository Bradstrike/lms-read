<div>
	@php
	$merchant_id  = '252196';
	$merchant_key   = '24Dde1ikbWxjFeDZ';
	$merchant_salt  = 'Gp1WSM5PyfMBBRXB';
	$email = auth()->user()->email;
	$user_name = auth()->user()->firstname . " " . auth()->user()->lastname;
	$user_phone = auth()->user()->phone;
	$merchant_ok_url = "https://odeme.meslekburda.com/kripto/basarili.php?";
	$merchant_fail_url = "https://odeme.meslekburda.com/kripto/basarisiz.php";

	$user_basket = base64_encode(json_encode(array(
		array($lesson->name, 1, 1),        
	)));
	if( isset( $_SERVER["HTTP_CLIENT_IP"] ) ) {
		$ip = $_SERVER["HTTP_CLIENT_IP"];
	} elseif( isset( $_SERVER["HTTP_X_FORWARDED_FOR"] ) ) {
		$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
	} else {
		$ip = $_SERVER["REMOTE_ADDR"];
	}
	srand(time());
	$merchant_oid = rand();

	$test_mode="0";

	$non_3d="0";

	$client_lang = "tr";

	$non3d_test_failed="0";

	if( isset( $_SERVER["HTTP_CLIENT_IP"] ) ) {
		$ip = $_SERVER["HTTP_CLIENT_IP"];
	} elseif( isset( $_SERVER["HTTP_X_FORWARDED_FOR"] ) ) {
		$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
	} else {
		$ip = $_SERVER["REMOTE_ADDR"];
	}

	$user_ip = $ip;

	$payment_amount = $lesson->price;
	$currency="TL";
	
	$payment_type = "card";

	$installment_count = "0";

	$post_url = "https://www.paytr.com/odeme";

	$hash_str = $merchant_id . $user_ip . $merchant_oid . $email . $payment_amount . $payment_type . "0" . $currency. $test_mode. $non_3d;
	$token = base64_encode(hash_hmac('sha256',$hash_str.$merchant_salt,$merchant_key,true));
	@endphp 
	<script type="text/javascript">
		document.addEventListener('DOMContentLoaded', () => {
			Inputmask({
				'mask': '9999 9999 9999 9999'
			}).mask("#card_number");

			function creditCardTypeFromNumber(cc) {

				cc = cc.replace(/[^\d]/g,'');

				let amex = new RegExp('^3[47][0-9]{13}$');
				let visa = new RegExp('^4[0-9]{12}(?:[0-9]{3})?$');
				let cup1 = new RegExp('^62[0-9]{14}[0-9]*$');
				let cup2 = new RegExp('^81[0-9]{14}[0-9]*$');

				let mastercard = new RegExp('^5[1-5][0-9]{14}$');
				let mastercard2 = new RegExp('^2[2-7][0-9]{14}$');

				let disco1 = new RegExp('^6011[0-9]{12}[0-9]*$');
				let disco2 = new RegExp('^62[24568][0-9]{13}[0-9]*$');
				let disco3 = new RegExp('^6[45][0-9]{14}[0-9]*$');

				let diners = new RegExp('^3[0689][0-9]{12}[0-9]*$');
				let jcb =  new RegExp('^35[0-9]{14}[0-9]*$');


				if (visa.test(cc)) {
					$('#card_icon').html('<img src="/assets/media/svg/card-logos/visa.svg" class="h-25px">');
					return 'cc-visa';
				}
				if (amex.test(cc)) {
					$('#card_icon').html('<img src="/assets/media/svg/card-logos/american-express.svg" class="h-25px">');
					return 'cc-amex';
				}
				if (mastercard.test(cc) || mastercard2.test(cc)) {
					$('#card_icon').html('<img src="/assets/media/svg/card-logos/mastercard.svg" class="h-25px">');
					return 'cc-mastercard';
				}
				if (disco1.test(cc) || disco2.test(cc) || disco3.test(cc)) {
					$('#card_icon').html('<i class="fa-solid fa-credit-card h-25px" ></i>');
					return 'cc-discover';
				}
				if (diners.test(cc)) {
					$('#card_icon').html('<i class="fa-solid fa-credit-card h-25px"></i>');
					return 'cc-diners-club';
				}
				if (jcb.test(cc)) {
					$('#card_icon').html('<i class="fa-solid fa-credit-card h-25px"></i>');
					return 'cc-jcb';
				}
				if (cup1.test(cc) || cup2.test(cc)) {
					$('#card_icon').html('<i class="fa-solid fa-credit-card h-25px"></i>');
					return 'cc-stripe';
				}
				console.log(cc);
				return undefined;
			}

			$("#card_number").on("keyup", function() {
				if($(this).val().length >= 6){
					console.log(creditCardTypeFromNumber($(this).val()));
				}
			});
		});
	</script>
	<div class="card">
		<div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
			<h1 class="fw-bold mb-5">Kredi Kartı ile Ödeme</h1>
			<div class="row">
				<div class="col-md-6">
					<form action="<?php echo $post_url;?>" method="post">
						<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
							<label class="fs-6 fw-semibold form-label mb-2">
								Kart Sahibi Adı: 	
							</label>
							<div class="w-lg-100 position-relative">
								<input type="text" class="form-control form-control-solid" name="cc_owner" id="cc_owner" placeholder="Kart Sahibinin Adı"/>
								<div class="position-absolute translate-middle-y top-50 end-0 me-3">

								</div>
							</div>
						</div>
						<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
							<label class="fs-6 fw-semibold form-label mb-2">
								Kart Numarası: 	
							</label>
							<div class="w-lg-100 position-relative">
								<input type="text" class="form-control form-control-solid" name="cc_owner" id="card_number" placeholder="Güvenlik Kodu"/>
								<div class="position-absolute translate-middle-y top-50 end-0 me-3" id="card_icon">
									<span class="svg-icon svg-icon-2hx">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M22 7H2V11H22V7Z" fill="currentColor" />
											<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="currentColor" />
										</svg>
									</span>
								</div>
							</div>
						</div>
						<div class="row mb-10">
							<div class="col-md-8 fv-row">
								<label class="required fs-6 fw-semibold form-label mb-2">Son Kullanma Tarihi</label>
								<div class="row fv-row">
									<div class="col-6">
										<select name="expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Ay">
											<option></option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
										</select>
									</div>
									<div class="col-6">
										<select name="expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Yıl">
											<option></option>
											<option value="2022">2022</option>
											<option value="2023">2023</option>
											<option value="2024">2024</option>
											<option value="2025">2025</option>
											<option value="2026">2026</option>
											<option value="2027">2027</option>
											<option value="2028">2028</option>
											<option value="2029">2029</option>
											<option value="2030">2030</option>
											<option value="2031">2031</option>
											<option value="2032">2032</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4 fv-row">
								<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
									<span class="required">CVV</span>
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter a card CVV code"></i>
								</label>
								<div class="position-relative">
									<input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="Güvenlik Kodu" name="cvv" />
									<div class="position-absolute translate-middle-y top-50 end-0 me-3">
										<span class="svg-icon svg-icon-2hx">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M22 7H2V11H22V7Z" fill="currentColor" />
												<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="currentColor" />
											</svg>
										</span>
									</div>
								</div>
							</div>
						</div>
						<input type="hidden" name="merchant_id" value="<?php echo $merchant_id;?>">
						<input type="hidden" name="user_ip" value="<?php echo $user_ip;?>">
						<input type="hidden" name="merchant_oid" value="<?php echo $merchant_oid;?>">
						<input type="hidden" name="email" value="<?php echo $email;?>">
						<input type="hidden" name="payment_type" value="<?php echo $payment_type;?>">
						<input type="hidden" name="payment_amount" value="<?php echo $payment_amount;?>">
						<input type="hidden" name="currency" value="<?php echo $currency;?>">
						<input type="hidden" name="test_mode" value="<?php echo $test_mode;?>">
						<input type="hidden" name="non_3d" value="<?php echo $non_3d;?>">
						<input type="hidden" name="merchant_ok_url" value="<?php echo $merchant_ok_url;?>">
						<input type="hidden" name="merchant_fail_url" value="<?php echo $merchant_fail_url;?>">
						<input type="hidden" name="user_name" value="{{ auth()->user()->firstname . ' ' . auth()->user()->surname }}">
						<input type="hidden" name="user_address" value="Hızlı Okuma Eğitimi">
						<input type="hidden" name="user_phone" value="{{ auth()->user()->phone }}">
						<input type="hidden" name="user_basket" value="<?php echo $user_basket; ?>">
						<input type="hidden" name="debug_on" value="1">
						<input type="hidden" name="client_lang" value="<?php echo $client_lang; ?>">
						<input type="hidden" name="paytr_token" value="<?php echo $token; ?>">
						<input type="hidden" name="non3d_test_failed" value="<?php echo $non3d_test_failed; ?>">
						<input type="hidden" name="installment_count" value="<?php echo $installment_count; ?>">
						<input type="hidden" name="card_type" value="<?php echo $card_type ?? ""; ?>">
						<input type="submit" class="btn btn-light-primary" value="Devam et">
					</form>
				</div>
				<div class="col-md-6">
					<div class="card h-md-100 shadow-sm">
						<div class="card-body d-flex flex-column flex-center">
							<div class="mb-2">
								<div class="d-flex flex-stack mb-3">
									<div class="me-3">
										<img src="/uploads/{{ $lesson->thumbnail }}" class="h-50px rounded me-5" alt="">
										<span class="fw-semibold text-gray-800 lh-lg">{{ $lesson->name }}</span>
									</div>
								</div>
								<p class="text-gray-600">
									{{ $lesson->description }}
									<hr>
									{{ $lesson->lectures()->count() }} adet eğitim içeriği ile birlikte
								</p>
								<p class="text-gray-500 fs-2">
									{{ $lesson->price }}₺
								</p>
								<div class="alert alert-primary">
									Ödemeniz tamamlandıktan sonra eğitime hemen başlayabilirsiniz.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>