<div class="row">
  <div class="col-md-8">
    @if (isset($scholarship))
    <form action={{ route('scholarship.update', $scholarship->slug) }} method="POST" enctype="multipart/form-data">
    @else
    <form action={{ route('scholarship.store') }} method="POST" enctype="multipart/form-data">
    @endif
      @csrf
      <div class="mb-3">
        <label for="image" class="form-label">Poster Beasiswa</label>
        <input type="file" name="image" class="form-control" id="image" value={{ (isset($scholarship)) ? $scholarship->image : old('image') }}>
        @if ($errors->has("image"))
          <div class="text-danger">
            <small>{{ $errors->first("image") }}</small>
          </div>
        @endif
      </div>
      <div class="mb-3">
        <label for="title" class="form-label">Judul</label>
        <input type="text" name="title" class="form-control" id="title" value="{{ $scholarship->title }}">
        @if ($errors->has("title"))
          <div class="text-danger">
            <small>{{ $errors->first("title") }}</small>
          </div>
        @endif
      </div>
      <div class="mb-3">
        <label for="editor" class="form-label">Deskripsi</label>
        <textarea name="description" id="editor" class="form-control">
          {!! $scholarship->description !!}
        </textarea>
        @if ($errors->has("description"))
          <div class="text-danger">
            <small>{{ $errors->first("description") }}</small>
          </div>
        @endif
      </div>
      <div class="mb-3 col-md-4">
        <label for="start_date" class="form-label">Tanggal Buka Pendaftaran</label>
        <input type="date" name="start_date" class="form-control" id="start_date" value={{ $scholarship->start_date }}>
      </div>
      <div class="mb-3 col-md-4">
        <label for="end_date" class="form-label">Batas Akhir Pendaftaran</label>
        <input type="date" name="end_date" class="form-control" id="end_date" value={{ $scholarship->end_date }}>
      </div>
      <div class="mb-3 col-md-4">
        <label for="category_id" class="form-label">Kategori</label>
        <select name="category_id" id="category_id" class="form-select">
          <option value="">Pilih Kategori</option>
          @foreach ($categories as $c)
            <option value={{ $c->id }} {{ ($scholarship->category_id === $c->id) ? 'selected' : '' }}>{{ $c->name }}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-primary mt-3 mb-5">{{ isset($scholarship) ? 'Ubah' : 'Tambah' }}</button>
    </form>
  </div>
</div>