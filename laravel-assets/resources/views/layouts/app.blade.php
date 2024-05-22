<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>App</title>

  @vite('resources/js/app.js')
</head>
<body>
  <header>
    header
  </header>

  <main>
    @yield('content')
  </main>

  <footer>
    ciao mamma
  </footer>
</body>
</html>