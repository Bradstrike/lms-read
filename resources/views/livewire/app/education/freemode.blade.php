<div>
    <div class="album py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-xl-stretch mb-xl-16">
                        <div class="card-header border-0 bg-success"></div>
                        <div class="card-body p-0">
                            <div class="mixed-widget-2-chart card-rounded-bottom bg-success" data-kt-color="danger" style="height: 200px; min-height: 200px;">
                                <h1 style="padding-left: 39%; padding-top:2%;">Serbest Mod Egzersizler</h1>
                                <div id="apexchartsl6gdhfgd" class="apexcharts-canvas apexchartsl6gdhfgd apexcharts-theme-light" style="width: 263px; height: 100px;">
                                    <div class="apexcharts-legend" style="max-height: 100px;"></div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div>
                                </div>
                            </div>
                            <div class="row g-0 m-0 p-0">
                                @foreach ($exercises as $key => $index)
                                
                                @php
                                $classname = $index->is_completed == 0 ? "danger" : ($index->is_completed == 1 ? "success" : "warning");
                                @endphp
                                <div class="col-lg-4">
                                    <div class="card-p mt-n20 position-relative">
                                        <div class="col bg-light-{{ $classname }} px-6 py-8 rounded-2 me-7 mb-8">
                                            <span class="svg-icon svg-icon-3x svg-icon-{{ $classname }} d-block my-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor"></rect>
                                                    <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor"></rect>
                                                    <rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor"></rect>
                                                    <rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor"></rect>
                                                </svg>
                                            </span>
                                            <button style="background:none; border: none;" id="exercise_button_{{ $index->id}}"><a class="text-{{ $classname }} fw-semibold fs-6"> {{ $index->name }}</a></button>
                                            @livewire('app.education.exercises', ['id' => $index->id])
                                            <span class="text-muted fw-semibold d-block">
                                                @if (auth()->user()->lectures()->where('lecture_id', $index->id)->exists())
                                                {{ auth()->user()->lectures()->where('lecture_id', $index->id)->first()->pivot->duration != 0 ? Carbon\CarbonInterval::seconds(auth()->user()->lectures()->where('lecture_id', $index->id)->first()->pivot->duration)->cascade()->forHumans() . " vakit geçirdiniz." : "Hiç vakit geçirmediniz." }}
                                                @else
                                                Henüz başlanmadı.
                                                @endif
                                                <div class="progress h-7px bg-{{ $classname }} bg-opacity-50 mt-7">
                                                    <div class="progress-bar bg-{{ $classname }}" role="progressbar" style="width: {{auth()->user()->lectures()->where('lecture_id', $index->id)->exists() ? auth()->user()->lectures()->where('lecture_id', $index->id)->first()->pivot->duration != 0 ? auth()->user()->lectures()->where('lecture_id', $index->id)->first()->pivot->duration / 3600 * 100 / 10 : 0 : 0 }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    