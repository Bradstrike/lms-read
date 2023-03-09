<div>
    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Rol Yönetimi</span>
                <span class="text-muted mt-1 fw-semibold fs-7">Varsayılan rolleri ve yetkileri belirleyebilirsiniz</span>
            </h3>
            <div class="card-toolbar">
                <div class="d-flex align-items-center position-relative my-1">
                    <span class="svg-icon svg-icon-1 position-absolute ms-4"><i class="bi bi-search"></i></span>
                    <input type="text" wire:model="search" data-kt-filter="search"
                    class="form-control form-control-solid w-250px ps-14" placeholder="Arama kriterleri..." />
                </div>
                <button class="btn btn-light-primary ms-5" id="new_role_drawer_button">Yeni
                Rol Oluştur</button>
                <div id="new_role_drawer" class="bg-white" wire:ignore.self data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#new_role_drawer_button" data-kt-drawer-close="#new_role_drawer_close" data-kt-drawer-width="500px">
                    <div class="card w-100 rounded-0">
                        <div class="card-header pe-5">
                            <div class="card-title">
                                <div class="d-flex justify-content-center flex-column me-3">
                                    <a href="javascript:;" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 lh-1">Yeni Rol Oluştur</a>
                                </div>
                            </div>
                            <div class="card-toolbar">
                                <div class="btn btn-sm btn-icon btn-active-light-primary" id="new_role_drawer_close">
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
                                <div class="fv-row mb-5">
                                    <input type="text" class="form-control" wire:model="name"
                                    placeholder="Yetki adını giriniz..." />
                                </div>
                                <div class="fv-row row mb-5">
                                    @foreach ($permissions as $permission)
                                    <div class="col-6 mb-3">
                                        <div class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input h-20px w-30px" type="checkbox" wire:model="selectedPermissions" value="{{ $permission->id }}" />
                                            <label class="form-check-label">
                                                {{ $permission->name }}
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <button type="button" class="btn btn-light-primary btn-sm" wire:click="submit">Değişiklikleri kaydet</button>
                            </form>
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
                            <th class="ps-4 min-w-300px rounded-start">Rol</th>
                            <th class="min-w-125px">Yetki</th>
                            <th class="min-w-125px">Kullanıcı</th>
                            <th class="min-w-200px text-end rounded-end"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="javascript:;"
                                        class="text-dark fw-bold text-hover-primary mb-1 fs-6">
                                        {{ $role->name }}
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="javascript:;"
                            class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">
                            <span data-bs-toggle="tooltip" data-bs-placement="top"
                            title="@foreach ($role->permissions as $eachPerm) {{ $eachPerm->name }}, @endforeach">{{ $role->permissions->count() }}</span>
                        </a>
                        <span class="text-muted fw-semibold text-muted d-block fs-7">Yetki</span>
                    </td>
                    <td>
                        <a href="javascript:;"
                        class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">
                        {{ $role->users->count() }}
                    </a>
                    <span class="text-muted fw-semibold text-muted d-block fs-7">Kullanıcı</span>
                </td>
                <td class="text-end">
                    <a href="javascript:;"
                    class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2"
                    id="role{{ $role->id }}_button">Görüntüle</a>
                    <div id="role{{ $role->id }}" class="bg-white" wire:ignore.self
                        data-kt-drawer="true" data-kt-drawer-activate="true"
                        data-kt-drawer-toggle="#role{{ $role->id }}_button"
                        data-kt-drawer-close="#role{{ $role->id }}_close"
                        data-kt-drawer-width="500px">
                        <div class="card w-100 rounded-0">
                            <div class="card-header pe-5">
                                <div class="card-title">
                                    <div class="d-flex justify-content-center flex-column me-3">
                                        <a href="javascript:;"
                                        class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 lh-1">
                                        {{ $role->name }} adlı rolü düzenle
                                    </a>
                                </div>
                            </div>
                            <div class="card-toolbar">
                                <div class="btn btn-sm btn-icon btn-active-light-primary"
                                id="role{{ $role->id }}_close">
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="6" y="17.3137"
                                    width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)"
                                    fill="currentColor"></rect>
                                    <rect x="7.41422" y="6" width="16"
                                    height="2" rx="1"
                                    transform="rotate(45 7.41422 6)"
                                    fill="currentColor">
                                </rect>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card-body hover-scroll-overlay-y">
                <form class="mb-5">
                    <div class="fv-row row mb-5">
                        @foreach ($permissions as $permission)
                        <div class="col-6 mb-3">
                            <div
                            class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input  h-20px w-30px"
                            type="checkbox"
                            @if ($role->hasPermissionTo($permission->name)) checked @endif
                            wire:click="test({{ $role->id }}, '{{ $permission->name }}')"
                            value="{{ $permission->id }}" />
                            <label class="form-check-label">
                                {{ $permission->name }}
                            </label>
                        </div>
                    </div>
                    @endforeach
                </div>
            </form>
        </div>
    </div>
</div>
<a href="javascript:;"
class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4"
wire:click="delete({{ $role->id }})">Sil</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
