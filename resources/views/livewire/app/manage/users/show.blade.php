<div>
	<div class="d-flex flex-row">
		<div class="d-lg-flex flex-column flex-lg-row-auto w-lg-325px" data-kt-drawer="true" data-kt-drawer-name="start-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '250px': '300px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_social_start_sidebar_toggle">
			<div class="card mb-5 mb-xl-8">
				<livewire:app.manage.users.sidebar :user="$user" />
				<div class="w-100 flex-lg-row-fluid mx-lg-13">
					<div class="d-flex d-lg-none align-items-center justify-content-end mb-10">
						<div class="d-flex align-items-center gap-2">
							<div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_social_start_sidebar_toggle">
								<span class="svg-icon svg-icon-1">
									<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor" />
										<path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor" />
										<rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor" />
									</svg>
								</span>
							</div>
							<div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_social_end_sidebar_toggle">
								<span class="svg-icon svg-icon-1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M18 22C19.7 22 21 20.7 21 19C21 18.5 20.9 18.1 20.7 17.7L15.3 6.30005C15.1 5.90005 15 5.5 15 5C15 3.3 16.3 2 18 2H6C4.3 2 3 3.3 3 5C3 5.5 3.1 5.90005 3.3 6.30005L8.7 17.7C8.9 18.1 9 18.5 9 19C9 20.7 7.7 22 6 22H18Z" fill="currentColor" />
										<path d="M18 2C19.7 2 21 3.3 21 5H9C9 3.3 7.7 2 6 2H18Z" fill="currentColor" />
										<path d="M9 19C9 20.7 7.7 22 6 22C4.3 22 3 20.7 3 19H9Z" fill="currentColor" />
									</svg>
								</span>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header card-header-stretch">
							<div class="card-title d-flex align-items-center">
								<span class="svg-icon svg-icon-1 svg-icon-primary me-3 lh-0">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor"/>
										<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor"/>
									</svg>
								</span>
								<h3 class="fw-bold m-0 text-gray-800">Profil</h3>
							</div>
							<div class="card-toolbar m-0">
							</div>
						</div>
						<div class="card-body">
							<div class="row mb-7">
								<label class="col-lg-4 fw-semibold text-muted">İsim Soyisim</label><div class="col-lg-8"><span class="fw-bold fs-6 text-gray-800">{{ $user->firstname . " " . $user->lastname }}</span></div>
								<label class="col-lg-4 fw-semibold text-muted">Email</label><div class="col-lg-8"><span class="fw-bold fs-6 text-gray-800">{{ $user->email }}</span></div>
								<label class="col-lg-4 fw-semibold text-muted">Telefon</label><div class="col-lg-8"><span class="fw-bold fs-6 text-gray-800">{{ $user->phone }}</span></div>
								<label class="col-lg-4 fw-semibold text-muted">Adres</label><div class="col-lg-8"><span class="fw-bold fs-6 text-gray-800">{{ $user->address }}</span></div>
								<label class="col-lg-4 fw-semibold text-muted">Kurum</label><div class="col-lg-8"><span class="fw-bold fs-6 text-gray-800">{{ $user->branch->title ?? "-" }}</span></div>
							</div>
						</div>
					</div>
					@if ($user->hasRole('Öğrenci'))
					{{-- expr --}}
					
					<div class="card mt-5">
						<div class="card-header card-header-stretch">
							<div class="card-title d-flex align-items-center">
								<span class="svg-icon svg-icon-1 svg-icon-primary me-3 lh-0">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="currentColor"/>
										<rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor"/>
										<rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor"/>
										<rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor"/>
										<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor"/>
									</svg>
								</span>
								<h3 class="fw-bold m-0 text-gray-800">Aktif Eğitimler</h3>
							</div>
						</div>
						<div class="card-body">
							@forelse ($user->lessons as $lesson)
							<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
								<div class="d-flex flex-stack mb-3">
									<div class="me-3">
										<img src="/uploads/{{ $lesson->thumbnail }}" class="w-50px ms-n1 me-1 rounded" alt="">
										<a href="javascript:;" class="text-gray-800 text-hover-primary fw-bold">{{ $lesson->name }}</a>
									</div>
									
									<a href="javascript:;" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" wire:click="deleteUserLesson">Eğitimi Sil</a>
								</div>
								<div class="d-flex flex-stack">
									<span class="text-gray-400 fw-bold">
										Bağlı olduğu kurum: 
										<a href="javascript:;" class="text-gray-800 text-hover-primary fw-bold">{{ $user->branch->title ?? "Bireysel Satın Alma" }}</a>
									</span>
									<span class="badge badge-light-success">Alış Tarihi: {{ $lesson->pivot->created_at->format('d/m/Y H:i:s') }}</span>
								</div>
							</div>
							@empty
							<div class="border border-dashed border-danger rounded px-7 py-3 mb-6">
								<div class="text-gray-700">
									Henüz bir eğitim tanımlanmamış veya satın almamış.
								</div>
							</div>
							@endforelse
							<button class="btn btn-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#lesson_attach_modal">Yeni Eğitim Ekle</button>
							
							<div class="modal fade" tabindex="-1" id="lesson_attach_modal">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h3 class="modal-title">Eğitim Ataması Yap</h3>
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
												<i class="bi bi-x fs-2"></i>
											</div>
											<!--end::Close-->
										</div>

										<div class="modal-body">
											<select class="form-control form-select" wire:model.defer="education">
												<option value="">Lütfen bir eğitim seçiniz</option>
												@foreach (App\Models\Lesson::all() as $element)
												<option value="{{ $element->id }}">{{ $element->name }}</option>
												@endforeach
											</select>
										</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-light" data-bs-dismiss="modal">Vazgeç</button>
											<button type="button" class="btn btn-primary" wire:click="attachEducation">Değişiklikleri Kaydet</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endif
				</div>
				<livewire:app.manage.users.rightbar :user="$user" />
			</div>
		</div>
