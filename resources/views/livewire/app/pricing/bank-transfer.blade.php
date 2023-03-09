<div>
  @php
  $payment = App\Models\Payment::create([
    'causer' => auth()->user()->id, 
    'lesson_id' => $lesson->id,
    'method' => 'Banka Havalesi',
    'price' => $lesson->price,
    'state' => 'Ödeme Bekleniyor',
    'oid' => '',
    'causer_type' => 'user'
  ]);
  @endphp
  <div class="alert alert-success">
    Siparişiniz başarıyla oluşturuldu. Ödemeniz mesai saatleri içerisinde onaylanır. Onaylandığı zaman size eposta ve sms ile bilgilendirme mesajı gönderilecek.
  </div>
  <div class="card h-md-100 shadow-sm mb-10">
    <div class="card-body">
      <div class="mb-2">
        <div class="d-flex flex-stack mb-3">
          <div class="me-3">
            <img src="/uploads/{{ $lesson->thumbnail }}" class="h-50px rounded me-5" alt="">
            <span class="fw-semibold text-gray-800 lh-lg">{{ $lesson->name }}</span>
          </div>
        </div>
        <p class="text-gray-600">
          {{ $lesson->description }}
          <hr>
          {{ $lesson->lectures()->count() }} adet eğitim içeriği ile birlikte
        </p>
        <p class="text-gray-500 fs-2">
          Ödemeniz gereken tutar: {{ $lesson->price }}₺
        </p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card h-md-100 shadow-sm">
        <div class="card-body d-flex flex-column flex-center">
          <img src="/assets/media/banks/ziraat.png" class="h-100px" alt="">
          <p class="text-start">
            <strong>Şube Kodu:</strong> 0015<br>
            <strong>Hesap Numarası:</strong> TR45<br>
            <strong>IBAN:</strong> TR45<br>
            <strong>Hesap Sahibi:</strong> TR45<br>
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-md-100 shadow-sm">
        <div class="card-body d-flex flex-column flex-center">
          <img src="/assets/media/banks/teb.png" class="h-100px py-5" alt="">
          <p class="text-start">
            <strong>Şube Kodu:</strong> 0015<br>
            <strong>Hesap Numarası:</strong> TR45<br>
            <strong>IBAN:</strong> TR45<br>
            <strong>Hesap Sahibi:</strong> TR45<br>
          </p>
        </div>
      </div>
    </div>
  </div>
  <a href="{{ route('app.pricing.show', ['siparis' => $payment->id]) }}" class="btn btn-primary mt-10">Siparişimi Görüntüle</a>
</div>