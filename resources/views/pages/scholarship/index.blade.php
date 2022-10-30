<x-layout>
  <div class="container">

    <div class="d-flex justify-content-between">
      <h4 class="my-4">Semua Beasiswa</h4>
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
          <div class="col-md-4">
            <div class="card">
              <img src={{ asset('/storage/images/scholarship/' . $s->image) }} class="s-card-image" alt="poster beasiswa">
              <div class="card-body">
                <h5 class="card-title">{{ $s->title }}</h5>
                <p class="card-text">{!! $s->description !!}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @endif
  </div>
</x-layout>