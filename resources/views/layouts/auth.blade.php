
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'DRUMNET INNOV') }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ mix("css/app.css") }}"/>
</head>
<body class="hold-transition login-page" style='background-color: #005C94'>
    @yield("form-login")

    <!-- /.login-box -->
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
