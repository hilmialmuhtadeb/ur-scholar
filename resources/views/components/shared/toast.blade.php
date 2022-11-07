
@if (Session::has('success'))
<div class="container">
  <div class="position-relative w-full alert-box">
    <div class="alert alert-success w-full alert-dismissible fade show w-25 ms-auto position-fixed bottom-0 end-0 m-4" role="alert">
      {{ Session::get('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
</div>
@endif

@if (Session::has('failed'))
<div class="container">
  <div class="position-relative w-full alert-box">
    <div class="alert alert-danger w-full alert-dismissible fade show w-25 ms-auto position-fixed bottom-0 end-0 m-4" role="alert">
      {{ Session::get('failed') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
</div>
@endif