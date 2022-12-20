<x-layout>
  <x-slot name="title">
      {{ $scholarship->title }}
  </x-slot>

  <div class="w-50 mx-auto my-5">
    <h1 class="text-center">{{ $scholarship->title }}</h1>
    <div class="mt-5 mb-3 mx-auto">
      <img src={{ asset('storage/images/scholarship/' . $scholarship->image) }} alt={{ $scholarship->title }} class="s-detail-image w-100 mb-3">
      <div class="d-flex justify-content-between align-items-center">
        <p><span class="fw-bold">{{ $scholarship->author->name }}</span> &middot; {{ \App\Utils\Tanggal::tanggalIndo($scholarship->created_at->format('Y-m-d')) }}</p>
        <div class="dropdown">
          @auth
          <p class="py-2 px-4 fw-bold fs-5 menu-dropdown-button" data-bs-toggle="dropdown" aria-expanded="false">⋮</p>
          <ul class="dropdown-menu dropdown-menu-end">
            <form action={{ route('bookmark.store', $scholarship->slug) }} method="post">
              @csrf
              @method('POST')
              <li><button class="dropdown-item" type="submit">Simpan</button></li>
            </form>
            @if (Auth::user()->id === $scholarship->author->id)
            <form action={{ route('scholarship.archive', $scholarship->slug) }} method="post">
              @csrf
              @method('PATCH')
              <input type="hidden" name="status" value={{ $scholarship->is_archived }}>
              <li><button class="dropdown-item" type="submit" onclick="return confirm('Apa anda yakin?')">{{ $scholarship->is_archived ? "Tampilkan" : "Arsip" }}</button></li>
            </form>
            <li><a class="dropdown-item" href={{ route('scholarship.edit', $scholarship->slug) }}>Edit</a></li>
            <form action={{ route('scholarship.destroy', $scholarship->slug) }} method="post">
              @csrf
              @method('delete')
              <li><button class="dropdown-item text-danger" type="submit" onclick="return confirm('Apa anda yakin?')">Hapus</button></li>
            </form>
            @endif
          </ul>
          @endauth
        </div>
      </div>
    </div>
    <hr>
    <p class="text-justify">{!! $scholarship->description !!}</p>
  </div>
</x-layout>