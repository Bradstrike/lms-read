<div>
<br>
<div class="container" style="padding-top: 10%;">
  <div class="row float-left">
    <div class="py-8">
    <select class="form-select" wire:model="selectedCategory" data-placeholder="Kategori">
      <option></option>
      <option value="0">Hepsi</option>
      @foreach ($categories as $category) 
      <option value="{{ $category->id }}">{{ $category->title }}</option>
      @endforeach
    </select>
    </div>
    {{-- <div style="padding-top: 5%;"></div> --}}
@foreach ($books as $key => $index)
<div class="col-md-6 col-xxl-4 py-3">
      <div id="cardici" class="card">
        <div class="card-body d-flex flex-center flex-column py-9 px-5">
          <img src="{{ $index->image }}" height="400" width="237" alt="image">
            <h3 class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">{{ $index->title }}</h3>
            <div class="fw-semibold text-gray-400 mb-0 px-10">{{ $index->author }}</div>
          </div>
        <div class="d-flex flex-center flex-wrap mb-5">
            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
              <div class="fw-semibold text-gray-400">{{ $index->description }}</div>
            </div>
        </div>
          <button id="exercise_button_{{$index->id}}" class="btn btn-sm btn-light-primary" data-kt-follow-btn="true">
            Okumaya Başla
          </button>
          @livewire('app.education.readpage', ['id' => $index->id], key($index->id))
        </div>
      </div>
@endforeach
</div>
</div>
</div>