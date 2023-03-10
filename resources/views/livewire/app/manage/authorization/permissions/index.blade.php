<div>
    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Yetki Yönetimi</span>
                <span class="text-muted mt-1 fw-semibold fs-7">Varsayılan yetkileri belirleyebilirsiniz</span>
            </h3>
            <div class="card-toolbar">
                <div class="d-flex align-items-center position-relative my-1">
                    <span class="svg-icon svg-icon-1 position-absolute ms-4"><i class="bi bi-search"></i></span>
                    <input type="text" wire:model="search" data-kt-filter="search"
                    class="form-control form-control-solid w-250px ps-14" placeholder="Arama kriterleri..." />
                </div>
                <button class="btn btn-light-primary ms-5" id="new_role_drawer_button">Yeni
                Yetki Oluştur</button>
                <div id="new_role_drawer" class="bg-white" wire:ignore.self data-kt-drawer="true"
                data-kt-drawer-activate="true" data-kt-drawer-toggle="#new_role_drawer_button"
                data-kt-drawer-close="#new_role_drawer_close" data-kt-drawer-width="500px">
                <div class="card w-100 rounded-0">
                    <div class="card-header pe-5">
                        <div class="card-title">
                            <div class="d-flex justify-content-center flex-column me-3">
                                <a href="javascript:;"
                                class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 lh-1">Yeni Yetki
                            Oluştur</a>
                        </div>
                    </div>
                    <div class="card-toolbar">
                        <div class="btn btn-sm btn-icon btn-active-light-primary" id="new_role_drawer_close">
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16"
                                height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                fill="currentColor"></rect>
                                <rect x="7.41422" y="6" width="16" height="2"
                                rx="1" transform="rotate(45 7.41422 6)" fill="currentColor">
                            </rect>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
        <div class="card-body hover-scroll-overlay-y">
            <p class="mb-5 pb-5">
                Eğer birden fazla yetkiyi aynı anda oluşturmak isterseniz virgül ile ayırarak
                yazabilirsiniz. Örnek olarak: <span class="text-primary fw-bold">Branches::Listeleme,
                    Branches::Görüntüleme,
                Branches::Silme</span> gibi veya <span
                class="text-primary fw-bold">Branches::Listeleme,Branches::Görüntüleme,Branches::Silme</span>
                gibi istediğiniz şekilde yazabilirsiniz.

            </p>
            <form class="mb-5">
                <div class="fv-row mb-5">
                    <input type="text" class="form-control" wire:model="name"
                    placeholder="Yetki adını giriniz..." />
                </div>
                <button type="button" class="btn btn-light-primary btn-sm"
                wire:click="submit">Değişiklikleri
            kaydet</button>
        </form>
        @if (count($names) > 0)
        <div class="alert alert-success d-flex align-items-center p-5 mb-10">
            <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
            <span class="svg-icon svg-icon-2hx svg-icon-success me-4">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.3"
                d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                fill="currentColor"></path>
                <path
                d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                fill="currentColor"></path>
            </svg>
        </span>
        <!--end::Svg Icon-->
        <div class="d-flex flex-column">
            <h4 class="mb-1 text-success">Yetkiler eklendi.</h4>
            <span>Yetkiler başarılı bir şekilde eklendi.</span>
        </div>
    </div>
    @endif
</div>
</div>
</div>
</div>
</div>
<div class="card-body py-3">
    <div class="table-responsive">
        <table class="table align-middle gs-0 gy-4" id="table">
            <thead>
                <tr class="fw-bold text-muted bg-light">
                    <th class="ps-4 min-w-300px rounded-start">Yetki Adı</th>
                    <th class="min-w-125px">Yetki Alanı</th>
                    <th class="min-w-125px">Kullanıcı</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-start flex-column">
                                <a href="javascript:;"
                                class="text-dark fw-bold text-hover-primary mb-1 fs-6">
                                {{ $permission->name }}
                            </a>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="d-flex justify-content-start flex-column">
                            <a href="javascript:;"
                            class="text-dark fw-bold text-hover-primary mb-1 fs-6">
                            @foreach ($permission->roles as $role)
                            {{ $role->name }},
                            @endforeach
                        </a>
                    </div>
                </div>
            </td>
            <td>
                <a href="javascript:;"
                class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">
                {{ $permission->users->count() }}
            </a>
            <span class="text-muted fw-semibold text-muted d-block fs-7">Kullanıcı</span>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
