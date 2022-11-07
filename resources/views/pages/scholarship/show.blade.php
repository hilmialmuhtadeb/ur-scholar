<x-layout>
  <div class="w-50 mx-auto my-5">
    <h1 class="text-center">{{ $scholarship->title }}</h1>
    <div class="mt-5 mb-3 mx-auto">
      <img src={{ asset('storage/images/scholarship/' . $scholarship->image) }} alt={{ $scholarship->title }} class="s-detail-image w-100 mb-3">
      <div class="d-flex justify-content-between align-items-center">
        <p><span class="fw-bold">{{ $scholarship->author->name }}</span> &middot; {{ \App\Utils\Tanggal::tanggalIndo($scholarship->created_at->format('Y-m-d')) }}</p>
        <div class="dropdown">
          <p class="p-2 menu-dropdown-button" data-bs-toggle="dropdown" aria-expanded="false">⋮</p>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">Simpan</a></li>
            @if (Auth::user()->id === $scholarship->author->id)
            <li><a class="dropdown-item" href="#">Edit</a></li>
            <li><a class="dropdown-item text-danger" href="#">Hapus</a></li>
            @endif
          </ul>
        </div>
      </div>
    </div>
    <hr>
    <p class="text-justify">{!! $scholarship->description !!}</p>
  </div>
</x-layout>