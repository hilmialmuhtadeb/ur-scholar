<div class="card">
  <img src={{ asset('/storage/images/scholarship/' . $s->image) }} class="s-card-image" alt="poster beasiswa">
  <div class="card-body">
    @if ($s->is_archived)
    <div>
      <span class="badge bg-warning">Arsip</span>
    </div>
    @endif
    <small><a href="">{{ $s->category->name }}</a> &middot; {{ $s->author->name }}</small>
    <h5 class="card-title s-card-title">{{ $s->title }}</h5>
    <div class="my-4">
      <p class="fw-bold m-0 text-secondary">Pendaftaran</p>
      {{ \App\Utils\Tanggal::tanggalIndo($s->start_date) }} - {{ \App\Utils\Tanggal::tanggalIndo($s->end_date) }}
    </div>
    <a href={{ route('scholarship.show', $s->slug) }}>Lihat Detail</a>
  </div>
</div>