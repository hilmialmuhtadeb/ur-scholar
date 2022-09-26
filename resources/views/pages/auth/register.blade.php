<x-layout>
  <x-slot:title>
    Daftar
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
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">Kami tidak akan menyebarkan email anda ke siapapun.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="d-block w-100 mt-5 btn btn-primary">Daftar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-layout>