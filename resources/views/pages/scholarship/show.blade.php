<x-layout>
  <div class="w-50 mx-auto my-5">
    <h1 class="text-center">{{ $scholarship->title }}</h1>
    <div class="mt-5 mb-3 mx-auto">
      <img src={{ asset('storage/images/scholarship/' . $scholarship->image) }} alt={{ $scholarship->title }} class="s-detail-image w-100 mb-3">
      <div class="d-flex justify-content-between align-items-center">
        <p><span class="fw-bold">{{ $scholarship->author->name }}</span> &middot; {{ \App\Utils\Tanggal::tanggalIndo($scholarship->created_at->format('Y-m-d')) }}</p>
        <div class="dropdown">
          <p class="py-2 px-4 fw-bold fs-5 menu-dropdown-button" data-bs-toggle="dropdown" aria-expanded="false">⋮</p>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">Simpan</a></li>
            @if (Auth::user()->id === $scholarship->author->id)
            <li><a class="dropdown-item" href={{ route('scholarship.edit', $scholarship->slug) }}>Edit</a></li>
            <form action={{ route('scholarship.delete', $scholarship->slug) }} method="post">
              @csrf
              @method('delete')
              <li><button class="dropdown-item text-danger" type="submit" onclick="return confirm('Are you sure?')">Hapus</button></li>
            </form>
            @endif
          </ul>
        </div>
      </div>
    </div>
    <hr>
    <p class="text-justify">{!! $scholarship->description !!}</p>
  </div>
</x-layout>