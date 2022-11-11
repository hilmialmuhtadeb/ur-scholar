<x-layout>
  <div class="container">

    <x-slot name="title">
      {{ $category->name }} | UrScholar
    </x-slot>

    <div class="d-flex justify-content-between">
      <h4 class="mt-5 mb-4 fw-bold"><span class="fw-normal">Kategori:</span> {{ $category->name }}</h4>
      <div class="d-flex align-items-center">
        <a href={{ route('scholarship.create') }}>
          <button class="btn btn-primary">+ Info Beasiswa</button>
        </a>
      </div>
    </div>

    @if(count($scholarships) < 1)
      <div class="my-5 text-center">
        <img src="{{ asset('svg/scholarship.svg') }}" alt="">
        <p class="my-3 fw-semibold">Belum ada beasiswa ditemukan.</p>
      </div>
    @else
      <div class="row">
        @foreach ($scholarships as $s)
          <div class="col-md-4 my-3">
            <x-shared.scholarshipcard :s="$s" />
          </div>
        @endforeach
      </div>
    @endif
  </div>
</x-layout>