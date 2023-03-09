
    @if(count($Exercises))
    @php
        $i=1;
    @endphp

<div class="mb-5" style="text-align: right">
   <a href="{{ url('/uygulama/free-mode') }}" class="my-auto btn btn-light-primary">Serbest Moda Geç</a>
</div>

   @foreach($Exercises as $key => $index)
        <div class="d-flex align-items-center bg-inverse-dark shadow shadow-sm rounded p-5 mb-7 border border-gray-200 border-active active">
            @if (auth()->user()->lectures()->where('lecture_id', $index->id)->exists())
                @if(auth()->user()->lectures()->where('lecture_id', $index->id)->first()->pivot->is_completed == 1)
                <span class="svg-icon svg-icon-success svg-icon-1 me-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor"/>
                        <path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"/>
                    </svg>
                </span>
                @else
                <span class="svg-icon svg-icon-primary svg-icon-1 me-5">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 6.30005C20.5 5.30005 19.9 5.19998 18.7 5.09998C17.5 4.99998 14.5 5 11.9 5C9.29999 5 6.29998 4.99998 5.09998 5.09998C3.89998 5.19998 3.29999 5.30005 2.79999 6.30005C2.19999 7.30005 2 8.90002 2 11.9C2 14.8 2.29999 16.5 2.79999 17.5C3.29999 18.5 3.89998 18.6001 5.09998 18.7001C6.29998 18.8001 9.29999 18.8 11.9 18.8C14.5 18.8 17.5 18.8001 18.7 18.7001C19.9 18.6001 20.5 18.4 21 17.5C21.6 16.5 21.8 14.9 21.8 11.9C21.8 9.00002 21.5 7.30005 21 6.30005ZM9.89999 15.7001V8.20007L14.5 11C15.3 11.5 15.3 12.5 14.5 13L9.89999 15.7001Z" fill="currentColor"/>
                    </svg>
                </span>
                @endif
            @else
            <span class="svg-icon svg-icon-muted svg-icon-1 me-5">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"/>
                    <path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="currentColor"/>
                </svg>
            </span>
            @endif
            <div class="flex-grow-1 me-2">
                <a href="/uygulama/egzersizler/egzersiz/{{ $index->id }}" class="fw-bold text-gray-800 text-hover-primary fs-6">{{ $i }}. {{ $index->name }}</a>
                <span class="text-muted fw-semibold d-block">
                    @if (auth()->user()->lectures()->where('lecture_id', $index->id)->exists())
                    {{ auth()->user()->lectures()->where('lecture_id', $index->id)->first()->pivot->duration != 0 ? Carbon\CarbonInterval::seconds(auth()->user()->lectures()->where('lecture_id', $index->id)->first()->pivot->duration)->cascade()->forHumans() . " vakit geçirdiniz." : "Hiç vakit geçirmediniz." }}
                    @else
                    Henüz başlanmadı.
                    @endif
                </span>
                @php
                    $i++;
                @endphp
            </div>
            <!--end::Title-->
            <!--begin::Lable-->
            <div>
                <div id="startexercise_{{ $key }}">
                @if($key == 0)
                    <button class="btn btn-sm btn-primary" id="exercise_button_{{ $index->id }}">Egzersize Başla</button>
                    @livewire('app.education.exercises', ['id' => $index->id])
                @else 
                    @if (auth()->user()->lectures()->where('lecture_id', $Exercises[$key-1]->id)->exists())
                        @if(auth()->user()->lectures()->where('lecture_id', $Exercises[$key-1]->id)->first()->pivot->is_completed == 1)
                        <button class="btn btn-sm btn-primary" id="exercise_button_{{ $index->id }}">Egzersize Başla</button>
                        @livewire('app.education.exercises', ['id' => $index->id])
                        @else
                        <button class="btn btn-sm btn-light-primary" disabled>Önceki eğitimi bitirmelisiniz.</button>
                        @endif
                    @else
                        <button class="btn btn-sm btn-light-primary" disabled>Önceki eğitimi bitirmelisiniz.</button>
                    @endif
                @endif
                </div>
                @if (auth()->user()->lectures()->where('lecture_id', $index->id)->exists())
                    @if(auth()->user()->lectures()->where('lecture_id', $index->id)->first()->pivot->is_completed == 1)
                    <script type="text/javascript">
                    var exerciseButton = document.getElementById("startexercise_{{ $key }}")
                    if(typeof exerciseButton !== 'undefined'){ exerciseButton.remove();}
                    </script>
                    @endif
                @else
                @endif
            </div>
            <!--end::Lable-->
        </div>
    @endforeach
    @endif

    
    <script>
        document.addEventListener('exerciseAdded', () => {
            $('#addExerciseModal').modal('hide');
        })
        window.addEventListener('swal:modal', event => {
            Swal.fire({
                title: event.detail.title,
                text: event.detail.text,
                icon: event.detail.type,
                confirmButtonText: 'Tamam'
            })
        })
    </script>

   <!--Config çekmek için script-->
   <script>
        var url = new URL(window.location.href);
        var c = url.searchParams.get("c");
        var d = url.searchParams.get("d");
        if(c == 1){
            Swal.fire({
                title: 'Eğitim başarıyla oluşturuldu!',
                text: 'Eğitim başarıyla oluşturuldu.',
                icon: 'success',
                confirmButtonText: 'Tamam'
            })
        }

        var myframe = document.getElementById("myframe");
        if(typeof myframe !== 'undefined'){
            myframe.src = myframe.src + "?d=" + d;
        }
        myframe.src = myframe.src + "?c=" + c + "&d=" + d + "&e=" + e + "&f=" + f;

        console.log(myframe.src);  
    </script>

    

    