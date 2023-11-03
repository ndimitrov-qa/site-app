<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

  <title>Beat That Quotes</title>

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('BTQ - Type icons/icon-type-car.png') }}" type="image/x-icon">
  <link rel="shortcut icon" href="{{ asset('BTQ - Type icons/icon-type-car.png') }}" type="image/x-icon">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- Styles -->
  <link rel="stylesheet" href="{{ ('css/style.css') }}">
  <link rel="stylesheet" href="{{ ('css/panel-provider.css') }}">
  <link rel="stylesheet" href="{{ ('css/footer-content-links.css') }}">
</head>

<body>
   @include('components.header')
   @yield('content')
   @include('components.footer')
   @include('components.cookie-consent-banner')

  <!-- Bootstrap -->
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous">
  </script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous">
  </script>
  <!-- Custom JavaScript -->
    <script src="{{ asset ('script.js') }}"></script>
</body>

</html>
