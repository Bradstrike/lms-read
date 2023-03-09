<div>
	<div wire:loading>
		<h1>
			Sayfa yükleniyor...
		</h1>
	</div>
	<div>
		<script>
			document.addEventListener('livewire:load', function() {
				var i = document.getElementById("kurum_ozet_grafik")
				var n = KTUtil.css(i, "height");
				var chart = new ApexCharts(
					i,
					{
						series: [
						{ name: "Öğrenci Girişleri", data: [50, 70, 90, 117, 80, 65, 80, 90, 115, 95, 70, 84] },
						{ name: "Öğrenci Seviyesi", data: [50, 70, 90, 117, 80, 65, 70, 90, 115, 95, 70, 84] },
						],
						chart: { fontFamily: "inherit", type: "bar", height: n, toolbar: { show: !1 } },
						plotOptions: { bar: { horizontal: !1, columnWidth: ["35%"], borderRadius: 6 } },
						legend: { show: !1 },
						dataLabels: { enabled: !1 },
						stroke: { show: !0, width: 2, colors: ["transparent"] },
						xaxis: {
							categories: ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"],
							axisBorder: { show: !1 },
							axisTicks: { show: !1 },
							labels: { style: { colors: KTUtil.getCssVariableValue("--kt-gray-400"), fontSize: "12px" } },
						},
						yaxis: { labels: { style: { colors: KTUtil.getCssVariableValue("--kt-gray-400"), fontSize: "12px" } } },
						fill: { opacity: 1 },
						states: { normal: { filter: { type: "none", value: 0 } }, hover: { filter: { type: "none", value: 0 } }, active: { allowMultipleDataPointsSelection: !1, filter: { type: "none", value: 0 } } },
						tooltip: {
							style: { fontSize: "12px" },
						},
						colors: [KTUtil.getCssVariableValue("--kt-primary"), KTUtil.getCssVariableValue("--kt-gray-200")],
						grid: { borderColor: KTUtil.getCssVariableValue("--kt-gray-200"), strokeDashArray: 4, yaxis: { lines: { show: !0 } } },
					},
					);
				chart.render();
			});
		</script>
		<div class="card mb-5 mb-xl-10">
			<div class="card-body pt-9 pb-0">
				<!--begin::Details-->
				<div class="d-flex flex-wrap flex-sm-nowrap mb-3">
					<!--begin: Pic-->
					<div class="me-7 mb-4">
						<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
							<img src="/assets/media/avatars/300-11.jpg" alt="image">
						</div>
					</div>
					<!--end::Pic-->
					<!--begin::Info-->
					<div class="flex-grow-1">
						<!--begin::Title-->
						<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
							<!--begin::User-->
							<div class="d-flex flex-column">
								<!--begin::Name-->
								<div class="d-flex align-items-center mb-2">
									<a href="javascript:;" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{ $branch->title }}</a>
								</div>
								<!--end::Name-->
								<!--begin::Info-->
								<div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
									<a href="javascript:;" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
										<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
										<span class="svg-icon svg-icon-4 me-1">
											<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor"></path>
												<path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor"></path>
												<rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor"></rect>
											</svg>
										</span>
										<!--end::Svg Icon-->
										{{ $branch->name . ' ' . $branch->surname }}
									</a>
									<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
										<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
										<span class="svg-icon svg-icon-4 me-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor"></path>
												<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor"></path>
											</svg>
										</span>
										<!--end::Svg Icon-->
										{{ $branch->address }}
									</a>
									<a href="mailto:{{ $branch->email }}" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
										<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
										<span class="svg-icon svg-icon-4 me-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"></path>
												<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"></path>
											</svg>
										</span>
										<!--end::Svg Icon-->
										{{ $branch->email }}
									</a>
								</div>
								<!--end::Info-->
							</div>
							<!--end::User-->
							<!--begin::Actions-->
							<div class="d-flex my-4">

								<a href="tel:{{ $branch->phone }}" class="btn btn-sm btn-primary me-2">
									<i class="la la-phone"></i>
									Kurum Yetkilisini Ara
								</a>
								<!--begin::Menu-->
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Title-->
						<!--begin::Stats-->
						<div class="d-flex flex-wrap flex-stack">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column flex-grow-1 pe-8">
								<!--begin::Stats-->
								<div class="d-flex flex-wrap">
									<!--begin::Stat-->
									<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
										<!--begin::Number-->
										<div class="d-flex align-items-center">
											<div class="fs-2 fw-bold">{{ $branch->balance }}</div>
										</div>
										<!--end::Number-->
										<!--begin::Label-->
										<div class="fw-semibold fs-6 text-gray-400">Kurum Bakiyesi</div>
										<!--end::Label-->
									</div>
									<!--end::Stat-->
									<!--begin::Stat-->
									<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
										<!--begin::Number-->
										<div class="d-flex align-items-center">
											<div class="fs-2 fw-bold">{{ $branch->ppn }}</div>
										</div>
										<!--end::Number-->
										<!--begin::Label-->
										<div class="fw-semibold fs-6 text-gray-400">Öğrenci Başı Maliyet</div>
										<!--end::Label-->
									</div>
									<!--end::Stat-->
									<!--begin::Stat-->
									<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
										<!--begin::Number-->
										<div class="d-flex align-items-center">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
											<span class="me-2">
												<i class="la la-user text-success fs-1"></i>
											</span>
											<!--end::Svg Icon-->
											<div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%" data-kt-initialized="1">{{ $branch->users()->count() }}</div>
										</div>
										<!--end::Number-->
										<!--begin::Label-->
										<div class="fw-semibold fs-6 text-gray-400">Adet Kullanıcı</div>
										<!--end::Label-->
									</div>
									<!--end::Stat-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Progress-->
							<div class="d-flex w-200px w-sm-300px flex-column mt-3">
								<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
									<!--begin::Number-->
									<div class="d-flex align-items-center">
										<div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%" data-kt-initialized="1">{{ $branch->type }}</div>
									</div>
									<!--end::Number-->
									<!--begin::Label-->
									<div class="fw-semibold fs-6 text-gray-400">Kurum</div>
									<!--end::Label-->
								</div>
							</div>
							<!--end::Progress-->
						</div>
						<!--end::Stats-->
					</div>
					<!--end::Info-->
				</div>
				<!--end::Details-->
				<!--begin::Navs-->
				<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
					<!--begin::Nav item-->
					<li class="nav-item mt-2">
						<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="javascript:;">Genel</a>
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item mt-2">
						<a class="nav-link text-active-primary ms-0 me-10 py-5" href="javascript:;">Kullanıcılar</a>
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item mt-2">
						<a class="nav-link text-active-primary ms-0 me-10 py-5" href="javascript:;">Öğrenciler</a>
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item mt-2">
						<a class="nav-link text-active-primary ms-0 me-10 py-5" href="javascript:;">Yetkilendirme</a>
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item mt-2">
						<a class="nav-link text-active-primary ms-0 me-10 py-5" href="javascript:;">Bakiye Geçmişi</a>
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item mt-2">
						<a class="nav-link text-active-primary ms-0 me-10 py-5" href="javascript:;">Modül Yetkisi</a>
					</li>
					<!--end::Nav item-->
				</ul>
				<!--begin::Navs-->
			</div>
		</div>
		<div class="row g-5">
			<div class="col-lg-8">
				<!-- Kurum Özeti -->
				<div class="card card-xxl-stretch mb-5 mb-xl-10">
					<!--begin::Header-->
					<div class="card-header card-header-stretch">
						<!--begin::Title-->
						<div class="card-title">
							<h3 class="m-0 text-gray-900">Kurum Özeti</h3>
						</div>
						<!--end::Title-->
						<!--begin::Toolbar-->
						<div class="card-toolbar">
						</div>
						<!--end::Toolbar-->
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body pt-7 pb-0 px-0">
						<!--begin::Row-->
						<div class="row p-0 mb-5 px-9">
							<!--begin::Col-->
							<div class="col">
								<div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
									<span class="fs-4 fw-semibold text-success d-block">Öğrenci Sayısı</span>
									<span class="fs-2hx fw-bold text-gray-900" data-kt-countup="true" data-kt-countup-value="36899">0</span>
								</div>
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col">
								<div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
									<span class="fs-4 fw-semibold text-primary d-block">Öğrenci Oturum Süresi</span>
									<span class="fs-2hx fw-bold text-gray-900" data-kt-countup="true" data-kt-countup-value="72">0</span>dk/ort
								</div>
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col">
								<div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
									<span class="fs-4 fw-semibold text-danger d-block">Oturum Açmayan Öğrenci</span>
									<span class="fs-2hx fw-bold text-gray-900" data-kt-countup="true" data-kt-countup-value="291">0</span>
								</div>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
						<!--begin::Container-->
						<div class="pt-2">
							<!--begin::Tabs-->
							<div class="d-flex align-items-center pb-6 px-9">
								<!--begin::Title-->
								<h3 class="m-0 text-gray-900 flex-grow-1">Aktivite Özet Grafiği</h3>

							</div>
							<!--end::Tabs-->
							<div class="px-3">
								<div id="kurum_ozet_grafik" style="height: 300px"></div>
							</div>
						</div>
						<!--end::Container-->
					</div>
					<!--end::Body-->
				</div>
				<!-- // Kurum Bilgileri -->
			</div>
			<div class="col-lg-4">
				<div class="card card-stretch mb-5">
		            <div class="card-header card-header-stretch">
						<!--begin::Title-->
						<div class="card-title">
							<h3 class="m-0 text-gray-900">Genel Kurum İstatistikleri</h3>
						</div>
						<!--end::Title-->
						<!--begin::Toolbar-->
						<div class="card-toolbar">
						</div>
						<!--end::Toolbar-->
					</div>
		            <div class="card-body">
		                <div class="d-flex align-items-center bg-gray-100 rounded p-5 mb-7">
							<div class="flex-grow-1 me-2">
								<a href="javascript:;" class="fw-bold text-gray-800 text-hover-primary fs-6">Öğrenci Sayısı</a>
							</div>
							<span class="fw-bold text-muted py-1" data-kt-countup="true" data-kt-countup-value="{{ $branch->users->count() }}">0</span>
						</div>
		                <div class="d-flex align-items-center bg-gray-100 rounded p-5 mb-7">
							<div class="flex-grow-1 me-2">
								<a href="javascript:;" class="fw-bold text-gray-800 text-hover-primary fs-6">Kullanıcı Sayısı</a>
							</div>
							<span class="fw-bold text-muted py-1" data-kt-countup="true" data-kt-countup-value="350">0</span>
						</div>
		                <div class="d-flex align-items-center bg-gray-100 rounded p-5 mb-7">
							<div class="flex-grow-1 me-2">
								<a href="javascript:;" class="fw-bold text-gray-800 text-hover-primary fs-6">Kullanıcı Oturum Süresi Ortalaması</a>
							</div>
							<span class="fw-bold text-muted py-1"><span data-kt-countup="true" data-kt-countup-value="77">0</span>dk</span>
						</div>
		                <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-7">
							<div class="flex-grow-1 me-2">
								<a href="javascript:;" class="fw-bold text-gray-800 text-hover-primary fs-6">Hiç Oturum Açmayan Kullanıcı</a>
							</div>
							<span class="fw-bold text-muted py-1" data-kt-countup="true" data-kt-countup-value="350">0</span>
						</div>
		                <div class="d-flex align-items-center bg-gray-100 rounded p-5 mb-7">
							<div class="flex-grow-1 me-2">
								<a href="javascript:;" class="fw-bold text-gray-800 text-hover-primary fs-6">Modül Sayısı</a>
							</div>
							<span class="fw-bold text-muted py-1" data-kt-countup="true" data-kt-countup-value="8">0</span>
						</div>
		                <div class="d-flex align-items-center bg-gray-100 rounded p-5 mb-7">
							<div class="flex-grow-1 me-2">
								<a href="javascript:;" class="fw-bold text-gray-800 text-hover-primary fs-6">Harcanan Bakiye</a>
							</div>
							<span class="fw-bold text-muted py-1"><span data-kt-countup="true" data-kt-countup-value="1574">0</span>₺</span>
						</div>
		            </div>
		        </div>
			</div> 
		</div>
		<div class="row">
			<div class="col-lg-8">
				<!-- Kurum Bilgileri -->
				<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
					<!--begin::Card header-->
					<div class="card-header cursor-pointer">
						<!--begin::Card title-->
						<div class="card-title m-0">
							<h3 class="fw-bold m-0">Kurum Detayları</h3>
						</div>
						<!--end::Card title-->
						<!--begin::Action-->
						<a href="javascript:;" class="btn btn-primary align-self-center">Kurumu Düzenle</a>
						<!--end::Action-->
					</div>
					<!--begin::Card header-->
					<!--begin::Card body-->
					<div class="card-body p-9">
						<!--begin::Row-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-semibold text-muted">Ticari Ünvan</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<span class="fw-bold fs-6 text-gray-800">{{ $branch->title }}</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
						<!--begin::Input group-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-semibold text-muted">Yetkili</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<span class="fw-semibold text-gray-800 fs-6">{{ $branch->name . ' ' . $branch->surname }}</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-semibold text-muted">
								İletişim Numarası 
							</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 d-flex align-items-center">
								<span class="fw-bold fs-6 text-gray-800 me-2">{{ $branch->phone }}</span>
								<a href="tel:{{ $branch->phone }}" class="badge badge-primary">Arama Yap</a>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-semibold text-muted">
								E-Posta Adresi
							</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 d-flex align-items-center">
								<span class="fw-bold fs-6 text-gray-800 me-2">{{ $branch->email }}</span>
								<a href="mailto:{{ $branch->email }}" class="badge badge-primary">E-Posta Gönder</a>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-semibold text-muted">
								Vergi Dairesi / Vergi Numarası
							</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 d-flex align-items-center">
								<span class="fw-bold fs-6 text-gray-600 me-2">{{ $branch->tax_department }}</span>
								/
								&nbsp; <span class="fw-bold fs-6 text-gray-700 me-2">{{ $branch->tax_number }}</span>
							</div>
						</div>
						<!--begin::Input group-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-semibold text-muted">
								CNAME Kaydı 
							</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<span class="fw-bold fs-6 text-gray-800">egitim.meslekburda.com</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-semibold text-muted">Atanan IP Adresi</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<span class="fw-bold fs-6 text-gray-800">138.197.137.112</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Notice-->
						<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
							<!--begin::Icon-->
							<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
							<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
									<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor"></rect>
									<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"></rect>
								</svg>
							</span>
							<!--end::Svg Icon-->
							<!--end::Icon-->
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack flex-grow-1">
								<!--begin::Content-->
								<div class="fw-semibold">
									<h4 class="text-gray-900 fw-bold">İşlem yapmanız gerekiyor!</h4>
									<div class="fs-6 text-gray-700">
										Belirlediğiniz alt alan adını size verilen ip adresine yönlendirmeniz gerekiyor. Yönlendirme yaptıktan sonra <a class="fw-bold" target="_blank" href="https://intodns.com">intodns</a>'den kontrol etmeyi unutmayın. CNAME yönlendirmesi tanımlandıktan sonra birer dakikalık periyotlar ile kontrol edilir ve işlenir.
									</div>
								</div>
								<!--end::Content-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Notice-->
					</div>
					<!--end::Card body-->
				</div>
				<!-- // Kurum Bilgileri -->
			</div>
			<div class="col-lg-4">
		        <div class="card mb-5 mb-xl-10">
					<!--begin::Card header-->
					<div class="card-header cursor-pointer">
						<!--begin::Card title-->
						<div class="card-title m-0">
							<h3 class="fw-bold m-0">Ödeme Yöntemleri</h3>
						</div>
						<!--end::Card title-->
					</div>
					<!--begin::Card header-->
					<!--begin::Card body-->
					<div class="card-body p-9">
						@foreach ($branch->creditcards as $creditcard)
						<div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
							<!--begin::Info-->
							<div class="d-flex flex-column py-2">
								<!--begin::Owner-->
								<div class="d-flex align-items-center fs-4 fw-bold mb-5">
									{{ $creditcard->name }}
								</div>
								<!--end::Owner-->
								<!--begin::Wrapper-->
								<div class="d-flex align-items-center">
									<!--begin::Icon-->
									<span class="svg-icon svg-icon-muted svg-icon-4hx me-2">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M22 7H2V11H22V7Z" fill="currentColor"/>
											<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="currentColor"/>
										</svg>
									</span>
									<!--end::Icon-->
									<!--begin::Details-->
									<div>
										<div class="fs-4 fw-bold">{{ substr($creditcard->card_number, 0, 4) }} **** **** {{ substr($creditcard->card_number, 12, 16) }}</div>
										<div class="fs-6 fw-semibold text-gray-400">{{ $creditcard->month . '/' . $creditcard->year }}</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Info-->
							<!--begin::Actions-->
							<div class="d-flex align-items-center">
								<!--<button class="btn btn-sm btn-light-danger">Sil</button>-->
							</div>
							<!--end::Actions-->
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
