<div>
    @php
    $queryString="";
    $json = json_decode($lecture->config);
    $i = 0;
    foreach ($json as $key => $value) {
        if ($i == 0) {
            $queryString .= "?" . $key . "=" . $value;
        }else{ 
            $queryString .= "&" . $key . "=" . $value;          
        }
        
        $i++;
    }
    if (isset($json->kelime)) {
        $jsonDefinition = App\Models\JsonDefinition::find($json->kelime);  
        $kelime = strip_tags($jsonDefinition->content);    
    }
    if($lecture->exercise->id == 1) {
        $kelime = strip_tags($kelime);
        $kelimeArray = explode(' ', $kelime);
        $newKelimeler = "";
        foreach($kelimeArray as $key => $value) {
            $value = trim($value);
            if (!empty($value)) {
                $newKelimeler .= "$value" . " ";
            }
        }
    }elseif ($lecture->exercise->id == 7 || $lecture->exercise->id == 11) {
        $kelime = strip_tags($kelime);
        $kelimeArray = explode(' ', $kelime);
        $newKelimeler = "";
        foreach($kelimeArray as $key => $value) {
            $value = trim($value);
            if (!empty($value)) {
                $newKelimeler .= "<span id='k" . $key . "'>" . $value . "</span>";
            }
        }
    }
    @endphp  
    <div wire:ignore.self id="exercise_drawer_{{ $lecture->id }}" class="bg-white" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#exercise_button_{{ $lecture->id }}" data-kt-drawer-close="#exercise_close_{{ $lecture->id }}" data-kt-drawer-width="100%">
        <div class="card w-100 h-100 rounded-0">
            <div class="card-header pe-5">
                <div class="card-title">
                    <div class="d-flex justify-content-center flex-column me-3">
                        <span class="fs-4 fw-bold text-gray-900 me-1 lh-1">{{ $lecture->exercise->name }}</span>
                    </div>
                </div>
                <button id="drawerclose" style="display:none" wire:click="LectureComplete">Drawer Close</button>
                @if($lecture->exercise->id == 5)
                <div class="container">
                    <div class="row" style="padding-top:1.9%; padding-left:32%;">
                        <div class="col-md-1">
                            <button id="sour" style="background: none; border: none;">
                                <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
                                </svg>
                            </span>
                        </button>
                    </div>
                    <div class="col-md-1">
                        <input id="speed" type="text" class="form-control mx-auto py-1" aria-label="Sizing example input" placeholder="{{ $json->hiz*10 }}" aria-describedby="inputGroup-sizing-sm"/>
                    </div>
                    <div class="col-md-1">
                        <button id="plus" style="background: none; border: none;">
                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor"/>
                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        @endif
        @if ($lecture->exercise->id == 6)
        <div class="container">
            <div class="row" style="padding-top:1.9%; padding-left:32%;">
                <div  style="padding-left: 10%;">
                    <button type="button" class="btn btn-primary rotate" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="30px, 30px">
                        Seviye
                        <span class="svg-icon svg-icon-3 rotate-180 ms-3 me-0">...</span>
                    </button>
                    
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                        <div class="menu-item px-3">
                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-2"></div>
                        </div>
                        
                        <div class="separator mb-3 opacity-75"></div>
                        
                        <div class="menu-item px-3 mx-auto">
                            <a id="lvl1" href="#" class="menu-link px-3">
                                1. Seviye
                            </a>
                            <a id="lvl2" class="menu-link px-3">
                                2. Seviye
                            </a>
                            <a id="lvl3" class="menu-link px-3">
                                3. Seviye
                            </a>
                            <a id="lvl4" class="menu-link px-3">
                                4. Seviye
                            </a>
                            <a id="lvl5" class="menu-link px-3">
                                5. Seviye
                            </a>
                            <a id="lvl6" class="menu-link px-3">
                                6. Seviye
                            </a>
                            <a id="lvl7" class="menu-link px-3">
                                7. Seviye
                            </a>
                            <a id="lvl8" class="menu-link px-3">
                                8. Seviye
                            </a>
                            <a id="lvl9" class="menu-link px-3">
                                9. Seviye
                            </a>
                            <a id="lvl10" class="menu-link px-3">
                                10. Seviye
                            </a> 
                            
                            
                            <script>
                                function seviyeAyarla(x){
                                    $(".dropdown .menu").hide();
                                    hiz = x;
                                    $(".seviye-basligi").text(x+". Seviye ~ "+seviyeler[hiz]+ "ms"); 
                                    
                                    
                                    
                                }
                            </script> 
                            
                        </div>
                        
                        <div class="separator mt-3 opacity-75"></div>
                        
                        <div class="menu-item px-3">
                            <div class="menu-content px-3 py-3">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <script>
            var sayac = 120;
            var say = setInterval(function() {
                sayac--;
                if(sayac == 0){
                    clearInterval(say);
                    $("#drawerclose").click();
                }
            }, 1000);
        </script>
        @endif
        @if ($lecture->exercise->id == 7 || $lecture->exercise->id == 11)
        @push('scripts')
        <script type="text/javascript">
            document.addEventListener("livewire:load", () => {
                var kelimeler = "<p>{!! $newKelimeler !!}</p>";
                var frame = document.getElementById("exerciseframe");

                frame.addEventListener("load", function() {
                    frame.contentWindow.document.getElementById("{{ $lecture->exercise->element_id }}").innerHTML = kelimeler;
                    console.log(kelimeler);
                });
                
                
                Livewire.hook('element.updated', (el, component) => {
                    var kelimeler = "{!! $newKelimeler !!}";
                    var frame = document.getElementById("exerciseframe");

                    frame.addEventListener("load", function() {
                        frame.contentWindow.document.getElementById("{{ $lecture->exercise->element_id }}").innerHTML = kelimeler;
                        console.log(kelimeler);
                    });
                    
                })
            })
        </script>
        @endpush
        <div class="container">
            <div class="row" style="padding-top:1.9%; padding-left:32%;">
                <div  style="padding-left: 10%;">
                    <button type="button" class="btn btn-primary rotate" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="30px, 30px">
                        Seviye
                        <span class="svg-icon svg-icon-3 rotate-180 ms-3 me-0">...</span>
                    </button>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                        <div class="menu-item px-3">
                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-2"></div>
                        </div>
                        <div class="separator mb-3 opacity-75"></div>
                        <div class="menu-item px-3">
                            <a id="okumalvl1" class="menu-link px-3">
                                1. Seviye
                            </a>
                            <a id="okumalvl2" class="menu-link px-3">
                                2. Seviye
                            </a>
                            <a id="okumalvl3" class="menu-link px-3">
                                3. Seviye
                            </a>
                            <a id="okumalvl4" class="menu-link px-3">
                                4. Seviye
                            </a>
                            <a id="okumalvl5" class="menu-link px-3">
                                5. Seviye
                            </a>
                            <a id="okumalvl6" class="menu-link px-3">
                                6. Seviye
                            </a>
                            <a id="okumalvl7" class="menu-link px-3">
                                7. Seviye
                            </a>
                            <a id="okumalvl8" class="menu-link px-3">
                                8. Seviye
                            </a>
                            <a id="okumalvl9" class="menu-link px-3">
                                9. Seviye
                            </a>
                            <a id="okumalvl10" class="menu-link px-3">
                                10. Seviye
                            </a> 
                            <script>
                                function seviyeAyarla(x){
                                    $(".dropdown .menu").hide();
                                    hiz = x;
                                    $(".seviye-basligi").text(x+". Seviye ~ "+seviyeler[hiz]+ "ms"); 
                                }
                            </script> 
                        </div>
                        <div class="separator mt-3 opacity-75"></div>
                        <div class="menu-item px-3">
                            <div class="menu-content px-3 py-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if ($lecture->exercise->id == 8 || $lecture->exercise->id == 9)
        @php
        $config = json_decode($lecture->config);
        $hiz = $config->hiz;
        @endphp
        <div class="container">
            <div class="row" style="padding-top:1.9%; padding-left:32%;">
                <div class="col-md-1">
                    <button id="sour" style="background: none; border: none;">
                        <span class="svg-icon svg-icon-muted svg-icon-2hx">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="col-md-2">
                    <input id="speed" type="text" class="form-control mx-auto py-1" aria-label="Sizing example input" placeholder="" value="{{ $config->hiz }}" aria-describedby="inputGroup-sizing-sm"/> 
                </div>
                <div class="col-md-1">
                    <button id="plus" style="background: none; border: none;">
                        <span class="svg-icon svg-icon-muted svg-icon-2hx">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor"/>
                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
                            </svg>
                        </span>
                    </button>
                </div>         
            </div>               
        </div>
        @endif
        @if ($lecture->exercise->id == 12 || $lecture->exercise->id == 13 || $lecture->exercise->id == 14) 
        @php
        $config = json_decode($lecture->config);
        @endphp
        <div class="container">
            <div class="row" style="padding-top:1.9%; padding-left:32%;">
                <div class="col-md-1">
                    <button id="zsour" style="background: none; border: none;">
                        <span class="svg-icon svg-icon-muted svg-icon-2hx">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="col-md-2">
                    <input id="speed" type="text" class="form-control mx-auto py-1" aria-label="Sizing example input" placeholder="" value="{{ $config->hiz }}" aria-describedby="inputGroup-sizing-sm"/> 
                </div>
                <div class="col-md-1">
                    <button id="zplus" style="background: none; border: none;">
                        <span class="svg-icon svg-icon-muted svg-icon-2hx">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor"/>
                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
                            </svg>
                        </span>
                    </button>
                </div>         
            </div>               
        </div>
        @endif
        <div class="card-toolbar">
            <div class="btn btn-sm btn-icon btn-active-light-primary" id="exercise_close_{{  $lecture->id }}">
                <span class="svg-icon svg-icon-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                    </svg>
                </span>
            </div>
        </div>
    </div>
    <div class="card-body hover-scroll-overlay-y" style="margin:0px;padding:0px;overflow:hidden">
        <iframe id="exerciseframe" src="/{{ $lecture->exercise->path . $queryString  }}" frameborder="0" scrolling="no" style="overflow:hidden;overflow-x:hidden;overflow-y:hidden;height:100%;width:100%;position:absolute;top:0px;left:0px;right:0px;bottom:0px" height="100%" width="100%"></iframe> 
    </div>
