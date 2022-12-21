<x-layout title="Beasiswa Disimpan">
  <div class="container">
    <div class="my-4">
      <h5 class="mb-3">Beasiswa Disimpan</h5>
      @if (count($scholarships) < 1)
      <p class="alert alert-warning">Tidak ada beasiswa yang kamu simpan. Beasiswa yang kamu simpan akan ditampilkan di sini.</p>
      @else
      <div class="row">
        @foreach ($scholarships as $s)
          <div class="col-md-3 my-3">
            <x-shared.scholarshipcard :s="$s" />
          </div>
        @endforeach
      </div>
      @endif
    </div>
  </div>
</x-layout>