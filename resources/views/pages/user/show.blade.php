<x-layout>
    <x-slot name="title">
        {{ $user->name }} | UrScholar
    </x-slot>

    <div class="container">
      <div class="w-50 mx-auto my-5">
        <h1 class="text-center">Profil</h1>
        <form method="POST" action={{ route('user.update', $user) }}>
          @csrf
          @method('PATCH')
          <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}" disabled>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="">
          </div>
          <div class="mb-3">
            <label for="password_confirmation" class="form-label">Ulangi Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
          </div>
          <button type="submit" class="btn btn-primary">Ubah</button>
        </form>
      </div>

      <div class="my-4">
        <h5 class="">Beasiswa Yang Kamu Tambahkan</h5>
        <div class="row">
          @foreach ($scholarships as $s)
            <div class="col-md-3 my-3">
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
            </div>
          @endforeach
        </div>
      </div>
    </div>
</x-layout>