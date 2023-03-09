<div class="d-lg-flex flex-column flex-lg-row-auto w-lg-325px" data-kt-drawer="true" data-kt-drawer-name="end-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '250px': '300px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_social_end_sidebar_toggle">
    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold text-dark">Destek Talepleri</span>
            </h3>
            <div class="card-toolbar"></div>
        </div>
        <div class="card-body pt-5">
            @forelse($user->tickets as $ticket)
            <div class="d-flex flex-stack">
                <i class="bi bi-card-text text-primary fs-3 me-2"></i>
                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                    <div class="flex-grow-1">
                        <span class="text-gray-800 fs-7 fw-bold">{{ $ticket->title }}</span>
                    </div>
                </div>
                <span class="badge badge-light-{{ ticketStateColor($ticket->state) }}">{!! $ticket->state == "Çözüldü" ? '<i class="bi bi-check-all text-success me-1"></i>' : '' !!} {!! $ticket->state !!}</span>
            </div>
            <div class="separator separator-dashed my-4"></div>
            @empty
            <span class="text-muted">Henüz bir destek talebi oluşturulmamış.</span>
            @endforelse
        </div>
    </div>
    <a href="https://wa.me/send?phone={{ $user->phone }}" target="_blank" class="btn btn-flex btn-success px-6 mb-5 mb-xl-8">
        <i class="bi bi-whatsapp fs-1 me-2"></i>
        <span class="d-flex flex-column align-items-start ms-2">
            <span class="fs-3 fw-bold">Mesaj Gönder</span>
            <span class="fs-7">WhatsApp üzerinden mesaj gönder</span>
        </span>
    </a>
    <a href="mailto:{{ $user->email }}" class="btn btn-flex btn-primary px-6 mb-5 mb-xl-8">
        <i class="bi bi-envelope fs-1 me-2"></i>
        <span class="d-flex flex-column align-items-start ms-2">
            <span class="fs-3 fw-bold">Mesaj Gönder</span>
            <span class="fs-7">E-Posta yoluya mesaj gönder</span>
        </span>
    </a>
    <a href="tel:{{ $user->phone }}" class="btn btn-flex btn-info px-6 mb-5 mb-xl-8">
        <i class="bi bi-telephone-outbound fs-1 me-2"></i>
        <span class="d-flex flex-column align-items-start ms-2">
            <span class="fs-3 fw-bold">Arama Yap</span>
            <span class="fs-7">VoIP ile arama yap</span>
        </span>
    </a>
</div>