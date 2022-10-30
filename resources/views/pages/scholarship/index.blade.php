<x-layout>
  <div class="container">

    <div class="d-flex justify-content-between">
      <h4 class="mt-5 mb-4">Semua Beasiswa</h4>
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
            <div class="card">
              <img src={{ asset('/storage/images/scholarship/' . $s->image) }} class="s-card-image" alt="poster beasiswa">
              <div class="card-body">
                <small><a href="">{{ $s->category->name }}</a> &middot; {{ $s->author->name }}</small>
                <h5 class="card-title s-card-title">{{ $s->title }}</h5>
                <div class="my-4">
                  <p class="fw-bold m-0 text-secondary">Pendaftaran</p>
                  {{ \App\Utils\Tanggal::tanggalIndo($s->start_date) }} - {{ \App\Utils\Tanggal::tanggalIndo($s->end_date) }}
                </div>
                <a href={{ route('scholarship.show', $s->slug) }}>Lihat Detail</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @endif
  </div>
</x-layout>