<div>
	@role('Öğrenci')
	<div class="row gy-5 g-xl-10">
		@foreach ($lessons as $lesson)
		<div class="col-xl-4 mb-xl-10">
			<div class="card h-md-100">
				<div class="card-body d-flex flex-column flex-center">
					<div class="mb-2">
						<h1 class="fw-semibold text-gray-800 text-center lh-lg">{{ $lesson->name }}</h1>
						<div class="text-center text-gray-600">{{ $lesson->lectures()->count() }} adet eğitim</div>
						<div class="py-10 text-center">
							<img src="/uploads/{{ $lesson->thumbnail }}" alt="thumbnail" class="w-200px h-200px rounded">
						</div>
						<div class="text-center text-gray-800 mb-2">
							{{ $lesson->description }}
						</div>
					</div>
					<div class="text-center mb-1">
						<a class="btn btn-sm btn-light me-2" href="javascript:;">Eğitim Önizlemesi</a>
						<a class="btn btn-sm btn-primary" href="{{ route('app.pricing.payment-methods', ['egitim' => $lesson->id]) }}">Eğitime Başla</a>
					</div>
				</div>
			</div>
		</div>
		@endforeach
		@endrole
		@role('Kurum Yöneticisi')
		<div class="card card-dashed">
			<div class="card-header">
				<h3 class="card-title text-center">Bakiye Yükle</h3>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<h4 class="lh-lg">Ödeme yapmak istediğiniz tutarı yazınız</h4>
						<div class="input-group" data-kt-dialer="true" data-kt-dialer-min="500" data-kt-dialer-max="50000" data-kt-dialer-step="50" data-kt-dialer-prefix="">
							<div class="input-group mb-5">
								<span class="input-group-text" id="basic-addon1">
									<button class="btn btn-icon btn-outline btn-active-color-primary" type="button" data-kt-dialer-control="decrease">
										<i class="bi bi-dash fs-1"></i>
									</button> 
									<span class="ps-3">TRY</span>
								</span>
								<input type="text" class="form-control" placeholder="Amount" value="TRY1000" data-kt-dialer-control="input"/>
								<span class="input-group-text">
									<button class="btn btn-icon btn-outline btn-active-color-primary" type="button" data-kt-dialer-control="increase">
										<i class="bi bi-plus fs-1"></i>
									</button>
								</span>
							</div>
						</div>
						<h4 class="lh-lg mt-5 pt-5">Ödeme kanalını seçin</h4>
						<button class="btn btn-outline w-100 btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5 mt-5" wire:click="changeMethod('cc')">
							<span class="svg-icon svg-icon-4x me-4">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M22 7H2V11H22V7Z" fill="currentColor"/>
									<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="currentColor"/>
								</svg>
							</span>
							<span class="d-block fw-semibold text-start">
								<span class="text-dark fw-bold d-block fs-3">Kredi Kartı</span>
								<span class="text-muted fw-semibold fs-6">
									Eğitime hemen başlamak için <strong>kredi kartıyla</strong> ödeme yapabilirsiniz.
								</span>
							</span>
						</button>
						<button class="btn btn-outline w-100 btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" wire:click="changeMethod('bt')"> 
							<span class="svg-icon svg-icon-4x me-4">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path opacity="0.3" d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z" fill="currentColor"/>
									<path opacity="0.3" d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z" fill="currentColor"/>
									<path d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z" fill="currentColor"/>
								</svg>
							</span>
							<span class="d-block fw-semibold text-start">
								<span class="text-dark fw-bold d-block fs-3">Banka Havalesi</span>
								<span class="text-muted fw-semibold fs-6">Ödemeniz mesai saatleri içerisinde onaylanır. Onaylandığında eposta ve sms yoluya bilgilendirileceksiniz.</span>
							</span>
						</button>
					</div>
					<div class="col-md-6">
						@if($payMethod == "cc")
						@livewire('app.education.buy-lesson-cc')
						@elseif($payMethod == "bt")
						@livewire('app.education.buy-lesson-bt')
						@endif
					</div>
				</div>
			</div>
		</div>
		@endrole
	</div>
</div>
