@extends('layouts.master')

@section('content')
<div class="card mb-5 mb-xl-8">
	<!--begin::Header-->
	<div class="card-header border-0 pt-5 pb-5">
		<h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold fs-3 mb-1">Kurum Oluştur</span>
			<span class="text-muted mt-1 fw-semibold fs-7">Yeni kurum ve yetkili oluşturma</span>
		</h3>
		<div class="card-toolbar">
		</div>
	</div>
	<!--end::Header-->
	<div class="card-body">
		
		<!--begin::Stepper-->
		<div class="stepper stepper-pills stepper-column d-flex flex-column flex-lg-row" id="step">
			<div class="d-flex flex-row-auto w-100 w-lg-300px">
				<!--begin::Nav-->
				<div class="stepper-nav flex-cente">
					<!--begin::Hesap Türü-->
					<div class="stepper-item me-5 current" data-kt-stepper-element="nav">
						<div class="stepper-wrapper d-flex align-items-center">
							<div class="stepper-icon w-40px h-40px">
								<i class="stepper-check fas fa-check"></i>
								<span class="stepper-number">1</span>
							</div>
							<div class="stepper-label">
								<h3 class="stepper-title">
									Adım 1
								</h3>
								<div class="stepper-desc">
									Hesap Türü
								</div>
							</div>
						</div>
						<div class="stepper-line h-40px"></div>
					</div>
					<!--end::Hesap Türü-->

					<!--begin::Kurum Bilgileri-->
					<div class="stepper-item me-5" data-kt-stepper-element="nav">
						<div class="stepper-wrapper d-flex align-items-center">
							<div class="stepper-icon w-40px h-40px">
								<i class="stepper-check fas fa-check"></i>
								<span class="stepper-number">2</span>
							</div>
							<div class="stepper-label">
								<h3 class="stepper-title">
									Adım 2
								</h3>

								<div class="stepper-desc">
									Kurum Bilgileri
								</div>
							</div>
						</div>
						<div class="stepper-line h-40px"></div>
						<!--end::Line-->
					</div>
					<!--end::Kurum Bilgileri-->

					<!--begin::Yetkili Bilgileri-->
					<div class="stepper-item me-5" data-kt-stepper-element="nav">
						<div class="stepper-wrapper d-flex align-items-center">
							<div class="stepper-icon w-40px h-40px">
								<i class="stepper-check fas fa-check"></i>
								<span class="stepper-number">3</span>
							</div>
							<div class="stepper-label">
								<h3 class="stepper-title">
									Adım 3
								</h3>

								<div class="stepper-desc">
									Yetkili Bilgileri
								</div>
							</div>
						</div>
						<div class="stepper-line h-40px"></div>
					</div>
					<!--end::Yetkili Bilgileri-->

					<!--begin::Ödeme Bilgileri-->
					<div class="stepper-item me-5" data-kt-stepper-element="nav">
						<div class="stepper-wrapper d-flex align-items-center">
							<div class="stepper-icon w-40px h-40px">
								<i class="stepper-check fas fa-check"></i>
								<span class="stepper-number">4</span>
							</div>
							<div class="stepper-label">
								<h3 class="stepper-title">
									Adım 4
								</h3>

								<div class="stepper-desc">
									Ödeme Bilgileri
								</div>
							</div>
						</div>
						<div class="stepper-line h-40px"></div>
					</div>
					<!--end::Ödeme Bilgileri-->

					<!--begin::Hesap Bilgileri-->
					<div class="stepper-item me-5" data-kt-stepper-element="nav">
						<div class="stepper-wrapper d-flex align-items-center">
							<div class="stepper-icon w-40px h-40px">
								<i class="stepper-check fas fa-check"></i>
								<span class="stepper-number">5</span>
							</div>
							<div class="stepper-label">
								<h3 class="stepper-title">
									Adım 5
								</h3>
								<div class="stepper-desc">
									Hesap Bilgileri
								</div>
							</div>
						</div>
					</div>
					<!--end::Hesap Bilgileri-->

				</div>
			</div>
			<div class="flex-row-fluid">
				<!--begin::Form-->
				<form class="form w-lg-700px" id="step_form">
					{!! csrf_field() !!}
					<!--begin::Group-->
					<div class="mb-5">
						<!--begin::Hesap Türü-->
						<div class="flex-column current" data-kt-stepper-element="content">
							<div class="fv-row">
								<!--begin::Option-->
								<input type="radio" class="btn-check" name="type" value="Kredili" id="kt_type_option_1"/>
								<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5" for="kt_type_option_1">
									<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
									<span class="svg-icon svg-icon-4x me-4">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M22 7H2V11H22V7Z" fill="currentColor"/>
											<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="currentColor"/>
										</svg>
									</span>
									<!--end::Svg Icon-->

									<span class="d-block fw-semibold text-start">
										<span class="text-dark fw-bold d-block fs-3">Kredili Kurum</span>
										<span class="text-muted fw-semibold fs-6">
											Kredili Kurum, önceden kurum hesabına kredi alıp varolan kredisi üzerinden öğrenci ekleyebilir. Kredisi tükendiği takdirde belirlenen tutara kadar eksi bakiyeye kadar düşebilir. Minimum kredi tutarına geldiği zaman yeniden kredi yüklemesi yapmalıdır veya tanımlanan kredi kartı üzerinden otomatik olarak minimum kredi miktarı kadar yükleme yapılır.
										</span>
									</span>
								</label>
								<!--end::Option-->

								<!--begin::Option-->
								<input type="radio" class="btn-check" name="type" value="Ön Ödemeli" checked="checked" id="kt_type_option_2"/>
								<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="kt_type_option_2">
									<!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
									<span class="svg-icon svg-icon-4x me-4">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z" fill="currentColor"/>
											<path opacity="0.3" d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z" fill="currentColor"/>
											<path d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z" fill="currentColor"/>
										</svg>
									</span>
									<!--end::Svg Icon-->

									<span class="d-block fw-semibold text-start">
										<span class="text-dark fw-bold d-block fs-3">Ön Ödemeli Kurum</span>
										<span class="text-muted fw-semibold fs-6">Ön ödemeli kurum hesabına yüklediği kredi kadar öğrenci ekleyebilir. Kredi yüklemesini hesabından yapabilir. Kredisi sıfırın altına düşmez.</span>
									</span>
								</label>
								<!--end::Option-->
							</div>
						</div>
						<!--begin::Hesap Türü-->

						<!--begin::Kurum Bilgileri-->
						<div class="flex-column" data-kt-stepper-element="content">
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label required ">Kurum Resmi Adı</label>
								<!--end::Label-->

								<!--begin::Input-->
								<input type="text" class="form-control form-control-solid" name="title" placeholder="" value=""/>
								<!--end::Input-->
							</div>
							<!--end::Input group-->

							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label">Kurum Adresi</label>
								<!--end::Label-->

								<!--begin::Input-->
								<textarea class="form-control form-control-solid" name="address" data-kt-autosize="true"></textarea>
								<!--end::Input-->
							</div>
							<!--end::Input group-->

							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label">Vergi Dairesi</label>
								<!--end::Label-->

								<!--begin::Input-->
								<input type="text" class="form-control form-control-solid" name="tax_department" placeholder="" value=""/>
								<!--end::Input-->
							</div>
							<!--end::Input group-->

							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label">Vergi Numarası</label>
								<!--end::Label-->

								<!--begin::Input-->
								<input type="text" class="form-control form-control-solid" name="tax_number" placeholder="" value=""/>
								<!--end::Input-->
							</div>
							<!--end::Input group-->
						</div>
						<!--begin::Kurum Bilgileri-->

						<!--begin::Yetkili Bilgileri-->
						<div class="flex-column" data-kt-stepper-element="content">
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label">Yetkili İsim</label>
								<!--end::Label-->

								<!--begin::Input-->
								<input type="text" class="form-control form-control-solid" name="name" placeholder="" value=""/>
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label">Yetkili Soyisim</label>
								<!--end::Label-->

								<!--begin::Input-->
								<input type="text" class="form-control form-control-solid" name="surname" placeholder="" value=""/>
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label">Yetkili Telefonu</label>
								<!--end::Label-->

								<!--begin::Input-->
								<input type="text" class="form-control form-control-solid" name="phone" placeholder="" value=""/>
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label">Yetkili E-Posta Adresi</label>
								<!--end::Label-->

								<!--begin::Input-->
								<input type="text" class="form-control form-control-solid" name="email" placeholder="" value=""/>
								<!--end::Input-->
							</div>
							<!--end::Input group-->

							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label"></label>
								<!--end::Label-->

								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<input class="form-check-input" type="checkbox" name="admin_create" checked="checked" value="1"/>
									<span class="form-check-label">
										Yetkili Hesabını Oluştur
									</span>
								</label>
								<div class="alert alert-primary mt-5">Daha sonradan başka yetkili hesabı oluşturabilirsiniz</div>
								<!--end::Switch-->
							</div>
							<!--end::Input group-->
						</div>
						<!--begin::Yetkili Bilgileri-->

						<!--begin::Ödeme Bilgileri-->
						<div class="flex-column" data-kt-stepper-element="content">
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-7 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
										<span class="required">Kartın Üstündeki İsim Soyisim</span>
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Kart sahibinin adı soyadı"></i>
									</label>
									<!--end::Label-->
									<input type="text" class="form-control form-control-solid" placeholder="" name="holder_name" />
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-7 fv-row">
									<!--begin::Label-->
									<label class="required fs-6 fw-semibold form-label mb-2">Kart Numarası</label>
									<!--end::Label-->
									<!--begin::Input wrapper-->
									<div class="position-relative">
										<!--begin::Input-->
										<input type="text" class="form-control form-control-solid" placeholder="Kart numarasını giriniz" name="card_number" />
										<!--end::Input-->
										<!--begin::Card logos-->
										<div class="position-absolute translate-middle-y top-50 end-0 me-5">
											<img src="/assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
											<img src="/assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
											<img src="/assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
										</div>
										<!--end::Card logos-->
									</div>
									<!--end::Input wrapper-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row mb-10">
									<!--begin::Col-->
									<div class="col-md-8 fv-row">
										<!--begin::Label-->
										<label class="required fs-6 fw-semibold form-label mb-2">Son Kullanma Tarihi</label>
										<!--end::Label-->
										<!--begin::Row-->
										<div class="row fv-row">
											<!--begin::Col-->
											<div class="col-6">
												<select name="month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Ay">
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
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-6">
												<select name="year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Yıl">
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
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-4 fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
											<span class="required">CVV</span>
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Kartın arkasındaki güvenlik kodu"></i>
										</label>
										<!--end::Label-->
										<!--begin::Input wrapper-->
										<div class="position-relative">
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="cvv" />
											<!--end::Input-->
											<!--begin::CVV icon-->
											<div class="position-absolute translate-middle-y top-50 end-0 me-3">
												<!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
												<span class="svg-icon svg-icon-2hx">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M22 7H2V11H22V7Z" fill="currentColor" />
														<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::CVV icon-->
										</div>
										<!--end::Input wrapper-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
							</div>
							<!--end::Input group-->
						</div>
						<!--begin::Ödeme Bilgileri-->

						<!--begin::Hesap Bilgileri-->
						<div class="flex-column" data-kt-stepper-element="content">
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label">
									Başlangıç Kredisi
								</label>
								<!--begin::Dialer-->
								<div class="position-relative"
								    data-kt-dialer="true"
								    data-kt-dialer-min="5"
								    data-kt-dialer-max="99999"
								    data-kt-dialer-step="5"
								    data-kt-dialer-prefix="TRY"
								    data-kt-dialer-decimals="2">

								    <!--begin::Decrease control-->
								    <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
								        <span class="svg-icon svg-icon-1">
								        	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
												<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
											</svg>
								        </span>
								    </button>
								    <!--end::Decrease control-->

								    <!--begin::Input control-->
								    <input type="text" class="form-control form-control-solid border-0 ps-12" id="balance" data-kt-dialer-control="input" placeholder="Amount" name="balance" readonly value="TRY5.00" />
								    <!--end::Input control-->

								    <!--begin::Increase control-->
								    <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
								        <span class="svg-icon svg-icon-1">
								        	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
												<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
												<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
											</svg>
										</span>
								    </button>
								    <!--end::Increase control-->
								</div>
								<!--end::Dialer-->
							</div>
							<!--end::Input group-->

							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label">
									Öğrenci Başı Kredi Harcaması (CPA)
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Öğrenci başına harcanacak kredi. CPA - Credit Per Account"></i>
								</label>
								<!--end::Label-->

								<!--begin::Dialer-->
								<div class="position-relative"
								    data-kt-dialer="true"
								    data-kt-dialer-min="1"
								    data-kt-dialer-max="99999"
								    data-kt-dialer-step="1"
								    data-kt-dialer-prefix="TRY"
								    data-kt-dialer-decimals="2">

								    <!--begin::Decrease control-->
								    <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
								        <span class="svg-icon svg-icon-1">
								        	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
												<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
											</svg>
								        </span>
								    </button>
								    <!--end::Decrease control-->

								    <!--begin::Input control-->
								    <input type="text" class="form-control form-control-solid border-0 ps-12" id="ppn" data-kt-dialer-control="input" placeholder="Amount" name="ppn" readonly value="TRY1.00" />
								    <!--end::Input control-->

								    <!--begin::Increase control-->
								    <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
								        <span class="svg-icon svg-icon-1">
								        	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
												<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
												<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
											</svg>
										</span>
								    </button>
								    <!--end::Increase control-->
								</div>
								<!--end::Dialer-->
							</div>
							<!--end::Input group-->
						</div>
						<!--begin::Hesap Bilgileri-->

					</div>
					<!--end::Group-->

					<!--begin::Actions-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="me-2">
							<button type="button" class="btn btn-light btn-active-light-primary" data-kt-stepper-action="previous">
								Geri
							</button>
						</div>
						<!--end::Wrapper-->

						<!--begin::Wrapper-->
						<div>
							<button type="button" class="btn btn-primary" id="step_submit" data-kt-stepper-action="submit">
								<span class="indicator-label">
									Değişiklikleri Kaydet
								</span>
								<span class="indicator-progress">
									Lütfen bekleyiniz... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
								</span>
							</button>

							<button type="button" class="btn btn-primary" data-kt-stepper-action="next">
								İleri
							</button>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Actions-->
				</form>
				<!--end::Form-->
			</div>
		</div>
	</div>
