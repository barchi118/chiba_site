<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="千葉の自己紹介用のプロフィールです。">
  <meta name="google-site-verification" content="-HN1I-_amEUK65gdjWO71XCZ17z3FBnfGGP9VZcZbLo" />
  <meta property="og:url" content="http://shirokuma.sakura.ne.jp/chibasite/main" />
  <meta property="og:type" content=" website" />
  <meta property="og:title" content=" Chiba portfolio" />
  <meta property="og:site_name" content="Chiba portfolio"" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <meta property="og:image" content=" {{ asset('images/port.png') }}" />
  <title>Chiba portfolio</title>
  <meta property="og:title" content="ポートフォリオ" />
  <meta property="og:type" content="website" />
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--Font awsome -->
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <!-- 独自css -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
  <link rel="stylesheet" href="{{ asset('css/top.css') }}">



  <!-- icon -->
  <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" />
  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body class="mr-0">
  @section('sidebar')
  ここがメインのサイドバー
  @show

  @yield('content')
                <!-- Bootstrap core JavaScript -->
                <script src="{{asset('js/jquery.min.js')}}"></script>
                <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
                <!-- Plugin JavaScript -->
                <script src="{{asset('js/jquery.easing.min.js')}}"></script>
                <!-- Custom scripts for this template -->
                <script src="{{asset('js/stylish-portfolio.min.js')}}"></script>
</body>
</html>
