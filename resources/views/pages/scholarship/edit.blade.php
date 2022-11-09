<x-layout>
  <div class="container my-5">
    <h4 class="mb-4">Ubah Informasi Beasiswa</h4>
    <x-shared.scholarshipform :categories="$categories" :scholarship="$scholarship" />
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