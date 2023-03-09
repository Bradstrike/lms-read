<div>
    <h1>Satın Alınabilir Eğitimler</h1>

    <div class="row">
        @foreach ($plans as $plan)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $plan->name }}</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{ $plan->price }} ₺</h4>
                        <p class="card-text">{{ $plan->description }}</p>
                    </div>
                    <div class="card-footer">
                        <button wire:click="buy({{ $plan->id }})" class="btn btn-primary">Satın Al</button>
                    </div>
                </div>
            </div>
        @endforeach
</div>
