<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title','Homepage') - Boolean</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .title {
      color: red
    }
  </style>
  @yield('head')
</head>
  
<body>

  @include('partials.header')

  <main>
    {{-- contenuto delle varie pagine --}}
    @yield('content')
  </main>

  @include('partials.footer')
  
  @yield('end-body')
</body>
</html>