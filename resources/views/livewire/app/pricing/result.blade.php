<div>
    @php
    /*$post = $_POST;
    $merchant_key   = '424jdAkT5wDf98hU';
    $merchant_salt  = '5wX6YbsDuxyQE9ai';
    $hash = base64_encode( hash_hmac('sha256', $post['merchant_oid'].$merchant_salt.$post['status'].$post['total_amount'], $merchant_key, true) );
    if( $hash != $post['hash'] )
        die('PAYTR notification failed: bad hash');
    echo "OK";
    */
    $post['status'] = 'success';
    $post['total_amount'] = '50';
    @endphp
    @if ($post['status'] == 'success')
        @if(empty($lesson))
        <span class="d-inline-block position-relative ms-2">
            <div class="container">
                <span class="d-inline-block m fs-2tx fw-bold text-justify">
                    {{ $post['total_amount'] }} ödemeniz tamamlandı.
                </span>
            </div>
        <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded"></span>
        </span>
        
        <div style="margin-top: 5%" class="d-flex align-items-center rounded py-5 px-5 bg-light-primary">
            <p class="fw-bold text-justify">Toplam bakiyeniz:  {{ auth()->user()->branch->balance }} TL   </p>
        </div>        

        <!--boostrap media-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="media">
                        <img src="/assets/media/illustrations/sketchy-1/11.png" class="mr-3 mt-3 rounded-circle" style="width:60px height:60px">
                    </div>
                </div>
            </div>
       @else
            @php
            App\Models\Payment::create([
                'causer' => auth()->user()->id, 
                'lesson_id' => $lesson->id, 
                'method' => 'Kredi Kartı',
                'price' => $lesson->price,
                'state' => 'Ödeme Bekleniyor',
                'oid' => $merchant_oid,
                'causer_type' => 'user'
            ]);

            auth()->user()->lessons()->attach($lesson->id); 
            @endphp
            <div id="success">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <p>success</p>        
                    <hr>
                    <p class="mb-0">Eğitime Hemen başlayabilirsiniz</p>
                    <a class="btn btn-primary" href="/burayaboşlink"></a>
                </div>  
            </div>
        @endif
    @else
        <!-- Ödeme Başarısız -->
        <div id="fail">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Ödeme Başarısız</h4>
                <p>fail</p>        
                <hr>
                <a class="btn btn-primary" href="#"></a>
            </div>
    @endif
</div>