<div>
	<div class="card mb-5 mb-xl-8">
		<!--begin::Header-->
		<div class="card-header border-0 pt-5">
			<h3 class="card-title align-items-start flex-column">
				<span class="card-label fw-bold fs-3 mb-1">Siparişler</span>
			</h3>
		</div>
		<div class="card-body py-3">
			<!--begin::Table container-->
			<div class="table-responsive">
				<!--begin::Table-->
				<table class="table align-middle gs-0 gy-4" id="table">
					<!--begin::Table head-->
					<thead>
						<tr class="fw-bold text-muted bg-light">
							<th class="ps-4 min-w-300px rounded-start">Kurum/Kullanıcı</th>
							<th class="min-w-125px">Ödeme Kanalı</th>
							<th class="min-w-125px">Tutar</th>
							<th class="min-w-125px">Durum</th>
							<th class="min-w-125px">Tarih</th>
							<th class="min-w-200px text-end rounded-end"></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($payments as $payment)
						<tr>
							<td>{{ $payment->causer_type == "user" ? $payment->user->firstname . ' ' . $payment->user->lastname : $payment->branch->name }}</td>
							<td>{{ $payment->method }}</td>
							<td>{{ $payment->price }}</td>
							<td>{{ $payment->state }}</td>
							<td>{{ $payment->created_at->translatedFormat("j F l, Y H:i:s") }}</td>
							<td class="text-end">
								@if ($payment->method == "Banka Havalesi")
								<button class="btn btn-icon btn-light-success btn-sm" wire:click="changeState({{ $payment->id }}, 'Ödendi')"><i class="bi bi-check"></i></button>
								<button class="btn btn-icon btn-light-warning btn-sm" wire:click="changeState({{ $payment->id }}, 'Ödeme Bekleniyor')"><i class="bi bi-exclamation-triangle"></i></button>
								<button class="btn btn-icon btn-light-danger btn-sm" wire:click="changeState({{ $payment->id }}, 'İptal Edildi')"><i class="bi bi-x"></i></button>
								@endif
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
