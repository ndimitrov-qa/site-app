<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

  <title>@yield('title')</title>

  @php $description = "Beat That Quotes is the best Insurance website in UK. Best Insurance Polices. Best Customer Service. Fast, Easy and Cheap."; @endphp
  <meta name="description" content="@yield('description', $description)" />
  <link rel="canonical" href="@yield('canonical')" />
  <meta property="og:locale" content="en_GB" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="@yield('title')" />
  <meta property="og:description" content="@yield('description', $description)" />
  <meta property="og:url" content="@yield('canonical')" />
  <meta property="og:site_name" content="Beat That Quotes" />
  <meta property="article:publisher" content="https://www.facebook.com/BeatThatQuotes/" />
  <meta property="article:modified_time" content="2023-12-04T10:40:10+00:00" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@BeatThatQuotes" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset ('css/panel-provider.css') }}">
</head>

<body>
   @include('components.header')
   @yield('content')
   @include('components.footer')
   @include('components.cookie-consent-banner')

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous"></script>
  <!-- Custom JavaScript -->
    <script src="{{ asset ('script.js') }}"></script>
</body>

</html>