</div>
</div>
<script>
    $(document).ready(function(){
        $("#plus").click(function(){
            $("#exerciseframe").contents().find("#arttir").click();
        });
        
        $("#sour").click(function(){
            $("#exerciseframe").contents().find("#azalt").click();
        });
        
    });
</script>
<script>
    $(document).ready(function(){
        $("#lvl1").click(function(){
            $("#exerciseframe").contents().find("#lvel1").click();
        });
        
        $("#lvl2").click(function(){
            $("#exerciseframe").contents().find("#lvel2").click();
        });
        
        $("#lvl3").click(function(){
            $("#exerciseframe").contents().find("#lvel3").click();
        });
        
        $("#lvl4").click(function(){
            $("#exerciseframe").contents().find("#lvel4").click();
        });
        
        $("#lvl5").click(function(){
            $("#exerciseframe").contents().find("#lvel5").click();
        });
        
        $("#lvl6").click(function(){
            $("#exerciseframe").contents().find("#lvel6").click();
        });
        
        $("#lvl7").click(function(){
            $("#exerciseframe").contents().find("#lvel7").click();
        });
        
        $("#lvl8").click(function(){
            $("#exerciseframe").contents().find("#lvel8").click();
        });
        
        $("#lvl9").click(function(){
            $("#exerciseframe").contents().find("#lvel9").click();
        });
        
        $("#lvl10").click(function(){
            $("#exerciseframe").contents().find("#lvel10").click();
        });
        
    });
