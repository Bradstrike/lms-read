<div>
    <div class="card">
        <div class="card-body p-lg-20">
            <div class="d-flex flex-column flex-xl-row">
                <div class="flex-lg-row-fluid me-xl-18 mb-10 mb-xl-0">
                    <div class="mt-n1">
                        <div class="d-flex flex-stack pb-10">
                            <a href="#">
                                <img alt="Logo" src="/uploads/{{ $payment->lesson->thumbnail }}" class="h-200px rounded">
                            </a>
                        </div>
                        <div class="m-0">
                            <div class="fw-bold fs-3 text-gray-800 mb-8">Fatura #000{{ $payment->id }}</div>
                            <div class="row g-5 mb-11">
                                <div class="col-sm-6">
                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">Oluşturulma Tarihi:</div>
                                    <div class="fw-bold fs-6 text-gray-800">{{ $payment->created_at->translatedFormat("j F l, Y H:i:s") }}</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">Düzenlenme Tarihi:</div>
                                    <div class="fw-bold fs-6 text-gray-800 d-flex align-items-center flex-wrap">
                                        <span class="pe-2">{{ $payment->updated_at->translatedFormat("j F l, Y H:i:s") }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-5 mb-12">
                                <div class="col-sm-6">
                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">Kimden:</div>
                                    <div class="fw-bold fs-6 text-gray-800">KeenThemes Inc.</div>
                                    <div class="fw-semibold fs-7 text-gray-600">
                                        8692 Wild Rose Drive 
                                        <br>Livonia, MI 48150
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">Kime:</div>
                                    <div class="fw-bold fs-6 text-gray-800">CodeLab Inc.</div>
                                    <div class="fw-semibold fs-7 text-gray-600">
                                        9858 South 53rd Ave.
                                        <br>Matthews, NC 28104
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <!--begin::Table-->
                                <div class="table-responsive border-bottom mb-9">
                                    <table class="table mb-3">
                                        <thead>
                                            <tr class="border-bottom fs-6 fw-bold text-muted">
                                                <th class="min-w-175px pb-2">Eğitim</th>
                                                <th class="min-w-80px text-end pb-2">Tutar</th>
                                                <th class="min-w-100px text-end pb-2">Toplam</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="fw-bold text-gray-700 fs-5 text-end">
                                                <td class="d-flex align-items-center pt-6">
                                                    {{ $payment->lesson->name }}
                                                </td>
                                                <td class="pt-6">{{ $payment->lesson->price }}₺</td>
                                                <td class="pt-6 text-dark fw-bolder">{{ $payment->lesson->price }}₺</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <div class="mw-300px">
                                        <div class="d-flex flex-stack mb-3">
                                            <div class="fw-semibold pe-10 text-gray-600 fs-7">Ara Toplam:</div>
                                            <div class="text-end fw-bold fs-6 text-gray-800">{{ ($payment->lesson->price-($payment->lesson->price*0.08)) }}₺</div>
                                        </div>
                                        <div class="d-flex flex-stack mb-3">
                                            <div class="fw-semibold pe-10 text-gray-600 fs-7">Vergi 8%</div>
                                            <div class="text-end fw-bold fs-6 text-gray-800">{{ $payment->lesson->price*0.08 }}₺</div>
                                        </div>
                                        <div class="d-flex flex-stack">
                                            <!--begin::Code-->
                                            <div class="fw-semibold pe-10 text-gray-600 fs-7">Toplam</div>
                                            <!--end::Code-->
                                            <!--begin::Label-->
                                            <div class="text-end fw-bold fs-6 text-gray-800">{{ $payment->lesson->price }}₺</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Content-->
                        </div>
                    </div>
                </div>
                <div class="m-0">
                    <div class="d-print-none border border-dashed border-gray-300 card-rounded min-w-md-350px p-9 bg-lighten">
                        <div class="mb-8">
                            @if ($payment->state == "Ödeme Bekleniyor")
                            <span class="badge badge-light-warning me-2">Ödeme Bekleniyor</span>
                            @elseif($payment->state == "Ödendi")
                            <span class="badge badge-light-success me-2">Ödendi</span>
                            @elseif($payment->state == "İptal Edildi")
                            <span class="badge badge-light-danger me-2">İptal Edildi</span>
                            @endif
                        </div>
                        @if ($payment->method == "Banka Havalesi")
                        <h6 class="mb-8 fw-bolder text-gray-600 text-hover-primary">Ödeme Detayları</h6>
                        <div class="mb-6">
                            <div class="fw-semibold text-gray-600 fs-7">Ödeme Kanalı:</div>
                            <div class="fw-bold text-gray-800 fs-6">{{ $payment->method }}</div>
                        </div>
                        <div class="mb-15">
                            <div class="fw-semibold text-gray-600 fs-7">Kalan Süre:</div>
                            <div class="fw-bold fs-6 text-gray-800 d-flex align-items-center">14 gün</div>
                        </div>
                        <button class="btn btn-primary">Ödemeyi Yaptım</button>
                        @elseif ($payment->method == "Kredi Kartı")
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
