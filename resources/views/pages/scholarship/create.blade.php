<x-layout>
  <div class="container my-5">
    <h4 class="mb-4">Buat Informasi Beasiswa Baru</h4>

    <div class="row">
      <div class="col-md-8">
        <form action={{ route('scholarship.store') }} method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="image" class="form-label">Poster Beasiswa</label>
            <input type="file" name="image" class="form-control" id="image" value={{ old('image') }}>
            @if ($errors->has("image"))
              <div class="text-danger">
                <small>{{ $errors->first("image") }}</small>
              </div>
            @endif
          </div>
          <div class="mb-3">
            <label for="title" class="form-label">Judul Beasiswa</label>
            <input type="text" name="title" class="form-control" id="title" value={{ old('title') }}>
            @if ($errors->has("title"))
              <div class="text-danger">
                <small>{{ $errors->first("title") }}</small>
              </div>
            @endif
          </div>
          <div class="mb-3">
            <label for="editor" class="form-label">Deskripsi</label>
            <textarea name="description" id="editor" class="form-control">
              {{ old('description') }}
            </textarea>
            @if ($errors->has("description"))
              <div class="text-danger">
                <small>{{ $errors->first("description") }}</small>
              </div>
            @endif
          </div>
          <div class="mb-3 col-md-4">
            <label for="start_date" class="form-label">Tanggal Buka Pendaftaran</label>
            <input type="date" name="start_date" class="form-control" id="start_date" value={{ old('start_date') }}>
          </div>
          <div class="mb-3 col-md-4">
            <label for="end_date" class="form-label">Batas Akhir Pendaftaran</label>
            <input type="date" name="end_date" class="form-control" id="end_date" value={{ old('end_date') }}>
          </div>
          <div class="mb-3 col-md-4">
            <label for="category_id" class="form-label">Kategori</label>
            <select name="category_id" id="category_id" class="form-select">
              <option value="">Pilih Kategori</option>
              @foreach ($categories as $c)
                <option value={{ $c->id }}>{{ $c->name }}</option>
              @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-primary mt-3 mb-5">Tambah</button>
        </form>
      </div>
    </div>

  </div>
  
  @section('ck-editor')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
    <script>
      ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .catch( error => {
        console.error( error );
      } );
    </script>
  @endsection
</x-layout>