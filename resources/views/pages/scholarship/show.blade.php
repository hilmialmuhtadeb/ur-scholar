<x-layout>
  <div class="w-50 mx-auto my-5">
    <h4 class="text-center">{{ $scholarship->title }}</h4>
    <div class="my-5 mx-auto">
      <img src={{ asset('storage/images/scholarship/' . $scholarship->image) }} alt={{ $scholarship->title }} class="s-detail-image w-100">
    </div>
    <p class="text-justify">{!! $scholarship->description !!}</p>
  </div>
</x-layout>