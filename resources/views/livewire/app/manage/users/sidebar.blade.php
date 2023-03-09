<div class="card-body pt-15 px-0">
	<div class="d-flex flex-column text-center mb-9 px-9">
		<div class="symbol symbol-80px symbol-lg-150px mb-4">
			<img src="/assets/media/avatars/300-3.jpg" class="" alt="" />
		</div>
		<div class="text-center">
			<a href="javascript:;" class="text-gray-800 fw-bold text-hover-primary fs-4">{{ $user->firstname . ' ' . $user->lastname }}</a>
			<span class="badge badge-light-primary">{{ $user->roles()->pluck('name')[0] }}</span>
			<span class="text-muted d-block fw-semibold">{{ $user->branch->title ?? "-" }}</span>
			@if(!$user->status)
			<span class="badge badge-light-danger">PASİF KULLANICI</span>
			@endif
		</div>
	</div>
	<div class="row px-9 mb-4">
		<div class="col-md-4 text-center">
			<div class="text-gray-800 fw-bold fs-3">
				<span class="m-0" data-kt-countup="true" data-kt-countup-value="642">0</span>
			</div>
			<span class="text-gray-500 fs-8 d-block fw-bold">SOL</span>
		</div>
		<div class="col-md-4 text-center">
			<div class="text-gray-800 fw-bold fs-3">
				<span class="m-0" data-kt-countup="true" data-kt-countup-value="24">0</span>K</div>
				<span class="text-gray-500 fs-8 d-block fw-bold">FOLLOWERS</span>
			</div>
			<div class="col-md-4 text-center">
				<div class="text-gray-800 fw-bold fs-3">
					<span class="m-0" data-kt-countup="true" data-kt-countup-value="12">0</span>K</div>
					<span class="text-gray-500 fs-8 d-block fw-bold">FOLLOWING</span>
				</div>
			</div>
			<div class="m-0">
				<ul class="nav nav-pills nav-pills-custom flex-column border-transparent fs-5 fw-bold">
					<li class="nav-item mt-5">
						<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0 {{ set_active(['*/profil*']) }}" href="{{ route('app.manage.users.show', $user->id) }}">
							<span class="svg-icon svg-icon-3 svg-icon-muted me-3">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path opacity="0.3" d="M2 21V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H3C2.4 22 2 21.6 2 21Z" fill="currentColor" />
									<path d="M2 10V3C2 2.4 2.4 2 3 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H3C2.4 11 2 10.6 2 10Z" fill="currentColor" />
								</svg>
							</span>
							Profil
							<span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
						</a>
					</li>
					<li class="nav-item mt-5">
						<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0 {{ set_active(['*/aktivite*']) }}" href="{{ route('app.manage.users.activity', $user->id) }}">
							<span class="svg-icon svg-icon-3 svg-icon-muted me-3">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
									<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
									<rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
									<rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
								</svg>
							</span>
							Aktivite
							<span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
						</a>
					</li>
					<li class="nav-item mt-5">
						<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0  {{ set_active(['*/ayarlar*']) }}" href="{{ route('app.manage.users.settings', $user->id) }}">
							<span class="svg-icon svg-icon-3 svg-icon-muted me-3">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="currentColor" />
									<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="currentColor" />
								</svg>
							</span>
							Ayarlar
							<span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	@if ($user->hasRole('Öğrenci'))	
	<div class="card card-flush">
		<div class="card-header pt-7">
			<h3 class="card-title align-items-start flex-column">
				<span class="card-label fw-bold text-gray-800">Satın Alma Geçmişi</span>
				<span class="text-gray-400 mt-1 fw-semibold fs-6">4 Satın Alma</span>
			</h3>
		</div>
		<div class="card-body">
			<div class="m-0">
				<div class="d-flex align-items-sm-center mb-5">
					<div class="symbol symbol-45px me-4">
						<span class="symbol-label bg-primary">
							<span class="svg-icon svg-icon-2x svg-icon-white">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
									<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
								</svg>
							</span>
						</span>
					</div>
					<div class="d-flex align-items-center flex-row-fluid flex-wrap">
						<div class="flex-grow-1 me-2">
							<a href="#" class="text-gray-400 fs-6 fw-semibold">Eğitim Satışı</a>
							<span class="text-gray-800 fw-bold d-block fs-4">#00001</span>
						</div>
						<span class="badge badge-lg badge-light-success fw-bold my-2">Kredi Kartı</span>
					</div>
				</div>
				<div class="timeline">
					<div class="timeline-item align-items-center mb-7">
						<div class="timeline-line w-40px mt-6 mb-n12"></div>
						<div class="timeline-icon" style="margin-left: 11px">
							<span class="svg-icon svg-icon-2 svg-icon-danger">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor" />
									<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor" />
								</svg>
							</span>
						</div>
						<div class="timeline-content m-0">
							<span class="fs-8 fw-bold text-gray-800">Hızlı Okuma ve Anlamaya Giriş Eğitimi</span>
						</div>
					</div>
				</div>
			</div>
			<div class="separator separator-dashed my-6"></div>
		</div>
	</div>
	@endif
</div>