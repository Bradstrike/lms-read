<div style="clear:both">
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
    </script>
    @endpush
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
                                <h3 class="fw-bold m-0 text-gray-800">Ayarlar</h3>
                            </div>
                            <div class="card-toolbar m-0">
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="form">
                                <div class="fv-row row mb-10">
                                    <div class="col">
                                        <label class="form-label">İsim</label>
                                        <input type="text" class="form-control" wire:model.defer="user.firstname" />
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Soyisim</label>
                                        <input type="text" class="form-control" wire:model.defer="user.lastname" />
                                    </div>
                                </div>
                                @role('Superadmin')
                                <div class="fv-row mb-10">
                                    <label class="form-label">Şube</label>
                                    <select class="form-select form-control" wire:model.defer="user.branch_id" data-placeholder="Şube seçiniz">
                                        <option value="0" selected>Lütfen bir şube seçiniz.</option>
                                        @foreach (App\Models\Branch::all() as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @endrole
                                <div class="fv-row mb-10">
                                    <label class="form-label">Telefon Numarası</label>
                                    <input type="text" class="form-control" data-inputmask="'mask': '0(999) 999 99 99'" wire:model.defer="user.phone" />
                                </div>
                                <div class="fv-row mb-10">
                                    <label class="form-label">Doğum Tarihi</label>
                                    <input type="text" class="form-control" data-inputmask="'mask': '99/99/9999'" wire:model.defer="user.birthday" />
                                </div>
                                <div class="fv-row mb-10">
                                    <label class="form-label">Adres</label>
                                    <textarea class="form-control" wire:model.defer="user.address" placeholder=""></textarea>
                                </div>
                                @if (auth()->user()->hasRole('Kurum Yöneticisi'))
                                <div class="fv-row mb-10">
                                    <label class="form-label">Yetki</label>
                                    <select class="form-control form-select" wire:model.defer="roles" id="roles" data-placeholder="Verilecek yetkiyi seçiniz">
                                        <option value="0">Lütfen bir rol seçiniz.</option>
                                        @foreach (Spatie\Permission\Models\Role::all() as $item)
                                        @if ($item->name != "Superadmin")
                                        <option value="{{ $item->name }}"> 
                                            {{ $item->name }}
                                        </option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                @elseif(auth()->user()->hasRole('Superadmin'))
                                <div class="fv-row mb-10">
                                    <label class="form-label">Yetki</label>
                                    <select class="form-control form-select" wire:model.defer="roles" id="roles" data-placeholder="Verilecek yetkiyi seçiniz">
                                        <option value="0">Lütfen bir rol seçiniz.</option>
                                        @foreach (Spatie\Permission\Models\Role::all() as $item)
                                        <option value="{{ $item->name }}"> 
                                            {{ $item->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                @elseif (auth()->user()->hasRole('Kurum Yetkilisi'))
                                <div class="fv-row mb-10">
                                    <label class="form-label">Yetki</label>
                                    <select class="form-control form-select" wire:model.defer="roles" id="roles" data-placeholder="Verilecek yetkiyi seçiniz">
                                        <option value="0">Lütfen bir rol seçiniz.</option>
                                        @foreach (Spatie\Permission\Models\Role::all() as $item)
                                        @if ($item->name != "Superadmin" && $item->name != "Kurum Yöneticisi")
                                        <option value="{{ $item->name }}"> 
                                            {{ $item->name }}
                                        </option>
                                        @endif
                                        @endforeach
                                    @endif
                                    </select>
                                </div>
                                
                                <div class="fv-row mb-10">
                                    <label class="form-label">Eposta Adresi</label>
                                    <input type="text" class="form-control" data-inputmask="'mask':'*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]'" readonly  value="{{ $user->email }}" />
                                </div>
                                <button type="button" class="btn btn-light-primary btn-sm" wire:click="store">Değişiklikleri kaydet</button>
                                <!--Settings.php 'de bulunan activate, deactivate fonksiyonlarının blade karşılığı-->
                                <button type="button" class="btn btn-light-{{ $user->status == 1 ? "danger" : "success" }} btn-sm" wire:click="statusChange">Kullanıcıyı {{ $user->status == 1 ? "pasif" : "aktif" }} yap</button>
                                <button type="button" class="btn btn-light-danger btn-sm" wire:click="delete">Kullanıcıyı sil</button>
                            </form>
                        </div>
                    </div>
                </div>
                <livewire:app.manage.users.rightbar :user="$user" />
            </div>
        </div>
    </div>
</div>