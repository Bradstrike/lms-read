


<div>
    <div class="card card-xl-stretch mb-xl-8">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Egzersiz Tanımlamaları</span>
                <span class="text-muted fw-semibold fs-7">Eğitim Egzersiz tanımlamaları</span>
            </h3>
            <div class="card-toolbar">
                @push('scripts')
                <script type="text/javascript">
                    document.addEventListener('DOMContentLoaded', () => {
                        document.addEventListener('closeModal', () => {
                            KTDrawer.hideAll();
                        })
                    })

                    function deleteExercise(id) {
                        Swal.fire({
                            text: "Dikkat " + id + " yi siliyorsun!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            showCloseButton: true,
                            showCancelButton: true,
                            cancelButtonText: 'Vazgeç',
                            customClass: {
                                confirmButton: "btn btn-primary",
                                cancelButton: "btn btn-danger"
                            }
                        }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            @this.deleteExercise(id)
                            Swal.fire('Silindi!', '', 'success')
                        } else {
                            Swal.fire('Silme işleminden vazgeçildi.', '', 'info')
                        }
});
                    }
                    
                </script>
                @endpush
                <button type="button" class="btn btn-sm btn-outline btn-outline-success" id="new_json_drawer_button">Egzersiz Tanımlaması Oluştur</button>
                <div id="new_json_drawer" class="bg-white" wire:ignore.self data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#new_json_drawer_button" data-kt-drawer-close="#new_json_drawer_close" data-kt-drawer-width="500px">
                     <div class="card w-100 rounded-0">
                        <div class="card-header pe-5">
                            <div class="card-title">
                                <div class="d-flex justify-content-center flex-column me-3">
                                    <a href="javascript:;" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 lh-1">Egzersiz Tanımlaması Oluştur</a>
                                 </div>
                               
                                
                            </div>
                            <div class="card-toolbar">
                                <div class="btn btn-sm btn-icon btn-active-light-primary" id="new_json_drawer_close">
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
                                    <input type="text" class="form-control" wire:model="name" placeholder="Egzersiz adını giriniz..."/>
                                    @error('name')
                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="fv-row mb-5">
                                    <input type="text" class="form-control" wire:model="path" placeholder="Egzersiz yolunu giriniz..."/>
                                    @error('path')
                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="fv-row mb-5">
                                    <select class="form-control form-select" wire:model="type">
                                        <option>Egzersiz Kategorisi Seçiniz</option>
                                        <option value="Makale">Makale</option>
                                        <option value="Eş Anlamlı">Eş Anlamlı</option>
                                    </select>
                                    @error('type')
                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <!--egzersiz path yükleme-->
                                <div class="fv-row mb-5">
                                    <input type="file" class="form-control" wire:model="file"/>
                                    @error('file')
                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                
                                <div class="fv-row mb-5">
                                    <textarea rows="20" class="form-control" placeholder="Egzersiz içeriğini giriniz..." wire:model="config"></textarea>
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
                <table class="table align-middle gs-0 gy-5">
                    <thead>
                        <tr>
                            <th class="p-0 w-50px"></th>
                            <th class="p-0 min-w-200px"></th>
                            <th class="p-0 min-w-100px"></th>
                            <th class="p-0 min-w-100px"></th>
                            <th class="p-0 min-w-40px"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($Exercises as $index => $Exercise)
                        <tr>
                            <th>
                                <div class="symbol symbol-50px me-2" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="{{ $Exercise->name }}">
                                    <span class="symbol-label">
                                        {{ substr($Exercise->name, 0, 1) }}
                                    </span>
                                </div>
                            </th>
                            <td>
                                <span class="text-dark fw-bold mb-1 fs-6">{{ $Exercise->name }}</span>
                            </td>
                            <td>
                                <div class="d-flex flex-column w-100 me-2">
                                    <div class="d-flex flex-stack mb-2">
                                        <span class="text-muted me-2 fs-7 fw-bold">
                                            {{ $Exercise->path }}
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column w-100 me-2">
                                    <div class="d-flex flex-stack mb-2">
                                        <span class="text-muted me-2 fs-7 fw-bold">
                                            {{ $Exercise->config }}
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <a href="javascript:;" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" id="exercise_edit_{{ $Exercise->id }}_button">
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
                                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </a>
                                <button type="button" class="btn btn-icon btn-light-danger btn-sm" onclick="deleteExercise({{ $Exercise->id }})"><i class="bi bi-trash"></i></button>
                                <div id="exercise_edit_{{ $Exercise->id }}" class="bg-white" wire:ignore.self data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#exercise_edit_{{ $Exercise->id }}_button" data-kt-drawer-close="#exercise_edit_{{ $Exercise->id }}_close" data-kt-drawer-width="500px">
                                    <div class="card w-100 rounded-0">
                                        <div class="card-header pe-5">
                                            <div class="card-title">
                                                <div class="d-flex justify-content-center flex-column me-3">
                                                    <a href="javascript:;" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 lh-1">{{ $Exercise->name }} Tanımlamasını Düzenle</a>
                                                </div>
                                            </div>
                                            <div class="card-toolbar">
                                                <div class="btn btn-sm btn-icon btn-active-light-primary" id="exercise_edit_{{ $Exercise->id }}_close">
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
                                                    <input type="text" class="form-control" wire:model="states.{{ $index }}.name" placeholder="Egzersiz adını giriniz..."/>
                                                    @error('name')
                                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="fv-row mb-5">
                                                    <input type="text" class="form-control" wire:model="states.{{ $index }}.path" placeholder="Egzersiz yolunu giriniz..."/>
                                                    @error('path')
                                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="fv-row mb-5">
                                                    <select class="form-control form-select" wire:model="states.{{ $index }}.type">
                                                        <option>Egzersiz Kategorisi Seçiniz</option>
                                                        <option value="Makale">Makale</option>
                                                        <option value="Eş Anlamlı">Eş Anlamlı</option>
                                                    </select>
                                                    @error('type')
                                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="fv-row mb-5">
                                                    <textarea rows="20" class="form-control" placeholder="Egzersiz içeriğini giriniz..." wire:model="states.{{ $index }}.config"></textarea>
                                                    @error('config')
                                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <button type="button" class="btn btn-light-primary btn-sm" wire:click="save({{ $Exercise->id }}, {{ $index }})">Değişiklikleri kaydet</button>
                                           </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
