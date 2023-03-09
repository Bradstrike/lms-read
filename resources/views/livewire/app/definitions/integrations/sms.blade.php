<div>
	<div class="row">
		<div class="col-md-12">
			<div class="card mb-5 mb-xl-8">
				<div class="card-header border-0 py-5">
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label fw-bold fs-3 mb-1">SMS Entegrasyonu</span>
						<span class="text-muted mt-1 fw-semibold fs-7">SMS Entegratörleri Bilgileri</span>
					</h3>
					<div class="card-toolbar border-0">
						<button type="button" class="btn btn-sm btn-light-primary mx-4" id="new_sms_integrator_button">
							Yeni SMS Entegratörü Ekle
						</button>
						<div>
							@push('scripts')
							<script type="text/javascript">
								document.addEventListener('DOMContentLoaded', () => {
									document.addEventListener('closeModal', () => {
										KTDrawer.hideAll();
									})
								})
							</script>
							@endpush
							<div id="new_sms_integrator" class="bg-white" wire:ignore.self data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#new_sms_integrator_button" data-kt-drawer-close="#new_sms_integrator_close" data-kt-drawer-width="500px">
								<div class="card w-100 rounded-0">
									<div class="card-header pe-5">
										<div class="card-title">
											<div class="d-flex justify-content-center flex-column me-3">
												<a href="javascript:;" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 lh-1">
													Yeni SMS Entegratörü Oluştur
												</a>
											</div>
										</div>
										<div class="card-toolbar">
											<div class="btn btn-sm btn-icon btn-active-light-primary" id="new_sms_integrator_close">
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
													</svg>
												</span>
											</div>
										</div>
									</div>
									<div class="card-body hover-scroll-overlay-y">
										<form class="form">
											<input type="hidden" wire:model="definition_type">
											<div class="fv-row mb-5">
												<input type="text" class="form-control" wire:model="name" placeholder="Entegratör adı giriniz" />
												@error('name')
												<div class="fv-plugins-message-container invalid-feedback">{{ $message }}
												</div>
												@enderror
											</div>
											<div class="fv-row mb-5">
												<textarea class="form-control" wire:model="config" rows="10" placeholder="Entegratör konfigürasyonunu yazınız"></textarea>
												@error('config')
												<div class="fv-plugins-message-container invalid-feedback">{{ $message }}
												</div>
												@enderror
											</div>
											<button type="button" class="btn btn-light-primary btn-sm" wire:click="store">Değişiklikleri kaydet</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@forelse ($integrations as $index => $integration)
		<div class="col-md-4">
			<div class="card mb-5 mb-xl-8integration-{{ $index }} integrationDiv">
				<div class="card-header border-0 py-5">
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label fw-bold fs-3 mb-1">{{ $integration->name }}</span>
					</h3>
					<div class="card-toolbar border-0">
						<button class="btn btn-outline btn-sm btn-outline-danger" wire:click="delete({{ $integration->id }})">Sil</button>
					</div>
				</div>
				<div class="card-body">
					<textarea class="form-control mb-3 form-control form-control-solid" wire:model="states.{{ $index }}.config" rows="16">{{ $integration->config }}</textarea> 
					<button class="btn btn-outline btn-outline-success" wire:click="save({{ $integration->id }}, {{ $index }})">Kaydet</button>
				</div>
			</div>
		</div>
		@empty
		<div class="col-md-12">
			<div class="alert bg-light-warning d-flex flex-center flex-column py-10 px-10 px-lg-20 mb-10">
				<span class="svg-icon svg-icon-5tx svg-icon-warning mb-5">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
						<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor"></rect>
						<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"></rect>
					</svg>
				</span>
				<div class="text-center">
					<h1 class="fw-bold mb-5">Henüz bir veri yok.</h1>
					<div class="separator separator-dashed border-warning opacity-25 mb-5"></div>
					<div class="mb-9 text-dark">
						Henüz bir veri eklemediniz. Yeni bir veri eklerseniz burada listelenecek.
					</div>
				</div>
			</div>
		</div>
		@endforelse
	</div>
</div>