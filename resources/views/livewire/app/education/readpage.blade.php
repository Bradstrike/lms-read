<div wire:ignore id="exercise_drawer_{{ $book->id }}" class="drawer drawer-end" data-kt-drawer-scroll="true"  data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#exercise_button_{{ $book->id }}" data-kt-drawer-close="#exercise_close_{{ $book->id }}" data-kt-drawer-width="100%">
    <style>
        p {  
            padding-right: 10%;
            padding-left: 10%;
            line-height: 2.4;
            font-size: medium;
            text-align: justify;
            color: var(--bs-body-color);
            text-indent:40px;
            letter-spacing:0.5px;
            word-spacing: 2px;
            font-size: 140%;
            text-transform: capitalize;
            font-family: 'Calibri';
            font-style: lighter;
            font-weight: 200;

            @media only screen and (max-width: 600px) {
                padding-right: 15%;
                padding-left: 15%;
                line-height: 1.8;
                overflow-x: hidden;
            }
         } 
    </style>
    <div class="card w-100 h-100 rounded-0">
        <div class="card-header pe-5">
            <div class="card-title mx-auto">
                <div class="justify-content-center flex-column me-3">
                    <h3 class="d-inline-block mb-2 fs-2x fw-bold text-dark">{{ $book->title }}</h3> 
                    <span class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-primary translate rounded"></span>               
                </div>
            </div>
            <div class="card-toolbar">
                <div class="btn btn-sm btn-icon btn-active-light-primary" id="exercise_close_{{ $book->id }}">
                    <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
        <div class="card-body hover-scroll-overlay-y">
            <p>{{ $book->read }}</p>
        </div>
    </div>
</div>
