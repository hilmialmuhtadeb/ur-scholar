<x-layout>
  <x-slot:title>
    Daftar | UrScholar
  </x-slot:title>

  <div class="container p-5">
    <div class="row justify-content-center">
      <div class="col-6 d-flex flex-column justify-content-center">
        <img src={{ asset('svg/innovation.svg') }} class="w-75">
        <h4 class="mt-4">Cari beasiswa terlengkap di UrScholar</h4>
        <p>Gabung dan coba rasakan komunitas beasiswa terbesar di Indonesia.</p>
      </div>
      <div class="card px-4 py-2 shadow col-5">
        <div class="card-body py-4">
          <h5 class="card-title text-center">Daftar Sekarang</h5>
          <small class="text-center mb-5 d-block">Sudah punya akun? <a href="/login">masuk</a></small>

          <form method="POST" action={{ route('register.store') }}>
            @csrf
            <div class="mb-3">
              <label class="form-label">Nama Lengkap</label>
              <input type="text" name="name" class="form-control" value={{ old('name') }}>
              @if ($errors->has("name"))
                <div class="text-danger">
                  <small>{{ $errors->first("name") }}</small>
                </div>
              @endif
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" value={{ old('email') }}>
              <div id="emailHelp" class="form-text">Kami tidak akan menyebarkan email anda ke siapapun.</div>
              @if ($errors->has("email"))
                <div class="text-danger">
                  <small>{{ $errors->first("email") }}</small>
                </div>
              @endif
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control">
              @if ($errors->has("password"))
                <div class="text-danger">
                  <small>{{ $errors->first("password") }}</small>
                </div>
              @endif
            </div>
            <button type="submit" class="d-block w-100 fw-bold py-3 mt-5 btn btn-primary">Daftar</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</x-layout>