<div>
    <!--Lecturelar listelenecek-->
    <div class="col-md-4">
        @foreach($Lectures as $index => $Lecture)
        <div class="col-md-4">
            <div class="card card-flush h-xl-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <h4 class="fw-bold text-gray-800 mb-3">{{ $Lecture->name }}</h4>
                            <p>
                                {{ $Lecture->description }}
                            </p>
                            <div class="d-flex d-grid gap-5">
                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        Egzersiz
                                    </span>
                                </div>
                                <div class="d-flex flex-column flex-shrink-0">
                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        25 Dakika
                                    </span>
                                </div>
                                <div class="d-flex flex-column flex-shrink-0">
                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                        <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        Uygulamalı Eğitim
                                    </span>
                                </div>
                            </div>
                            
                            
                            {{-- <button wire:click="start({{ $lesson->id }})" class="btn btn-primary btn-sm mt-4"> <i class="bi bi-arrow-right ms-2"></i></button> --}}

                            <a class="btn btn-primary" href="{{ url(/uygulama/startedu) }}">Egzersize Başla</a>
                            

                      
                           
                           
                          
                           

                        </div>
                    </div>
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
