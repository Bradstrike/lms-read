<div>
    <div class="row gy-5 g-xl-10">
        @foreach ($payments as $payment)
        <div class="col-xl-4 mb-xl-10">
            <div class="card h-md-100">
                <div class="card-body d-flex flex-column flex-center">
                    <div class="mb-2">
                        <h3 class="fw-semibold text-gray-800 text-center lh-lg">{{ $payment->lesson->name }}</h3>
                        <div class="text-center">
                            <span class="badge badge-light-primary me-2">{{ $payment->method }}</span>
                            @if ($payment->state == "Ödeme Bekleniyor")
                            <span class="badge badge-light-warning me-2">Ödeme Bekleniyor</span>
                            @elseif($payment->state == "Ödendi")
                            <span class="badge badge-light-success me-2">Ödendi</span>
                            @elseif($payment->state == "İptal Edildi")
                            <span class="badge badge-light-danger me-2">İptal Edildi</span>
                            @endif
                        </div>
                        <div class="py-10 text-center">
                            <img src="/uploads/{{ $payment->lesson->thumbnail }}" alt="thumbnail" class="w-50px h-50px rounded">
                        </div>
                    </div>
                    <div class="text-center mb-1">
                        <a class="btn btn-sm btn-light me-2" href="{{ route('app.pricing.show', ['siparis' => $payment->id]) }}">Sipariş Faturasını Görüntüle</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @role('Kurum Yöneticisi')
            @foreach ($payments as $payment)
                <div class="col-xl-4 mb-xl-10">
                    <div class="card h-md-100">
                        <div class="card-body d-flex flex-column flex-center">
                            <div class="mb-2">
                                <h3 class="fw-semibold text-gray-800 text-center lh-lg">{{ $payment->lesson->name }}</h3>
                                <div class="text-center">
                                    <span class="badge badge-light-primary me-2">{{ $payment->method }}</span>
                                    @if ($payment->state == "Ödeme Bekleniyor")
                                    <span class="badge badge-light-warning me-2">Ödeme Bekleniyor</span>
                                    @elseif($payment->state == "Ödendi")
                                    <span class="badge badge-light-success me-2">Ödendi</span>
                                    @elseif($payment->state == "İptal Edildi")
                                    <span class="badge badge-light-danger me-2">İptal Edildi</span>
                                    @endif
                                </div>
                                <div class="py-10 text-center">
                                    <img src="/uploads/{{ $payment->lesson->thumbnail }}" alt="thumbnail" class="w-50px h-50px rounded">
                                </div>
                            </div>
                            <div class="text-center mb-1">
                                <a class="btn btn-sm btn-light me-2" href="{{ route('app.pricing.show', ['siparis' => $payment->id]) }}">Sipariş Faturasını Görüntüle</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            @endforeach
        @endrole
    </div>
</div>
