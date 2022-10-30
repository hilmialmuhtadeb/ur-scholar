<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href={{ asset('css/app.css') }}>

    <title>{{ $title ?? 'UrScholar' }}</title>
</head>

<body>
  @if (str_contains(Request::url(), 'register') || str_contains(Request::url(), 'login'))
    <x-simple-navbar />
  @else
    <x-navbar />
  @endif

  <x-shared.toast />

  {{ $slot }}

  @yield('ck-editor')
</body>

</html>
