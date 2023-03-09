<div>
	@php 
	// öğrenci sayısı
	$studentCount = App\Models\User::with('roles')
	->whereBranchId(auth()->user()->branch_id)
	->whereHas("roles", function ($q) {
		$q->where('name', 'Öğrenci');
	})
	->count();

	// oturum açmayan öğrenci sayısı
	$notLoggedStudent = App\Models\User::with('roles')
	->whereBranchId(auth()->user()->branch_id)
	->whereHas("roles", function ($q) {
		$q->where('name', 'Öğrenci');
	})
	->whereNull('logged_at');


	// bugün oturum açan öğrenci öğrenciler
	$todayLogged = App\Models\User::with('roles')
	->whereBranchId(auth()->user()->branch_id)
	->whereHas("roles", function ($q) {
		$q->where('name', 'Öğrenci');
	})
	->where('logged_at', 'LIKE', Carbon\Carbon::now()->format("Y-m-d").'%');

	//personel sayısı
	$managerCount = App\Models\User::with('roles')
	->whereBranchId(auth()->user()->branch_id)
	->whereHas("roles", function ($q) {
		$q->where('name', '!=', 'Öğrenci');
	})
	->count();
	@endphp
	@push('scripts')
	<script type="text/javascript">
		$(function() {
			var i = document.getElementById("kurum_ozet_grafik")
			var n = KTUtil.css(i, "height");
			var chart = new ApexCharts(
				i,
				{
					series: [
					{ name: "Öğrenci Kaydı", data: [50, 70, 90, 117, 80, 65, 80, 90, 115, 95, 70, 84] },
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
		})
	</script>
	@endpush
	<div class="row g-5 g-lg-10">
		<div class="col-xl-4 mb-xl-10">
			<div class="card card-flush h-md-50 mb-xl-10">
				<div class="card-body d-flex justify-content-center flex-column pe-0">
					<div class="m-0">
						<h1 class="fw-semibold text-center lh-lg mb-2">
							Merhaba <span class="fw-bolder">{{ auth()->user()->firstname . ' ' . auth()->user()->lastname }}</span>,
						</h1>
						<div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center card-rounded-bottom h-100px mh-100px" style="background-image:url('/assets/media/illustrations/unitedpalms-1/8.png')"></div>
					</div>
					<div class="text-center">
						<div class="fw-semibold lh-lg mb-4">
							Kalan öğrenci ekleme hakkınız {{ auth()->user()->branch->balance/auth()->user()->branch->ppn }} adettir
						</div>
						<a class="btn btn-sm btn-primary me-2" href="{{ route('app.members.index') }}">Öğrenciler</a>
						<a class="btn btn-sm btn-secondary" href="javascript:;">Ödemeler</a>
					</div>
				</div>
			</div>
			<div class="card card-flush h-md-50 mb-xl-10">
				<div class="card-header pt-5">
					<div class="card-title d-flex flex-column">
						<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">6.3dk</span>
						<span class="text-gray-400 pt-1 fw-semibold fs-6">Sitede Kalma Süresi</span>
					</div>
				</div>
				<div class="card-body d-flex flex-column pe-0">
					<span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Hiç Oturum Açmayanlar</span>
					<div class="symbol-group symbol-hover flex-nowrap mb-4">
						@forelse ($notLoggedStudent->limit(10)->get() as $element)
						@php
						$color = randomColors();
						@endphp
						<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $element->firstname . " " . $element->lastname }}">
							<span class="symbol-label bg-{{ $color }} text-inverse-{{ $color }} fw-bold">{{ mb_strimwidth($element->firstname, 0,1) . mb_strimwidth($element->lastname, 0,1) }}</span>
						</div>
						@empty
						<span class="text-muted">Hiç oturum açmayan birisi yok...</span>
						@endforelse
						@if ($notLoggedStudent->count() >= 10)
						<a href="{{ route('app.members.index') }}?empty_logged=1" class="symbol symbol-35px symbol-circle">
							<span class="symbol-label bg-light text-gray-400 fs-8 fw-bold">+{{ 10-$notLoggedStudent->count() }}</span>
						</a>
						@endif
					</div>
					<span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Bugün Oturum Açanlar</span>
					<div class="symbol-group symbol-hover flex-nowrap">
						@forelse ($todayLogged->limit(10)->get() as $element)
						@php
						$color = randomColors();
						@endphp
						<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $element->firstname . " " . $element->lastname }}">
							<span class="symbol-label bg-{{ $color }} text-inverse-{{ $color }} fw-bold">{{ mb_strimwidth($element->firstname, 0,1) . mb_strimwidth($element->lastname, 0,1) }}</span>
						</div>
						@empty
						<span class="text-muted">Bugün oturum açan birisi yok...</span>
						@endforelse
						@if ($todayLogged->count() >= 10)
						<a href="{{ route('app.members.index') }}?empty_logged=1" class="symbol symbol-35px symbol-circle">
							<span class="symbol-label bg-light text-gray-400 fs-8 fw-bold">+{{ 10-$todayLogged->count() }}</span>
						</a>
						@endif
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-8">
			<div class="card card-flush h-md-100">
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
				<div class="card-body justify-content-end pt-7 pb-0 px-0">
					<!--begin::Row-->
					<div class="row p-0 mb-5 px-9">
						<!--begin::Col-->
						<div class="col">
							<div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
								<span class="fs-4 fw-semibold text-success d-block">Öğrenci Sayısı</span>
								<span class="fs-2hx fw-bold text-gray-900" data-kt-countup="true" data-kt-countup-value="{{ $studentCount }}">0</span>
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
								<span class="fs-2hx fw-bold text-gray-900" data-kt-countup="true" data-kt-countup-value="{{ $notLoggedStudent->count() }}">0</span>
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
							<h3 class="m-0 text-gray-900 flex-grow-1">Özet Kayıt Grafiği</h3>

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
		</div>
	</div>
	<div class="row g-5 g-lg-10 mt-5 mb-xl-10">
		<div class="col-xl-4">
			<div class="card card-flush">
				<div class="card-header card-header-stretch">
					<div class="card-title">
						<h3 class="m-0 text-gray-900">Son Aktiviteleriniz</h3>
					</div>
					<div class="card-toolbar">
					</div>
				</div>
				<div class="card-body justify-content-center">
					@foreach (Spatie\Activitylog\Models\Activity::orderBy('id', 'desc')->whereCauserId(auth()->user()->id)->limit(2)->get() as $element)
					<div class="d-flex flex-stack position-relative mb-8">
						<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
						<div class="fw-semibold ms-5 text-gray-600">
							<div class="fs-5">
								{{ $element->created_at->format('H:i:s') }}
								<span class="fs-7 text-gray-400 text-uppercase">{{ $element->created_at->format('d/m/Y') }}</span>
							</div>
							<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">{{ $element->description }}</a>
							<div class="text-gray-400">
								<a href="#">{{ $element->causer->firstname . ' ' . $element->causer->lastname }}</a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<div class="col-xl-4">
			<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #F1416C;background-image:url('/assets/media/svg/shapes/wave-bg-red.svg')">
				<!--begin::Header-->
				<div class="card-header pt-5 mb-3">
					<!--begin::Icon-->
					<div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #F1416C">
						<i class="bi bi-mortarboard text-white fs-2qx lh-0"></i>
					</div>
					<!--end::Icon-->
				</div>
				<!--end::Header-->
				<!--begin::Card body-->
				<div class="card-body d-flex align-items-end mb-3">
					<!--begin::Info-->
					<div class="d-flex align-items-center">
						<span class="fs-4hx text-white fw-bold me-6">
							{{ $studentCount }}
						</span>
						<div class="fw-bold fs-6 text-white">
							<span class="d-block">Kurum</span>
							<span class="">Öğrencisi</span>
						</div>
					</div>
					<!--end::Info-->
				</div>
				<!--end::Card body-->
			</div>
		</div>
		<div class="col-xl-4">
			<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #7239EA;background-image:url('/assets/media/svg/shapes/wave-bg-purple.svg')">
				<!--begin::Header-->
				<div class="card-header pt-5 mb-3">
					<!--begin::Icon-->
					<div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
						<i class="bi bi-people text-white fs-2qx lh-0"></i>
					</div>
					<!--end::Icon-->
				</div>
				<!--end::Header-->
				<!--begin::Card body-->
				<div class="card-body d-flex align-items-end mb-3">
					<!--begin::Info-->
					<div class="d-flex align-items-center">
						<span class="fs-4hx text-white fw-bold me-6">
							{{ $managerCount }}
						</span>
						<div class="fw-bold fs-6 text-white">
							<span class="d-block">Kurum</span>
							<span class="">Personeli</span>
						</div>
					</div>
					<!--end::Info-->
				</div>
				<!--end::Card body-->
			</div>
		</div>
	</div>
</div>