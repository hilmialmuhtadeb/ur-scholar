<x-layout>
  <x-slot:title>
    Masuk | UrScholar
  </x-slot:title>

  <div class="container p-5">
    <div class="row justify-content-center">
      <div class="col-6 d-flex flex-column justify-content-center">
        <img src={{ asset('svg/information.svg') }} class="w-75">
        <h4 class="mt-4">Cari beasiswa terlengkap di UrScholar</h4>
        <p>Gabung dan coba rasakan komunitas beasiswa terbesar di Indonesia.</p>
      </div>
      <div class="card px-4 py-2 shadow col-4">
        <div class="card-body py-4">
          <h5 class="card-title text-center">Masuk</h5>
          <small class="text-center mb-5 d-block">Belum punya akun? <a href="/register">daftar</a></small>

          <form method="POST" action={{ route('login.authenticate') }}>
            @csrf
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" value={{ old('email') }}>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
            </div>
            @if ($errors->has("login"))
              <div class="text-danger">
                <small>{{ $errors->first("login") }}</small>
              </div>
            @endif
            <button type="submit" class="d-block w-100 mt-5 btn btn-primary">Masuk</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</x-layout>