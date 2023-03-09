<div>
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">{{ $role == 'egitmenler' ? 'Eğitmen' : 'Kullanıcı' }} Yönetimi</span>
                <span class="text-muted mt-1 fw-semibold fs-7">
                    Toplamda {{ $users->count() }}
                    {{ $role == 'egitmenler' ? 'eğitmen' : 'kullanıcı' }}
                </span>
            </h3>
            <div class="card-toolbar">
                <div class="d-flex align-items-center position-relative my-1">
                    <span class="svg-icon svg-icon-1 position-absolute ms-4"><i class="bi bi-search"></i></span>
                    <input type="text" wire:model="search" data-kt-filter="search"
                    class="form-control form-control-solid w-250px ps-14" placeholder="Arama kriterleri..." />
                </div>
                <div>
                    @push('scripts')
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.js">
                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
                    <script type="text/javascript">
                        document.addEventListener('DOMContentLoaded', () => {
                            $('#email').inputmask({
                                mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
                                greedy: false,
                                onBeforePaste: function(pastedValue, opts) {
                                    pastedValue = pastedValue.toLowerCase();
                                    return pastedValue.replace("mailto:", "");
                                },
                                definitions: {
                                    '*': {
                                        validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~\-]",
                                        casing: "lower"
                                    }
                                }
                            })
                            Livewire.hook('element.updated', () => {
                                $('#email').inputmask({
                                    mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
                                    greedy: false,
                                    onBeforePaste: function(pastedValue, opts) {
                                        pastedValue = pastedValue.toLowerCase();
                                        return pastedValue.replace("mailto:", "");
                                    },
                                    definitions: {
                                        '*': {
                                            validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~\-]",
                                            casing: "lower"
                                        }
                                    }
                                });
                            });


                            $("#datepicker").daterangepicker({
                                singleDatePicker: true,
                                showDropdowns: true,
                                minYear: 1901,
                                maxYear: parseInt(moment().format("YYYY"), 10)
                            }, function(start, end, label) {
                                console.log(start)
                                Livewire.emit('updateDatepicker', start)
                            });

                            document.addEventListener('closeModal', () => {
                                KTDrawer.hideAll();
                            })
                        })

                        document.addEventListener('livewire:load', () => {
                            const params = new Proxy(new URLSearchParams(window.location.search), {
                                get: (searchParams, prop) => searchParams.get(prop),
                            });

                            if(params.empty_logged) {
                                @this.loggedFilter = 1;
                            }
                            if(params.today_logged) {
                                @this.loggedFilter = 2;
                            }
                        });
                    </script>
                    @endpush
                    <button class="btn btn-light-primary ms-5" id="new_user_drawer_button">Yeni
                    {{ $role == 'egitmenler' ? 'Eğitmen' : 'Kullanıcı' }} Oluştur</button>
                    <div id="new_user_drawer" class="bg-white" wire:ignore.self data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#new_user_drawer_button" data-kt-drawer-close="#new_user_drawer_close" data-kt-drawer-width="500px">
                        <div class="card w-100 rounded-0">
                            <div class="card-header pe-5">
                                <div class="card-title">
                                    <div class="d-flex justify-content-center flex-column me-3">
                                        <a href="javascript:;" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 lh-1">
                                            @if($role == 'ogrenciler')
                                            <a href="{{ route('app.manage.lessons') }}" class="fs-6 fw-bold text-gray-900 text-hover-primary me-1 lh-1">
                                                Dersler
                                            </a>
                                            @endif
                                            Yeni Kullanıcı Oluştur
                                        </a>
                                        <!--ogrenci rolundeki kullanıcılar butona tıklayınca lessons.blade.php sayfasına yönlendirisin-->
                                       

                                       
                            
                                    </div>
                                </div>
                                <div class="card-toolbar">
                                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="new_user_drawer_close">
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
                                    <div class="fv-row row mb-5">
                                        <div class="col">
                                            <label class="form-label">İsim</label>
                                            <input type="text" class="form-control" wire:model="firstname" placeholder="{{ $role == 'egitmenler' ? 'Eğitmen' : 'Kullanıcı' }} adını giriniz..." />
                                            @error('firstname')
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Soyisim</label>
                                            <input type="text" class="form-control" wire:model="lastname" placeholder="{{ $role == 'egitmenler' ? 'Eğitmen' : 'Kullanıcı' }} soyadını giriniz..." />
                                            @error('lastname')
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    @role('Superadmin')
                                    <div class="fv-row mb-5">
                                        <label class="form-label">Şube</label>
                                        <select class="form-select form-control" wire:model="branch_id" data-placeholder="Şube seçiniz">
                                            <option value="0" selected>Lütfen bir şube seçiniz.</option>
                                            @foreach (App\Models\Branch::all() as $item)
                                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('branch_id')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    @endrole
                                    <div class="fv-row mb-5">
                                        <label class="form-label">Telefon Numarası</label>
                                        <input type="text" class="form-control" data-inputmask="'mask': '0(999) 999 99 99'" wire:model="phone" placeholder="{{ $role == 'egitmenler' ? 'Eğitmen' : 'Kullanıcı' }} telefon numarasını giriniz..." />
                                        @error('phone')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-5">
                                        <label class="form-label">Doğum Tarihi</label>
                                        <input type="text" class="form-control" data-inputmask="'mask': '99/99/9999'" wire:model="birthday" placeholder="{{ $role == 'egitmenler' ? 'Eğitmen' : 'Kullanıcı' }} doğum tarihi giriniz... Gün/Ay/Yıl" />
                                        @error('birthday')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-5">
                                        <label class="form-label">Adres</label>
                                        <textarea class="form-control" wire:model="address" placeholder="{{ $role == 'egitmenler' ? 'Eğitmen' : 'Kullanıcı' }} adresini giriniz..."></textarea>
                                        @error('address')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    @if (auth()->user()->hasRole('Kurum Yöneticisi') || auth()->user()->hasRole('Superadmin'))
                                    <div class="fv-row mb-10">
                                        <label class="form-label">Yetki</label>
                                        <select class="form-control form-select" wire:model="assignedRole" id="roles" data-placeholder="Verilecek yetkiyi seçiniz">
                                            <option value="0">Lütfen bir rol seçiniz.</option>
                                            @foreach (Spatie\Permission\Models\Role::all() as $item)
                                            @if (auth()->user()->hasRole('Kurum Yöneticisi') && $item->name != "Superadmin")
                                            <option value="{{ $item->name }}"> 
                                                {{ $item->name }}
                                            </option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    @endif
                                    <div class="fv-row mb-5">
                                        <label class="form-label">E-Posta Adresi</label>
                                        <input type="text" class="form-control" data-inputmask="'mask':'*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]'" wire:model="email" placeholder="{{ $role == 'egitmenler' ? 'Eğitmen' : 'Kullanıcı' }} eposta adresi giriniz..." />
                                        @error('email')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                        </div>
                                        @enderror
                                        {{ empty($email) ? "" :  $email . " adresine şifre eposta ile gönderilecek." }}
                                    </div>
                                    <div class="alert alert-primary d-flex align-items-center p-5 mb-10">
                                        <div class="d-flex flex-column">
                                            <span>{{ $role == 'egitmenler' ? 'Eğitmen' : 'Kullanıcı' }} giriş yaparken
                                                eposta adresi kullanacaktır. Şifresi eposta
                                            adresine otomatik olarak gönderilecek.</span>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-light-primary btn-sm" wire:click="store">Değişiklikleri kaydet</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

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
                            <th class="ps-4 min-w-300px rounded-start">Kullanıcı</th>
                            <th class="min-w-125px">Kurum</th>
                            <th class="min-w-125px">Telefon</th>
                            <th class="min-w-125px">Rol</th>
                            <th class="min-w-200px text-end rounded-end"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label bg-light">
                                            <img src="/assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="">
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="{{ route('app.manage.users.show', $user->id) }}" class="text-dark fw-bold text-hover-primary mb-1 fs-6">
                                            {{ $user->firstname . ' ' . $user->lastname }}
                                        </a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $user->email}}</span>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $user->branch->title ?? "-" }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->roles()->first()->name }}</td>

                            <td class="text-end">
                                <a href="{{ route('app.manage.users.show', $user->id) }}" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">Görüntüle</a>
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