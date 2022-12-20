<x-layout>
  <div class="container">

    <div class="d-flex justify-content-between">
      <h4 class="mt-5 mb-3">Semua Beasiswa</h4>
      <div class="d-flex align-items-center">
        <a href={{ route('scholarship.create') }}>
          <button class="btn btn-primary">+ Info Beasiswa</button>
        </a>
      </div>
    </div>

    <div class="d-flex mb-4">
      <div class="dropdown">
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Kategori
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          @foreach ($categories as $category)
            <li><a class="dropdown-item" href={{ route('category.show', $category) }}>{{ $category->name }}</a></li>
          @endforeach
        </ul>
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