<div>
	@push('styles')
	<style type="text/css">

		.dd {
			position: relative;
			display: block;
			margin: 0;
			padding: 0;
			list-style: none;
			font-size: 13px;
			line-height: 20px;
		}

		.dd-list {
			display: block;
			position: relative;
			margin: 0;
			padding: 0;
			list-style: none;
		}

		.dd-list .dd-list {
			padding-left: 30px;
		}

		.dd-collapsed .dd-list {
			display: none;
		}

		.dd-item,
		.dd-empty,
		.dd-placeholder {
			display: block;
			position: relative;
			margin: 0;
			padding: 0;
			min-height: 20px;
			font-size: 13px;
			line-height: 20px;
		}

		.dd-handle {
			display: block;
			height: 30px;
			margin: 5px 0;
			padding: 5px 10px;
			color: #333;
			text-decoration: none;
			font-weight: bold;
			border: 1px solid #ccc;
			background: #fafafa;
			background: -webkit-linear-gradient(top, #fafafa 0%, #eee 100%);
			background: -moz-linear-gradient(top, #fafafa 0%, #eee 100%);
			background: linear-gradient(top, #fafafa 0%, #eee 100%);
			-webkit-border-radius: 3px;
			border-radius: 3px;
			box-sizing: border-box;
			-moz-box-sizing: border-box;
		}

		.dd-handle:hover {
			color: #2ea8e5;
			background: #fff;
		}

		.dd-item > button {
			display: block;
			position: relative;
			cursor: pointer;
			float: left;
			width: 25px;
			height: 20px;
			margin: 5px 0;
			padding: 0;
			text-indent: 100%;
			white-space: nowrap;
			overflow: hidden;
			border: 0;
			background: transparent;
			font-size: 12px;
			line-height: 1;
			text-align: center;
			font-weight: bold;
		}

		.dd-item > button:before {
			content: '+';
			display: block;
			position: absolute;
			width: 100%;
			text-align: center;
			text-indent: 0;
		}

		.dd-item > button[data-action="collapse"]:before {
			content: '-';
		}

		.dd-placeholder,
		.dd-empty {
			margin: 5px 0;
			padding: 0;
			min-height: 30px;
			background: #f2fbff;
			border: 1px dashed #b6bcbf;
			box-sizing: border-box;
			-moz-box-sizing: border-box;
		}

		.dd-empty {
			border: 1px dashed #bbb;
			min-height: 100px;
			background-color: #e5e5e5;
			background-image: -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff), -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
			background-image: -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff), -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
			background-image: linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff), linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
			background-size: 60px 60px;
			background-position: 0 0, 30px 30px;
		}

		.dd-dragel {
			position: absolute;
			pointer-events: none;
			z-index: 9999;
		}

		.dd-dragel > .dd-item .dd-handle {
			margin-top: 0;
		}

		.dd-dragel .dd-handle {
			-webkit-box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, .1);
			box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, .1);
		}
		.nestable-lists {
			display: block;
			clear: both;
			width: 100%;
			border: 0;
		}

		#nestable-menu {
			padding: 0;
			margin: 20px 0;
		}

		#nestable-output,
		#nestable2-output {
			width: 100%;
			height: 7em;
			font-size: 0.75em;
			line-height: 1.333333em;
			font-family: Consolas, monospace;
			padding: 5px;
			box-sizing: border-box;
			-moz-box-sizing: border-box;
		}

		#nestable2 .dd-handle {
			color: #fff;
			border: 1px solid #999;
			background: #bbb;
			background: -webkit-linear-gradient(top, #bbb 0%, #999 100%);
			background: -moz-linear-gradient(top, #bbb 0%, #999 100%);
			background: linear-gradient(top, #bbb 0%, #999 100%);
		}

		#nestable2 .dd-handle:hover {
			background: #bbb;
		}

		#nestable2 .dd-item > button:before {
			color: #fff;
		}

		@media only screen and (min-width: 700px) {
			.dd {
				float: left;
				width: 100%;
			}
			.dd + .dd {
				margin-left: 2%;
			}
		}

		.dd-hover > .dd-handle {
			background: #2ea8e5 !important;
		}

		.dd3-content {
			display: block;
			height: 30px;
			margin: 5px 0;
			padding: 5px 10px 5px 40px;
			color: #333;
			text-decoration: none;
			font-weight: bold;
			border: 1px solid #ccc;
			background: #fafafa;
			background: -webkit-linear-gradient(top, #fafafa 0%, #eee 100%);
			background: -moz-linear-gradient(top, #fafafa 0%, #eee 100%);
			background: linear-gradient(top, #fafafa 0%, #eee 100%);
			-webkit-border-radius: 3px;
			border-radius: 3px;
			box-sizing: border-box;
			-moz-box-sizing: border-box;
		}

		.dd3-content:hover {
			color: #2ea8e5;
			background: #fff;
		}

		.dd-dragel > .dd3-item > .dd3-content {
			margin: 0;
		}

		.dd3-item > button {
			margin-left: 30px;
		}

		.dd3-handle {
			position: absolute;
			margin: 0;
			left: 0;
			top: 0;
			cursor: pointer;
			width: 30px;
			text-indent: 100%;
			white-space: nowrap;
			overflow: hidden;
			border: 1px solid #aaa;
			background: #ddd;
			background: -webkit-linear-gradient(top, #ddd 0%, #bbb 100%);
			background: -moz-linear-gradient(top, #ddd 0%, #bbb 100%);
			background: linear-gradient(top, #ddd 0%, #bbb 100%);
			border-top-right-radius: 0;
			border-bottom-right-radius: 0;
		}

		.dd3-handle:before {
			content: '≡';
			display: block;
			position: absolute;
			left: 0;
			top: 3px;
			width: 100%;
			text-align: center;
			text-indent: 0;
			color: #fff;
			font-size: 20px;
			font-weight: normal;
		}

		.dd3-handle:hover {
			background: #ddd;
		}
	</style>
	@endpush
	@push('scripts')
	<script src="/assets/plugins/custom/tinymce/tinymce.bundle.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Nestable/2012-10-15/jquery.nestable.min.js"></script>
	<script type="text/javascript">
		document.addEventListener('DOMContentLoaded', () => {

			var dialerElement = document.querySelector("#dialer");
			var dialerObject = new KTDialer(dialerElement, {
				min: 0,
				max: 50000,
				step: 10,
				prefix: "",
				suffix: ".99",
				decimals: 0
			});

			$('#price_input').on('change', function() {
				@this.price = $(this).val()
			})

			var options = {
				selector: "#description", 
				height : "480", 
				toolbar: ["styleselect fontselect fontsizeselect",
				"undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
				"bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code | save"],
				plugins : "advlist autolink link image lists charmap print preview code save",
				save_onsavecallback: () => {
					@this.description = tinymce.get("description").getContent()
				}
			};

			if ( KTThemeMode.getMode() === "dark" ) {
				options["skin"] = "oxide-dark";
				options["content_css"] = "dark";
			}

			tinymce.init(options);

			$('.dd').nestable({  });    
			$('.dd').on('change', function() {
				@this.lecture_placements = $('.dd').nestable('serialize');
			});

			Livewire.hook('element.updated', () => {
				var dialerElement = document.querySelector("#dialer");
				var dialerObject = new KTDialer(dialerElement, {
					min: 0,
					max: 50000,
					step: 10,
					prefix: "",
					suffix: ".99",
					decimals: 0
				});
				$('#price_input').on('change', function() {
					@this.price = $(this).val()
				})
				var options = {
					selector: "#description", 
					height : "480", 
					toolbar: ["styleselect fontselect fontsizeselect",
					"undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
					"bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code | save"],
					plugins : "advlist autolink link image lists charmap print preview code save",
					save_onsavecallback: () => {
						@this.description = tinymce.get("description").getContent()
					}
				};

				if ( KTThemeMode.getMode() === "dark" ) {
					options["skin"] = "oxide-dark";
					options["content_css"] = "dark";
				}

				tinymce.init(options);

				$('.dd').on('change', function() {
					@this.lecture_placements = $('.dd').nestable('serialize');
				});

			});
		});
	</script>
	@endpush
	<div class="form d-flex flex-column flex-lg-row">
		<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
			<div class="card card-flush py-4">
				<div class="card-header">
					<div class="card-title">
						<h2>Eğitim Logosu</h2>
					</div>
				</div>
				<div class="card-body text-center pt-0">
					<div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true" style="">
						<div class="image-input-wrapper w-150px h-150px" style="background-image: url(/uploads/{{ $lesson->image }})"></div>
						<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
							<i class="bi bi-pencil-fill fs-7"></i>
							<input type="file" name="avatar" accept=".png, .jpg, .jpeg" wire:model="logo" />
						</label>
					</div>
					<div class="text-muted fs-7">Sadece *.png, *.jpg ve *.jpeg uzantılı dosya yükleyiniz. {{ $test }}</div>
				</div>
			</div>
			<div class="card card-flush py-4">
				<div class="card-body pt-0">
					<label class="d-flex flex-stack mb-5 cursor-pointer">
						<span class="d-flex align-items-center me-2">
							<span class="symbol symbol-50px me-6">
								<span class="symbol-label bg-light-success">
									<span class="svg-icon svg-icon-1 svg-icon-success">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.5" d="M12.8956 13.4982L10.7949 11.2651C10.2697 10.7068 9.38251 10.7068 8.85731 11.2651C8.37559 11.7772 8.37559 12.5757 8.85731 13.0878L12.7499 17.2257C13.1448 17.6455 13.8118 17.6455 14.2066 17.2257L21.1427 9.85252C21.6244 9.34044 21.6244 8.54191 21.1427 8.02984C20.6175 7.47154 19.7303 7.47154 19.2051 8.02984L14.061 13.4982C13.7451 13.834 13.2115 13.834 12.8956 13.4982Z" fill="currentColor"/>
												<path d="M7.89557 13.4982L5.79487 11.2651C5.26967 10.7068 4.38251 10.7068 3.85731 11.2651C3.37559 11.7772 3.37559 12.5757 3.85731 13.0878L7.74989 17.2257C8.14476 17.6455 8.81176 17.6455 9.20663 17.2257L16.1427 9.85252C16.6244 9.34044 16.6244 8.54191 16.1427 8.02984C15.6175 7.47154 14.7303 7.47154 14.2051 8.02984L9.06096 13.4982C8.74506 13.834 8.21146 13.834 7.89557 13.4982Z" fill="currentColor"/>
											</svg>
										</svg>
									</span>
								</span>
							</span>
							<span class="d-flex flex-column">
								<span class="{{ $lesson->state == 1 ? "fw-bold": "fw-lighter" }} fs-6">Aktif</span>
							</span>
						</span>
						<span class="form-check form-check-custom form-check-success form-check-solid">
							<input class="form-check-input" type="radio" wire:model="state" name="state" value="1"/>
						</span>
					</label>
					<label class="d-flex flex-stack cursor-pointer">
						<span class="d-flex align-items-center me-2">
							<span class="symbol symbol-50px me-6">
								<span class="symbol-label bg-light-danger">
									<span class="svg-icon svg-icon-1 svg-icon-danger">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor"/>
												<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor"/>
											</svg>
										</svg>
									</span>
								</span>
							</span>
							<span class="d-flex flex-column">
								<span class="{{ $lesson->state == 0 ? "fw-bold": "fw-lighter" }} fs-6">Pasif</span>
							</span>
						</span>
						<span class="form-check form-check-custom form-check-danger form-check-solid">
							<input class="form-check-input" type="radio" wire:model="state" name="state" value="0"/>
						</span>
					</label>
				</div>
			</div>
			<div class="card card-flush py-4">
				<div class="card-header">
					<div class="card-title">
						<h2>Diğer Bilgiler</h2>
					</div>
				</div>
				<div class="card-body pt-0">
					<label class="form-label d-block">Etiketler</label>
					<input class="form-control mb-2" wire:model="tags" />
					<label class="form-label d-block">Fiyat</label>
					<div class="position-relative w-100" id="dialer">
						<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
									<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
								</svg>
							</span>
						</button>
						<input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" wire:model="price" id="price_input" value="{{ $price }}" />
						<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
									<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
									<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
								</svg>
							</span>
						</button>
					</div>
				</div>
			</div>            
		</div>
		<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
			<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
				<li class="nav-item">
					<a class="nav-link text-active-primary pb-4 {{ $selectedTab == "genel" ? "active" : "" }}" data-bs-toggle="tab" href="#genel" wire:click="$set('selectedTab', 'genel')">Genel</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-active-primary pb-4 {{ $selectedTab == "egitim" ? "active" : "" }}" data-bs-toggle="tab" href="#egitim" wire:click="$set('selectedTab', 'egitim')">Eğitim</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-active-primary pb-4 {{ $selectedTab == "siparisler" ? "active" : "" }}" data-bs-toggle="tab" href="#siparisler" wire:click="$set('selectedTab', 'siparisler')">Siparişler</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade {{ $selectedTab == "genel" ? "show active" : "" }}" id="genel" role="tab-panel">
					<div class="d-flex flex-column gap-7 gap-lg-10">
						<div class="card card-flush py-4">
							<div class="card-header">
								<div class="card-title">
									<h2>Genel</h2>
								</div>
							</div>
							<div class="card-body pt-0">
								<div class="mb-10 fv-row">
									<label class="required form-label">Eğitim Adı</label>
									<input type="text" wire:model="name" class="form-control mb-2" placeholder="Product name" />
								</div>
								<div>
									<label class="form-label">Eğitim Açıklaması</label>
									<textarea id="description" name="description" class="min-h-200px mb-2">{!! $description !!}</textarea>
								</div>
							</div>
						</div>
						<div class="card card-flush py-4" style="display: none;">
							<div class="card-header">
								<div class="card-title">
									<h2>Pricing</h2>
								</div>
							</div>
							<div class="card-body pt-0">
								<div class="d-flex flex-wrap gap-5">
									<div class="fv-row w-100 flex-md-root">
										<label class="required form-label">Tax Class</label>
										<select class="form-select mb-2" name="tax" data-control="select2" data-hide-search="true" data-placeholder="Select an option">
											<option></option>
											<option value="0">Tax Free</option>
											<option value="1" selected="selected">Taxable Goods</option>
											<option value="2">Downloadable Product</option>
										</select>
										<div class="text-muted fs-7">Set the product tax class.</div>
									</div>
									<div class="fv-row w-100 flex-md-root">
										<label class="form-label">VAT Amount (%)</label>
										<input type="text" class="form-control mb-2" value="35" />
										<div class="text-muted fs-7">Set the product VAT about.</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade {{ $selectedTab == "egitim" ? "show active" : "" }}" id="egitim" role="tab-panel">
					<div class="d-flex flex-column gap-7 gap-lg-10">
						<div class="card card-flush py-4">
							<div class="card-header">
								<div class="card-title">
									<h2>Eğitim İçeriği</h2>
								</div>
								<div class="card-toolbar">
									<button class="btn btn-outline btn-outline-primary btn-sm" id="new_lecture_button">Yeni ders ekleyin</button>
									<div id="new_lecture" class="bg-white" wire:ignore.self data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#new_lecture_button" data-kt-drawer-close="#new_lecture_close" data-kt-drawer-width="500px">
										<div class="card w-100 rounded-0">
											<div class="card-header pe-5">
												<div class="card-title">
													<div class="d-flex justify-content-center flex-column me-3">
														<a href="javascript:;" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 lh-1">Eğitim Oluştur</a>
													</div>
												</div>
												<div class="card-toolbar">
													<div class="btn btn-sm btn-icon btn-active-light-primary" id="new_lecture_close">
														<span class="svg-icon svg-icon-2">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
																<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor">
																</rect>
															</svg>
														</span>
													</div>
												</div>
											</div>
											<div class="card-body hover-scroll-overlay-y">
												<form class="mb-5">
													<div class="form-floating mb-7">
														<input type="text" class="form-control" id="form_name" wire:model="lecture_form.name" placeholder="Eğitim adı giriniz" />
														<label for="form_name">Eğitim Adı</label>
														@error('lecture_form.name')<div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>@enderror
													</div>
													<div class="form-floating mb-7">
														<input type="text" class="form-control" id="form_description" wire:model="lecture_form.description" placeholder="Eğitim açıklaması giriniz" />
														<label for="form_description">Eğitim Açıklaması</label>
														@error('lecture_form.description')<div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>@enderror
													</div>
													<div class="form-floating mb-7">
														<input type="number" class="form-control" id="form_placement" wire:model="lecture_form.placement" placeholder="Eğitim sırası belirleyiniz" />
														<label for="form_placement">Eğitim Sırası</label>
														@error('lecture_form.placement')<div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>@enderror
													</div>
													<div class="form-floating mb-7">
														<input type="text" class="form-control" id="form_icon" placeholder="Eğitim ikonu belirleyiniz" wire:model="lecture_form.icon" />
														<label for="form_icon">Eğitim Ikonu</label>
														<span class="text-muted">Bu alanda <a href="https://icons.getbootstrap.com/" target="_blank">Bootstrap Icons</a>, <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank">Font Awesome</a> ve <a href="https://icons8.com/line-awesome" target="_blank">Line Awesome</a> ikon kütüphaneleri kullanınız.</span>
														@error('lecture_form.icon')<div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>@enderror
													</div>
													<div class="fv-row mb-5">
														<select class="form-select form-control" wire:model="exercise_type">
															<option value="0">Lütfen bir egzersiz tipi seçin.</option>
															@foreach (App\Models\Exercise::all() as $element)
															<option value="{{ $element->id }}">{{ $element->name }} - {{ $element->type }}</option>
															@endforeach
														</select>
														@error('exercise_type')<div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>@enderror
													</div>
													<div class="fv-row mb-5">
														@if (!empty($exercise) && $exercise_type != 0)
														<div class="separator separator-content border-dark mt-15 mb-5"><span class="w-250px fw-bold">{{ $exercise->name }}</span></div>
														@php
														$config = $exercise->config;
														$config = str_replace(['[', ']', '\'', '"'], '', $config);
														$config = explode(",", $config);
														foreach ($config as $data) {
															$subconfig = explode("=>", $data);
															@endphp
															<div class="form-floating mb-7">
																<input type="text" wire:model="exercise_config.{{ $subconfig[0] }}" class="form-control" id="form_{{ $subconfig[0] }}" placeholder="{{ $subconfig[1] }} değeri giriniz" />
																<label for="form_{{ $subconfig[0] }}">{{ $subconfig[1] }}</label>
																@error('exercise_config')<div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>@enderror
															</div>
															@php
														}
														@endphp
														
														@endif
													</div>
													<button type="button" class="my-3 btn btn-outline btn-outline-primary btn-sm" wire:click="addLectureFromExercise">Eğitimi ekle</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body pt-0">
								<div class="cf nestable-lists">
									<div class="dd" id="nestable">
										<ol class="dd-list">
											@foreach ($lesson->lectures()->orderBy('placement', 'asc')->get() as $lecture)
											<li class="dd-item" data-id="{{ $lecture->id }}">
												<div class="dd-handle"><i class="{{ $lecture->icon }}"></i> {{ $lecture->name }}</div>
											</li>
											@endforeach
										</ol>
										<div class="alert alert-primary d-flex align-items-center p-5 mb-10 mt-10">
											<!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
											<span class="svg-icon svg-icon-2hx svg-icon-primary me-4">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
													<path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="currentColor"></path>
												</svg>
											</span>
											<!--end::Svg Icon-->
											<div class="d-flex flex-column">
												<span>Üst üste sıralama değiştirirseniz sıralama işlemi askıda kalabilir. Eğer üst üste değişiklik yapacaksanız lütfen birer saniye aralıklarla yapınız. Aksi halde sayfayı yenilemeniz gerekebilir.</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade {{ $selectedTab == "siparisler" ? "show active" : "" }}" id="siparisler" role="tab-panel">
					<div class="d-flex flex-column gap-7 gap-lg-10">
						<div class="card card-flush py-4">
							<div class="card-header">
								<div class="card-title">
									<h2>Siparişler</h2>
								</div>
								<div class="card-toolbar">
									<span class="fw-bold me-5">Toplam Sipariş: 82</span>
								</div>
							</div>
							<div class="card-body pt-0">
								<table class="table align-middle table-row-dashed gs-0 gy-4">
									<thead>
										<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
											<th class="min-w-125px">Müşteri</th>
											<th class="min-w-175px">İletişim Bilgisi</th>
											<th class="min-w-175px">Ödeme Bilgisi</th>
											<th class="min-w-100px text-end fs-7">Tarih</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<a href="javascript:;" class="d-flex text-dark text-gray-800 text-hover-primary">
													<div class="symbol symbol-circle symbol-25px me-3">
														<div class="symbol-label bg-light-danger">
															<span class="text-danger">M</span>
														</div>
													</div>
													<span class="fw-bold">Murat Güven</span>
												</a>
											</td>
											<td class="text-gray-600 fw-bold">
												0552 241 09 05
												<br/>
												muratguven@klynapps.com
											</td>
											<td class="text-gray-600 fw-bold">
												<img src="/assets/media/svg/card-logos/visa.svg" class="w-50px" alt="">
												Kredi Kartı
											</td>
											<td class="text-end">
												<span class="fw-semibold text-muted">2 saat önce</span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
