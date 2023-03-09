<div>
    <div class="card card-xl-stretch mb-xl-8">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Eğitim Tanımlamaları</span>
                <span class="text-muted fw-semibold fs-7">Eğitim tanımlamaları</span>
            </h3>
            <div class="card-toolbar">
                @push('scripts')
                <script type="text/javascript">
                    document.addEventListener('DOMContentLoaded', () => {
                        document.addEventListener('closeModal', () => {
                            KTDrawer.hideAll();
                        })

                        var dialerElement = document.querySelector("#dialer");
                        var dialerObject = new KTDialer(dialerElement, {
                            min: 0,
                            max: 50000,
                            step: 10,
                            prefix: "",
                            suffix: ".99",
                            decimals: 0
                        });

                        $('#price_input').on('change', function() {
                            @this.price = $(this).val()
                        })

                        Livewire.hook('element.updated', () => {
                            var dialerElement = document.querySelector("#dialer");
                            var dialerObject = new KTDialer(dialerElement, {
                                min: 0,
                                max: 50000,
                                step: 10,
                                prefix: "",
                                suffix: ".99",
                                decimals: 0
                            });
                            $('#price_input').on('change', function() {
                                @this.price = $(this).val()
                            })
                        });
                    })
                </script>
                @endpush
                <button type="button" class="btn btn-sm btn-outline btn-outline-success" id="new_lesson_button">Eğitim Oluştur</button>
                <div id="new_lesson" class="bg-white" wire:ignore.self data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#new_lesson_button" data-kt-drawer-close="#new_lesson_close" data-kt-drawer-width="500px">
                    <div class="card w-100 rounded-0">
                        <div class="card-header pe-5">
                            <div class="card-title">
                                <div class="d-flex justify-content-center flex-column me-3">
                                    <a href="javascript:;" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 lh-1">Eğitim Oluştur</a>
                                </div>
                            </div>
                            <div class="card-toolbar">
                                <div class="btn btn-sm btn-icon btn-active-light-primary" id="new_lesson_close">
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
                                    <input type="text" class="form-control" wire:model="name" placeholder="Eğitim adını giriniz..."/>
                                    @error('name')
                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="fv-row mb-5">
                                    <input type="text" class="form-control" wire:model="tags" placeholder="Eğitim etiketlerini giriniz..."/>
                                    @error('tags')
                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="fv-row mb-5">
                                    <textarea class="form-control" rows="10" wire:model="description" placeholder="Eğitim açıklaması giriniz..."></textarea>
                                    @error('description')
                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="fv-row mb-5">
                                    <label>Eğitim Fiyatı</label>
                                    <div class="position-relative w-100" id="dialer">
                                        <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
                                            <span class="svg-icon svg-icon-1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                    <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                                                </svg>
                                            </span>
                                        </button>
                                        <input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" wire:model="price" id="price_input" readonly value="0.00" />
                                        <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
                                            <span class="svg-icon svg-icon-1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
                                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="fv-row mb-5">
                                    <label>Eğitim görseli</label>
                                    <input type="file" class="form-control" wire:model="image_1"/>
                                    @if ($image_1)
                                    <div class="py-5">
                                        Önizleme:
                                        <br>
                                        <div class="symbol symbol-200px">
                                            <div class="symbol-label fs-2 fw-semibold text-success" style="background-image:url({{ $image_1->temporaryUrl() }})"></div>
                                        </div>
                                    </div>
                                    @endif
                                    @error('image_1')
                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="fv-row mb-5">
                                    <label>Eğitim kapak görseli</label>
                                    <input type="file" class="form-control" wire:model="image_2"/>
                                    @if ($image_2)
                                    <div class="py-5">
                                        Önizleme:
                                        <br>
                                        <div class="symbol symbol-200px">
                                            <div class="symbol-label fs-2 fw-semibold text-success" style="background-image:url({{ $image_2->temporaryUrl() }})"></div>
                                        </div>
                                    </div>
                                    @endif
                                    @error('image_2')
                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="fv-row mb-5">
                                    <label>Eğitim Durumu</label>
                                    <select class="form-select form-control" wire:model="state">
                                        <option value="1">Aktif</option>
                                        <option value="0">Pasif</option>
                                    </select>
                                    @error('state')
                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <button type="button" class="btn btn-light-primary btn-sm" wire:click="store">Değişiklikleri kaydet</button>
                                <div class="alert alert-primary d-flex align-items-center p-5 mb-10 mt-10">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                                    <span class="svg-icon svg-icon-2hx svg-icon-primary me-4">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
                                            <path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <div class="d-flex flex-column">
                                        <span>Eğitimi ekledikten sonra içerik eklemek için eğitim detay sayfasına yönlendirileceksiniz.</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-sm btn-outline btn-outline-primary btn-color-primary btn-active-light-primary ms-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    Filtreleme
                </button>
                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_630f6e25a511c">
                    <div class="px-7 py-5">
                        <div class="fs-5 text-dark fw-bold">Filtreleme Seçenekleri</div>
                    </div>
                    <div class="separator border-gray-200"></div>
                    <div class="px-7 py-5">
                        <div class="mb-10">
                            <label class="form-label fw-semibold">Arama Kriterleri:</label>
                            <input type="text" class="form-control" placeholder="Arama kriterleri giriniz...">
                        </div>
                        <div class="mb-10">
                            <label class="form-label fw-semibold">Egzersiz Kategorisi:</label>
                            <div class="d-flex">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                    <input class="form-check-input" type="checkbox" value="1">
                                    <span class="form-check-label">Makaleler</span>
                                </label>
                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="2">
                                    <span class="form-check-label">Eş Kelimeler</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body py-3">
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fw-bold text-muted bg-light">
                            <th class="ps-4 min-w-325px rounded-start">Eğitim</th>
                            <th class="min-w-125px">Ücret</th>
                            <th class="min-w-125px">Konu Sayısı</th>
                            <th class="min-w-125px">Öğrenci Sayısı</th>
                            <th class="min-w-150px">Durum</th>
                            <th class="min-w-200px text-end rounded-end"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        @foreach ($Lessons as $index => $Lesson)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-5">
                                        <img src="/uploads/{{ $Lesson->image }}" class="" alt="">
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $Lesson->name }}</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $Lesson->tags }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $Lesson->price }}</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Türk Lirası</span>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$520</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Rejected</span>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Bradly Beal</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Insurance</span>
                            </td>
                            <td>
                                <span class="badge badge-light-{{ $Lesson->state == 1 ? "success" : "danger" }} fs-7 fw-bold">{{ $Lesson->state == 1 ? "Aktif" : "Pasif" }}</span>
                            </td>
                            <td class="text-end">
                                <a href="{{ route('app.manage.education.show', $Lesson->id) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="Detayları Görüntüle">
                                    <span class="svg-icon svg-icon-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="currentColor"/>
                                            <path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
        </div>
    </div>
</div>
