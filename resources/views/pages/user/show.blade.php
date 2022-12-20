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
        <h5 class="mb-3">Beasiswa Yang Kamu Tambahkan</h5>
        @if (count($scholarships) < 1)
        <p class="alert alert-warning">Tidak ada beasiswa yang ditambahkan. Kamu bisa menambahkan informasi beasiswa <a href={{ route('scholarship.create') }}>di sini</a>.</p>
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