</div>


@endsection

@section('scripts')
<script type="text/javascript">
	$(function() {
		var form = document.querySelector("#step_form");

		var validator = FormValidation.formValidation(
			form,
			{
				fields: {
					'title': {
						validators: {
							notEmpty: {
								message: 'Kurum adı zorunludur.'
							}
						}
					},
				},

				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: '.fv-row',
						eleInvalidClass: '',
						eleValidClass: ''
					})
				}
			}
			);

		// Stepper lement
		var element = document.querySelector("#step");

		// Initialize Stepper
		var stepper = new KTStepper(element);

		// Handle next step
		stepper.on("kt.stepper.next", function (stepper) {
			stepper.goNext();
		});

		const submitButton = document.getElementById('step_submit');
		// Handle next step
		submitButton.addEventListener('click', function (e) {
			// Validate form before submit
			if (validator) {
				validator.validate().then(function (status) {
					if (status == 'Valid') {
						submitButton.setAttribute('data-kt-indicator', 'on');
						submitButton.disabled = true;
						setTimeout(function () {
		                    // Remove loading indication
		                    submitButton.removeAttribute('data-kt-indicator');

		                    // Enable button
		                    submitButton.disabled = false;

		                    // Show popup confirmation
		                    Swal.fire({
		                    	text: "Kurum başarıyla eklendi. Yönlendiriliyorsunuz...",
		                    	icon: "success",
		                    	buttonsStyling: false,
		                    	confirmButtonText: "Tamam",
		                    	customClass: {
		                    		confirmButton: "btn btn-primary"
		                    	}
		                    });

		                    form.submit(); // Submit form
		                }, 2000);
					}
				});
			}
		})

		// Handle previous step
		stepper.on("kt.stepper.previous", function (stepper) {
		    stepper.goPrevious(); // go previous step
		});
	})
</script>
@endsection

@section('styles')

@endsection