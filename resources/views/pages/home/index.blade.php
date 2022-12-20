<x-layout>
    <div class="container">
<div class="row mt-3">
    <div class="col">
        <div class="d-flex h-100">
            <div class="justify-content-center align-self-center mt-3">
                <h2>Sistem Informasi Beasiswa</h2>
                <p class="mt-4">UrScholar merupakan wadah bagi 
                    masyarakat Indonesia yang ingin mengembangakan karier, pengalaman, 
                    dan jaringan kampus di dalam dan luar negeri. 
                    Melalui beberapa informasi yang ditawarkan oleh UrScholar,
                    UrScholar berkomitmen untuk menyiapkan informasi beasiswa yang terbaru dan aman untuk 
                    salah satu bentuk kontribusi dalam proses memajukan Indonesia. Maka Tunggu apa lagi, Segera Cari dan Daftarkan dirimu!!! </p>
                    <a href={{ route('scholarship.index') }}>
                      <button type="button" class="btn btn-lg mt-3 text-white" style="background-color: #0E73B9;">Cari Beasiswa</button>
                    </a>
            </div>
        </div>
    </div>
    <div class="col">
        <img src={{ asset('svg/Hero1.png') }} alt="" width="100%">
    </div>
  </div>
  <div class="container">
      <h3 class="text-center mt-5 mb-4 py-2 border-bottom">Jenis Beasiswa</h3>
      <div class="row">
        <div class="col-sm-4">
          <a href={{ route('category.show', 2) }} class="text-reset text-decoration-none">
            <div class="card text-center">
              <div class="card-body">
                <h6 class="card-title mr-2 fs-5 text-center">Kursus</h6>
                <img src={{ asset('svg/sma2.png') }} class="img-fluid" style="max-height: 140px"/>
                <p class="card-text fs-6 text-center">Cari kursus yang menyediakan beasiswa untuk kamu.</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4">
          <a href={{ route('category.show', 1) }} class="text-reset text-decoration-none">
            <div class="card text-center">
              <div class="card-body">
                <h6 class="card-title mr-2 fs-5 text-center">Pendidikan</h6>
                <img src={{ asset('svg/kuliah.png') }} class="img-fluid" style="max-height: 140px"/>
                <p class="card-text fs-6 text-center">Para siswa juga mendapatkan kesempatan untuk memperoleh beasiswa.</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4">
          <a href={{ route('category.show', 3) }} class="text-reset text-decoration-none">
            <div class="card text-center">
              <div class="card-body">
                <h6 class="card-title mr-2 fs-5 text-center">Workshop</h6>
                <img src={{ asset('svg/smp.png') }} class="img-fluid" style="max-height: 140px"/>
                <p class="card-text fs-6 text-center">Ada workshop gratis untuk untuk mengasah kemampuanmu.</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</x-layout>