<!DOCTYPE html>
<!--[if lte IE 6 ]>
<html class="ie ie6 lte-ie7 lte-ie8" lang="zh-CN">
<![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7 lte-ie7 lte-ie8" lang="zh-CN">
<![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8 lte-ie8" lang="zh-CN">
<![endif]-->
<!--[if IE 9 ]>
<html class="ie ie9" lang="zh-CN">
<![endif]-->
<!--[if (gt IE 9)|!(IE)]>
<!-->
<html lang="zh-CN">
  <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel.so 后台管理</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}" media="screen">
  <link rel="stylesheet" href="{{ asset('/css/ionicons.css') }}" media="screen">
  <link rel="stylesheet" href="{{ asset('/js/vendor/switchery/dist/switchery.min.css') }}" media="screen">
  <link rel="stylesheet" href="{{ asset('/js/vendor/sweetalert/lib/sweet-alert.css') }}" media="screen">
  <link rel="stylesheet" href="{{ asset('/js/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" media="screen">
  <link rel="stylesheet" href="{{ asset('/js/vendor/magnific-popup/dist/magnific-popup.css') }}" media="screen">
  <link rel="stylesheet" href="{{ asset('/js/vendor/select2/dist/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/js/vendor/select2/dist/css/select2-bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}" media="screen">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="{{ asset('js/vendor/html5shiv/dist/html5shiv.js') }}"></script>
  <script src="{{ asset('js/vendor/respond/dest/respond.min.js') }}></script>
  <![endif]-->
</head>
<body>
  <div id="app"></div>

  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>