</script>
<script>
    $(document).ready(function(){
        $("#okumalvl1").click(function(){
            $("#exerciseframe").contents().find("#level1").click();
        });
        
        $("#okumalvl2").click(function(){
            $("#exerciseframe").contents().find("#level2").click();
        });
        
        $("#okumalvl3").click(function(){
            $("#exerciseframe").contents().find("#level3").click();
        });
        
        $("#okumalvl4").click(function(){
            $("#exerciseframe").contents().find("#level4").click();
        });
        
        $("#okumalvl5").click(function(){
            $("#exerciseframe").contents().find("#level5").click();
        });
        
        $("#okumalvl6").click(function(){
            $("#exerciseframe").contents().find("#level6").click();
        });
        
        $("#okumalvl7").click(function(){
            $("#exerciseframe").contents().find("#level7").click();
        });
        
        $("#okumalvl8").click(function(){
            $("#exerciseframe").contents().find("#level8").click();
        });
        
        $("#okumalvl9").click(function(){
            $("#exerciseframe").contents().find("#level9").click();
        });
    });
</script>
<script>
    $(document).ready(function(){
        $("#zplus").click(function(){
            var input = $("#exerciseframe").contents().find("#input").val();
            var input = parseInt(input);
            var input = input + 100;
            $("#exerciseframe").contents().find("#input").val(input);
        });
    });
    $(document).ready(function(){
        $("#zsour").click(function(){
            var input = $("#exerciseframe").contents().find("#input").val();
            var input = parseInt(input);
            var input = input - 100;
            $("#exerciseframe").contents().find("#speed").val(input);
        });
    });
</script>
<script>
    $(document).ready(function(){
        $("#zplus").click(function(){
            $("#exerciseframe").contents().find("#arttir").click();
            $("#exerciseframe").contents().find("#uygula").click();
        });
        $("#zsour").click(function(){
            $("#exerciseframe").contents().find("#azalt").click();
            $("#exerciseframe").contents().find("#uygula").click();
        });
    });
</script>
<!--EGZERSİZ TAMAMLANDI BUTONU-->
<script>
    $("#drawerclose").click(function(){
        $("#exercise_close_{{ $lecture->id }}").click();
    });
</script>
</div>