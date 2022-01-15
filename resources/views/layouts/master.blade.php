
<!DOCTYPE html>

<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }}</title>

  <link rel="stylesheet" href="{{ mix("css/app.css") }}"/>
  @livewireStyles
</head>
<body class="hold-transition sidebar-mini">
  @yield('content')



<script src="{{ mix('js/app.js') }}"></script>
@livewireScripts
</body>
</html>
