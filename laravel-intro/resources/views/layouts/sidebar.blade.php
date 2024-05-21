<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Title della pagine</title>
</head>
<body>

  @include('partials.header')

  <aside>
    @yield('sidebar')
  </aside>

  <main>
    {{-- contenuto delle varie pagine --}}
    @yield('content')
  </main>

  @include('partials.footer')
  
</body>
</html>