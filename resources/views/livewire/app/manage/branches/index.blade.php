<div>
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Kurum Yönetimi</span>
                <span class="text-muted mt-1 fw-semibold fs-7">Toplamda {{ $branches->count() }} adet iş ortağı</span>
            </h3>
            <div class="card-toolbar">
                <div class="d-flex align-items-center position-relative my-1">
                    <span class="svg-icon svg-icon-1 position-absolute ms-4"><i class="bi bi-search"></i></span>
                    <input type="text" wire:model="search" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Arama kriterleri..." />
                </div>
                <!--begin::Menu-->
                <button type="button" class="btn btn-sm btn-icon btn-light-primary mx-4" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"></rect>
                                <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
                                <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
                                <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
                            </g>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </button>
                <!--begin::Menu 2-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Hızlı İşlemler</div>
                    </div>
                    <div class="separator mb-3 opacity-75"></div>
                    <div class="menu-item px-3">
                        <a href="{{ route('app.manage.branches.create') }}" class="menu-link px-3">Kurum Oluştur</a>
                    </div>
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">Kuruma Bakiye Ekle</a>
                    </div>
                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                        <!--begin::Menu item-->
                        <a href="#" class="menu-link px-3">
                            <span class="menu-title">Kullanıcı İşlemleri</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <!--end::Menu item-->
                        <!--begin::Menu sub-->
                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Yönetici Oluştur</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Kullanıcı Oluştur</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Öğrenci Oluştur</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu sub-->
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu separator-->
                    <div class="separator mt-3 opacity-75"></div>
                    <!--end::Menu separator-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <div class="menu-content px-3 py-3">
                            <a class="btn btn-primary btn-sm px-4" href="#">Rapor Oluştur</a>
                        </div>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu 2-->
                <!--end::Menu-->
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-4" id="table">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fw-bold text-muted bg-light">
                            <th class="ps-4 min-w-300px rounded-start">Kurum</th>
                            <th class="min-w-125px">Öğrenci</th>
                            <th class="min-w-125px">Kullanıcı</th>
                            <th class="min-w-200px">Bakiye</th>
                            <th class="min-w-150px">İletişim</th>
                            <th class="min-w-200px text-end rounded-end"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        @foreach ($branches as $branch)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label bg-light">
                                            <img src="/assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="">
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="{{ route('app.manage.branches.show', $branch->id) }}" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $branch->title }}</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Yetkili: {{ $branch->name . " " . $branch->surname }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="javascript:;" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $branch->users->count() }}</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Öğrenci</span>
                            </td>
                            <td>
                                <a href="javascript:;" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $branch->users->count() }}</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Kullanıcı</span>
                            </td>
                            <td>
                                <a href="javascript:;" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $branch->balance }} <span class="fw-light">kredi</span></a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Kullanıcı/Öğrenci Başına: <span class="fw-bolder">{{ $branch->ppn }} kredi</span></span>
                            </td>
                            <td>
                                <span class="text-dark fw-bold d-block mb-1 fs-6"><a class="text-primary text-hover-primary" href="tel:{{ $branch->phone }}"><i class="bi bi-telephone text-primary"></i> Telefon</a> - <a href="mailto:{{ $branch->email }}" class="text-primary text-hover-primary"><i class="bi bi-envelope text-primary"></i> E-Posta</a></span>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $branch->address }}</span>
                            </td>
                            <td class="text-end">
                                <a href="{{ route('app.manage.branches.show', $branch->id) }}" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">Görüntüle</a>
                                <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Düzenle</a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
</div>
